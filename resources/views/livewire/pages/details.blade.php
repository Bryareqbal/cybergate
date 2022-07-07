<div>

    <section class="container md:w-10/12 lg:w-8/12   mx-auto">
        <div class=" px-5 py-4">
            <div class=" space-y-4  ">
                <div
                    class="p-4 flex flex-col md:flex-row md:items-start  md:space-x-5 md:space-y-0 items-center space-y-5">
                    <div class="max-w-full">
                        <img class=" object-cover w-full md:w-56 rounded-lg" src="{{ $case->avatar }}"
                            alt="{{ $case->fullname }}">
                    </div>
                    <div class="flex-1 space-y-10">


                        <div class="items-center">
                            <h1
                                class="title-font lg:text-3xl sm:text-2xl text-xl font-medium text-gray-900 mb-3 capitalize">
                                {{ $case->fullname }}</h1>
                            @if ($case->email)
                                <div class="flex items-center space-x-3  ">
                                    <i class="text-xl fa-solid fa-envelope"></i>

                                    <span class=" text-gray-900 capitalize">{{ $case->email }}</span>

                                </div>
                            @endif
                            <div class="flex items-center space-x-3  my-2 ">
                                <i class="text-xl fa-solid fa-phone"></i>

                                <span class=" text-gray-900 capitalize">{{ $case->phone }}</span>

                            </div>
                            @if ($case->date_of_birth)
                                <div class="flex items-center space-x-3  my-2 ">
                                    <i class="text-xl fa-solid fa-calendar"></i>
                                    <span class=" text-gray-900 capitalize">{{ $case->date_of_birth }}</span>

                                </div>
                            @endif
                            @if ($case->gender)
                                <div class="flex items-center space-x-3  my-2 ">
                                    <i class="text-xl fa-solid fa-mars-and-venus"></i>
                                    <span class=" text-gray-900 capitalize">{{ $case->gender }}</span>

                                </div>
                            @endif
                            <div class="flex items-center space-x-3  my-2 ">
                                <i class="text-xl  fa-solid fa-location-dot"></i>
                                <span class=" text-gray-900 capitalize">{{ $case->region ?: 'no region' }} ,
                                    {{ $case->city ?: 'no city' }} ,
                                    {{ $case->state_address ?: 'no state address' }} ,
                                    {{ $case->quarter_address ?: 'no quarter address' }}</span>

                            </div>

                        </div>

                        <div class=" items-center ">
                            <h1 class="text-2xl font-bold mb-2 capitalize">{{ $case->case }}</h1>
                            <p class="text-justify">
                                {{ $case->description ?: 'no description' }}
                            </p>
                        </div>

                        <div class="mb-12">
                            <h1 class="text-2xl  font-bold mb-3">Attached links</h1>
                            <ul class="space-y-2 lg:list-disc md:list-disc sm:list-none  list-inside mb-12 ">
                                @foreach (json_decode($case->links) as $key => $value)
                                    <li class="hover:scale-105 duration-150 ease-in"><a href="{{ $value }}"
                                            class="text-blue-500 hover:text-blue-600 "
                                            target="_blank">{{ $key }}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="mb-12">
                            <h1 class="text-2xl  font-bold mb-3">Attached Image</h1>
                            <div class="w-1/2 mx-auto">
                                <img class="w-full object-cover rounded-lg" src="{{ $case->attached_file }}"
                                    alt="">
                            </div>

                        </div>

                        <div class="flex space-x-3 justify-center">
                            <div>
                                <button type="submit"
                                    class=" capitalize my-3 mb-2 bg-white hover:bg-white text-black font-bold py-2 px-4 rounded border border-gray-400">
                                    Edit
                                </button>
                            </div>
                            <div>
                                <button type="submit"
                                    class=" capitalize my-3 mb-2 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded border border-green-500">
                                    Done
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </section>
</div>




</div>


</section>
</div>
