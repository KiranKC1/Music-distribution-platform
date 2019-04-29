<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Code;
use App\Song;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rdm_codes = count(Code::where('status','redeemed')->get());
        $shipped_codes = count(Code::where('status','shipped')->get());
        $unshipped_codes = count(Code::where('status','unshipped')->get());
        return view('admin.dashboard')->with('rdm_codes',$rdm_codes)->with('shipped_codes',$shipped_codes)->with('unshipped_codes',$unshipped_codes);
        return view('admin.dashboard'); 
    
    }
    public function GetCode()
    {
        $codes = Code::paginate(20);
        return view('admin.code_generator')->with('codes',$codes);
    }
    public function Dashboard()
    {
        $rdm_codes = count(Code::where('status','redeemed')->get());
        $shipped_codes = count(Code::where('status','shipped')->get());
        $unshipped_codes = count(Code::where('status','unshipped')->get());
        return view('admin.dashboard')->with('rdm_codes',$rdm_codes)->with('shipped_codes',$shipped_codes)->with('unshipped_codes',$unshipped_codes);
        return view('admin.dashboard');
    }
    public function UploadMusic()
    {
        $songs = Song::all();
        return view('admin.upload_music')->with('songs',$songs);
    }
}
