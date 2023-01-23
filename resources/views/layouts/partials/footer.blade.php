<footer class="bg-white pt-8 flex w-full">
    <div class="absolute flex space-x-4 right-20">
        <a href="https://www.instagram.com/bebassih" class="w-24 h-24 rounded-full bg-orange-900 flex justify-center items-center p-6"><img src="{{ asset('image/svgs/instagrams.svg') }}" alt="" class="w-full"></a>
        <a href="https://wa.me/+62812789556412" class="w-24 h-24 rounded-full bg-orange-900 flex justify-center items-center p-6"><img src="{{ asset('image/svgs/whatsapp.svg') }}" alt="" class="w-full"></a>
        <a href="https://www.facebook.com/bebassih" class="w-24 h-24 rounded-full bg-orange-900 flex justify-center items-center p-6"><img src="{{ asset('image/svgs/facebook.svg') }}" alt="" class="w-full"></a>
    </div>
    <div class="bg-orange-300 flex mt-16 w-full justify-between px-16 py-8">
        <div class="flex flex-col w-2/3">
            <h1 class="font-bold text-4xl">BEBASSIH</h1>
            <h2 class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>

            <div class="space-y-4 pt-4">
                <div class="flex space-x-4">
                    <img src="{{ asset('image/svgs/call.svg') }}" alt="" class="w-8 h-10">
                    <p>0812789556412, 081234567898</p>
                </div>
                <div class="flex space-x-4">
                    <img src="{{ asset('image/svgs/mail.svg') }}" alt="" class="w-8">
                    <p>Email@gmail.com, email2@gmail.com</p>
                </div>
                <div class="flex space-x-4">
                    <img src="{{ asset('image/svgs/location2.svg') }}" alt="" class="w-8">
                    <p>Syahdan Campus. Address: Jl. K. H. Syahdan No.9, Palmerah, Jakarta, 11480, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="flex w-1/3 space-x-8">
            <div class="flex flex-col space-y-2">
                <h1 class="text-4xl">Quick Links</h1>
                <a href="{{ route('home') }}" class="hover:underline">Home</a>
                <a href="{{ route('aboutus') }}" class="hover:underline">About Us</a>
                <a href="{{ route('ourproduct') }}" class="hover:underline">Our Product</a>
                <a href="{{ route('contactus') }}" class="hover:underline">Contact Us</a>
            </div>
            <div class="flex flex-col space-y-2">
                <h2 class="text-4xl">Our Product</h2>
                <p class="hover:underline">Yogyakarta</p>
                <p class="hover:underline">DKI Jakarta</p>
                <p class="hover:underline">Bandung</p>
                <p class="hover:underline">Surabaya</p>
                <p class="hover:underline">Medan</p>
            </div>
        </div>
    </div>
</footer>