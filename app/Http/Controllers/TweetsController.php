<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{

    public function index()
    {
        return view('layouts.home', [
            "tweets" => auth()->user()->getTimeline()
        ]);
    }

    public function store()
    {
        $attributes = $this->validateNewTweet();
        $attributes["user_id"] = auth()->id();
        Tweet::create($attributes);
        return redirect("home");
    }

    public function validateNewTweet()
    {
        return request()->validate([
            "body" => "required|max:255"
        ]);
    }
}
