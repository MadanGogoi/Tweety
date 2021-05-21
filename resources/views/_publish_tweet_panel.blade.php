<div class ="border border-blue-400 rounded-lg px-8 py-4 mb-8">
    <form method="POST"  action="/tweets">
        @csrf

        <textarea name="body" class="w-full" placeholder="What's up !"></textarea>

        <hr class="mb-4">

        <footer class ="flex justify-between">

            <img src="{{auth()->user()->avatar}}" alt="Profile_image" class ="rounded-full">

            <button type="submit" class="text-white bg-blue-500 rounded-lg shadow py-4 px-2">
                Tweet
            </button>
        </footer>
        
    </form>   
    <div>
        @error('body')
            <p class="text-red-500  text-sm mt-2"> {{ $message }} </p>            
        @enderror
    </div>
</div>
        