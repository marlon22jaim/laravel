<x-layouts.app title="Blog" metaDescription="Descripcion Blog">

    <h1>Blog</h1>
    <a href="{{ route('posts.create') }}">Create new post</a>
    @foreach ($posts as $post)
        <h2>
            <a href="{{ route('posts.show', $post->id) }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
</x-layouts.app>
