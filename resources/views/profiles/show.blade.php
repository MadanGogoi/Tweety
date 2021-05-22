@extends('layouts.app')

@section('content')
    
    <header class ="mb-6">
        <img src=" {{ url('/Abhin-Twitter-response-edied.jpg') }}" alt="Photo" class ="mb-2" height="300">


        <div class="flex justify-between">
            <div>
                <h2 class ="font-bold text-2xl "> {{ $user->name }} </h2>
            </div>

            <div>
                <a href="" class= "bg-blue-500 rounded-lg shadow py-2 px-2 text-white mr-2"> Edit Profile </a>
                <a href="" class= "bg-blue-500 rounded-lg shadow py-2 px-2 text-white"> Follow Me </a>
            </div>
        </div>
        
    </header>
    <hr>

    @include('_timeline',[
        'tweets' => $user->tweets
    ])

@endsection