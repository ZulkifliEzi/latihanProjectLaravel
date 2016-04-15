<?php
  namespace App\Http\Controllers;
  
  use Illuminate\Http\Request;
  
  use App\Http\Requests;
  
  use App\Article, App\Comment;
  
  use Validator, Session, Redirect;
  
  
  class CommentsController extends Controller {
  	
    public function store(Request $request)
    {
      $validate = Validator::make($request->all(), Comment::valid());
      if($validate->fails()) {
        return Redirect::to('articles/'. $request->article_id)
          ->withErrors($validate)
          ->withInput();
      } else {
        Comment::create($request->all());
        Session::flash('notice', 'Success add comment');
        return Redirect::to('articles/'. $request->article_id);
      }
    }
  }