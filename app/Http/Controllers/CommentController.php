<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;
use App\Comment;

class CommentController extends Controller
{
    //
	public function index(Blog $blog){
		$comments = $blog->comments;
		return view('admin.comment.index', ['comments' => $comments,
			'blog' => $blog
			]);
	}

    public function new(Blog $blog){
    	$comment = new Comment();
    	$comment->id = -1;
    	return view('admin.comment.edit', ['comment' => $comment,
    		'blog' => $blog
    		]);
    }

    public function save(Request $request){
    	if($request->input('id') == -1)
    		$comment = new Comment();
    	else
    		$comment = Comment::find($request->input('id'));

    	$comment->blog_id = $request->input('blog_id');
    	$comment->adSoyad = $request->input('adSoyad');
    	$comment->content = $request->input('content');
    	$comment->save();
    	return redirect('/');
    }

    public function delete(Comment $comment){
    	$comment->delete();
    	return redirect('kanepe');
    }


}
