@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
<section class="w-full flex justify-center py-16" id="create">
    @foreach($Food as $f)
    <form action="{{ route('editproduct', $f->ProductID) }}" method="POST" class="flex flex-col px-16 w-1/2 justify-center space-y-4"  enctype="multipart/form-data">
        @csrf
        <label for="ProductName" class="text-orange-900 font-bold text-xl">Product Name:</label>
        <input class="border p-4" type="text" name="ProductName" required autofocus placeholder="Product Name" value="{{ $f->ProductName }}">
        <label for="ProductDescription" class="text-orange-900 font-bold text-xl">Description:</label>
        <textarea class="border p-4" type="text" name="ProductDescription" required autofocus placeholder="Description">{{ $f->ProductDescription }}</textarea>
        <label for="ProductImage" class="text-orange-900 font-bold text-xl">Insert Image:</label>
        <input type="file" required name="ProductImage" id="" accept="image/png, image/gif, image/jpeg" value="{{ $f->ProductImage }}">
        <label for="ProductPrice" class="text-orange-900 font-bold text-xl">Price:</label>
        <input class="border p-4" type="number" name="ProductPrice" required autofocus placeholder="Price" value="{{ $f->ProductPrice }}">
        <label for="CitiesID" class="text-orange-900 font-bold text-xl">City:</label>
        <select class="border p-4" type="text" name="CitiesID" required autofocus placeholder="City">
            @foreach($city as $c)
                @if( $c->CitiesID  
                == 
                $f->CitiesID )
                <option selected value="{{ $c->CitiesID }}">{{ $c->CityName }}</option>
                @else
                <option value="{{ $c->CitiesID }}">{{ $c->CityName }}</option>
                @endif
            @endforeach
        </select>
        <button class="bg-orange-300 py-2 px-4 text-xl rounded-md self-center mt-10 hover:bg-orange-900 hover:text-white" type="submit">Edit Product</button>
    </form>
    @endforeach
    <div class="mb-2">
        @if($errors->any())
        <p class="text-red-600">{{$errors->first()}}</p>
        @endif
    </div>
</section>
@endsection