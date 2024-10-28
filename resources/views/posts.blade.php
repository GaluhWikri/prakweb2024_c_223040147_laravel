<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    @foreach( $posts as $post )
    <article class="py-14 max-w-screen-md border-gray-300">
        <a href="/posts/{{ $post ['slug'] }}" class="hover:underline">
        <h2 class="mb-1.5 text-3xl tracking-tight font-bold text-gray-900"> {{ $post ['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="">{{ $post ['author'] }}</a> | 05 November 2025
        </div >
        <p class="my-4 font-light"> {{  Str::limit($post ['body'], 200) }}</p>
        <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach
</x-layout>
