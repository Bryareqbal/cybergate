<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @livewireStyles
</head>

<body>
    <div class="">
        <nav class="shadow bg-blue-900 px-3 py-4 flex items-center justify-between fixed top-0 w-full lg:px-10">
            <div class="container mx-auto flex justify-between items-center px-5 text-white">
                <div>
                    <a href="{{ route('dashboard') }}" class="text-2xl font-semibold">
                        <h1>CYBER GATE</h1>
                    </a>
                </div>
                <div class="group relative">
                    <button class="hidden">list</button>
                    {{-- <div class="space-x-3 hidden group-focus-within:block absolute md:static -bottom-10 translate-y-full w-40 md:w-auto right-0 md:right-auto md:bottom-0 md:block md:translate-x-0 md:translate-y-0 rounded md:shadow-none shadow md:text-white text-black bg-white text-center px-3 py-2 md:text-left md:p-0 md:bg-transparent"
                        id="#dropdown">
                        <span class="text-lg font-semibold capitalize">user name</span>
                        <span>
                            <i class="fa-solid fa-user text-2xl"></i>
                        </span>
                    </div> --}}
                    <div class="space-x-3 text-center" id="#dropdown">
                        <span class="text-lg font-semibold capitalize">user name</span>
                        <span>
                            <i class="fa-solid fa-user text-2xl"></i>
                        </span>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container-fluid mx-aut mt-20 pb-20">
            @yield('content')
        </div>

        <footer class="bg-blue-900 px-4 py-3 fixed bottom-0 w-full">
            <div class="text-center text-white">
                <p class="">Copyright &copy;<strong>Cyber Gate </strong>all reversed in 2022</p>
            </div>
        </footer>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
    @livewireScripts
</body>

</html>
