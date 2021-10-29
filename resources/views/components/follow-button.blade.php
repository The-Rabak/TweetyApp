<form action="{{"/profile/{$user->name}/follow"}}" method="POST">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
    >{{auth()->user()->following($user) ? "Unfollow" : "Follow Me"}}</button>
</form>
