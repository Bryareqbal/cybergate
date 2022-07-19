<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/logo/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @if (Route::currentRouteName() === 'adding_information' || Route::currentRouteName() === 'edit-information')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.2.3/dist/trix.css">
    @endif
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #edf2f7;
            border-radius: 100vh;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e0;
            border-radius: 100vh;
            border: 3px solid #cbd5e0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #a0aec0;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div class="">
        <nav class="shadow bg-blue-900 px-3 py-4 flex items-center justify-between fixed z-20 top-0 w-full lg:px-10">
            <div class="container mx-auto flex justify-between items-center md:px-5 text-white">
                <div>
                    <a href="{{ route('root') }}" class="text-2xl font-semibold">
                        <h1>CYBER GATE</h1>
                    </a>
                </div>
                @auth
                <div class="group relative">
                    <button class="hidden">list</button>
                    <div class="space-x-3 text-center" id="#dropdown">
                        <span
                            class="text-lg font-semibold capitalize whitespace-nowrap">{{ Str::limit(Auth::user()->name, 10, '..') }}</span>
                        <span>
                            <i class="fa-solid fa-user text-2xl"></i>
                        </span>
                    </div>
                </div>
                @endauth
            </div>
        </nav>

        <div class="container-fluid mx-aut mt-20 pb-20">

            @yield('content')
        </div>

        <footer class="px-4 py-3 fixed bottom-0 w-full bg-white">
            <div class="container px-5 py-2 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="{{ asset('assets/logo/logo.png') }}" class="w-5 h-5 img-responsive" alt="">
                    <span class="ml-3 text-xl">CyberGate</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                <p style="text-align: center"> Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, <strong>Cyber Gate</strong>, All Rights Reserved
                </p>
                </p>

            </div>
        </footer>

    </div>


    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    @if (Route::currentRouteName() === 'adding_information' || Route::currentRouteName() === 'edit-information')
        <script src="https://unpkg.com/trix@1.2.3/dist/trix.js"></script>
    @endif

    @livewireScripts





</body>

</html>
