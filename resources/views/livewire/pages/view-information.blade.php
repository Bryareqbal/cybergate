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
    @if (session()->has('message'))
        <div class="container mx-auto  rounded mb-12 py-1  bg-green-100 border-l-4 border-green-500 text-green-700 p-4"
            role="alert">
            {{ session('message') }}
        </div>
    @endif


    @if ($cases->IsNotEmpty())
        <div class="container mx-auto">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 place-items-center lg:place-items-stretch">
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
                                @can('isSuperadmin')
                                    <a href="{{ route('edit-information', $case->id) }}"
                                        class="inline-flex items-center py-2 px-3 text-lg font-semibold text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200"><i
                                            class="fa-solid fa-pen"></i></a>
                                @endcan
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
            <!-- Main modal -->
            <div wire:ignore.self tabindex="-1"
                class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex"
                aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <button wire:click.prevent="$set('caseId',null)" type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                            data-modal-toggle="authentication-modal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 ">write your note about this case (Solved
                                or
                                not ?) </h3>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input wire:model.defer="state" type="checkbox"
                                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 ">
                                    </div>
                                    <label class="ml-2 text-sm font-medium text-gray-900 ">Sovled</label>
                                </div>
                                <div>
                                    <textarea wire:model.defer="notes"
                                        class="block w-full  text-sm focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                                        rows="8" placeholder="Describe Your Problem..." autofocus></textarea>

                                </div>
                                <div class="flex space-x-2 px-2">
                                    <button wire:click.prevent="$set('caseId',null)"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                                          focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                        data-modal-toggle="authentication-modal">Close</button>
                                    <button id="submit" wire:click.prevent="CompletedStatus('{{ $caseId }}')"
                                        type="button"
                                        class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none
                                 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Done</button>
                                </div>

                            </div>
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

        {{ $cases->links() }}

    </div>



</div>
