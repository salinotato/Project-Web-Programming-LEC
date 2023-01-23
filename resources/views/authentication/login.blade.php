@extends('layouts.mainlayout')

@include('layouts.partials.ads')

@section('content')
    </section>
    <section id="login-section" class="flex flex-col px-16 py-16">
        <h1 class="text-orange-900 text-6xl text-center font-bold">LOG IN</h1>
        <form action="" method="post" class="w-1/2 flex flex-col space-y-4 self-center">
            @csrf
            <label for="email" class="mt-10 text-orange-900 font-bold text-2xl">Email:</label>
            <input class="border p-4" type="email" name="email" required autofocus value="" placeholder="Email">
            <label for="password" class="text-orange-900 font-bold text-2xl">Password:</label>
            <input class="border p-4" type="password" name="password" id="floatingPassword" placeholder="Password">
            <button class="w-24 bg-orange-300 py-2 px-4 text-xl rounded-md self-center mt-10 hover:bg-orange-900 hover:text-white" type="submit">Login</button>
            <h5 class="text-gray-600">Not registered yet? <span><a href="{{ route('index_register') }}" class="underline text-orange-900">Register now!</a></span></h5>
            <div class="mb-2">
                @if($errors->any())
                <p class="text-danger text-red-600">{{$errors->first()}}</p>
                @endif
            </div>
        </form>
    </section>
@endsection
