<div>
    <div class="space-y-10">

        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ route('root') }}"
                        class="inline-flex items-center text-lg font-semibold text-gray-700 hover:text-gray-900">
                        <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <span class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400">Reports</span>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="space-y-10">

            <h1 class="text-4xl text-center font-bold">
                Report Information
            </h1>
            <div class="container mx-auto rounded-lg my-6 space-y-10">
                <div
                    class="rounded border-2 hover:border-blue-500 focus-within:border-blue-600 flex items-center max-w-fit pr-2 mx-auto md:mx-0">
                    <input type="text" class="px-3 py-2 flex-1 border-none outline-none outline-hidden outline-0"
                        placeholder="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">name</th>
                                <th class="py-3 px-6 text-center">email</th>
                                <th class="py-3 px-6 text-center">created at</th>
                                <th class="py-3 px-6 text-center">last updated</th>
                                <th class="py-3 px-6 text-center">User</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @for ($i = 0; $i < 30; $i++)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">

                                            <span class="">Hoshmand Kamal</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">

                                        <span>hoshmandg900@gmail.com</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center ">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="text-green-500  mt-2 h-4 w-4 mr-2 " viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ now()->format('d-m-Y') }}</span>

                                        </span>


                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center ">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="text-red-500 h-4 w-4 mr-2 mt-2 " viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ now()->format('d-m-Y') }}</span>

                                        </span>



                                    </td>

                                    <td class="py-3 px-6 text-center">

                                        <span>Role Permissions</span>
                                    </td>


                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-around">
                                            <a href="/user/profile"
                                                class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="/user/profile"
                                                class="w-4 mr-2 transform text-yellow-400 hover:text-yellow-500 hover:scale-110">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
        <div class="space-y-10">

            <h1 class="text-4xl text-center font-bold">
                Report Asaysh
            </h1>
            <div class="container mx-auto rounded-lg my-6 space-y-10">
                <div
                    class="rounded border-2 hover:border-blue-500 focus-within:border-blue-600 flex items-center max-w-fit pr-2 mx-auto md:mx-0">
                    <input type="text" class="px-3 py-2 flex-1 border-none outline-none outline-hidden outline-0"
                        placeholder="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">fullname</th>
                                <th class="py-3 px-6 text-center">email</th>
                                <th class="py-3 px-6 text-center">created at</th>
                                <th class="py-3 px-6 text-center">last updated</th>
                                <th class="py-3 px-6 text-center">User</th>
                                <th class="py-3 px-6 text-center">Is Approved</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @for ($i = 0; $i < 30; $i++)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">

                                            <span class="">Hoshmand Kamal</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">

                                        <span>hoshmandg900@gmail.com</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center ">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="text-green-500  mt-2 h-4 w-4 mr-2 " viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ now()->format('d-m-Y') }}</span>

                                        </span>


                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center ">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="text-red-500 h-4 w-4 mr-2 mt-2 " viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ now()->format('d-m-Y') }}</span>

                                        </span>



                                    </td>

                                    <td class="py-3 px-6 text-center">

                                        <span>Role Permissions</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">

                                        <span>Approved</span>
                                    </td>


                                    <td class="py-3 px-6 text-center  hover:scale-110">
                                        <a href=""
                                        class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    </td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
        <div class="space-y-10">

            <h1 class="text-4xl text-center font-bold">
                Report Cyber
            </h1>
            <div class="container mx-auto rounded-lg my-6 space-y-10">
                <div
                    class="rounded border-2 hover:border-blue-500 focus-within:border-blue-600 flex items-center max-w-fit pr-2 mx-auto md:mx-0">
                    <input type="text" class="px-3 py-2 flex-1 border-none outline-none outline-hidden outline-0"
                        placeholder="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">name</th>
                                <th class="py-3 px-6 text-center">email</th>
                                <th class="py-3 px-6 text-center">created at</th>
                                <th class="py-3 px-6 text-center">last updated</th>
                                <th class="py-3 px-6 text-center">User</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @for ($i = 0; $i < 30; $i++)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">

                                            <span class="">Hoshmand Kamal</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">

                                        <span>hoshmandg900@gmail.com</span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center ">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="text-green-500  mt-2 h-4 w-4 mr-2 " viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ now()->format('d-m-Y') }}</span>

                                        </span>


                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center ">

                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="text-red-500 h-4 w-4 mr-2 mt-2 " viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>{{ now()->format('d-m-Y') }}</span>

                                        </span>



                                    </td>

                                    <td class="py-3 px-6 text-center">

                                        <span>Role Permissions</span>
                                    </td>


                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-around">
                                            <a href="/user/profile"
                                                class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="/user/profile"
                                                class="w-4 mr-2 transform text-yellow-400 hover:text-yellow-500 hover:scale-110">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </div>
</div>
