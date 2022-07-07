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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 place-items-center lg:place-items-stretch">
            @foreach ($cases as $case)
                <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md">
                    <div class="flex flex-col items-center pb-3">
                        <img class="mb-3 w-2/3 my-3 aspect-square object-cover object-center rounded-md"
                            src=" {{ $case->avatar }}" alt="Bonnie image">
                        <span class="mb-1 text-xl font-medium text-gray-900 capitalize ">{{ $case->case }}</span>
                        <h5 class="text-sm text-gray-500 capitalize">{{ $case->fullname }}</h5>
                        <div class="flex mt-4 space-x-3 lg:mt-6">
                            <a href="{{ route('details', $case->id) }}"
                                class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800
                                 focus:ring-4 focus:outline-none focus:ring-blue-300 "><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="#"
                                class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200"><i
                                    class="fa-solid fa-pen"></i></a>
                            <a href="#"
                                class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center bg-green-500 text-white rounded-lg border
                                 border-green-500  hover:bg-green-700 focus:ring-4 focus:outline-none ">
                                <i class="fa-solid fa-check"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
