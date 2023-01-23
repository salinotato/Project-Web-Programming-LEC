@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
    <section class="w-full flex justify-center py-16">
        <form action="" method="POST" class="flex flex-col px-16 w-1/2 justify-center space-y-4">
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
            <button class="bg-orange-300 py-2 px-4 text-xl rounded-md self-center mt-10 hover:bg-orange-900 hover:text-white" type="submit">Change Profile Data</button>
        </form>
    </section>
@endsection