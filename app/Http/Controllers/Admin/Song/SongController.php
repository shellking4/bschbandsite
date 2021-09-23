<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use App\Http\Requests\SongCreateRequest;
use Illuminate\Http\Request;
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
        
        $filePath = $request->file('file');
        $fileName = $filePath->getClientOriginalName();
        $path = $request->file('file')->storeAs('songs', $fileName, 'public');
        $file = '/storage/' . $path;
        
        Song::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'file' => $file,
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
        $song->delete();
        return back()->with('delete_success', "successfully deleted an element");
    }
}
