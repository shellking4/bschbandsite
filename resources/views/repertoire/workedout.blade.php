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
                    </div>
                </div>
                <div class="footer"><a class="btn" href="{{ $song->file }}">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                @auth
                @if (count(auth()->user()->roles) == 2)
                <div class="text-center mt-4">
                    <form action="{{ route('mark_as_workedout', $song) }}">
                        <button class="btn text-light rounded-2 btn-success">
                            Marquer Copiée
                        </button>
                    </form>
                </div>
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
        @endif
    </div>
</div>
@endsection