<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
// use App\Models\Desa;
// use Auth;
class ProductController extends Controller
{
	public function index($nama_product)
	{
		return view('product',compact('nama_product'));

	}

}