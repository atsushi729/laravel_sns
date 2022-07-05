@extends('layouts.app')

@section('content')
    <div class="flex justify-center" id="post">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                <div class="form">
                <div class="title">Welcome</div>
                <div class="subtitle">Please login by filling email and password!</div>
                @csrf
                    <div class="input-container ic1">
                      <input id="email" class="input" type="text" placeholder=" " name="email" value="{{ old('email') }}"/>
                      <div class="cut"></div>
                      <label for="email" class="placeholder" class="sr-only">Email</label>
                      @error('email')
                        <div class="error_message">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="input-container ic1">
                      <input id="password" class="input" type="password" placeholder=" " name="password" />
                      <div class="cut cut-short"></div>
                      <label for="password" class="placeholder" class="sr-only">Password</label>
                       @error('password')
                         <div class="error_message">
                           {{ $message }}
                         </div>
                       @enderror
                    </div>

                    <div class="mb-4" >
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" class="mr-2">
                            <label for="remember" id="checkbox">Remember me</label>
                        </div>
                    </div>

                    </div>
                    <button type="submit" class="submit" id="button">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection

