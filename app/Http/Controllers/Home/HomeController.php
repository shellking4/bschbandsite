<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\PassResetFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Song;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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
        $matchThis = ['isWorkedOut' => true];
        $songs = Song::where($matchThis)->get();
        return view('repertoire.home', [
            'songs' => $songs
        ]);
    }

    public function getUnworkedOutSongs() {
        $matchThis = ['isWorkedOut' => false];
        $songs = Song::where($matchThis)->get();
        return view('repertoire.unworkedout', [
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

    public function downloadMedia(Request $request, Song $song)
    {
        $file = public_path() . $song->file;
        $fileName = basename($file); 
        $headers = ['Content-Type: */*'];
        if (file_exists($file)) {
            return \Response::download($file, $fileName, $headers);
        } else {
            echo ('File not found.');
        }
    }
}
