<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\jenis_buku;

use App\Exports\jenisbuku;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class jenis_bukuController extends Controller
{
	public function index()
	{
		$jenis_buku = jenis_buku::all();
		return view('jenis_buku0255',['jenis_buku'=>$jenis_buku]);
	}

	public function export_excel()
	{
		return Excel::download(new jenisbuku, 'jenis_buku.xlsx');
	}
}