<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {

	public function add(){
		return view ('addForm');
	}

	public function added(Request $request){
		$request->validate([
			'title' => 'required|string',
			'content' => 'required|string',
			'status' => 'required|string',
			'slug' => 'required|string'
		]);
		$post = new Post();
		$post->user_id = 1;
		$post->title = $request->title;
		$post->content = $request->content;
		$post->status = $request->status;
		$post->slug = $request->slug;
		$post->mime_type = 'text/html';
		$post->save();
		return redirect ('/list');
	}

	public function list(){
		$lists = Post::all();
		return view ('list' , ['lists' => $lists]);
	}

	public function read(Request $request){
		$id = $request->id;
		$read = Post::find($id);
		return view('read' , ['read' => $read]);
	}

	public function edit(){
		$edit = Post::find($_GET["id"]);
		return view('editForm' , ['edit' => $edit]);
	} 

	public function edited(Request $request){
		$request->validate([
			'id' => 'required',
			'title' => 'required|string',
		    'content' => 'required|string',
		    'status' => 'required|String',
		    'slug' => 'required|string'
		]);
		$post = Post::find($request->id);
		$post->title = $request->title;
		$post->content = $request->content;
		$post->status = $request->status;
		$post->slug = $request->slug;
		$post->save();
		return redirect('list');
	}

	public function delete(Request $request){
		$request->validate([
			'id' => 'required'
		]);
		Post::destroy($request->id);
		return redirect('list');
	}
}
?>