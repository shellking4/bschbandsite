<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Http\Requests\SongCreateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Song;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware('check_user_role:admin');
    }

    public function index()
    {
        
    }

    public function renderAddForm()
    {
        return view('admins.create');
    }

    public function storeSong(SongCreateRequest $request) {

        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs(
            '',
            $filename,
            'main_google_drive'
        );
        $dir = '/';
        $recursive = false; 
        $contents = collect(Storage::cloud()->listContents($dir, $recursive));
        $file = $contents
            ->where('type', '=', 'file')
            ->where('filename', '=', pathinfo($filename, PATHINFO_FILENAME))
            ->where('extension', '=', pathinfo($filename, PATHINFO_EXTENSION))
            ->first(); 
        $service = Storage::cloud()->getAdapter()->getService();
        $permission = new \Google_Service_Drive_Permission();
        $permission->setRole('reader');
        $permission->setType('anyone');
        $permission->setAllowFileDiscovery(false);
        $permissions = $service->permissions->create($file['basename'], $permission);
        $url = Storage::cloud()->url($file['path']);
        Song::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'file' => $url,
            'filename' => $filename
        ]);
        return redirect()->route('home')->with('add_success', "succesfully added an element");
    }

    public function renderUpdateForm()
    {
        
    }

    public function update()
    {
        
    }

    public function markAsWorkedOut(Song $song) {
        $song->isWorkedOut = true;
        $song->save();
        return back()->with('success', "successfully done");
    }

    public function delete(Song $song)
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
        Storage::cloud()->delete($file['path']);
        $song->delete();
        return back()->with('delete_success', "successfully deleted an element");
    }
}
