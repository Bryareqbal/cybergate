<div class="space-y-10">

    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('root') }}"
                    class="inline-flex items-center text-lg font-semibold text-gray-700 hover:text-gray-900">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <a class="ml-1 text-lg font-semibold text-gray-700 hover:text-gray-900 md:ml-2">Pages</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400">View
                        Information</span>
                </div>
            </li>
        </ol>
    </nav>

    <div>
        <h1 class="text-blue-900 text-4xl font-bold text-center">Documents</h1>
    </div>
    <div class="container mx-auto">
        <div class="grid grid-cols-4 gap-10">
            @for ($i = 0; $i <= 7; $i++)
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md">
                    {{-- <div class="flex justify-end px-4 pt-4">
                    <button id="dropdownButton" data-dropdown-toggle="dropdown"
                        class="hidden sm:inline-block text-gray-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm p-1.5"
                        type="button">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 3047px);"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                        <ul class="py-1" aria-labelledby="dropdownButton">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Edit</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Export
                                    Data</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 text-sm text-red-600 hover:bg-gray-100">Delete</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                    <div class="flex flex-col items-center pb-3">
                        <img class="mb-3 w-2/3 my-3 aspect-square object-cover object-center rounded-md"
                            src=" {{ asset('assets/images/test.jpg') }}" alt="Bonnie image">
                        <h5 class="mb-1 text-xl font-medium text-gray-900">Bonnie Green</h5>
                        <span class="text-sm text-gray-500">Visual Designer</span>
                        <div class="flex mt-4 space-x-3 lg:mt-6">
                            <a href="#"
                                class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="#"
                                class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200"><i
                                    class="fa-solid fa-pen"></i></a>
                            <a href="#"
                                class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center bg-rose-500 text-white rounded-lg border border-rose-500 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200"><i
                                    class="fa-solid fa-trash-can"></i></a>
                        </div>
                    </div>
                </div>
            @endfor


        </div>
    </div>
