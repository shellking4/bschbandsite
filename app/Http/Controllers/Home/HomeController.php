<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\FreeRentFormRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\PassResetFormRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\RentFormRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Song;

class HomeController extends Controller
{

    public function __construct()
    {
        
    }

    public function index()
    {
        return view('repertoire.landing');
    }

    public function render_home_page() {
        $matchThis = ['isWorkedOut' => false];
        $songs = Song::where($matchThis)->get();
        return view('repertoire.home', [
            'songs' => $songs
        ]);
    }

    public function getWorkedOutSongs() {
        $matchThis = ['isWorkedOut' => true];
        $songs = Song::where($matchThis)->get();
        return view('repertoire.workedout', [
            'songs' => $songs
        ]);
    }

    public function renderPassResetForm()
    {
        return view('auth.passReset');
    }

    public function resetPassword(PassResetFormRequest $request)
    {
        $user = User::where('email', $request->email)->get()[0];
        $user->password = Hash::make($request->password);
        $user->save();
        $credentials = [
            'email' => $user->email,
            'password' => $request->password
        ];
        if (!Auth::attempt($credentials)) {
            return back()->with('status', 'IDENTIFIANTS DE CONNEXION INVALIDES');
        }
        return redirect()->route('worked_out_songs')->with('pass_reset_success', 'Password Successfully Reset');
    }
}
