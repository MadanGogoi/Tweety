@extends('layouts.app')

@section('content')

    <header class ="mb-6">
        <img src=" {{ url('/Abhin-Twitter-response-edied.jpg') }}" alt="Photo" class ="mb-2" height="300">


        <div class="flex justify-between">
            <div>
                <h2 class ="font-bold text-2xl "> {{ $user->name }} </h2>
            </div>

            <div class ="flex">
                <a href="" class= "bg-blue-500 rounded-lg shadow py-2 px-2 text-white mr-2"> Edit Profile </a>
                @csrf

                <form method="POST" action="/profiles/{{ $user->name }}/follow"> 
                    <button type="submit" class=" bg-blue-500 rounded-lg shadow py-2 px-2 text-white"> Follow Me </a>
                    </button>
                </form>
                
               
            </div>
        </div>
        
    </header>
    <hr>

    @include('_timeline',[
        'tweets' => $user->tweets
    ])

@endsection