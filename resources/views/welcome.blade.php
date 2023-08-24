<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gallery</title>
    {{-- 0.0.0.0? What the fuck? --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <script type="module" src="http://localhost:5173/@@vite/client"></script>
    <link rel="stylesheet" href="http://localhost:5173/resources/css/app.css">
    <script type="module" src="http://localhost:5173/resources/js/app.js"></script>
</head>

<body>

    <x-header />

    <x-adder />

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($pictures as $pic)
                    <x-picture>
                        <img src="{{ $pic->url }}" class="card-img-top" alt="..." 
                        width="" height="">
                    </x-picture>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
