<x-app-layout>
    <div>
        <section class="text-center pt-6" id="entry">
            <div class="mt-10 text-center" >
                <h1>We are offering a solution to your problems</h1>
            </div>
        </section>

        {{--    TODO use css to put icon inside input field    --}}
        <section class="text-center pt-6">
            <div class="flex items-center justify-items-center justify-center">
                <input name="searchbar" class="rounded-xl bg-blue-700/5 border-blue-800/25 px-5 py-4 w-full max-w-2xl" placeholder="Search..."/>
                <button><x-emblem-search-circle-fill class="w-10 h-10" /></button>
            </div>
        </section>

        {{--  TODO showcase offered services  --}}
        {{--  TODO render reviews  --}}
        {{--  TODO last words like why this website particularly  --}}
        {{--  TODO footer  --}}
    </div>
</x-app-layout>
