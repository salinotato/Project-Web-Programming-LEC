@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
    <section class="p-16 flex justify-center">
        <div class="flex space-x-4 w-2/3">  
            @foreach($Food as $f)
            <img src={{ asset('image/products/' . $f->ProductImage)}} alt="" class="w-96">
            <div class="flex flex-col space-y-2">
                <h1 class="text-2xl font-bold">{{ $f->ProductName }}</h1>
                <p class="text-gray-400">{{ $f->CityName }}</p>
                <p>{{ $f->ProductDescription }}</p>
                <h5 class="text-md"> Price: <span class="font-bold text-xl  ">{{ $f->ProductPrice }}</span></h5>
                @if (!Auth::check())
                <div class="flex place-self-end">
                    <a class="py-2 px-8 rounded-lg bg-orange-300 hover:bg-orange-900 hover:text-white font-semibold" href="{{ route('login') }}"> LOGIN </a>
                </div>
                @elseif(Auth::check() && Auth::user()->role === 'Admin')
                <div class="flex space-x-4 place-self-end">
                    <button class="rounded-lg bg-orange-300 hover:bg-orange-900 hover:text-white font-semibold py-2 px-4 hover:shadow-lg  ">
                        <a href="{{ Route('editproduct',$f->ProductID) }}">Edit</a>
                    </button>
                    <form action="{{ Route('delete',$f->ProductID) }}" method="POST" class="m-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded-lg bg-orange-300 hover:bg-orange-900 hover:text-white font-semibold py-2 px-4 hover:shadow-lg  ">
                            Delete
                        </button>
                    </form>

                </div>
                @else
                <div class="flex justify-end">
                    <form action="{{ Route('addItemToCart',$f->ProductID) }}" method="POST" class="flex space-x-4">
                        @csrf
                        <div class="flex flex-col items-start">
                            <input name="Quantity" type="number" placeholder="Quantity" class="w-24 m-auto p-2 rounded-md border border-orange-900">
                        </div>
                        <button type="submit" class="place-self-end rounded-lg m-auto bg-orange-300 hover:bg-orange-900 hover:text-white font-semibold py-2 px-4 hover:shadow-lg  ">
                            Add to cart
                        </button>
                    </form>
                </div>
                @endif
                @endforeach 
            </div>
        </div>

    </section>
@endsection
