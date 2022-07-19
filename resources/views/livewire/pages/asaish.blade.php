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
                    <span class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400">Asiash</span>
                </div>
            </li>
        </ol>
    </nav>

    <div>
        <h1 class="text-red-900 text-4xl font-bold text-center mb-3">Documents Asaysh</h1>
    </div>
    @if (session()->has('message'))
        <div class="container mx-auto  py-1  rounded bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4"
            role="alert">
            {{ session('message') }}
        </div>
    @endif


    @if ($Data->IsNotEmpty())
        <div class="container mx-auto">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 place-items-center lg:place-items-stretch">
                @foreach ($Data as $case)
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

                                <a wire:click.prevent="$set('caseId','{{ $case->id }}')"
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


        @if ($caseId != null)
            <div id="popup-modal" tabindex="-1"
                class="overflow-y-auto overflow-x-hidden fixed top-0 right-0
      left-0 z-50 md:inset-0 h-modal md:h-full justify-center items-center flex"
                aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow ">
                        <button wire:click.prevent="$set('caseId',null)" type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="popup-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">What do you want to do
                                this Case ?</h3>

                            <div wire:ignore.self class="py-3">
                                <textarea wire:model.defer="note"
                                    class="block w-full  text-sm focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                                    rows="6" placeholder="Describe Your Problem..."></textarea>
                            </div>
                            <button Wire:click.prevent="Approved" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300
                       dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Approved
                            </button>
                            <button Wire:click.prevent="DisApproved" type="button"
                                class="text-gray-500 bg-white
                       hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5
                        hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300">Disapproved</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div class="text-center">
            <h1 class="text-3xl font-bold text-red-500">No cases found</h1>

        </div>

    @endif

    <div class=" flex  justify-center items-center mx-auto   " style="margin-bottom: 4rem">

        {{ $Data->links() }}

    </div>


</div>
