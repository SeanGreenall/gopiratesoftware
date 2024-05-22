<x-layout>
    <div>
        <div>
            <x-description-card 
            :title="'Lore'"
            :image_source="'resources/images/heartbound_lore_sketchy.gif'"
            :description="'
            Lore is the main protagonist of Heartbound. A troubled young man who routinely fights off internal turmoil and negative thoughts. 
            His outlook can alter how he perceives both communication from others and the physical world around him. 
            Together with his faithful companion Baron, Lore manages to make it through each day. 
            Lore has an incredibly bad habit of never cleaning up his socks and they can be found nearly everywhere.
            '" 
            :description_2="'
            
            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Baron'"
            :image_source="'resources/images/heartbound_lore_baron.png'"
            :description="'
            Baron is Lore\'s dog, guardian, and best friend. He overflows with happy-go-lucky positivity in every situation and always knows just what to do. 
            This helps to balance out Lores innate negativity and unease. Baron believes his only purpose is to make Lores life fun, engaging, and meaningful. 
            Because of their reliance on one another the duo are essentially inseperable.
            '" 
            :description_2="'
            
            '"
            />
        </div>
        <div class="flex justify-center">
            <img src="{{ Vite::asset('resources/images/heartbound_heart.png') }}" alt="An image of the Heart Bound logo" class="w-14">
        </div>
        <div>
            <x-description-card 
            :title="'Binder'"
            :image_source="'resources/images/heartbound_binder.png'"
            :description="'
            A mysterious old man who lives deep in the forest. Binder posseses immense strength of will and is incredibly stubborn. 
            His home serves as a makeshift library with tomes littering the walls and floor haphazardly. 
            Binder knows a lot more than he lets on but he prefers to allow others the pleasure of discovering things for themselves. 
            Binder has an intense addiction to apples but will not admit this fact to any living soul.
            '"
            :description_2="'

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