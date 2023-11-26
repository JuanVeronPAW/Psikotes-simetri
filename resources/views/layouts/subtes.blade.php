<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            {{ __("Kerjakan soal berikut") }}
                            <div class="d-flex row mt-4">
                                @foreach ($data_subtes1 as $item)
                                <a href="" class="mt-4">{{ $item->id }}</a>
                                <img src={{ $item->url }} alt="">
                                <ul>
                                    <li><a href="">Jawabanya adalah:</a>{{ $item->kunci }}</li>
                                </ul>
                                <h1>Jawabanmu?</h1>
                                <form method="POST" action="/simpan-radio">
                                    @csrf
                                    <input type="radio" id="A" name="choice" name="subtes1_id" value="A">
                                    <label for="option1">A</label><br>
                                  
                                    <input type="radio" id="B" name="choice" value="B">
                                    <label for="option1">B</label><br>
            
                                    <input type="radio" id="C" name="choice" value="C">
                                    <label for="option1">C</label><br>
                    
                                    <button type="submit">Simpan</button>
                                </form>
                                @endforeach  
                            </div>
                            
                            
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
