<?php

class BlogController extends BaseController {

    // set this controller's layout
    protected $layout = 'layouts.master';

    public function index()
    {
        $this->layout->content = View::make('blog.index', array(
          'posts' => Post::all()
        ));
    }

    // display a blog post creation form
    public function newPost()
    {
        $this->layout->content = View::make('blog.new');
    }

    // create a post that has been POSTed to the server
    public function createPost()
    {
      // get the post
      $post = new Post();
      $post->title = Input::get('title');
      $post->content = nl2br(Input::get('content'));
      $post->save();

      return Redirect::route('viewPost', array('id' => $post->id));
    }

    // view a post by id
    public function viewPost($id)
    {
      // get the post
      $post = Post::findOrFail($id);

      $this->layout->content = View::make('blog.view', array(
        'post' => $post
      ));
    }

    // create a comment for a given post
    public function createComment($id)
    {
      // get the post that the user commented on
      $post = Post::findOrFail($id);

      // create a new comment
      $comment = new Comment();
      $comment->name = Input::get('name');
      $comment->content = nl2br(Input::get('content'));

      // save the comment with a relation to the post
      $post->comments()->save($comment);

      // go back to the post
      return Redirect::route('viewPost', array('id' => $post->id));
    }
}
