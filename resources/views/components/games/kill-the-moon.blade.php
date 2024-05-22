<x-layout>
    <div>
        <div>
            <x-description-card 
            :title="''"
            :image_source="'resources/images/ktm_title.png'"
            :description="'
            Kill The Moon is a fast paced shoot em\' up roguelite dungeon runner. Power up your space shotgun, strap a telly to your head, and get to saving what\'s left of Earth. Or don\'t. 
            Do whatever, it\'s your holographic apocalypse.
            '" 
            :description_2="'
            
            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/ktm_planet.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Characters'"
            :image_source="'resources/images/ktm_telly.png'"
            :description="'
            The moon is haunted by fallen past heroes. That\'s right, haunted. Get out there and get their parts back. Might need to really hunt for them though. 
            Some of them ate it in pretty messed up ways. Maybe one of these worthless rat mechanics can get them running and gunning again.
            '" 
            :description_2="'
            
            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/ktm_planet.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Enemies'"
            :image_source="'resources/images/ktm_dino.gif'"
            :description="'
            There\'s a ton of horrors ready to rip you to shreds out there on the moon. 
            It\'s bad out there, kid. Real bad. Just shoot everything that moves until it stops moving. 
            Then shoot it again just to make sure.
            '"
            :description_2="'

            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/ktm_planet.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Platforming'"
            :image_source="'resources/images/ktm_jump.gif'"
            :description="'
            Lots of stuff to avoid out on the moon. You\'ll have to be quick on your feet... jetpack... tentacles. 
            You get the idea. Just try not to die to traps. It\'s embarassing. I\'d be embarassed.
            '"
            :description_2="'

            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/ktm_planet.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div class="flex justify-center container mx-auto py-10">
            <div class="text-center">
                <h2 class="text-3xl font-bold pb-10">Live Twitch DevStream</h2>
                <x-twitch-stream></x-twitch-stream>
            </div>
        </div>
    </div>
</x-layout>