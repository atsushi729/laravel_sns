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
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach
                {{ $posts->links() }}
            @else
                <p>There are no posts</p>
            @endif
        </div>
    </div>
@endsection
