<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ProgramController extends Controller
{
	public function index($nama_program)
	{
		return view('program',compact('nama_program'));

	}
}