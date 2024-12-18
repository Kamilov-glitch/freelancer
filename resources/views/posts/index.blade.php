@props(['posts' => []])
<x-app-layout>
    <div>
        @foreach($posts as $post)
            <div class="job-post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->description }}</p>
                <p><strong>Posted by:</strong> {{ $post->user->name }}</p>
            </div>
        @endforeach
    </div>
    <div class="grid grid-cols-3 gap-4 mt-7 px-10">
        <div class="bg-white p-4 shadow rounded-lg">
            <h2 class="text-lg font-semibold">Job Title</h2>
            <p class="text-sm text-gray-500">Job Description</p>
            <p class="text-sm text-gray-500">Posted by: User Name</p>
        </div>
        <div class="bg-white p-4 shadow rounded-lg">
            <h2 class="text-lg font-semibold">Job Title</h2>
            <p class="text-sm text-gray-500">Job Description</p>
            <p class="text-sm text-gray-500">Posted by: User Name</p>
        </div>
        <div class="bg-white p-4 shadow rounded-lg">
            <h2 class="text-lg font-semibold">Job Title</h2>
            <p class="text-sm text-gray-500">Job Description</p>
            <p class="text-sm text-gray-500">Posted by: User Name</p>
        </div>
</x-app-layout>
