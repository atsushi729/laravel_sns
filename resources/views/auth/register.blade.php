@extends('layouts.app')

@section('content')
    <div class="flex justify-center" id="post">
        <div class="w-6/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                <div class="form">
                <div class="title">Welcome</div>
                <div class="subtitle">Let's create your account!</div>
                @csrf
                    <div class="input-container ic1">
                      <input id="name" class="input" type="text" placeholder=" " name="name" value="{{ old('name') }}"/>
                      <div class="cut"></div>
                      <label for="name" class="placeholder" class="sr-only">Name</label>

                      @error('name')
                        <div class="error_message">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

                    <div class="input-container ic1">
                      <input id="username" class="input" type="text" placeholder=" " name="username" value="{{ old('username') }}"/>
                      <div class="cut"></div>
                      <label for="username" class="placeholder" class="sr-only">Username</label>

                      @error('username')
                        <div class="error_message">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>

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

                    <div class="input-container ic1">
                      <input id="password_confirmation" class="input" type="password" placeholder=" " name="password_confirmation"/>
                      <div class="cut cut-short"></div>
                      <label for="password_confirmation" class="placeholder" class="sr-only">Password confirmation</label>


                      @error('password_confirmation')
                        <div class="error_message">
                            {{ $message }}
                        </div>
                      @enderror
                    </div>
                    <button type="submit" class="submit" id="button">submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

