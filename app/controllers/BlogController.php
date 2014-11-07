<?php

class BlogController extends BaseController {

    // set this controller's layout
    protected $layout = 'layouts.master';

    public function index()
    {
        $this->layout->content = View::make('blog.index');
    }

    // TODO: implement all the function we need in this controller
}
