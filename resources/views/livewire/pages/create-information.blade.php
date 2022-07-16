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
                    <span
                        class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400 whitespace-nowrap">Adding
                        Information</span>
                </div>
            </li>
        </ol>
    </nav>
    <div class="container mx-auto bg-slate-50 px-5 py-2 rounded-xl">

        <div class="py-4 px-4">
            <h1 class="text-gra-900 capitalize text-center text-4xl font-semibold">Adding Information</h1>
        </div>

        <form class="space-y-5  " wire:submit.prevent="saveData" enctype="multipart/form-data">
            @if ($form['personal_image'])
                <div class="flex flex-col  md:justify-center justify-center">
                    <p> Photo Preview</p>
                    <img class="object-cover w-48 h-56 rounded-lg mb-1 mt-2"
                        src="{{ $form['personal_image']->temporaryUrl() }}">


                </div>
            @else
                <div class="">
                    <div class="mx-auto md:mx-0 mt-1 flex justify-center px-6 pt-5 pb-6 border-2 @error('form.personal_image') border-red-500 @enderror border-dashed rounded-md"
                        style="max-width: 300px">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-20 w-20 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload1"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload1" name="file-upload" wire:model.defer="form.personal_image"
                                        type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, JPEG between 600KB-1MB</p>
                        </div>
                    </div>
                    @error('form.personal_image')
                        <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                    @enderror
                </div>
            @endif



            <div class="grid  gap-6 my-6 lg:grid-cols-3 md:grid-cols-2   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class=" text-sm">
                        <input wire:model.defer="form.fullname" name="name"
                            class="block border  @error('form.fullname') border-red-500 @enderror w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg  focus:shadow-outline-purple form-input"
                            placeholder="Full Name" />
                        @error('form.fullname')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror
                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input wire:model.defer="form.email" name="email"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="Email Address" />

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.phone" name="phone"
                            class="block w-full mt-1 @error('form.phone') border-red-500 @enderror text-sm focus:outline-none sm:text-sm rounded-lg focus:shadow-outline-purple form-input"
                            placeholder="phone number" />
                        @error('form.phone')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="date" wire:model.defer="form.date_of_birth" name="date_of_birth"
                            class="block w-full mt-1 @error('form.date_of_birth') border-red-500 @enderror text-sm focus:outline-none sm:text-sm rounded-lg focus:shadow-outline-purple form-input" />
                        @error('form.date_of_birth')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror

                    </label>
                </div>

                <div class="w-full">
                    <select wire:model.defer="form.gender" name="gender"
                        class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input">
                        <option>--select gender--</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                        <option value="other">other</option>
                    </select>

                </div>

                <div class="text-sm">
                    <input type="text" wire:model.defer="form.state_address" name="state_address"
                        class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                        placeholder="street Address" />

                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.region" name="region"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="Region " />

                    </label>
                </div>
                <div class="w-full">

                    <div class="mt-1 relative rounded-md shadow-sm">
                        <select wire:model.defer="form.city"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input">
                            >
                            <option>--select city--</option>
                            @foreach ($cities as $city)
                                <option value="{{$city->name}}">{{$city->name}}</option>
                            @endforeach

                        </select>
                        <div wire:click.prevent="$toggle('ShowModel')"
                            class="absolute inset-y-0 right-0 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" title="Insert new Compnay"
                                class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>



                    @if ($ShowModel)

                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 mt-3">
                        <div class="flex justify-end p-2">
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                wire:click.prevent="$toggle('ShowModel')">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">Add New City</h3>
                            <div>

                                <input wire:model.defer="city" type="text"
                                    class="bg-gray-50 border  @error('city') border-red-500 @enderror text-gray-900 text-sm rounded-lg
                                     focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    required>

                                @error('city')
                                <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="flex">

                            </div>
                            <button wire:click="SaveCities" type="button"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                                 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">submit</button>

                        </div>
                    </div>
                    @endif


                </div>

                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.querter_address" name="querter_address"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="quarter Address" />

                    </label>
                </div>



            </div>
            <hr class="border border-gray-400   my-5">

            <div class="grid  gap-6 my-6 lg:grid-cols-3 md:grid-cols-2   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.links.link1" name="links"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="links" />

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.links.link2"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="links" />

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.links.link3"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="links" />

                    </label>
                </div>
            </div>
            <hr class="border border-gray-400   my-5">
            <div class="grid  gap-6 my-8 lg:grid-cols-2 md:grid-cols-1   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.case" name="case"
                            class="block w-full mt-1 text-sm @error('form.case') border-red-500 @enderror focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg  focus:shadow-outline-purple form-input"
                            placeholder="case" />
                        @error('form.case')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror
                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.type_of_problem" name="type_of_problem"
                            class="block w-full mt-1 text-sm @error('form.case') border-red-500 @enderror focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg focus:shadow-outline-purple form-input"
                            placeholder="Type Problem" />
                        @error('form.type_of_problem')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror
                    </label>
                </div>
            </div>

            <hr class="border border-gray-400   my-5">


            <div class="flex flex-col   gap-6 my-8 mb-5  lg:grid-cols-2 md:grid-cols-1   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.personal_id" name="personal_id"
                            class="block w-full mt-1 text-sm @error('form.personal_id') border-red-500 @enderror focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg  focus:shadow-outline-purple form-input"
                            placeholder="Personal id" />
                        @error('form.personal_id')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror
                    </label>
                </div>
                <div class="w-full">
                    @if ($form['file_image'])

                    <div class="flex flex-col  md:justify-center justify-center">
                        <p> Photo Preview</p>
                        <img class="object-cover w-72 h-80 rounded-lg mb-1 mt-2"
                            src="{{ $form['file_image']->temporaryUrl() }}">
                    </div>
                    @endif
                    <div
                        class="mx-auto md:mx-0 mt-1 flex justify-center px-6 pt-5 pb-6 border-2  @error('form.file_image') border-red-500 @enderror  border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-20 w-20 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload2"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload2" name="file-upload" wire:model.defer="form.file_image"
                                        type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PNG, JPG, JPEG between 600KB-1MB</p>
                        </div>

                    </div>
                    @error('form.file_image')
                        <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                    @enderror


                </div>


            </div>
            <div wire:ignore class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 capitalize text-lg font-semibold mb-2">description
                    problem</span>
                <textarea wire:model.defer="statenote" id="description" data-note="@this"
                    class="block w-full  text-sm focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                    rows="8" placeholder="Describe Your Problem..."></textarea>
                @error('form.description')
                    <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                @enderror
            </div>



            @if (session()->has('message'))
                <div class="lg:max-w-lg items-center bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-12"
                    role="alert">
                    the information has been added
                </div>
            @endif


            <div class="flex justify-center items-center   ">
                <button type="submit" id="submit2"
                    class=" capitalize my-3 mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    submit
                </button>
            </div>




        </form>

    </div>





</div>
