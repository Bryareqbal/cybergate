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

        <form wire:submit.prevent="saveData" enctype="multipart/form-data">
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


            <div class="grid  gap-6 my-6 lg:grid-cols-3 md:grid-cols-2   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class=" text-sm">
                        <input wire:model.defer="form.fullname"
                            class="block border  @error('form.fullname') border-red-500 @enderror w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg  focus:shadow-outline-purple form-input"
                            placeholder="Full Name" />
                            @error('form.fullname')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>

                            @enderror
                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input wire:model.defer="form.email"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="Email Address" />

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.phone"
                            class="block w-full mt-1 @error('form.phone') border-red-500 @enderror text-sm focus:outline-none sm:text-sm rounded-lg focus:shadow-outline-purple form-input"
                            placeholder="phone number" />
                            @error('form.phone')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>

                            @enderror

                    </label>
                </div>

                <div class="text-sm">
                    <input type="text" wire:model.defer="form.state_address"
                        class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                        placeholder="State Address" />

                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.region"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="region " />

                    </label>
                </div>
                <div class="w-full">
                    <select wire:model.defer="form.city"
                        class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input">
                        <option>--select city--</option>
                        <option value="sulaymaniah">Sulaymaniah</option>
                        <option value="hawler">Hawler</option>
                        <option value="karkuk">Karkuk</option>
                        <option value="halabja">Halabja</option>
                    </select>

                </div>

                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.querter_address"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="quarter Address" />

                    </label>
                </div>



            </div>
            <hr class="border border-gray-400   my-5">

            <div class="grid  gap-6 my-6 lg:grid-cols-3 md:grid-cols-2   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.links[]"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="links" />

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.links[]"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="links" />

                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.links[]"
                            class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                            placeholder="links" />

                    </label>
                </div>
            </div>
            <hr class="border border-gray-400   my-5">
            <div class="grid  gap-6 my-8 lg:grid-cols-2 md:grid-cols-1   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.case"
                            class="block w-full mt-1 text-sm @error('form.case') border-red-500 @enderror focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg  focus:shadow-outline-purple form-input"
                            placeholder="case" />
                            @error('form.case')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>

                            @enderror
                    </label>
                </div>
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.type_of_problem"
                            class="block w-full mt-1 text-sm @error('form.case') border-red-500 @enderror focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg focus:shadow-outline-purple form-input"
                            placeholder="Type Problem" />
                            @error('form.type_of_problem')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>

                            @enderror
                    </label>
                </div>
            </div>
            <div class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 capitalize text-lg font-semibold mb-2">description
                    problem</span>
                <textarea id="summernote" wire:model.defer="form.description"
                    class="block w-full  text-sm focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input"
                    rows="8" placeholder="Describe Your Problem..."></textarea>
                    @error('form.description')
                    <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>

                    @enderror
            </div>
            <hr class="border border-gray-400   my-5">


            <div class="flex flex-col   gap-6 my-8 mb-5  lg:grid-cols-2 md:grid-cols-1   p-2 lg:mx-0 sm:grid-col-1">
                <div class="w-full ">
                    <label class="text-sm">
                        <input type="text" wire:model.defer="form.personal_id"
                            class="block w-full mt-1 text-sm @error('form.personal_id') border-red-500 @enderror focus:border-purple-400 focus:outline-none sm:text-sm rounded-lg  focus:shadow-outline-purple form-input"
                            placeholder="Personal id" />
                            @error('form.personal_id')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>

                            @enderror
                    </label>
                </div>
                <div class="w-full">
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

            <div class="flex justify-center items-center mb-12 ">
                <button type="submit"
                    class=" capitalize my-3 mb-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    submit
                </button>
            </div>
          




        </form>

    </div>

</div>
