<h3 class = "font-bold text-xl mb-4">
    Following 
</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
    <li class = "mb-3">
        <div >
            <a href="{{ route('profile',$user) }}" class="flex items-center">
                <img src=" {{ $user->avatar }}" alt="Profile_image" width="40" height="40" class="mr-4 rounded-full">

                <p class = "text-bold">
                    {{$user->name }}
                </p>
            </a>         
        </div>
    </li>
    @endforeach
    
</ul>