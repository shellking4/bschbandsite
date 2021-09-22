@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="images/headphone.png" /></div>
                        <h1 class="title">The Magnificent Stag</h1>
                        <p class="description"></p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="#">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                <div class="text-center mt-4">
                    <button class="btn text-light rounded-2 btn-success">
                        Marquer Copiée
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="images/headphone.png" /></div>
                        <h1 class="title">The Magnificent Stag</h1>
                        <p class="description"></p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="#">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                <div class="text-center mt-4">
                    <button class="btn text-light rounded-2 btn-success">
                        Marquer Copiée
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="images/headphone.png" /></div>
                        <h1 class="title">The Magnificent Stag</h1>
                        <p class="description"></p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="#">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                <div class="text-center mt-4">
                    <button class="btn text-light rounded-2 btn-success">
                        Marquer Copiée
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="images/headphone.png" /></div>
                        <h1 class="title">The Magnificent Stag</h1>
                        <p class="description"></p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="#">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                <div class="text-center mt-4">
                    <button class="btn text-light rounded-2 btn-success">
                        Marquer Copiée
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="images/headphone.png" /></div>
                        <h1 class="title">The Magnificent Stag</h1>
                        <p class="description"></p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="#">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                <div class="text-center mt-4">
                    <button class="btn text-light rounded-2 btn-success">
                        Marquer Copiée
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="songs">
                    <div class="song active">
                        <div class="thumbnail"><img class="img rounded" src="images/headphone.png" /></div>
                        <h1 class="title">The Magnificent Stag</h1>
                        <p class="description"></p>
                    </div>
                </div>
                <div class="footer"><a class="btn" href="#">ÉCOUTER</a><a class="btn" href="#">TÉLÉCHARGER</a></div>
                @auth
                @if (count(auth()->user()->roles) == 2)
                <div class="text-center mt-4">
                    <button class="btn text-light rounded-2 btn-success">
                        Marquer Copiée
                    </button>
                </div>
                @endif
                @endauth
            </div>
        </div>
    </div>
</div>
@endsection