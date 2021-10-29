@extends('layouts.base')

@section('body')
    @include("logout_form")
    <div class="flex justify-between">
        <div class="w-32">
            @include("side_bar_links")
        </div>
        <div class="flex-1 mx-10">
            @yield('content')
        </div>
        <div class="w-1/6 bg-blue-200 p-2 round-lg fit-content">
            @include("friends_list")
        </div>
    </div>

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
