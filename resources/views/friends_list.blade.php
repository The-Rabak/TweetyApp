<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(auth()->user()->follows as $user)
    <li>
        <div class="flex items-center text-sm mb-3">
            <a href="{{route("profile", $user)}}" class="flex">
            @include("user_avatar_img", ["img_src" => $user->getAvatarImage()])
            {{$user->name}}
            </a>

        </div>

    </li>
    @endforeach
</ul>
