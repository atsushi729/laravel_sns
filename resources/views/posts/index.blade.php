@extends('layouts.app')

@section('content')
    <div class="flex justify-center" id="post">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{ route('posts') }}" method="post" class="mb-4">
                @csrf
                <div class="mb-4">
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 @error('body') border-red-500 @enderror"
                    placeholder="Post something"></textarea>

                    @error('body')
                        <div class="error_message">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="submit" id="button">Post</button>
                </div>
            </form>

            @if ($posts->count())
                @foreach($posts as $post)
                    <div class="mb-4" id="posted-info">
                        <a href="" class="name" >{{ $post->user->name }}</a><span class="date">{{ $post->created_at->diffForHumans() }}</span>

                        <p class="body-text">{{ $post->body }}</p>

                        @can('delete', $post)
                            <form action="{{ route('posts.destroy', $post) }}" method="post" id="delete_reaction">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-blue-500">Delete</button>
                            </form>
                        @endcan

                        <div class="flex items-center">
                            @auth
                                @if (!$post->likedBy(auth()->user()))
                                    <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-2" id="like_reaction">
                                        @csrf
                                        <button type="submit" class="text-blue-500">Like</button>
                                    </form>
                                @else
                                    <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-2" id="unlike_reaction">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-blue-500">Unlike</button>
                                    </form>
                                @endif
                            @endauth
                            <span>{{ $post->likes()->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
                        </div>
                    </div>
                @endforeach
                {{ $posts->links() }}

            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection
