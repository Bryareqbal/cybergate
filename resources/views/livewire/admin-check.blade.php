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
                    <span class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400">Admin
                        Checks</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="space-y-10 mb-4">


        <h1 class="text-4xl text-center font-bold">
            Unchecked Information
        </h1>
        <div class="container mx-auto rounded-lg my-6 space-y-10">
            {{-- <div class="grid gap-4 lg:grid-cols-3   md:grid-cols-1 grid-cols-1 lg:px-0 md:px-4 px-4 ">
                <div>
                    <label for="from">search: </label>
                    <input wire:model="SearchData"
                        class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text" placeholder="Search..." aria-label="Search">
                </div>
                <div class="">
                    <label for="from">From: </label>
                    <input wire:model="DataFirst" type="date" id="from"
                        class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                </div>
                <div class="">
                    <label for="to">To: </label>
                    <input type="date" wire:model="DataSecond" id="to"
                        class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                </div>
            </div> --}}
            @if ($newCases->isNotEmpty())

                <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Case Title</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Creator</th>
                                <th class="py-3 px-6 text-center">Created at</th>
                                <th class="py-3 px-6 text-center">Last updated</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($newCases as $case)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">

                                            <span class="">{{ $case->fullname ?? 'no name' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">

                                            <span class="">{{ $case->case ?? 'no case title' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">

                                        <span>{{ $case->email ?? 'no email' }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">

                                        <span>{{ $case->user->name ?? 'no name' }}</span>
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
                                            <span>{{ $case->created_at->format('d-m-Y') }}</span>

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
                                            <span>{{ $case->updated_at->format('d-m-Y') }}</span>

                                        </span>



                                    </td>


                                    <td class="py-3 px-6 text-center">
                                        <a href="{{ route('details', $case->id) }}"
                                            class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                            <i class="fa-solid fa-eye"></i>

                                        </a>
                                        <button wire:click="disaprroveCase({{ $case->id }})"type="button"
                                            class="w-4 mr-2 transform text-red-400 hover:text-red-500 hover:scale-110">
                                            <i class="fa-solid fa-xmark"></i>

                                        </button>
                                        <button wire:click="approveCase({{ $case->id }})"type="button"
                                            class="w-4 mr-2 transform text-green-400 hover:text-green-500 hover:scale-110">
                                            <i class="fa-solid fa-check"></i>

                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>




                    <div
                        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
                      bg-gray-50 sm:grid-cols-9">
                        <span class="flex items-center col-span-3">
                            Showing Pages {{ $newCases->currentPage() }} from {{ $newCases->lastItem() }} to
                            {{ $newCases->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">

                                    {{ $newCases->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>


                </div>
        </div>
    @else
        <div class="container flex flex-col items-center px-6 mx-auto">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mt-8 text-red-500" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="text-gray-700 text-xl font-bold ">
                No data were found
                <a class="text-gray-700" href="">
                    go back
                </a>
            </p>
        </div>

        @endif

    </div>
    <div class="space-y-10 mb-4">


        <h1 class="text-4xl text-center font-bold">
            Informations
        </h1>
        <div class="container mx-auto rounded-lg my-6 space-y-10">
            <div class="grid gap-4 lg:grid-cols-3   md:grid-cols-1 grid-cols-1 lg:px-0 md:px-4 px-4 ">
                <div>
                    <label for="from">search: </label>
                    <input wire:model="search"
                        class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                        type="text" placeholder="Search..." aria-label="Search">
                </div>
                <div class="">
                    <label for="from">From: </label>
                    <input wire:model="from" type="date" id="from"
                        class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                </div>
                <div class="">
                    <label for="to">To: </label>
                    <input type="date" wire:model="to" id="to"
                        class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                </div>
            </div>
            @if ($allCases->isNotEmpty())

                <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                    <table class="w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Case Title</th>
                                <th class="py-3 px-6 text-center">Email</th>
                                <th class="py-3 px-6 text-center">Creator</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Created at</th>
                                <th class="py-3 px-6 text-center">Last updated</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($allCases as $case)
                                <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">

                                            <span class="">{{ $case->fullname ?? 'no name' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left ">
                                        <div class="flex items-center">
                                            <span class="">{{ $case->case ?? 'no case title' }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">
                                        <span>{{ $case->email ?? 'no email' }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">
                                        <span>{{ $case->user->name ?? 'no name' }}</span>
                                    </td>
                                    <td class="py-3 px-6 text-center  ">
                                        <span>{{ $case->status ?? 'pending' }}</span>
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
                                            <span>{{ $case->created_at->format('d-m-Y') }}</span>

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
                                            <span>{{ $case->updated_at->format('d-m-Y') }}</span>

                                        </span>



                                    </td>


                                    <td class="py-3 px-6 text-center">
                                        <a href="{{ route('details', $case->id) }}"
                                            class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                            <i class="fa-solid fa-eye"></i>

                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>




                    <div
                        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
                      bg-gray-50 sm:grid-cols-9">
                        <span class="flex items-center col-span-3">
                            Showing Pages {{ $allCases->currentPage() }} from {{ $allCases->lastItem() }} to
                            {{ $allCases->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">

                                    {{ $allCases->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>


                </div>
        </div>
    @else
        <div class="container flex flex-col items-center px-6 mx-auto">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mt-8 text-red-500" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="text-gray-700 text-xl font-bold ">
                No data were found
                <a class="text-gray-700" href="">
                    go back
                </a>
            </p>
        </div>

        @endif

    </div>
</div>
