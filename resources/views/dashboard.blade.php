@extends('layouts.app')

@section('content')
    @if (session('flash_message'))
        <div class="alert alert-info" role="alert">
            <strong>{{ session('flash_message') }}</strong>
        </div>
    @endif
    <div class="flex justify-center" id="post">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            dashboard
        </div>
    </div>
@endsection
