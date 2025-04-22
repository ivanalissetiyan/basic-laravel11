<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>


    <article class="py-8 max-w-screen-md border-b">
        <h1 class="mb-1 text-3xl tracking-tight font-bol text-gray-900">{{ $post['title'] }}</h1>
        <div class="text-base text-gray-500">
            <a href="#">Nama : {{ $post['author'] }} |
                {{ $post->created_at->translatedFormat('d F Y') }}
                | {{ $post->created_at->diffForHumans() }}</a>
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Read More </a>
    </article>

</x-layout>
