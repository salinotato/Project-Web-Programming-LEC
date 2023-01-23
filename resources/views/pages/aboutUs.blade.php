@extends('layouts.mainlayout')

@section('title', 'About Us')

@include('layouts.partials.navbar')

@section('content')
    <section id="AboutUs">
        {{-- Cards --}}
        <div class="px-16 flex w-full py-8 rounded-md bg-orange-300">
            <div class="flex items-center">
                <img class="w-full h-96" src="{{ asset('image/others/aboutus-image.png') }}" class=" bg-cover" alt="Product Image" width="600px" height="800px">
                <div class="flex flex-col p-4 space-y-2">
                    <h5 class="text-xl text-orange-900">About Us</h5>
                    <h5 class="text-4xl text-black font-bold">Get to know more about us</h5>
                    <h5 class="text-xl text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Amet gravida quis duis tellus ultrices donec sollicitudin nisl.</h5>
                    <h5 class="text-md text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit. Amet gravida quis duis tellus ultrices donec sollicitudin nisl. Lorem 
                    ipsum dolor sit amet, consectetur adipiscing elit. Amet gravida quis duis tellus ultrices 
                    donec sollicitudin nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit0
                    . Amet gravida quis duis tellus ultrices donec sollicitudin nisl. Lorem ipsum dolor sit 
                    amet, consectetur adipiscing elit. Amet gravida quis duis tellus ultrices donec sollicitudin 
                    nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet gravida quis duis tellus 
                    ultrices donec sollicitudin nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Amet gravida quis duis tellus ultrices donec sollicitudin nisl.
                    Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Amet gravida quis duis tellus ultrices donec sollicitudin nisl. Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit. Amet gravida quis duis tellus ultrices
                    donec sollicitudin nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet 
                    gravida quis duis tellus ultrices donec sollicitudin nisl. Lorem ipsum dolor sit amet, 
                    consectetur adipiscing elit. Amet gravida quis duis tellus ultrices donec sollicitudin nisl.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet gravida quis duis tellus
                    ultrices donec sollicitudin nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Amet gravida quis duis tellus ultrices donec sollicitudin nisl.  
                    </h5>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials.productSection')
@endsection