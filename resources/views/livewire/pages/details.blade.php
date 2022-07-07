<div>

    <section class="container  mx-auto">
        <div class=" px-5 py-4">
          <div class=" space-y-4  ">
            <div class="p-4 flex flex-col md:flex-row md:items-start  md:space-x-5 md:space-y-0 items-center space-y-5">
                <div class="max-w-full">
                    <img class=" object-cover w-full rounded-lg" src="{{ $case->avatar }}"  alt="{{ $case->fullname }}">
                </div>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3 capitalize">{{ $case->fullname }}</h1>
            </div>
          </div>
        </div>
      </section>
</div>
