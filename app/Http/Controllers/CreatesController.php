<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use app\Models\Article;

class CreatesController extends Controller
{
    public function home(){
    	$articles = article::all();
    	if (count($articles) > 0) {
    		foreach ($articles->all as $key => $articles) {
    			return view("home", ['articles' => $articles ]);
    		}
    	}
    	
    }

    public function add(Request $Request){
    	$this->validate($Request,[
		'titel'=> 'required',
		'description'=> 'required',
	]);
		if (count ($errors) > 0) {
			foreach ($errors-> all() as $key => $error) {
				# code...
			}
			return "error";
		}
	
    	$articles = new article;
    	$articles->title = $Request->input('titel');
    	$articles->description = $Request->input('description');
    	$articles-> save();
    	return redirect('/')->with('info', 'article saved successfully')
    	if (session('info')) {
    		session ('info'),
    		# code...
    	}
    	return "error";
    }

    public function update($id){
    	$articles = article::find($id);
    	return view("update", ['articles' => $articles ]);

    }
}
