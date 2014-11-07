<?php

class Post extends Eloquent {

  // one-to-many relationship with the Comment model
  public function comments()
  {
      return $this->hasMany('Comment');
  }

  // helper function to get the URL of a post
  public function getURL()
  {
    return URL::action('viewPost', array('id' => $this->id));
  }

  // helper function to get a string of the number of comments
  public function getNumCommentsStr()
  {
    $num = $this->comments()->count();

    if ($num == 1)
    {
      return '1 comment';
    }

    return $num . ' comments';
  }
}
