<?php

namespace App\Http\Controllers;

use App\Model\Post;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{

    public function index() {
        $today = Post::where(['date' => date("Ymd")])->firstOrFail();
        // dd($today);
        $parser = new \cebe\markdown\GithubMarkdown();
        $parser->enableNewlines = true;
        $markdown = "#hello

        ---

        what is this ?
        ```php
        Hello
        ```";
        echo $parser->parse(" :+1: ");


    }
}
