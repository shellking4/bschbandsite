<?php

namespace App\Http\Controllers\Admin\Song;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admins.songcreate');
    }

    public function add()
    {
        
    }

    public function renderUpdateForm()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
