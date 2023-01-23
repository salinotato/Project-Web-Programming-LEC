@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
    @php
        $total = 0;
        $count = 0;
    @endphp
    <section class="flex flex-col p-16">
    @if ($carts->isempty())
        <div class="flex justify-center items-center py-32">
            <h1>No product on your cart, <span><a class="font-semibold text-orange-900 underline"  href="{{ route('ourproduct') }}">Let's buy some!</a></span></h1>
        </div>
    @else
        <table class="table-auto border border-black">
            <thead>
                <tr>
                    <th class="border border-black p-2">No</th>
                    <th class="border border-black p-2">Product</th>
                    <th class="border border-black p-2">Quantity</th>
                    <th class="border border-black p-2">Price</th>
                    <th class="border border-black p-2">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td class="border border-black p-2">{{ ++$count }}</td>
                    <td class="border border-black p-2">{{ $cart->ProductName }}</td>
                    <td class="border border-black p-2">{{ $cart->Quantity }} pc(s)</td>
                    <td class="border border-black p-2">{{ number_format($cart->ProductPrice) }}</td>
                    <td class="flex space-x-4 p-2">
                        <a href="{{ route('productdetail', $cart->ProductID) }}" class="action btn btn-info w-75">Edit Product Qty</a>
                        <form action="{{ route('removeitem',$cart->ProductID) }}" method="POST" class="w-100 text-center">
                            @csrf
                            @method('DELETE')
                            <button class="action btn btn-danger w-75">Remove Product</button>
                        </form>
                    </td>
                </tr>
                @php
                    $total = $total + $cart->ProductPrice * $cart->Quantity;
                    $cartTemp = $cart->CartID;
                @endphp
            @endforeach
                <tr>
                    <td class="p-2">Total</td>
                    <td></td><td><td></td></td>
                    <td class="border border-black p-2">IDR. {{ $total }}</td>
                </tr>
            </tbody>
        </table>
        <form action="">
            <button class="w-24 bg-orange-300 hover:bg-orange-900 hover:text-white mt-10 rounded-md p-2">
                <a href="{{ Route('checkout',[$cartTemp,$total]) }}" class="checkout btn btn-info text-white">Checkout</a>
            </button>
        </form>
    @endif
    </section>
@endsection