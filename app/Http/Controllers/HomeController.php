<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        if(!auth()->user())
        {
            return redirect("login");
        }
        return redirect("tweets");
    }


}
