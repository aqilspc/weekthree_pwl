<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class NewsController extends Controller
{
	public function index($news_name)
	{
		return view('news',compact('news_name'));

	}
}