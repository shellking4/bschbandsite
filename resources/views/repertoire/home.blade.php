@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if ($songs->count())
        @foreach ($songs as $song)
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="{{ asset('images/headphone.png') }}" /></div>
                        <h1 class="title">{{ $song->title }}</h1>
                        <p class="description">{{ $song->description }}</p>
                        <p class="description">Par : {{ $song->author }}</p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="{{ route('song_download', $song) }}">TÉLÉCHARGER</a></div>
                @auth
                @if (count(auth()->user()->roles) == 2)
                <div class="text-center mt-4">
                    <form action="{{ route('song_delete', $song) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn text-light rounded-2 btn-danger">
                            Supprimer le morceau
                        </button>
                    </form>
                </div>
                @endif
                @endauth
            </div>
        </div>
        @endforeach
        @else
        <div class="row">
            <div class="col-md-6 col-12 offset-md-3 ml-3">
                <div class="card">
                    <h5 class="text-center text-dark">AUCUN MORCEAU COPIE</h5>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection