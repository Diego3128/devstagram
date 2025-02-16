@extends('layouts.app')

@section('title')
    Your account
@endsection


@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex md:gap-10">
            <div class=" md:w-6/12 px-5">
                <img class="w-40  md:w-52 mx-auto" src="{{ asset('img/user.svg') }}" alt="user profile picture">
            </div>

            <div class=" md:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ Auth::user()->username }}</p>
            </div>
        </div>
    </div>
@endsection
