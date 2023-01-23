@extends('layouts.mainlayout')

@include('layouts.partials.navbar')

@section('content')
<section class="w-full flex justify-center py-16" id="create">
    <form action="" method="POST" class="flex flex-col px-16 w-1/2 justify-center space-y-4" enctype="multipart/form-data">
        @csrf
        <label for="ProductName" class="text-orange-900 font-bold text-xl">Product Name:</label>
        <input class="border p-4" type="text" name="ProductName" required autofocus value="" placeholder="Product Name">
        <label for="ProductDescription" class="text-orange-900 font-bold text-xl">Description:</label>
        <textarea class="border p-4" type="text" name="ProductDescription" required autofocus value="" placeholder="Description"></textarea>
        <label for="ProductImage" class="text-orange-900 font-bold text-xl">Insert Image:</label>
        <input type="file" name="ProductImage" id="" accept="image/png, image/gif, image/jpeg">
        <label for="ProductPrice" class="text-orange-900 font-bold text-xl">Price:</label>
        <input class="border p-4" type="number" name="ProductPrice" required autofocus value="" placeholder="Price">
        <label for="city" class="text-orange-900 font-bold text-xl">City:</label>
        <select class="border p-4" type="text" name="city" required autofocus value="" placeholder="City">
            @foreach($city as $c)
            <option value="{{ $c->CitiesID }}">{{ $c->CityName }}</option>
            @endforeach
        </select>
        <button class="bg-orange-300 py-2 px-4 text-xl rounded-md self-center mt-10 hover:bg-orange-900 hover:text-white" type="submit">Add Product</button>
    </form>
    <div class="mb-2">
        @if($errors->any())
        <p class="text-red-600">{{$errors->first()}}</p>
        @endif
    </div>
</section>
@endsection