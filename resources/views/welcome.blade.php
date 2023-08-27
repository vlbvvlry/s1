<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gallery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <x-header />

    <x-adder />

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($pictures as $pic)
                    <div class="modal fade" id="modal_{{ $pic->id }}" tabindex="-1">
                        <x-modal>
                            <img src="{{ $pic->url }}" class="card-img-top" alt="..." width=""
                                height="">
                            <form method="POST" action="{{ route('picture.remove') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $pic->id }}">
                                <button class="btn btn-danger my-4 w-100">Удалить</button>
                            </form>
                        </x-modal>
                    </div>
                    <x-picture>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#modal_{{ $pic->id }}"
                            onclick="return false;">
                            <img src="{{ $pic->url }}" class="card-img-top" alt="..." width=""
                                height="">
                        </button>
                    </x-picture>
                @endforeach
            </div>
        </div>
    </div>

</body>

</html>
