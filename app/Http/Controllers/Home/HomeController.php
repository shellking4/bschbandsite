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
use App\Util\Utils;

class HomeController extends Controller
{

    public function __construct()
    {
        
    }

    // variables to pass to the view
    public $gDriveApiKey = '';

    public function index()
    {
        return view('repertoire.landing');
    }

    public function render_home_page() {
        $matchThis = ['isWorkedOut' => true];
        $songs = Song::where($matchThis)->get();

        foreach ($songs as $song) {
            $song->file = Utils::getDirectDownloadLink($song->file);
        }

        return view('repertoire.home', [
            'songs' => $songs
        ]);
    }

    public function getUnworkedOutSongs() {
        $matchThis = ['isWorkedOut' => false];
        $songs = Song::where($matchThis)->get();

        foreach ($songs as $song) {
            $song->file = Utils::getDirectDownloadLink($song->file);
        }

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
        $filename = $song->filename; 
        $dir = '/';
        $recursive = false; 
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first();
        $rawData = Storage::cloud()->get($file['path']);
        return response($rawData, 200)
            ->header('ContentType', $file['mimetype'])
            ->header('Content-Disposition', "attachment; filename=$filename");
    }
}
