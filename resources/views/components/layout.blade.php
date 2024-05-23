<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pirate Software</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-white">
    <div class="relative block max-w-[1200px] m-auto">
        <nav class="py-4 bg-black opacity-75 text-white font-mono">
            <div class="flex justify-evenly items-center">
                <div class="space-x-12 font-bold text-lg">
                    <a class="hover:border-b-2 hover:transition duration-150 ease-in-out" href="/crew">CREW</a>
                    <a class="hover:border-b-2 hover:transition duration-150 ease-in-out" href="/games">GAMES</a>
                    <a class="hover:border-b-2 hover:transition duration-150 ease-in-out" href="/support">SUPPORT</a>
                </div>
                <div class="w-[200px]">
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/pirate_text_logo.png') }}" alt="">
                    </a>
                </div>
                <div class="space-x-12 font-bold text-lg">
                    <a class="hover:border-b-2 hover:transition duration-150 ease-in-out" href="">NEWS</a>
                    <a class="hover:border-b-2 hover:transition duration-150 ease-in-out" href="https://discord.com/invite/piratesoftware">DISCORD</a>
                    <a class="hover:border-b-2 hover:transition duration-150 ease-in-out" href="https://piratesoftware.bigcartel.com/products">MERCH</a>
                </div>
            </div>
        </nav>
    </div>
    <main class="px-10">
        {{ $slot }}
    </main>
    <footer>
        <div class="flex justify-center py-20">
            <a href="https://www.youtube.com/@PirateSoftware">
                <img src="{{ Vite::asset('resources/images/heartbound_youtube_white.png') }}" alt="" class="w-12">
            </a>
            <a href="https://www.twitch.tv/piratesoftware">
                <img src="{{ Vite::asset('resources/images/heartbound_twitch_white.png') }}" alt="" class="w-12 logo-glow ease-in-out duration-1000">
            </a>
            <a href="https://x.com/PirateSoftware">
                <img src="{{ Vite::asset('resources/images/heartbound_twitter_white.png') }}" alt="" class="w-12 logo-glow ease-in-out duration-1000">
            </a>
            <a href="https://discord.gg/piratesoftware">
                <img src="{{ Vite::asset('resources/images/heartbound_discord_white.png') }}" alt="" class="w-12 logo-glow ease-in-out duration-1000">
            </a>
        </div>
    </footer>
</body>
</html>