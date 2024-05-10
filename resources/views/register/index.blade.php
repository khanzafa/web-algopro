@extends('layouts.app')

<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-yellow-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    REGISTRATION
                </label>
                <form action="{{ route('register.store') }}" method="post" class="mt-10">
                    @csrf
                    <div>
                        <input require id="name" name="name" type="text" placeholder="Name" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <input require id="nit" name="nit" type="text" placeholder="Nomor Induk Taruna" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <select name="prodi" id="prodi" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                            <option value="TBJP">Teknologi Bangunan Jalur Perkeretaapian</option>
                            <option value="TEP">Teknologi Elektro Perkeretaapian</option>
                            <option value="TMM">Teknologi Mekanika Perkeretaapian</option>
                            <option value="TMP">Teknologi Manajemen Perkeretaapian</option>
                        </select>
                    </div>
                    
                    <div class="mt-7">
                        <select name="gender" id="gender" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">                                                        
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="mt-7">
                        <input require id="email" name="email" type="email" placeholder="Email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <input require id="password" name="password" type="password" placeholder="Password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <input require id="password" name="password" type="password" placeholder="Confirmation Password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0">
                    </div>

                    <div class="mt-7">
                        <button type="submit" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            REGISTRATION
                        </button>
                    </div>

                    <!-- <div class="flex mt-7 items-center text-center">
                        <hr class="border-gray-300 border-1 w-full rounded-md">
                        <label class="block font-medium text-sm text-gray-600 w-full">
                            Registration Page
                        </label>
                        <hr class="border-gray-300 border-1 w-full rounded-md">
                    </div>
        
                    <div class="flex mt-7 justify-center w-full">
                        <button class="mr-5 bg-blue-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Facebook
                        </button>
        
                        <button class="bg-red-500 border-none px-4 py-2 rounded-xl cursor-pointer text-white shadow-xl hover:shadow-inner transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            
                            Google
                        </button>
                    </div> -->

                    <div class="mt-7">
                        <div class="flex justify-center items-center">
                            <label class="mr-2">
                                Already have an account?
                            </label>
                            <a href="/login" class=" text-blue-500 transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                                Login
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>