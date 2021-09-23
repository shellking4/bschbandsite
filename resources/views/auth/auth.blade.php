@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/form.css') }}" />

@endpush

@section('content')
<div class="container">
    <div class="form">
        <ul class="tab-group">
            <li class="tab active"><a href="#login">CONNEXION</a></li>
            <li class="tab"><a href="#signup">INSCRIPTION</a></li>
        </ul>
        <div class="tab-content">
            <!-- connexion -->
            <div id="login">
                <h1 class="tab-title">CONNEXION</h1>
                @if (session()->has('status'))
                <div class="bg-red-500 p-2 rounded-lg mb-6 mt-2 text-white text-center">
                    {{ session('status') }}
                </div>
                @endif
                <form action="{{ route('login_action') }}" method="post">
                    @csrf
                    <div class="field-wrap">
                        <label>
                            Votre Email<span class="req">*</span>
                        </label>
                        <input type="email" name="email" class="border rounded" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <label>
                            Votre mot de passe<span class="req">*</spanform-title>
                        </label>
                        <input type="password" name="password" class="border rounded" required autocomplete="off" />
                    </div>
                    <p class="forgot"><a href="{{ route('pass.reset.view') }}">Mot de passe oublié</a></p>
                    <button class="btn btn-success text-white rounded button-block" />SE CONNECTER</button>
                </form>
            </div>

            <!-- inscription -->
            <div id="signup">
                <h1 class="tab-title">INSCRIPTION</h1>
                <form action="{{ route('admin@register_action') }}" method="post">
                    @csrf
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Nom<span class="req">*</span>
                            </label>
                            <input type="text" name="lastname" class="border rounded" required autocomplete="off" />
                        </div>
                        <div class="field-wrap">
                            <label>
                                Prénom<span class="req">*</span>
                            </label>
                            <input type="text" name="firstname" class="border rounded" required autocomplete="off" />
                        </div>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Email<span class="req">*</span>
                        </label>
                        <input type="email" name="email" class="border rounded" required autocomplete="off" />
                    </div>
                    <div class="field-wrap">
                        <label>
                            Mot de passe<span class="req">*</span>
                        </label>
                        <input type="password" name="password" class="border rounded" required autocomplete="off" />
                    </div>
                    <button type="submit" class="btn btn-success text-white rounded button-block" />S'INSCRIRE</button>
                </form>
            </div>
        </div><!-- tab-content -->
    </div> <!-- /form -->
</div>
@endsection