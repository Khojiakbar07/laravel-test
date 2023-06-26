<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return 'Bu userlarni royxati';
    }
    public function show($user)
    {
        return 'tanlangan user: ' . $user ;
    }
    public function create()
    {
        return 'bu userni yaratish sahifasi';
    }

}
