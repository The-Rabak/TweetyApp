<aside class="flex p-4 border-b border-gray-500">
    <div class="mr-4 flex-shrink-0">
        @include("user_avatar_img")
    </div>
    <div class="">
        <h5 class="font-bold mb-4">
            {{$tweet->user->name}}
        </h5>
        <p class="text-sm">
            {{$tweet->body}}

        </p>
    </div>
</aside>
