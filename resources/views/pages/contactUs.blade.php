@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
    <section id="AboutUs" class="px-32 bg-white py-16">
        <div class="px-16 w-full py-8 rounded-md bg-orange-300 flex flex-col items-center justify-center">
            <h5 class="text-4xl text-orange-900">Contact Us</h5>
            <form action="" method="post" class="flex space-y-4 w-full">
                @csrf
                <div class="flex flex-col w-1/2 p-4 space-y-4">
                    <label for="name" class="text-orange-900 font-bold text-xl">Name:</label>
                    <input class="border p-4" type="text" name="Name" required autofocus value="" placeholder="Name">
                    <label for="phone" class="text-orange-900 font-bold text-xl">Phone:</label>
                    <input class="border p-4" type="number" name="Phone" required autofocus value="" placeholder="Phone">
                    <label for="email" class="text-orange-900 font-bold text-xl">Email:</label>
                    <input class="border p-4" type="email" name="Email" required autofocus value="" placeholder="Email">
                    <button class="w-52 text-white py-2 px-4 text-xl rounded-xl mt-10 bg-orange-900" type="submit">Send Message</button>
                </div>
                <div class="w-1/2 flex flex-col p-4 space-y-4">
                    <label for="address" class="text-orange-900 font-bold text-xl">Address:</label>
                    <textarea rows="11" cols="50" style="resize: none" placeholder="Your address" class="p-4"></textarea>
                </div>
                
            </form>
        </div>  
    </section>

    @include('layouts.partials.productSection')
    @include('layouts.partials.contactDetail')
@endsection