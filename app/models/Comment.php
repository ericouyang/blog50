<?php

class Comment extends Eloquent {

  // many-to-one relationship with the Post model
  public function post()
  {
    return $this->belongsTo('Post');
  }

}
