<div>

    @foreach ($users as $item)
    @endforeach
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
                    <span class="ml-1 text-lg font-semibold text-gray-500 md:ml-2 dark:text-gray-400">Users</span>
                </div>
            </li>
        </ol>
    </nav>



    <div class=" px-2 container mx-auto rounded-lg my-6 space-y-10">
        <div>
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
        </div>
        @if ($users->IsNotEmpty())
            @if (session()->has('message'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    {{ session('message') }}
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

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="text-green-500  mt-2 h-4 w-4 mr-2 " viewBox="0 0 20 20"
                                            fill="currentColor">
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
                                        class="block w-full mt-1 text-sm focus:outline-none sm:text-sm rounded-lg border-gray-300 focus:shadow-outline-purple form-input">
                                        <option {{ $user->permission === 'superadmin' ? 'selected' : '' }}
                                            value="superadmin">Superadmin</option>
                                        <option {{ $user->permission === 'creator' ? 'selected' : '' }}
                                            value="creator">Creator</option>
                                        <option {{ $user->permission === 'cyber' ? 'selected' : '' }} value="cyber">
                                            Cyber</option>
                                        <option {{ $user->permission === 'asaish' ? 'selected' : '' }}
                                            value="asaish">Asaish</option>
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

                                        <a href="/user/profile"
                                            class="w-8 mr-2 transform text-blue-400 hover:text-blue-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>


                                        <a wire:click.prevent="ChangedStatus('{{ $user->id }}')"
                                            onclick="return confirm('Are you sure you want to disable this user?')"
                                            class="w-8 mr-2 transform text-yellow-400 hover:text-yellow-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
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


</div>
