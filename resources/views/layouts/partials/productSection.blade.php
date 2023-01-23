<section class="p-16 flex flex-col items-center">
    <div class="flex flex-col justify-center items-center space-y-4">
        <p class="text-orange-900 text-xl">Our Product</p>
        <h1 class="font-bold text-4xl">Here Is What We Have For You</h1>
        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi voluptatibus nemo voluptatum error explicabo iusto laudantium. Quia omnis sint dicta, quae quos nesciunt consequatur quis minima temporibus debitis cupiditate velit!</p>
    </div>
    
    <div class="e-full flex justify-between my-8">
        @foreach($Food as $f)
        <div class="space-y-4 w-1/4 flex flex-col justify-center">
            <img src={{ asset('image/products/' . $f->ProductImage) }} alt="" class="">
            <h2 class="text-center">{{$f->CityName}}</h2> 
        </div>
        @endforeach
    </div>
    <a href="{{ route('ourproduct') }}" class="text-orange-900 hover:underline">View More</a>
</section>