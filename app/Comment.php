<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable = ['article_id','user','content'];
   public static function valid() {

    return array(

      'content' => 'required'

    );

  }

  public function article() {

    return $this->belongsTo('App\Article', 'article_id');

  }
}
