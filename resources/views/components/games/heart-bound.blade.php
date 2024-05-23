<x-layout>
    <div>
        <div>
            <x-description-card 
            :title="''"
            :image_source="'resources/images/heartbound_card_image.png'"
            :description="'
            Heartbound has been a project of passion for me over the last year and the main reason I chose to go indie in the first place.
            While working on Heartbound I find myself thinking back and replaying a lot of the classic RPGs from my childhood.
            Things like Secret of Mana, Illusion of Gaia, The Mother Series, Secret of Evermore, Super Mario: RPG, and many others.
            To me all of these add up to a single burning question. What made these and other role-playing games fun for me?
            I set out to list a set of mechanics that I found compelling throughout my life and then cut things that never seemed to fit.
            '" 
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Items and Consumables'"
            :image_source="'resources/images/heartbound_items.png'"
            :description="'
            Many times I find that I never use consumables in the single player games that I play or I use them very early on and never again.
            For instance I might use a Potion at the beginning of Pokemon generally in the first fight but then never again for the rest of the game.
            The majority of the time I felt like I should stockpile these items and never really got a lot of fun out of them.
            A stark contrast to this would be powers such as the Estus Flasks in Dark Souls. This is a limited use power that heals you and recharges at each bonfire.
            In contrast to classic consumables Estus Flasks feel like a missed opportunity when you don’t use them because you know that just around the corner you will get them back.
            With this in mind consumables have been replaced with what I feel are more interesting mechanics.
            Powers that can trigger in combat under certain conditions or from investigating objects in the world.
            The world helps you along and you help yourself to things you have learned within it.
            '" 
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Exploration and Player Choice'"
            :image_source="'resources/images/heartbound_exploration.png'"
            :description="'
            The common implementation of player choice where you must select dialog options to drive the story has always bothered me.
            I feel like it pushes me into a more completionist kind of mindset where I want to keep multiple saves every time a choice is presented to me. 
            This immediately breaks immersion for me and takes me completely out of the game. Similarly I find that a lot of times exploration mechanics are gamified around achievements 
            or minor cosmetic rewards. While this also scratches my completionist itch I never really feel like it changes the narrative in any way.
            '"
            :description_2="'
            I could choose to forgo exploration in some cases without changing my experience with the game at all. 
            I am designing the world and interactions in Heartbound around avoiding these two scenarios entirely. 
            Every time you interact with an object, talk to an NPC, forget to turn off a light-switch, take out the trash, 
            or disregard a sparkly bush the game remembers this and will change subtly for all further interactions. 
            The greatest part about this design is that it already works and is in the current builds of the game. 
            Both minor and major differences are going to pop up throughout the game and give the community something to share with one another. 
            Everything you do matters no matter what kind of player you are or choose to be.
            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Secrets'"
            :image_source="'resources/images/heartbound_secrets.png'"
            :description="'
            The world is not always as it seems in Heartbound. Subtle tears in the fabric of reality can give way to rabbit holes filled with dreams, terrors, or unknown histories. 
            Over the last several years I have spent a lot of my time both building and solving crypto puzzles with some of my friends from DEFCON. 
            Heartbound will be filled with hidden content in every way I can find to hide it. 
            Every public announcement, character, or even the game files themselves may contain another piece of the puzzle.
            '" 
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Combat'"
            :image_source="'resources/images/heartbound_combat.png'"
            :description="'
            I have always been really split on combat mechanics throughout the years. 
            On one hand I love the stat-driven choices you have to make when building a character or team in a classic JRPG or Dungeons and Dragons. 
            At the same time I feel like the more stat-centric and experience heavy a game becomes the more it feels like I just need to grind experience instead of enjoy the world I am a part of. 
            Nothing ever felt right so I want to try something that I have never seen before.
            '" 
            :description_2="'
            With Heartbound I am taking a very massive departure from general RPG mechanics and trying something that I feel is entirely new. 
            The only statistic in Heartbound is Lore’s health and the only progression is your skill as a player. All of combat situations involve mini-games based on the enemy you are currently fighting.  
            You can resolve combat situations in a number of different story changing ways depending on how you handle yourself in those mini-games. For instance, 
            let us say that you are fighting a nasty dirty sock. During this fight the sock fades into the background noise and a wall appears with five socks on it. 
            The word “PEEL!” flashes across the screen, a laundry hamper appears at the bottom, and you have a few seconds to peel all of the socks dropping them on the floor or in the hamper.
            For every sock in the hamper you progress in a positive way, every sock on the floor a negative way, and for every sock still on the wall you take damage. 
            For me I feel like this kind of combat gives me a really neat area to play in. 
            I can create very arcade style situations where you can feel rewarded for skilled play and still have a major impact on the story.
            '" 
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div class="flex justify-center container mx-auto py-10">
            <div class="text-center">
                <h2 class="text-3xl font-bold pb-10">Live Twitch DevStream</h2>
                <x-twitch-stream></x-twitch-stream>
            </div>
        </div>
    </div>
</x-layout>