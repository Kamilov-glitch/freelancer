<x-app-layout>
    <div>
        <section class="text-center pt-6" id="entry">
            <div class="mt-10 text-center" >
                <h1>We are offering a solution to your problems</h1>
            </div>
        </section>

        {{--    Have div act as one, with button seemingly being part of the input field but not really    --}}
        <section class="text-center pt-6" id="searchsection">
            <div class="flex items-center justify-items-center justify-center">
                <input name="searchbar" class="rounded-xl bg-blue-700/5 border-blue-800/25 px-5 py-4 w-full max-w-2xl" placeholder="Search..."/>
                <button><x-emblem-search-circle-fill class="w-10 h-10" /></button>
            </div>
        </section>

        {{--  need to style them so that they are same size and stick together  --}}
        <section id="offeredservices">
            <div class="grid grid-cols-3 mx-auto justify-items-center pt-10 gap-y-2">
                <x-button class="px-2 mx-0">Development</x-button>
                <x-button class="px-2 mx-0">Construction</x-button>
                <x-button class="px-2 mx-0">Design</x-button>
                <x-button>Music</x-button>
            </div>
        </section>
        {{--  TODO render reviews  --}}
        <section  class="text-center mt-10">
            <livewire:reviews />
        </section>
        {{--  TODO last words like why this website particularly  --}}
        {{--  TODO footer  --}}
    </div>
</x-app-layout>
