<h3 class="font-bold text-xl mb-4">Friends</h3>

<ul>
    @foreach(range(1,8) as $index)
    <li>
        <div class="flex items-center text-sm mb-3">
            @include("user_avatar_img")
            Treebeard
        </div>

    </li>
    @endforeach
</ul>
