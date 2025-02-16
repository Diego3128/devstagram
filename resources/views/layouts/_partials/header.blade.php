<header class="p-4 border-b shadow bg-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-black">Devstagram</h1>

        <nav class="flex gap-2 items-center">

            @auth
                <div class="flex justify-center items-baseline gap-2">
                    <a class="font-bold capitalize text-sm text-gray-500" href="{{route('posts.index', ['user' => Auth::user()->username])}}">Hi!
                        <span class="text-gray-600">
                            {{ Auth::user()->username }}
                        </span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <button 
                        class="font-bold uppercase text-xs text-gray-500" type="submit" >
                            Log out
                        </button>
                    </form>
                @else
                    <a class="font-bold uppercase text-sm text-gray-500" href="{{ route('login') }}">Log in</a>
                    <a class="font-bold uppercase text-sm text-gray-500" href="{{ route('register') }}">Register</a>
                </div>
            @endauth


        </nav>
    </div>
</header>
