<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ route('profile',$tweet->user) }}">
            <img src="{{ $tweet->user->avatar }}" alt="Profile_image" class ="rounded-full">
        </a>
       

    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile',$tweet->user->name) }}">
                {{ $tweet->user->name}}
            </a>
            
        </h5>
        <p class="text-sm">
            {{
                $tweet->body
            }}
        </p>
    </div>
</div>    