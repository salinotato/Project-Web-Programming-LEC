@extends('layouts.mainlayout')

@section('title', 'Home')

@include('layouts.partials.navbar')

@include('layouts.partials.ads')

@section('content')

    <section id="product-section">
        <div class="filter-area flex justify-evenly py-4 shadow-md">
            <button class="filter"><img width="75px" src="{{ asset('image/svgs/filter.svg') }}" alt=""></button>
            <button class="bg-black w-32 rounded-lg p-2 text-center text-white">All</button>
            <button class="bg-gray-300 w-32 rounded-lg p-2 text-center">Cake</button>
            <button class="bg-gray-300 w-32 rounded-lg p-2 text-center">Snack</button>
            <button class="bg-gray-300 w-32 rounded-lg p-2 text-center">Accessories</button>
        </div>
        <div class="px-12 flex flex-wrap w-full justify-evenly py-8 rounded-md">
            @foreach ($Food as $f)
            <div class="w-1/4 mx-8 shadow-sm border bg-white rounded-md mb-8">
                <img class="w-full h-52 bg-cover" src={{ asset('image/products/' . $f->ProductImage) }} alt="Product Image" width="400px" height="150px">
                <div class="flex flex-col p-4">
                    <h5 class="text-xl">{{ $f->ProductName }}</h5>
                    <h5 class="text-md text-gray-500">{{ $f->ProductPrice }}</h5>
                </div>
            </div>
            @endforeach
        </div>
        <div class="w-1/4 m-auto">
            {{$Food->links()}}
        </div>
    </section>

    <section class="w-full">
        <div class="flex justify-evenly py-16 space-x-4">
            <div class="w-1/4 flex flex-col justify-center items-center">
                <div class="bg-orange-900 rounded-xl w-1/4 flex justify-center p-4"><img src="{{ asset('image/svgs/quality-product.svg') }}" alt=""></div>
                <h1 class="font-bold text-xl text-center">Quality Product</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, omnis? Iste neque ipsa unde distinctio ea laborum magni incidunt tenetur ex inventore. Nostrum possimus libero fuga omnis repudiandae ducimus vel!</p>
            </div>
            <div class="w-1/4 flex flex-col justify-center items-center">
                <div class="bg-orange-900 rounded-xl w-1/4 flex justify-center p-4"><img src="{{ asset('image/svgs/best-price.svg') }}" alt=""></div>
                <h1 class="font-bold text-xl text-center">Best Price</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, omnis? Iste neque ipsa unde distinctio ea laborum magni incidunt tenetur ex inventore. Nostrum possimus libero fuga omnis repudiandae ducimus vel!</p>
            </div>
            <div class="w-1/4 flex flex-col justify-center items-center">
                <div class="bg-orange-900 rounded-xl w-1/4 flex justify-center p-4"><img src="{{ asset('image/svgs/support.svg') }}" alt=""></div>
                <h1 class="font-bold text-xl text-center">24/7 Support</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, omnis? Iste neque ipsa unde distinctio ea laborum magni incidunt tenetur ex inventore. Nostrum possimus libero fuga omnis repudiandae ducimus vel!</p>
            </div>
        </div>
        
        <div class="py-16 px-16 flex bg-orange-300">
            <div class="w-1/2">
                <img class="w-96 h-64 absolute z-10 " src="{{ asset('image/products/bolu-meranti.png') }}" alt="">
                <img class="w-96 h-64 absolute z-9 left-72 mt-16" src="{{ asset('image/products/bakpia.png') }}" alt="">
            </div>
            <div class="flex flex-col w-1/2 space-y-2">
                <h5 class="text-orange-900">Who we are?</h5>
                <h1 class="font-bold text-4xl">Solusi terbaik dalam mencari oleh-oleh untuk orang tersayang!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, alias. Dolor quo vero soluta dolores dolore porro repellat totam recusandae minima assumenda! Dolore adipisci voluptas necessitatibus tenetur fuga veritatis temporibus!</p>
                <ul class="space-y-2">
                    <li class="text-orange-900 flex align-center"> <div class="mr-2 w-4 h-4 rounded-full bg-orange-900"></div> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="text-orange-900 flex align-center"> <div class="mr-2 w-4 h-4 rounded-full bg-orange-900"></div> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="text-orange-900 flex align-center"> <div class="mr-2 w-4 h-4 rounded-full bg-orange-900"></div> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="text-orange-900 flex align-center"> <div class="mr-2 w-4 h-4 rounded-full bg-orange-900"></div> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li class="text-orange-900 flex align-center"> <div class="mr-2 w-4 h-4 rounded-full bg-orange-900"></div> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>

        <div class="flex p-16 space-x-16">
            <div class="flex flex-col w-1/3 space-y-2">
                <p class="text-orange-900 text-xl">New Arrival</p>
                <h1 class="font-bold text-6xl">New brands who joined us!</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum amet quibusdam error perspiciatis doloremque odio at labore, mollitia tempore inventore! Fuga quos porro, recusandae nulla maiores cupiditate commodi modi inventore!</p>
            </div>
            <div class="w-2/3 flex flex-col space-y-4">
                <div class="flex space-x-4">
                    <div class="w-48 h-48 p-2 bg-orange-900 rounded-lg flex justify-center items-center"><img class="w-36 h-36" src="{{ asset('image/partnerships/cahaya.png') }}" alt=""></div>
                    <div class="w-48 h-48 p-2 bg-orange-900 rounded-lg flex justify-center items-center"><img class="w-36 h-36" src="{{ asset('image/partnerships/joger.png') }}" alt=""></div>
                    <div class="w-48 h-48 p-2 bg-orange-900 rounded-lg flex justify-center items-center"><img class="w-36 h-36" src="{{ asset('image/partnerships/kartika.png') }}" alt=""></div>
                </div>
                <div class="flex space-x-4">
                    <div class="w-48 h-48 p-2 bg-orange-900 rounded-lg flex justify-center items-center"><img class="w-36 h-36" src="{{ asset('image/partnerships/krisna.png') }}" alt=""></div>
                    <div class="w-48 h-48 p-2 bg-orange-900 rounded-lg flex justify-center items-center"><img class="w-36 h-36" src="{{ asset('image/partnerships/primarasa.png') }}" alt=""></div>
                    <div class="w-48 h-48 p-2 bg-orange-900 rounded-lg flex justify-center items-center"><img class="w-36 h-36" src="{{ asset('image/partnerships/tugu-jogja.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.productSection')
    @include('layouts.partials.contactDetail')
@endsection
