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

    <div class="container mx-auto  flex flex-row justify-center">
        <input wire:model="search"
            class="lg:basis-1/3 md:basis-1/2 basis-1/2 pl-8 py-3 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
            type="text" placeholder="Search..." aria-label="Search">
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
                                <a wire:click="$set('caseId','{{ $case->id }}')" data-modal-toggle="extralarge-modal"
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






    @else
        <div class="text-center">
            <h1 class="text-3xl font-bold text-red-500">No cases found</h1>

        </div>

    @endif
    <div class=" flex  justify-center items-center mx-auto   " style="margin-bottom: 4rem">

        {{ $cases->links() }}

    </div>

    <div wire:ignore.self id="extralarge-modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 "> write your note about this case (Solved or not ?) </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center
                  dark:hover:text-white" data-modal-toggle="extralarge-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input wire:model="state" type="checkbox"
                            class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 ">
                    </div>
                    <label class="ml-2 text-sm font-medium text-gray-900 ">Sovled</label>
                </div>

                   <div wire:ignore class="block mt-4 text-sm">

                <textarea wire:model="description" id="description"
                    class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"></textarea>

            </div>


            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 ">
            </button>
            <button data-modal-toggle="extralarge-modal"  type="button" class="text-gray-500 bg-white
            hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5
             hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300">Cancel</button>
                <button wire:click="CompletedStatus('{{ $caseId }}')" data-modal-toggle="extralarge-modal" type="button"
                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Submit

            </div>
        </div>
    </div>
    </div>



    @push('scripts')
    <script>
        $('#description').summernote({
            placeholder: 'Enter your description',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', ]],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    @this.set('description', contents);
                }
            }
        });
    </script>
    @endpush



</div>
