@extends('layouts.app')

@section('title')
    Sign up in devstagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:items-center ml-7 mr-7 mb-44 relative pt-40 md:pt-6 md:pr-5">

        <div class="md:w-5/12">
            <img src="{{ asset('img/register.jpg') }}" alt="register picture"
                class=" w-full rounded-md shadow-lg object-cover absolute top-0 left-0 -z-10 md:h-[115%] m-h[400px]">
        </div>

        <div class="md:w-3/4 bg-white shadow-lg rounded-lg p-6 max-w-md mx-auto md:mx-0">
            <form method="POST" action="{{ route('register') }}" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="name" class="mb-2 text-gray-500 capitalize font-bold">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name" value="{{ @old('name') }}"
                        class="rounded-lg border p-3 w-full @error('name') border-red-500  @enderror ">
                    @error('name')
                        <p class="bg-red-500 text-gray-50 rounded-md p-1 mx-auto text-center w-11/12 relative -mt-2 ">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="mb-2 text-gray-500 capitalize font-bold">username</label>
                    <input type="text" id="username" name="username" placeholder="Your user name"
                        value="{{ @old('username') }}"
                        class="rounded-lg border p-3 w-full @error('username') border-red-500  @enderror">
                    @error('username')
                        <p class="bg-red-500 text-gray-50 rounded-md p-1 mx-auto text-center w-11/12 relative -mt-2 ">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
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
                <div class="mb-3">
                    <label for="password_confirmation" class="mb-2 text-gray-500 capitalize font-bold">password
                        confirmation</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat your password"
                        class="rounded-lg border p-3 w-full @error('password_confirmation') border-red-500  @enderror">
                    @error('password')
                        <p class="bg-red-500 text-gray-50 rounded-md p-1 mx-auto text-center w-11/12 relative -mt-2 ">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button type="submit"
                    class="block bg-blue-500 hover:bg-blue-600 rounded-md p-3 text-white font-bold min-w-24 mt-7
            md:w-1/2 mx-auto">
                    Create
                </button>

            </form>

        </div>
    </div>
@endsection
