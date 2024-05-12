<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <div class="py-8" id="dashboard">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="grid mb-4 pb-10 px-8 mx-4 rounded-lg bg-gray-100 border-4 border-yellow-400"> -->

            <div class="grid grid-cols-12 gap-6">
                <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                    <div class="col-span-12">
                        <div class="grid grid-cols-12 gap-6">
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <img src="{{ asset('images/train.png') }}" alt="tbjp" width="100">
                                        <div class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">
                                                {{ $tbjp_percentage }} %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">
                                                {{ $tbjp_user }}
                                            </div>

                                            <div class="mt-1 text-base text-gray-600">Teknologi Bangunan Jalur Perkeretaapian</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <img src="{{ asset('images/lightning.png') }}" alt="tep" width="100">
                                        <div class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">
                                                {{ $tep_percentage }} %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">
                                                {{ $tep_user }}
                                            </div>

                                            <div class="mt-1 text-base text-gray-600">Teknologi Elektro Perkeretaapian</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <img src="{{ asset('images/system.png') }}" alt="tmp" width="100">
                                        <div class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">
                                                {{ $tmp_percentage }} %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">
                                                {{ $tmp_user }}
                                            </div>

                                            <div class="mt-1 text-base text-gray-600">Teknologi Mekanika Perkeretaapian</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white" href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <img src="{{ asset('images/project-management.png') }}" alt="mtp" width="100">
                                        <div class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                            <span class="flex items-center">
                                                {{ $mtp_percentage }} %
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ml-2 w-full flex-1">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">
                                                {{ $mtp_user }}
                                            </div>

                                            <div class="mt-1 text-base text-gray-600">Manajemen Transportasi Perkeretaapian</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-12 mt-5">
                        <div class="grid gap-4 grid-cols-1 lg:grid-cols-2">
                            <div class="bg-white rounded-lg shadow-lg p-4 flex-col flex justify-center items-center">
                                <h3 class="mb-4">
                                    Grafik Registrasi Mahasiswa dalam 7 Hari Terakhir
                                </h3>
                                <canvas id="lineChart" width="400" height="200"></canvas>
                            </div>
                            <div class="bg-white rounded-lg shadow-lg p-4 flex-col flex justify-center items-center">
                                <h3 class="mb-4">
                                    Mahasiswa Berdasarkan Jenis Kelamin
                                </h3>
                                <div id="chartpie"></div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
</x-app-layout>

<script>
    // PHP arrays assigned to JavaScript variables
    var chartLabels = <?php echo json_encode($chart_labels); ?>;
    var chartData = <?php echo json_encode($chart_data); ?>;

    // Initialize the chart with the data
    var ctx = document.getElementById('lineChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartLabels,
            datasets: [{
                label: 'Data',
                data: chartData,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: 'rgba(75, 192, 192, 1)',
                pointRadius: 5,
                pointHoverRadius: 7,
                fill: false
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Line Chart', // Title for the line chart
                    font: {
                        size: 18,
                        weight: 'bold'
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        stepSize: 10
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
<script>
    var boysCount = <?php echo json_encode($boys); ?>;
    var girlsCount = <?php echo json_encode($girls); ?>;

    var ctx = document.getElementById('genderPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Boys', 'Girls'],
            datasets: [{
                label: 'Gender Distribution',
                data: [boysCount, girlsCount],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.6)', // Blue for boys
                    'rgba(255, 99, 132, 0.6)' // Pink for girls
                ],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Gender Distribution', // Title for the pie chart
                    font: {
                        size: 18,
                        weight: 'bold'
                    }
                }
            }
        }
    });
</script>

<script>
    var chart = document.querySelector('#chartpie');

    // Pie chart data
    var options = {
        series: [
            <?php echo json_encode($boys); ?>,
            <?php echo json_encode($girls); ?>
        ],
        chart: {
            width: 380,
            type: 'pie',
        },
        labels: ['Laki-laki', 'Perempuan'],
        colors: ['#008FFB', '#FF4560'],
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var chart = new ApexCharts(chart, options);
    chart.render();
</script>