@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
    {{-- profile section --}}
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex md:gap-10">
            <div class=" md:w-6/12 px-5">
                <img class="w-40  md:w-52 mx-auto" src="{{ asset('img/user.svg') }}" alt="user profile picture">
            </div>

            <div class=" md:w-6/12 px-5 flex flex-col justify-center items-center md:items-start ">
                <p class="text-gray-700 text-xl mb-3">{{ $user->username }}</p>

                <p class="text-gray-700 text-sm mb-3 font-bold flex min-w-28 justify-between gap-3">
                    <span>Followers</span>
                    <span>0</span>
                </p>

                <p class="text-gray-700 text-sm mb-3 font-bold flex min-w-28 justify-between gap-3">
                    <span>Following</span>
                    <span>0</span>
                </p>

                <p class="text-gray-700 text-sm mb-3 font-bold flex min-w-28 justify-between gap-3">
                    <span>Posts</span>
                    <span>0</span>
                </p>
            </div>
        </div>
    </div>
@endsection
