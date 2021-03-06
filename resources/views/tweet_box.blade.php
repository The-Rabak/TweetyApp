<div class="border border-blue-500 rounded-lg px-2 py-4 mb-2">

<form method="POST" action="/tweets">
    @csrf
    <textarea
        name="body"
        id=""
        class="w-full border-none"
        required
    >

    </textarea>

    <hr class="my-4">

    <footer class="flex justify-between">
        @include("user_avatar_img", ["img_src" => auth()->user()->getAvatarImage()])
    <button type="submit" class="bg-blue-500 rounded-lg py-2 shadow px-2 text-white">Tweet-a-Fool</button>

    </footer>

</form>
    @error("body")
        <p class="text-red-500 text-sm mt-2"> {{$message}}</p>
    @enderror
</div>
