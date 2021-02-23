<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\Desa;
// use Auth;
class AboutUsController extends Controller
{
	public function index()
	{
		return view('about-us');
	}
	
}