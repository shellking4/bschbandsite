@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/form.css') }}" />
@endpush

@section('content')
<div class="container">
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="#login">AJOUT DE MORCEAU</a></li>
            <li class="tab"><a href="#signup">AJOUT D'ÉVÉNEMENT</a></li>
        </ul>
        <div class="tab-content">
            <!-- connexion -->
            <div id="login">
                <h1 class="tab-title">AJOUT DE MORCEAU</h1>
                @if (session()->has('status'))
                <div class="bg-red-500 p-2 rounded-lg mb-6 mt-2 text-white text-center">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('song_add_action') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="field-wrap">
                        <label>
                            Titre du chant<span class="req">*</span>
                        </label>
                        <input type="text" name="title" class="border rounded form-control text-white bg-dark" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <label>
                            Auteur du chant<span class="req">*</spanform-title>
                        </label>
                        <input type="text" name="author" class="border rounded form-control text-white bg-dark" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <label>
                            Tonalité du chant<span class="req">*</spanform-title>
                        </label>
                        <input type="text" name="key" class="border rounded form-control text-white bg-dark" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <input type="file" name="file" class="border rounded form-control text-white bg-dark" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <textarea type="description" name="description" class="border rounded text-white form-control bg-dark" autocomplete="off"></textarea>
                        <div class="mt-2">
                            Description du chant
                        </div>
                    </div>
                    <button class="btn btn-success text-white rounded button-block" />AJOUTER</button>
                </form>
            </div>

            <!-- inscription -->
            <div id="signup">
                <h1 class="tab-title">AJOUT D'ÉVÉNEMENT</h1>
                @if (session()->has('status'))
                <div class="bg-red-500 p-2 rounded-lg mb-6 mt-2 text-white text-center">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('login_action') }}" method="post">
                    @csrf
                    <div class="field-wrap">
                        <input type="text" name="title" class="border rounded form-control text-white bg-dark" required autocomplete="off" />
                        <div class="mt-2">
                            Libellé de l'événement<span class="req">*</span>
                        </div>
                    </div>
                    <div class="field-wrap">
                        <input type="date" name="date" class="border rounded form-control text-white bg-dark" required autocomplete="off" />
                        <div class="mt-2">
                            Date de l'événement<span class="req">*</span>
                        </div>
                    </div>
                    <div class="field-wrap">
                        <textarea type="description" name="description" class="border rounded text-white form-control bg-dark" required autocomplete="off"></textarea>
                        <div class="mt-2">
                            Description de l'événement<span class="req">*</spanform-title>
                        </div>
                    </div>
                    <button class="btn btn-success text-white rounded button-block" />AJOUTER</button>
                </form>
            </div>
        </div><!-- tab-content -->
    </div> <!-- /form -->
</div>
@endsection