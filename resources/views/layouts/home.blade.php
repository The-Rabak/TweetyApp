@extends('layouts.app')

@section('content')
    @include("logout_form")
    <div class="flex justify-between">
        <div class="w-32">
            @include("side_bar_links")
        </div>
        <div class="flex-1 mx-10">
            @include("tweet_box")
                @include("tweet_feed")

        </div>
        <div class="w-1/6 bg-blue-200 p-2 round-lg">
            @include("friends_list")
        </div>
    </div>

@endsection
