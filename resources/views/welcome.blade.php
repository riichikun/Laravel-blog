<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gamelife</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=bruno-ace:400|chakra-petch:400,600,700" rel="stylesheet" />
        @vite('resources/css/hamburgers.css')
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <header class="fixed flex justify-between items-center font-['Bruno_Ace'] w-[100%] h-[35px] md:h-[60px] px-[10px] bg-gradient-to-r from-indigo-400 via-indigo-300 to-indigo-200 text-[#fff]">
                    <button class="hamburger hamburger--emphatic sm:hidden flex items-center" type="button">
                        <span class="hamburger-box ">
                            <span class="hamburger-inner bg-[#fff] before:bg-[#fff] after:bg-[#fff]"></span>
                        </span>
                    </button>
                <nav class='hidden sm:flex gap-[15px]  w-fit'>
                    <a href="" class='drop-shadow-[1px_1px_8px_rgba(255,255,255,0.5)]'>Home</a>
                    <a href="" class='drop-shadow-[1px_1px_8px_rgba(255,255,255,0.5)]'>News</a>
                    <a href="" class='drop-shadow-[1px_1px_8px_rgba(255,255,255,0.5)]'>Posts</a>
                    <a href="" class='drop-shadow-[1px_1px_8px_rgba(255,255,255,0.5)]'>Reviews</a>
                    <a href="" class='drop-shadow-[1px_1px_8px_rgba(255,255,255,0.5)]'>About us</a>
                </nav>
                <div class="user__block flex gap-[10px] w-fit text-[12px] sm:text-[16px]">
                    @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="drop-shadow-[1px_1px_8px_rgba(0,0,0,0.5)]">User</a>
                            @else
                                <a href="{{ route('login') }}" class="drop-shadow-[1px_1px_8px_rgba(0,0,0,0.5)]">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="drop-shadow-[1px_1px_8px_rgba(0,0,0,0.5)]">Register</a>
                                @endif
                            @endauth
                    @endif
                </div>
        </header>
        <main class="flex flex-col items-center min-h-[600px] pt-[110px]  md:pt-[130px] font-['Chakra_Petch']">
        @foreach($post as $post)
        <div class='w-[90%] sm:w-[50%] pb-[15px] mb-[200px] border-solid border-b-2 border-[#000] '>
                <img src="{{ asset('img/' . $post->image) }}" alt="" class='w-[100%] h-[200px] mb-[30px] border-solid border-[1px] border-[#000] rounded-lg object-cover'>
                <p class="mb-[15px] text-[12px] text-indigo-400">{{substr($post->created_at, 0, 10)}}</p>
                <h3 class="mb-[15px] text-center font-[700] text-[20px]">{{$post->title}}</h3>
                <p class='text-center mb-[60px] text-[14px]'>{{$post->description}}</p>
            </div>
        @endforeach    
        </main>
        <footer class="flex flex-col items-center pt-[90px] bg-gradient-to-l from-indigo-400 to-indigo-300 font-['Bruno_Ace'] text-[#fff]">
            <h2 class='font-[600] drop-shadow-[1px_1px_8px_rgba(0,0,0,0.5)]'>Join us!</h2>
        </footer>
    </body>
    <script>
        // Look for .hamburger
        var hamburger = document.querySelector(".hamburger");
        // On click
        hamburger.addEventListener("click", function() {
            // Toggle class "is-active"
            hamburger.classList.toggle("is-active");
            // Do something else, like open/close menu
        });
    </script>
</html>
