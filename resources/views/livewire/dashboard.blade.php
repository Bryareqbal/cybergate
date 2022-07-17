<div>
    <div class="fixed -z-10 w-full no h-full opacity-10 bg-no-repeat bg-center bg-[length:75%] md:bg-[length:75%] lg:bg-[length:38%] "
        style="background-image: url({{ asset('assets/logo/logo.png') }});">
    </div>
    <div class="py-8 px-4 space-y-10">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="#"
                        class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 ">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Dashboard
                    </a>
                </li>
            </ol>
        </nav>
        @error('message')
            <div class="bg-red-100 font-semibold border-l-4 max-w-md border-red-500 text-red-700 p-4 mb-4" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-5 p-2 lg:mx-0 sm:grid-col-1 ">
            <a href="{{ route('adding_information') }}" class="w-full p-2  cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-slate-50 to-slate-200">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-gray-300 rounded-xl bg-opacity-30">
                            <i class="fa-solid fa-plus h-5 w-5 text-center"></i>
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        Adding Information</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">-</p>

                    </div>
                </div>
            </a>


            <a href="{{ route('view_information') }}" class="w-full  p-2 cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-orange-50 to-orange-100">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-orange-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        View Information</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">{{ $data_count }}</p>

                    </div>
                </div>
            </a>
            <a href="{{ route('reports') }}" class="w-full  p-2
              cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-red-50 to-red-100">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-red-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                            </svg>
                        </div>

                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        Report</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">12</p>

                    </div>
                </div>
            </a>
            <a href="{{ route('Asaish') }}" class="w-full  p-2  cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-indigo-50 to-indigo-100">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-indigo-300  rounded-xl bg-opacity-30">
                            <i class="fa-solid fa-shield h-5 w-5 text-center"></i>
                        </div>

                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        Asaish</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">{{ $find_data_asayish }}</p>

                    </div>
                </div>
            </a>

            <form class="w-full p-2 cursor-pointer opacity-80" method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg w-full text-left
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-green-50 to-green-100">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-green-300  rounded-xl bg-opacity-30">
                            <i class="fa-solid fa-arrow-right-from-bracket h-5 w-5 text-center"></i>
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        Logout</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">-</p>

                    </div>
                </button>
            </form>


            <div class="w-full  p-2 cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-cyan-50/50 to-cyan-100/50">
                    <div class="flex flex-row justify-between items-center">
                        <div class="px-4 py-4 bg-cyan-300  rounded-xl bg-opacity-30">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:text-gray-50"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        No Name</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">12</p>

                    </div>
                </div>
            </div>

            <a href="/user/profile" class="w-full  p-2
              cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-sky-50 to-sky-100">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-sky-300  rounded-xl bg-opacity-30">
                            <i class="fa fa-person h-5 w-5 text-center"></i>
                        </div>
                    </div>
                    <h1
                        class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        My Profile</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">-</p>

                    </div>
                </div>
            </a>
            <a href="{{ route('users') }}" class="w-full  p-2  cursor-pointer opacity-80">
                <div
                    class="flex flex-col px-6 py-10 overflow-hidden rounded-xl shadow-lg
                 duration-300 hover:shadow-2xl bg-gradient-to-br from-purple-50 to-purple-100">
                    <div class="flex flex-row items-center">
                        <div class="px-4 py-4 bg-purple-300  rounded-xl bg-opacity-30">
                            <i class="fa fa-users h-5 w-5 text-center"></i>
                        </div>
                    </div>
                    <h1
                        class="text-3xl sm:text-4xl xl:text-2xl font-bold text-gray-700 mt-10 group-hover:text-gray-50">
                        Users</h1>
                    <div class="flex flex-row justify-between group-hover:text-gray-200 ">
                        <p class="text-sm mt-1 text-gray-500">Current Data</p>

                        <p class="text-sm mt-1 text-gray-500">{{ $user_count }}</p>

                    </div>
                </div>
            </a>


        </div>
    </div>
</div>
