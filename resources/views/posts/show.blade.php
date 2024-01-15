<x-app-layout>
    <div class="max-w-5xl mx-auto py-6 px-2">
        
        <h1 class="text-3xl">{{ $post->title }}</h1>
        <span class="text-sm text-gray-600">
            {{ $post->user->name }}
        </span>

        <div class="prose mt-6">
            {{ $post->body}}
        </div>

        <div class="mt-12">
            <h2 id="comments" class="text-2xl font-semibold">Comments</h2>

            <ul class="divide-y mt-4">
                @foreach($comments as $comment)
                <li class="py-4 px-2">
                    <p class="text-xl"> {{ $comment->body }} </p>
                    <span class="text-s, text-gray-600">
                        {{ $comment->user->name }}
                    </span>
                </li>
                @endforeach
            </ul>
        </div>
    
    </div>
</x-app-layout>