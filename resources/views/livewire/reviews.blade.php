<div x-data="carousel({ totalCards: 4 })" class="flex justify-center items-center overflow-hidden relative w-full">
    <!-- Left Button -->
    <button @click="scrollLeft" class="absolute left-0 z-10">
        @svg('ionicon-arrow-back-circle-outline', 'w-20 h-20')
    </button>

    <!-- Cards -->
    <div class="flex items-center w-full justify-center relative h-64 bg-gray-100">
        <template x-for="index in [...Array(totalCards).keys()]" :key="index">
            <div class="transition-all duration-500 ease-in-out absolute w-40 h-40 bg-blue-300 border-2 border-black flex items-center justify-center text-center text-black text-xl font-bold"
                 :class="{
                     'translate-x-[-120%] opacity-100 z-10': index === leftIndex,
                     'translate-x-[0%] scale-125 z-20 opacity-100': index === currentIndex,
                     'translate-x-[120%] opacity-80 scale-100 z-10': index === rightIndex,
                     'opacity-0 z-0': index !== leftIndex && index !== currentIndex && index !== rightIndex
                 }"
                 x-text="'Review Card N' + (index + 1)">
            </div>
        </template>
    </div>

    <!-- Right Button -->
    <button @click="scrollRight" class="absolute right-0 z-10">
        @svg('ionicon-arrow-forward-circle-outline', 'w-20 h-20')
    </button>
</div>


<script>
    function carousel({ totalCards }) {
        return {
            totalCards,
            currentIndex: 0,
            get leftIndex() {
                return (this.currentIndex - 1 + this.totalCards) % this.totalCards;
            },
            get rightIndex() {
                return (this.currentIndex + 1) % this.totalCards;
            },
            scrollLeft() {
                this.currentIndex = this.leftIndex; // Move left
            },
            scrollRight() {
                this.currentIndex = this.rightIndex; // Move right
            },
        };
    }
</script>

