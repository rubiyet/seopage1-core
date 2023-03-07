<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Str;

class FileCounterController extends Controller
{
	function counter(Request $req)
	{
		$files = Storage::disk('public')->allFiles();
		$count = 0;
		foreach ($files as $file) {
			$count++;
		}
		
		return ["count"=>$count];
	}
}

