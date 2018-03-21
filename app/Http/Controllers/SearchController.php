<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $req){
    	if ($req->search == "") {
    		$datas = Search::paginate(5);
    		return view('search.search', compact('datas'));
    	}else{
    		$datas = Search::where('name', 'LIKE', '%' .$req->search. '%')->paginate(3);
    		$datas->appends($req->only('search'));
    		return view('search.search', compact('datas'));
    	}
    }
}
