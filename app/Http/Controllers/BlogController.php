<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;
use App\Comment;
use Excel;

class BlogController extends Controller
{
    //
    public function index(){
    	$blogs = Blog::all();
    	return view('admin.blog.index', ['blogs' => $blogs]);
    }

    public function new(){
    	$blog = new Blog();
    	$blog->id = -1;
    	return view('admin.blog.edit', ['blog' => $blog]);
    }

    public function save(Request $request){
    	if($request->input('id') == -1)
    		$blog = new Blog();
    	else
    		$blog = Blog::find($request->input('id'));

    	$blog->title = $request->input('title');
    	$blog->content = $request->input('content');
    	$blog->save();
    	return redirect('kanepe');
    }

    public function edit(Blog $blog){
    	return view('admin.blog.edit', ['blog' => $blog]);
    }

    public function delete(Blog $blog){
    	$blog->delete();
    	return redirect('kanepe');
    }

    public function viewHome(){
    	$blogs = Blog::all();
    	return view('homePage', ['blogs' => $blogs]);
    }

    public function blogComment($id){
    	$blog = Blog::where('id', $id)->first();
    	$comments = $blog->comments;
    	return view('blogComment', ['blog' => $blog,
    		'comments' => $comments
    		]);
    }

    public function newComment(Blog $blog){
    	$comment = new Comment();
    	$comment->id = -1;
    	return view('writeComment', ['comment' => $comment,
    			'blog' => $blog
    		]);
    }

    public function export(){
    	$blogs = Blog::select('id', 'title', 'created_at')->get();
    	 Excel::create('blog_bilgileri', function($excel) use ($blogs){
    		$excel->sheet('mySheet', function($sheet) use ($blogs){
    			$sheet->fromArray($blogs);
    		});
    	})->export('xls');
    	 return redirect('kanepe');
    }


}
