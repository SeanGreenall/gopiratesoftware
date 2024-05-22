<x-layout>
    <section class="pt-20 pb-20 text-white">
        <div class="text-center">
            <h1 class="text-xl pb-2 pt-2">Pirate Software</h1>
            <p>Pirate Software is an independent games studio based in the United States.</p>
            <p>We develop and publish our own games the way we want them to be.</p>
            <p>You can learn about a few of our core members below.</p>
        </div>

        <div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-10">
                <div>
                    <div class="text-center">
                        <h1 class="text-xl pb-2 pt-2">Jason Thor Hall</h1>
                        <h2 class="text-lg pb-2 pt-2">Game Director</h2>
                        <p>Founded Pirate Software to follow his longstanding dream of building an indie games company.</p>
                        <p>Thor operates as a programmer, game designer, and writer on the team.</p>
                        <p>His body is composed of 98% silver doritos and puns.</p>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="">
                        <img src="{{ Vite::asset('resources/images/pirate_team.gif') }}" alt="An image of the Champions of Breakfast logo" class="w-300 object-cover">
                    </a>
                </div>
                <div>
                    <div class="text-center">
                        <h1 class="text-xl pb-2 pt-2">Bradie Shaye Rehmel</h1>
                        <h2 class="text-lg pb-2 pt-2">Lead Artist</h2>
                        <p>Lord of the pixel and the king of hams.</p>
                        <p>Shaye is our masterful Lead Artist and he reigns supreme over all assets on our projects.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center pt-10">
                <div class="text-center">
                    <h1 class="text-xl pb-2 pt-2">Stijn Van Wakeren</h1>
                    <h2 class="text-lg pb-2 pt-2">Composer and Sound Designer</h2>
                    <p>Legend has it they once ate an entire record and now can't stop making tunes.</p>
                    <p>Doesn't know we put a mic in their house, that's legal right?</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>