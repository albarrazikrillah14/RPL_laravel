<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthorController extends Controller
{
    public function index(User $author){
        return view('posts', [
            'title' => "Post By Author: $author->name",
            'active' => '',
            'posts' => $author -> post -> load('category', 'author')
        ]);
    }
}
