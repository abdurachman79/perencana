<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('view_index');
	}

	public function surat()
	{
		return view('view_surat_masuk');
	}

	public function cetak()
	{
		return view('view_cetak');
	}
}
