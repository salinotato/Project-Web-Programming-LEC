@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
<section class="flex flex-col p-16">
    @php
        $currTRID = 1;
    @endphp
    
    @foreach($transactions as $tr)
    @php
        $count = 0;
    @endphp
    <table class="table-auto border border-black mb-4">
        <h1 class="mb-4">Transaction Date: <span class="font-bold">{{ $tr->created_at}}</span></h1>
        <thead>
            <tr>
                <th class="border border-black p-2">No</th>
                <th class="border border-black p-2">Product</th>
                <th class="border border-black p-2">Quantity</th>
                <th class="border border-black p-2">Price</th>
            </tr>
        </thead>
        <tbody>
                @foreach($transactionDetail as $trd)
                    @foreach($trd as $trds)
                        @if($trds->TransactionID == $tr->TransactionID)
                        <tr>
                            <td class="border border-black p-2">{{ ++$count }}</td>
                            <td class="border border-black p-2">{{ $trds->ProductName}}</td>
                            <td class="border border-black p-2">{{ $trds->quantity}}</td>
                            <td class="border border-black p-2">{{ $trds->ProductPrice}}</td>
                        </tr>
                        @endif
                    @endforeach
                @endforeach
                @php
                            $currTRID = $currTRID + 1;      
                        @endphp
                <tr>
                    <td class="p-2 ">Total</td>
                    <td></td><td></td>
                    <td class="p-2 border border-black">{{ $tr->totalPrice}}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
</section>
@endsection