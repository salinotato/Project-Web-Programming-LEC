@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
    <section class="p-16 flex flex-col items-center">
        <div class="flex flex-col justify-center items-center space-y-4">
            <p class="text-orange-900 text-xl">Our Product</p>
            <h1 class="font-bold text-4xl">Here Is What We Have For You</h1>
            <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatibus nemo voluptatum error explicabo iusto laudantium. Quia omnis sint dicta, quae quos nesciunt consequatur quis minima temporibus debitis cupiditate velit!</p>
        </div>
    </section>

    <div class="px-12 flex flex-wrap w-full justify-evenly py-8 rounded-md">
        @foreach ($Food as $f)
        <a href="{{ route('productdetail', $f->ProductID) }}" class="w-1/4 mx-8 shadow-sm border bg-white rounded-md mb-8">
            <img class="w-full h-52 bg-cover" src={{ asset('image/products/' . $f->ProductImage) }} alt="Product Image" width="400px" height="150px">
            <div class="flex flex-col p-4">
                <h5 class="text-xl">{{ $f->ProductName }}</h5>
                <h5 class="text-md text-gray-500">{{ $f->ProductPrice }}</h5>
            </div>
        </a>
        @endforeach
    </div>
    @include('layouts.partials.contactDetail');
@endsection