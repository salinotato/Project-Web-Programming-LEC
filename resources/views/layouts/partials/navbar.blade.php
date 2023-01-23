<nav class="px-12 py-2 z-50 sticky top-0 w-full flex items-center justify-between space-x-4 shadow-lg bg-white">
    <div class="flex space-x-4">
        <h1 class="font-bold text-2xl">BEBASSIH</h1>
        <div class="align-start flex space-x-4">
            @if ($title == 'Home')
            <a href="{{ route('home') }}" class="text-xl text-orange-900 underline">Home</a>
            @else
            <a href="{{ route('home') }}" class="text-xl hover:text-orange-900">Home</a>
            @endif

            @if ($title == 'Our Product')
            <a href="{{ route('ourproduct') }}" class="text-xl text-orange-900 underline">Our Product</a>
            @else
            <a href="{{ route('ourproduct') }}" class="text-xl hover:text-orange-900">Our Product</a>
            @endif

            @if ($title == 'About Us')
            <a href="{{ route('aboutus') }}" class="text-xl text-orange-900 underline">About Us</a>
            @else
            <a href="{{ route('aboutus') }}" class="text-xl hover:text-orange-900">About Us</a>
            @endif

            @if ($title == 'Contact Us')
            <a href="{{ route('contactus') }}" class="text-xl text-orange-900 underline">Contact Us</a>
            @else
            <a href="{{ route('contactus') }}" class="text-xl hover:text-orange-900">Contact Us</a>
            @endif
        </div>
    </div>
    @if (!Auth::check())
    <div class="flex space-x-4">
        <a class="py-2 px-8 rounded-lg font-bold bg-orange-300 hover:bg-orange-900 hover:text-white" href="{{ route('login') }}"> LOGIN
        </a>
    </div>
    @elseif(Auth::check() && Auth::user()->role === 'Admin')
    <div class="flex space-x-4">
        @if ($title == 'Create   Product')
        <a class="text-xl text-orange-900 underline" href="{{ route('addproduct') }}">Add Product</a>
        @else
        <a class="text-xl hover:text-orange-900" href="{{ route('addproduct') }}">Add Product</a>
        @endif

        <form action="{{ route('logout') }}" class="text-xl hover:text-orange-900 m-auto" method="POST">
            @csrf
            <button type="submit">Log Out</button>
        </form>

        @if($title == 'Edit Profile')
        <a class="flex text-xl text-orange-900 underline" href="{{ route('editprofile') }}">Admin</a>
        @else
        <a class="flex text-xl hover:text-orange-900" href="{{ route('editprofile') }}">Admin</a>
        @endif
    </div>
    @else
    <div class="flex space-x-4">
        @if($title == 'Cart')
        <a class="text-xl text-orange-900 underline" href="{{ route('cart') }}">Cart</a>
        @else
        <a class="text-xl hover:text-orange-900" href="{{ route('cart') }}">Cart</a>
        @endif

        @if($title == 'History')
        <a class="text-xl underline text-orange-900" href="{{ route('history') }}">History</a>
        @else
        <a class="text-xl hover:text-orange-900" href="{{ route('history') }}">History</a>
        @endif

        <form action="{{ route('logout') }}" class="text-xl hover:text-orange-900 m-auto" method="POST">
            @csrf
            <button type="submit">Log Out</button>
        </form>

        @if($title == 'Edit Profile')
        <a class="flex space-x-4 text-xl text-orange-900 underline" href="{{ route('editprofile') }}">{{ Auth::user()->name }}</a>
        @else
        <a class="flex space-x-4 text-xl hover:text-orange-900" href="{{ route('editprofile') }}">{{ Auth::user()->name }}</a>
        @endif
    </div>
    @endif
</nav>
