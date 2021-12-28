<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;


class PostController extends Controller {

	public function __construct() {

    $this->middleware('auth');
    }

	public function add(){
		$categories = Taxonomy::where('type' , 'category')->get();
		$tags = Taxonomy::where('type' , 'tag')->get();
		return view ('addForm' , ['categories' => $categories , 'tags' => $tags]);
	}

	public function added(Request $request){
		$request->validate([
			'title' => 'required|string',
			'content' => 'required|string',
			'status' => 'required|string',
			'slug' => 'required|string',
			'category_id' => 'nullable',
			'tag_ids' => 'array'
		]);
		$post = new Post();
		$post->user_id = 1;
		$post->title = $request->title;
		$post->content = $request->content;
		$post->status = $request->status;
		$post->slug = $request->slug;
		$post->mime_type = 'text/html';
		$post->save();
		$post->taxonomy()->attach($request->tag_ids);
		$post->taxonomy()->attach($request->category_id);
		return redirect ('/list');
	}

	public function list(){
		$lists = Post::all();
		return view ('list' , ['lists' => $lists]);
	}

	public function check(){
		$check = Post::find($_GET["id"]);
		$category = $check->taxonomy()->where('type' , 'category')->get();
		$tags = $check->taxonomy()->where('type' , 'tag')->get();

	return view('check' , ['check' => $check , 'category' => $category , 'tags' => $tags]);
	}

	public function edit(){
		$edit = Post::find($_GET["id"]);
		$categories = Taxonomy::where('type' , 'category')->get();
		$tags = Taxonomy::where('type' , 'tag')->get();
		return view('editForm' , ['edit' => $edit , 'categories' => $categories , 'tags' => $tags]);
	}

	public function edited(Request $request){
		$request->validate([
			'id' => 'required',
			'title' => 'required|string',
			'content' => 'required|string',
			'status' => 'required|String',
			'slug' => 'required|string',
			'category_id' => 'nullable',
			'tag_ids' => 'array'
		]);
		$post = Post::find($request->id);
		$post->title = $request->title;
		$post->content = $request->content;
		$post->status = $request->status;
		$post->slug = $request->slug;
		$post->save();
		$post->taxonomy()->sync($request->tag_ids);
		$post->taxonomy()->attach($request->category_id);
		return redirect('/list');
	}

	public function delete(Request $request){
		$request->validate([
			'id' => 'required'
		]);
		Post::destroy($request->id);
		return redirect('/list');
	}

	public function taxonomy(){
		return view('taxonomyForm');
	}

	public function taxonomyAdd(Request $request){
		$request->validate([
			'name' => 'required|string',
			'type' => 'required|string',
			'slug' => 'required|string',
			'description' => 'nullable'
		]);
		$add = new Taxonomy();
		$add->name = $request->name;
		$add->type = $request->type;
		$add->slug = $request->slug;
		$add->description = $request->description;
		$add->save();
		return redirect('/list');
	}

	public function taxonomylist(){
		$lists = Taxonomy::where('type' , $_GET["type"])->get();


		return view ('taxonomylist' , ['lists' => $lists , 'title' => $_GET["type"]]);
	}

	public function del(Request $request){
		$request->validate([
			'id' => 'required']);
		$taxonomy = Taxonomy::Find($request->id);
        $taxonomy->posts()->detach();
		Taxonomy::destroy($request->id);
		return redirect('/list');
	}

	public function taxonomyEdit(){
		$edit = Taxonomy::find($_GET["id"]);
		return view('taxonomyEdit' , ['edit' => $edit]);
	}

	public function taxonomyEdited(Request $request){
		$request->validate([
			'id' => 'required',
			'name' => 'required|string',
		    'slug' => 'required|string',
			'description' => 'nullable'
		]);
		$taxonomy = Taxonomy::find($request->id);
		$taxonomy->name = $request->name;
		$taxonomy->slug = $request->slug;
		$taxonomy->description = $request->description;
		$taxonomy->save();
		return redirect('/list');
	}

	public function catalist(){
		$cata = Taxonomy::find($_GET["id"]);
		return view('catalist' , ['cata' => $cata]);
	}



}
?>