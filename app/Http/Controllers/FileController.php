<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
	function upload(Request $req)
	{
		$results = [];

		foreach ($req->file('files') as $file) {
			$results[]  =  $file->store('public/');
		}
		return ["results"=>$results];
	}
}
