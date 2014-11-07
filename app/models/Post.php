<?php

class Post extends Eloquent {

  public function comments()
  {
      return $this->hasMany('Comment');
  }

  public function getURL()
  {
    return URL::action('viewPost', array('id' => $this->id));
  }

}
