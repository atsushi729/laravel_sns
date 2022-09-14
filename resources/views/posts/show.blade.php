@extends('layouts.app')

@section('content')
{{--    this page is used when notify email--}}
    <div class="flex justify-center" id="post">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <x-post :post="$post" />
        </div>
    </div>
@endsection
