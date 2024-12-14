<div class="flex justify-between items-center">
    <button wire:click="scrollLeft">
        @svg('ionicon-arrow-back-circle-outline', 'w-20, h-20')
    </button>
    <div class="{{ $cardIndex === 0 ? 'selected' : '' }} border-blue-800 border">
        <p>Review Card N1</p>
    </div>
    <div class="{{ $cardIndex === 1 ? 'selected' : '' }} border-blue-800 border">
        <p>Review Card N2</p>
    </div>
    <div class="{{ $cardIndex === 2 ? 'selected' : '' }} border-blue-800 border">
        <p>Review Card N3</p>
    </div>
    <div class="{{ $cardIndex === 3 ? 'selected' : '' }} border-blue-800 border">
        <p>Review Card N4</p>
    </div>
    <button wire:click="scrollRight">
        @svg('ionicon-arrow-forward-circle-outline', 'w-20, h-20')
    </button>
</div>

{{--
TODO
we need to have one card in the middle focused and enlarged a bit
the other two will stay by sides and gonna be a little smaller
when we click on right the centered card will smothly transition to left
get a bit smaller and the one on right will move to center and get enlarged

--}}
