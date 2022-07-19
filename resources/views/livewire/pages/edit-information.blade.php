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
                        class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400 whitespace-nowrap">Edit
                        Information</span>
                </div>
            </li>
        </ol>
    </nav>
    <div class="container mx-auto bg-slate-50 px-5 py-2 rounded-xl">

        <div class="py-4 px-4">
            <h1 class="text-gra-900 capitalize text-center text-4xl font-semibold">Edit Information</h1>
        </div>

        <form class="space-y-5  " wire:submit.prevent="saveData" enctype="multipart/form-data">
            <div class="">
                <div class="mx-auto md:mx-0 mt-1 flex flex-col space-y-5 justify-center px-6 pt-5 pb-6 border-2 @error('form.personal_image') border-red-500 @enderror border-dashed rounded-md"
                    style="max-width: 300px">
                    <img src="{{ $personal_image ? $personal_image->temporaryUrl() : asset('/uploads/personalImages/' . $form->personal_image) }}"
                        alt="" class="aspect-square w-full h-full object-cover object-center rounded">
                    <div class="flex justify-center">
                        <label for="personal-image"
                            class="bg-blue-500 px-3 w-full text-center cursor-pointer py-2 text-white rounded shadow text">Edit</label>
                        <input type="file" id="personal-image" class="hidden" wire:model="personal_image">
                    </div>
                    @if ($personal_image)
                        <div class="flex justify-center">
                            <button type="button"
                                class="bg-green-500 px-3 w-full text-center cursor-pointer py-2 text-white rounded shadow text"
                                wire:click="updatePersonalImage">submit</button>
                        </div>
                    @endif
                    @if (session()->has('personal_image'))
                        <div class="container mx-auto  rounded mb-12 py-1  bg-green-100 border-l-4 border-green-500 text-green-700 p-4"
                            role="alert">
                            {{ session('personal_image') }}
                        </div>
                    @elseif (session()->has('personal_image_error'))
                        <div class="lg:max-w-lg items-center bg-red-100  py-1 border-l-4 border-red-500 text-red-700 p-4 mb-12"
                            role="alert">
                            {{ session('personal_image_error') }}
                        </div>
                    @endif
                </div>
                @error('personal_image')
                    <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                @enderror
            </div>
            @if (session()->has('form_updated'))
                <div class="lg:max-w-lg items-center bg-green-100  py-1 border-l-4 border-green-500 text-green-700 p-4 mb-12"
                    role="alert">
                    {{ session('form_updated') }}
                </div>
            @elseif (session()->has('form_not_updated'))
                <div class="lg:max-w-lg items-center bg-red-100  py-1 border-l-4 border-red-500 text-red-700 p-4 mb-12"
                    role="alert">
                    {{ session('form_not_updated') }}
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
                            class="block w-full mt-1 @error('form.email') border-red-500 @enderror text-sm focus:outline-none sm:text-sm rounded-lg focus:shadow-outline-purple form-input"
                            placeholder="Email Address" />

                        @error('form.email')
                            <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                        @enderror
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
                    <input type="text" wire:model="form.state_address" name="state_address"
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
                    <select wire:model.defer="form.city" name="city"
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
                        <input type="text" wire:model.defer="form.quarter_address" name="querter_address"
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
                    <div class="mx-auto md:mx-0 mt-1 flex flex-col space-y-5 justify-center px-6 pt-5 pb-6 border-2 @error('form.file_image') border-red-500 @enderror border-dashed rounded-md"
                        style="max-width: 300px">
                        <img src="{{ $file_image ? $file_image->temporaryUrl() : asset('/uploads/fileImages/' . $form->file_image) }}"
                            alt="" class="aspect-square w-full h-full object-cover object-center rounded">
                        <div class="flex justify-center">
                            <label for="file_image"
                                class="bg-blue-500 px-3 w-full text-center cursor-pointer py-2 text-white rounded shadow text">Edit</label>
                            <input type="file" id="file_image" class="hidden" wire:model="file_image">
                        </div>
                        @if ($file_image)
                            <div class="flex justify-center">
                                <button type="button"
                                    class="bg-green-500 px-3 w-full text-center cursor-pointer py-2 text-white rounded shadow text"
                                    wire:click="updateFileImage">submit</button>
                            </div>
                        @endif
                        @if (session()->has('file_image'))
                            <div class="lg:max-w-lg items-center bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-12"
                                role="alert">
                                {{ session('file_image') }}
                            </div>
                        @elseif (session()->has('file_image_error'))
                            <div class="lg:max-w-lg items-center bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-12"
                                role="alert">
                                {{ session('file_image_error') }}
                            </div>
                        @endif
                    </div>
                    @error('file_image')
                        <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                    @enderror
                </div>

            </div>
            <div wire:ignore.self class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400 capitalize text-lg font-semibold mb-2">description
                    problem</span>


                    <input id="x"  type="hidden" name="content">
                    <trix-editor  wire:model.defer="form.description" name="content" input="x"></trix-editor>
                @error('form.description')
                    <small class="text-red-500 whitespace-nowrap text-xs mb-1">{{ $message }}</small>
                @enderror
            </div>



            @if (session()->has('message'))
                <div class="container mx-auto  rounded mb-12 py-1  bg-green-100 border-l-4 border-green-500 text-green-700 p-4"
                    role="alert">
                    the information has been added
                </div>
            @endif

            <div class="flex justify-center items-center   ">
                <button type="submit"
                    class=" capitalize my-3 mb-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    submit
                </button>
            </div>
        </form>

    </div>

</div>
