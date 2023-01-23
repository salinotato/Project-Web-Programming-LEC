@extends('layouts.mainlayout')

@include('layouts.partials.ads')

@section('content')
    {{-- Login Form --}}
    <section id="register-section" class="flex flex-col px-16 py-16">
        <h1 class="text-orange-900 text-6xl text-center font-bold">Register</h1>        
        <form action="" method="post" class="w-1/2 flex flex-col space-y-4 self-center">
            @csrf
            <label for="name" class="text-orange-900 font-bold text-xl">Name:</label>
            <input class="border p-4" type="text" name="Name" required autofocus value="" placeholder="Name">
            <label for="address" class="text-orange-900 font-bold text-xl">Address:</label>
            <input class="border p-4" type="text" name="Address" required autofocus value="" placeholder="Address">
            <label for="phone" class="text-orange-900 font-bold text-xl">Phone:</label>
            <input class="border p-4" type="number" name="Phone" required autofocus value="" placeholder="Phone">
            <label for="email" class="text-orange-900 font-bold text-xl">Email:</label>
            <input class="border p-4" type="email" name="Email" required autofocus value="" placeholder="Email">
            <label for="password" class="text-orange-900 font-bold text-xl">Password:</label>
            <input class="border p-4" type="password" name="Password" id="floatingPassword" placeholder="Password">
            
            <button class="w-32 bg-orange-300 py-2 px-4 text-xl rounded-md self-center mt-10 hover:bg-orange-900 hover:text-white" type="submit">Register</button>
        </form>
        
        <div class="mb-2">
            @if($errors->any())
        <p class="text-danger">{{$errors->first()}}</p>
            @endif
        </div>
    </section>
@endsection