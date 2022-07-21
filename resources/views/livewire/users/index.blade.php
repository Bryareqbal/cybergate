<div>
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
                    <span class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400">Users</span>
                </div>
            </li>
        </ol>
    </nav>




    <div class=" px-2 container mx-auto rounded-lg my-6 space-y-10">
        <div class="flex justify-between">
            <div
                class="rounded border-2 hover:border-blue-500 focus-within:border-blue-600 flex items-center max-w-fit pr-2">
                <input wire:model="search" type="text"
                    class="px-3 py-2 flex-1 border-none outline-none outline-hidden outline-0" placeholder="Search">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
            <div>
                <button class="text-xl bg-green-500 hover:bg-green-600 px-3 py-2 text-white rounded"
                    wire:click="$toggle('createUserModal')"><i class="fa-solid fa-plus"></i></button>
            </div>
        </div>
        @if ($users->IsNotEmpty())
        @if (session()->has('message'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            {{ session('message') }}
        </div>
        @endif

        @if (session()->has('success'))
        <div class="bg-green-100 border-l-4  py-1 border-green-500 text-green-700 p-4 mb-4"
            role="alert">
            {{ session('success') }}
        </div>
        @elseif(session()->has('error'))
        <div class="bg-red-100 border-l-4  py-1 border-red-500 text-red-700 p-4 mb-4"
            role="alert">
            {{ session('error') }}
        </div>
        @endif



        <div class="container md:mx-auto overflow-auto ">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">name</th>
                        <th class="py-3 px-6 text-center">email</th>
                        <th class="py-3 px-6 text-center">created at</th>
                        <th class="py-3 px-6 text-center"> updated at</th>
                        <th class="py-3 px-6 text-center">role permission</th>
                        <th class="py-3 px-6 text-center">Account</th>

                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">


                    @foreach ($users as $user)
                    <tr class="border-b border-gray-200 hover:bg-gray-100 text-xl">
                        <td class="py-3 px-6 text-left ">
                            <div class="flex items-center">

                                <span class="capitalize">{{ $user->name }}</span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center  ">

                            <span>{{ $user->email }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class="flex justify-center ">

                                <svg xmlns="http://www.w3.org/2000/svg" class="text-green-500  mt-2 h-4 w-4 mr-2 "
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $user->created_at->format('Y-m-d') }}</span>

                            </span>


                        </td>
                        <td class="py-3 px-6 text-center">
                            <span class="flex justify-center ">

                                <svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 h-4 w-4 mr-2 mt-2 "
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>{{ $user->updated_at->format('Y-m-d') }}</span>

                            </span>



                        </td>

                        <td class="py-3 px-6 text-center">
                            <select wire:change="SetPermission($event.target.value,{{ $user->id }})"
                                @if ($user->permission === 'superadmin') disabled @endIf
                                class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg
                                border-gray-300 focus:shadow-outline-purple form-input disabled:bg-gray-100">
                                <option {{ $user->permission === 'superadmin' ? 'selected' : '' }} value="superadmin"
                                    disabled>Superadmin</option>
                                <option {{ $user->permission === 'creator' ? 'selected' : '' }} value="creator">Creator
                                </option>
                                <option {{ $user->permission === 'cyber' ? 'selected' : '' }} value="cyber">
                                    Cyber</option>
                                <option {{ $user->permission === 'asaysh' ? 'selected' : '' }} value="asaysh">Asaysh
                                </option>
                                <option {{ $user->permission === 'none' ? 'selected' : '' }} value="none">
                                    None</option>
                            </select>
                        </td>
                        <td class="py-3 px-6 text-center">
                            @if ($user->status == 1)
                            <span class="text-green-500">Active</span>
                            @else
                            <span class="text-red-500">Disabled</span>
                            @endif
                        </td>


                        <td class="py-3 px-6 text-center">
                            <div class="flex item-center justify-center">

                                @can('isSuperadmin')

                                <a wire:click="switchUser('{{ $user->id }}')"   data-modal-toggle="extralarge-modal"
                                    class="w-8 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </a>
                                @endcan

                                @if ($user->permission !== 'superadmin')
                                <button type="button" wire:click="$set('disableModal', {{ $user->id }})"
                                    class="w-8 mr-2 transform text-yellow-400 hover:text-yellow-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </button>
                                @else
                                <button type="button"
                                    class="w-8 mr-2 transform text-slate-400 hover:text-slate-500 hover:scale-110">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </button>
                                @endif
                            </div>
                        </td>
                    </tr>

<!-- Extra Large Modal -->
<div wire:ignore.self id="extralarge-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 ">
                    Edit Profile
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="extralarge-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">

                <div class="grid lg:grid-cols-2 md:grid-cols-1 grid-cols-1  mt-0 md:divide-y-0 divide-y-2 lg:divide-x-2 divide-gray-400">
                 <div class="mt-0 p-5">
                    <form wire:submit.prevent="EditUser('{{ $user->id }}')" class="space-y-3" >

                        <div class="flex flex-col space-y-3">
                            <div class="">
                                <label for="name">Name</label>
                                <input wire:model.defer="editUserForm.newName" type="text" class="w-full px-3 py-2 rounded ">
                            </div>
                            @error('editUserForm.newName')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                            <div class="basis-1/2">
                                <label for="email">Email</label>
                                <input wire:model.defer="editUserForm.newEmail" type="email"
                                    class="w-full px-3 py-2 rounded ">
                            </div>
                            @error('editUserForm.newEmail')
                            <div class="text-red-500 text-sm">{{ $message }}</div>
                            @enderror


                        </div>




                        <div class="flex items-start my-2    ">

                            <button  type="submit"  data-modal-toggle="extralarge-modal"
                                class=" text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                            dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2   ">
                                Save
                            </button>

                        </div>
                    </form>
                 </div>

                 @if ($user->permission === "superadmin" || auth()->user()->id === $dataId)

                 @else
                 <div class="mt-0 p-5">
                    <form   wire:submit.prevent="EditPassword('{{ $user->id }}')">



                        <div class="flex flex-col space-y-1">
                            <label for="password">New Password</label>
                            <input wire:model.defer="newPassword" type="password"
                                class="px-3 py-2 rounded ">
                                @error('newPassword')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label for="password">Confirm Password</label>
                            <input wire:model.defer="confirmPassword" type="password"
                                class="px-3 py-2 rounded ">
                                @error('confirmPassword')
                                <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                        </div>





                        <div class="flex items-start my-2    ">

                            <button type="submit"  data-modal-toggle="extralarge-modal"
                                class=" text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                            dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2   ">
                                Save
                            </button>

                        </div>
                    </form>
                 </div>


                 @endif



                </div>

            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">

                 <button data-modal-toggle="extralarge-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>

            </div>
        </div>
    </div>
</div>


                    @endforeach


                </tbody>
            </table>
            <div class="bg-white mt-1">
                <div class="flex justify-end mr-2">
                    {{ $users->links() }}
                </div>
            </div>

        </div>

    </div>
    @else
    <div class="flex justify-center  text-xl text-red-500">

        <span class="mt-5">No Users were Found</span>
    </div>

    @endif
    @if ($createUserModal)
    <div wire:ignore.self tabindex="-1"
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal h-full justify-center items-center flex bg-black/25"
        aria-modal="true" role="dialog">
        <div class="relative p-4 w-full max-w-sm h-full md:h-auto flex flex-col justify-center">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-lg">
                <button wire:click.prevent="$set('createUserModal',null)" type="button"
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
                    <h3 class="mb-4 text-2xl font-semibold text-green-500 capitalize ">creating new user</h3>
                    <form method="POST" class="space-y-3" wire:submit.prevent="createUser">
                        <div class="flex flex-col space-y-1">
                            <label for="name">Name</label>
                            <input wire:model.defer="newUserForm.name" type="text" id="name" class="px-3 py-2 rounded ">
                        </div>
                        @error('newUserForm.name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        <div class="flex flex-col space-y-1">
                            <label for="email">Email</label>
                            <input wire:model.defer="newUserForm.email" type="email" id="email"
                                class="px-3 py-2 rounded ">
                        </div>
                        @error('newUserForm.email')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        <div class="flex flex-col space-y-1">
                            <label for="password">Password</label>
                            <input wire:model.defer="newUserForm.password" type="password" id="password"
                                class="px-3 py-2 rounded ">
                        </div>
                        @error('newUserForm.password')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        <div class="flex flex-col space-y-1">
                            <label for="confirm-password">Confirm Password</label>
                            <input wire:model.defer="newUserForm.confirm-password" type="password" id="confirm-password"
                                class="px-3 py-2 rounded ">
                        </div>
                        @error('newUserForm.confirm-password')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                        <div class="flex flex-col space-y-1">
                            <label for="role">role</label>
                            <select id="role" class="px-3 py-2 rounded " wire:model="newUserForm.role">
                                <option value="none">None</option>
                                <option value="creator">Creator</option>
                                <option value="cyber">Cyber</option>
                                <option value="asaysh">Asaysh</option>
                            </select>
                        </div>
                        <button type="submit" class="px-3 py-2 bg-green-500 rounded text-white w-full">Create</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if ($disableModal != null)
<form wire:submit.prevent="ChangedStatus('{{ $disableModal }}')">
    <div
        class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal h-full justify-center items-center flex bg-black/25">
        <div class="relative p-4 w-full max-w-sm h-full md:h-auto flex flex-col justify-center">
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button" wire:click="$set('disableModal', null)"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="p-6 text-center">
                    <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        Are you want to swtich this user? </h3>
                    <button data-modal-toggle="popup-modal" type="submit"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-3000 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-toggle="popup-modal" type="button" wire:click="$set('disableModal', null)" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200
                rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 ">No,
                        cancel</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endif



</div>
