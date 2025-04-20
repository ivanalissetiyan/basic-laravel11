<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }}" class="href">
                <h1 class="mb-1 text-3xl tracking-tight font-bol text-gray-900 hover:underline">{{ $post['title'] }}</h1>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">Nama : {{ $post['author'] }} | 19 April 2025</a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 150) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
