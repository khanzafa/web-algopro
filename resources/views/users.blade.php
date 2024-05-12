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
                            <div class="col-span-12" id="users">
                                <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                                    <div class="bg-white p-4 shadow-lg rounded-lg">
                                        <h1 class="font-bold text-base">Daftar Mahasiswa</h1>
                                        <div class="mt-4">
                                            <div class="flex flex-col">
                                                <div class="-my-2 overflow-x-auto">
                                                    <div class="py-2 align-middle inline-block min-w-full">
                                                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                            <table class="min-w-full divide-y divide-gray-200">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Nama</span>
                                                                            </div>
                                                                        </th>
                                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">NIT</span>
                                                                            </div>
                                                                        </th>
                                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Prodi</span>
                                                                            </div>
                                                                        </th>
                                                                        <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                            <div class="flex cursor-pointer">
                                                                                <span class="mr-2">Gender</span>
                                                                            </div>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="bg-white divide-y divide-gray-200">
                                                                    @foreach ($users as $user)
                                                                    <tr>
                                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p>{{ $user->name }}</p>
                                                                            <p class="text-xs text-gray-400">{{ $user->email }}
                                                                            </p>
                                                                        </td>
                                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <p>{{ $user->nit }}</p>
                                                                        </td>
                                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <!-- @if ($user->prodi == 'TBJP')
                                                        <div class="flex text-yellow-500">
                                                            <p>{{ $user->prodi }}</p>
                                                        </div>
                                                        @elseif ($user->prodi == 'TEP')
                                                        <div class="flex text-red-500">
                                                            <p>{{ $user->prodi }}</p>
                                                        </div>
                                                        @elseif ($user->prodi == 'TMP')
                                                        <div class="flex text-yellow-500">
                                                            <p>{{ $user->prodi }}</p>
                                                        </div>
                                                        @elseif ($user->prodi == 'MTP')
                                                        <div class="flex text-blue-500">
                                                            <p>{{ $user->prodi }}</p>
                                                        </div>  
                                                        @endif                                                                           -->
                                                                            <p>{{ $user->prodi }}</p>
                                                                        </td>
                                                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                            <div class="flex space-x-4">
                                                                                <p>{{ $user->gender }}</p>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
</x-app-layout>