
<img
    src="{{$img_src ?? (isset($tweet) ? ($tweet->user->getAvatarImage()) : "https://i.pravatar.cc/50")}}"
    alt=""
    class="rounded-full mr-2"
>
