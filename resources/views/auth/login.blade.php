@extends('layouts.app')

@section('title')
    Login in devstagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:items-center ml-7 mr-7 mb-44 relative pt-40 md:pt-6 md:pr-5">

        <div class="md:w-5/12">
            <img src="{{ asset('img/login.jpg') }}" alt="login picture"
                class=" w-full rounded-md shadow-lg object-cover absolute top-0 left-0 -z-10 md:h-[115%] ">
        </div>

        <div class="md:w-3/4 bg-white shadow-lg rounded-lg p-6 max-w-md mx-auto md:mx-0">
            <form method="POST" action="{{ route('login') }}" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="email" class="mb-2 text-gray-500 capitalize font-bold">email</label>
                    <input type="email" id="email" name="email" placeholder="Your email" value="{{ @old('email') }}"
                        class="rounded-lg border p-3 w-full @error('email') border-red-500  @enderror">
                    @error('email')
                        <p class="bg-red-500 text-gray-50 rounded-md p-1 mx-auto text-center w-11/12 relative -mt-2 ">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="mb-2 text-gray-500 capitalize font-bold">password</label>
                    <input type="password" id="password" name="password" placeholder="Your password"
                        class="rounded-lg border p-3 w-full @error('password') border-red-500  @enderror">
                    @error('password')
                        <p class="bg-red-500 text-gray-50 rounded-md p-1 mx-auto text-center w-11/12 relative -mt-2 ">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-3 flex gap-1 flex-row-reverse items-center justify-start">
                    <label for="remember" class="text-gray-500 capitalize font-bold text-xs">keep session active</label>
                    <input type="checkbox" id="remember" name="remember" class="rounded-lg border p-3 w-7">
                </div>

                <button type="submit"
                    class="block bg-blue-500 hover:bg-blue-600 rounded-md p-3 text-white font-bold min-w-24 mt-7
            md:w-1/2 mx-auto">
                    Log in
                </button>

            </form>

        </div>
    </div>
@endsection
