<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;

class ReadController extends Controller {

	public function top(){
		$lists = Post::latest()->where('status' , 'publish')->take(3)->get();
		return view('read/top' , [ 'lists' => $lists]);
	}

	public function read($slug){
		$read = Post::where('slug' , $slug)->first();
		$category = $read->taxonomy()->where('type' , 'category')->get();
		$tags = $read->taxonomy()->where('type' , 'tag')->get();

		return view('read/read' , ['read' => $read , 'category' => $category , 'tags' => $tags]);
	}

	public function category($slug){
		$category = Taxonomy::where('slug' , $slug)->first();
		$lists = $category->posts()->where('status' , 'publish')->get();
		return view('read/category' , ['lists' => $lists , 'category' => $category]);
	}
}
?>