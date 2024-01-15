<x-app-layout>
    <div class="max-w-5xl mx-auto py">
        <ul class="divide-y">
            @foreach($posts as $post)
            <li class="py-4 px-2">
                <a href="{{ route('posts.show', $post) }}" class="text-xl font-semibold block" >{{ $post->title}}</a>
                <span class="text-s, text-gray-600">
                    {{ $post->user->name }}
                </span>
            </li>
            @endforeach
        </ul>

    <div>   
        {{ $posts->links()}}
    </div>

    </div>
</x-app-layout>