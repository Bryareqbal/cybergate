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
        <div class="space-y-10 mb-4">


            <h1 class="text-4xl text-center font-bold">
                Report Information
            </h1>
                <div class="container mx-auto rounded-lg my-6 space-y-10">
                    <div class="grid gap-4 lg:grid-cols-3   md:grid-cols-1 grid-cols-1 lg:px-0 md:px-4 px-4 ">
                        <div>
                        <label for="from">search: </label>
                            <input  wire:model="SearchData" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search..." aria-label="Search">
                        </div>
                        <div class="">
                            <label for="from">From: </label>
                            <input wire:model="DataFirst" type="date" id="from" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                        </div>
                        <div class="">
                            <label for="to">To: </label>
                            <input type="date" wire:model="DataSecond" id="to" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                        </div>
                    </div>
                    @if ($datas->isNotEmpty())

                    <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">name</th>
                                    <th class="py-3 px-6 text-left">Case Title</th>
                                    <th class="py-3 px-6 text-center">email</th>
                                    <th class="py-3 px-6 text-center">created at</th>
                                    <th class="py-3 px-6 text-center">last updated</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">

                                @foreach ($datas as $data)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                        <td class="py-3 px-6 text-left ">
                                            <div class="flex items-center">

                                                <span class="">{{ $data->fullname ?? 'no name' }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left ">
                                            <div class="flex items-center">

                                                <span class="">{{ $data->case ?? 'no case title' }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center  ">

                                            <span>{{ $data->email ?? 'no email' }}</span>
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
                                                <span>{{ $data->created_at->format('d-m-Y') }}</span>

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
                                                <span>{{ $data->updated_at->format('d-m-Y') }}</span>

                                            </span>



                                        </td>


                                        <td class="py-3 px-6 text-center">
                                            <button wire:click="$set('showmodelinformation','{{ $data->description }}')"type="button"
                                                class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                                <i class="fa-solid fa-eye"></i>

                                            </button>
                                        </td>
                                    </tr>
                                @endforeach


                                 {{-- Show Model Information --}}
                                 @if ($showmodelinformation  !== null)
                                 <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                     <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                     <div class="fixed z-10 inset-0 overflow-y-auto">
                                       <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

                                         <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                                           <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                             <div class="sm:flex sm:items-start">
                                               <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                                                  </svg>
                                               </div>
                                               <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                 <div class="mt-2">
                                                   <p class="text-sm text-gray-500">{!! $Getshowmodelinformation !!}</p>
                                                 </div>
                                               </div>
                                             </div>
                                           </div>
                                           <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                                             <button wire:click="$set('showmodelinformation',null)" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                   @endif
                                   {{--  end  Model Information  --}}


                            </tbody>
                        </table>




                        <div
                        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
                          bg-gray-50 sm:grid-cols-9">
                        <span class="flex items-center col-span-3">
                            Showing Pages {{ $datas->currentPage() }} from {{ $datas->lastItem() }} to {{ $datas->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">

                                    {{ $datas->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>


                    </div>
                </div>
            @else
            <div class="container flex flex-col items-center px-6 mx-auto">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mt-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
        <div class="space-y-10 mt-4">
            <hr class="container mx-auto border border-gray-300  ">

            <h1 class="text-4xl text-center font-bold">
                Report Asaysh
            </h1>
                <div class="container mx-auto rounded-lg my-6 space-y-10">
                    <div class="grid gap-4 lg:grid-cols-3   md:grid-cols-1 grid-cols-1 lg:px-0 md:px-4 px-4 ">

                        <div>
                            <label for="from">search: </label>
                                <input  wire:model="SearchDataAsyash" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search..." aria-label="Search">
                            </div>
                        <div class="">
                            <label for="from">From: </label>
                            <input wire:model="DataFirstAsyash" type="date" id="from" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                        </div>
                        <div class="">
                            <label for="to">To: </label>
                            <input type="date" wire:model="DataSecondAsyash" id="to" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                        </div>
                    </div>
                      @if ($asayshes->isNotEmpty())

                    <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">fullname</th>
                                    <th class="py-3 px-6 text-center">email</th>
                                    <th class="py-3 px-6 text-center">Is Approved</th>
                                    <th class="py-3 px-6 text-center">created at</th>
                                    <th class="py-3 px-6 text-center">last updated</th>
                                    <th class="py-3 px-6 text-center">User</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">

                                @foreach ($asayshes as $key => $asaysh)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                        <td class="py-3 px-6 text-left ">
                                            <div class="flex items-center">

                                                <span class="">{{ $asaysh->data->fullname }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center  ">

                                            <span>{{ $asaysh->user->email }}</span>
                                        </td>
                                        <td class="py-3 px-6 text-center">

                                            @if ($asaysh->isApproved == true)
                                            <span class="text-green-500 hover:text-green-600">Approved</span>

                                            @else
                                            <span class="text-red-500 hover:text-green-600">Disapproved</span>

                                            @endif
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
                                                <span>{{ $asaysh->created_at->format('d-m-Y') }}</span>

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
                                                <span>{{ $asaysh->updated_at->format('d-m-Y') }}</span>

                                            </span>



                                        </td>
                                        <td class="py-3 px-6 text-center">

                                            <span>Approved</span>
                                        </td>


                                        <td  class="py-3 px-6 text-center  hover:scale-110">
                                            <button type="button" wire:click="$set('showmodeldata','{{ $asaysh->note }}')"
                                                class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                                <i class="fa-solid fa-eye"></i>

                                            </button>
                                        </td>

                                    </tr>

                                @endforeach
                                {{-- Show Model Asyaish --}}
                                @if ($showmodeldata  !== null)
                                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                    <div class="fixed z-10 inset-0 overflow-y-auto">
                                      <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

                                        <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                                          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                            <div class="sm:flex sm:items-start">
                                              <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                                   <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                                                 </svg>
                                              </div>
                                              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <div class="mt-2">
                                                  <p class="text-sm text-gray-500">{!! $Getshowmodeldata !!}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                                            <button wire:click="$set('showmodeldata',null)" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  @endif
                                  {{--  end  Model Asyaish  --}}

                            </tbody>
                        </table>
                        <div
                        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
                          bg-gray-50 sm:grid-cols-9">
                        <span class="flex items-center col-span-3">
                            Showing Pages {{ $asayshes->currentPage() }} from {{ $asayshes->lastItem() }} to {{ $asayshes->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">

                                    {{ $asayshes->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>

                    </div>
                </div>
            @else
            <div class="container flex flex-col items-center px-6 mx-auto">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mt-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
        <div class="space-y-10">
            <hr class="container mx-auto border border-gray-300  ">
            <h1 class="text-4xl text-center font-bold">
                Report Cyber
            </h1>

                <div class="container mx-auto rounded-lg my-6 space-y-10">
                    <div class="grid gap-4 lg:grid-cols-3   md:grid-cols-1 grid-cols-1 lg:px-0 md:px-4 px-4 ">
                        <div>
                            <label for="from">search: </label>
                                <input  wire:model="SearchDataCyber" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Search..." aria-label="Search">
                            </div>
                        <div class="">
                            <label for="from">From: </label>
                            <input wire:model="DataFirstCyber" type="date" id="from" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                        </div>
                        <div class="">
                            <label for="to">To: </label>
                            <input type="date" wire:model="DataSecondCyber" id="to" class="w-full pl-8 pr-2 text-sm  rounded-lg placeholder-gray-600 bg-gray-100 border-0 rounded-mddark:focus:placeholder-gray-600  focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input">
                        </div>
                    </div>
                    @if ($cybers->isNotEmpty())

                    <div class="container md:mx-auto overflow-auto max-h-[50vh]">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">case title</th>
                                    <th class="py-3 px-6 text-center">cyber</th>
                                    <th class="py-3 px-6 text-center">Is solved?</th>
                                    <th class="py-3 px-6 text-center">created at</th>
                                    <th class="py-3 px-6 text-center">last updated</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">

                                @foreach ($cybers as $cyber)
                                    <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                                        <td class="py-3 px-6 text-left ">
                                            <div class="flex items-center">

                                                <span class="">{{ $cyber->data->case }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center  ">

                                            <span>{{ $cyber->data->fullname }}</span>
                                        </td>
                                        <td class="py-3 px-6 text-center">


                                            @if ($cyber->isSolved == true)
                                            <span class="text-green-500 hover:text-green-600">Solved</span>

                                            @else
                                            <span class="text-red-500 hover:text-green-600">Not Solved</span>

                                            @endif
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
                                                <span>{{ $cyber->created_at->format('d-m-Y') }}</span>

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
                                                <span>{{ $cyber->updated_at->format('d-m-Y') }}</span>

                                            </span>



                                        </td>




                                        <td class="py-3 px-6 text-center">
                                            <button type="button" wire:click="$set('showmodelcyber','{{ $cyber->note }}')"
                                                class="w-4 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                                <i class="fa-solid fa-eye"></i>

                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                          {{-- Show Model Asyaish --}}
                                          @if ($showmodelcyber  !== null)
                                          <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                              <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                                              <div class="fixed z-10 inset-0 overflow-y-auto">
                                                <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                                                  <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                      <div class="sm:flex sm:items-start">
                                                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                                                             <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd" />
                                                           </svg>
                                                        </div>
                                                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                          <div class="mt-2">
                                                            <p class="text-sm text-gray-500">{!! $Getshowmodelcyber !!}</p>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">

                                                      <button wire:click="$set('showmodelcyber',null)" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            @endif
                                            {{--  end Asyaish Model  --}}

                            </tbody>
                        </table>
                        <div
                        class="grid px-4  mt-2 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t
                          bg-gray-50 sm:grid-cols-9">
                        <span class="text-2xl font-bold flex items-center col-span-3 ">
                            Showing Pages {{ $cybers->currentPage() }} from {{ $cybers->lastItem() }} to {{ $cybers->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">

                                    {{ $cybers->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>
                    </div>
                </div>
            @else
            <div class="container flex flex-col items-center px-6 mx-auto">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 mt-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
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
</div>
