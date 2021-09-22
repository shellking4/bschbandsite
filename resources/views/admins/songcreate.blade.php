@extends('layouts.app')

@section('content')
<div class="flex justify-center my-5">
    <div class="w-5/12 p-2 rounded-lg">
        <h5 class="flex justify-center text-center text-white">AJOUT DE MORCEAU À COPIER</h5>
    </div>
</div>
<div class="flex justify-center mt-5">
    <div class="md:w-5/12 w-10/12 bg-white p-6 rounded-lg">
        <form action="{{ route('song_add_action') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="sr-only">Titre du morceau</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Titre du morceau" class="bg-white border-2 w-full p-2 rounded-lg @error('title') border-red-500 @enderror">
                @error('title')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="author" class="sr-only">Appelation en claire</label>
                <input type="text" name="author" id="author" value="{{ old('author') }}" placeholder="Auteur du chant" class="bg-white border-2 p-2 w-full rounded-lg @error('author') border-red-500 @enderror">
                @error('author')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="w-full flex flex-col items-center bg-white text-blue rounded-lg uppercase border cursor-pointer hover:text-white">
                    <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                    </svg>
                    <span class="mt-1 text-base leading-normal text-center">Choisissez une image</span>
                    <input type='file' name="car_image" id="car_image" value="{{ old('car_image') }}" class="hidden" />
                </label>
                @error('car_image')
                <p class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <button type="submit" class="theme-ground text-white px-4 py-2 rounded font-medium w-full">AJOUTER</button>
            </div>
        </form>
    </div>
</div>
@endsection