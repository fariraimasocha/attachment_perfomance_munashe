@include('layout.app')
<div class="flex mt-20 px-20 space-x-2">
    <img src="{{ asset('images/fox.png') }}" alt="nothing" width="4%" height="3%" class="rounded-b-3xl">
</div>

<div class="flex mt-20 px-10 w-full">

    <div class="flex-col px-10 w-6/12">
        <h1 class="text-6xl text-gray-800 mt-10 font-semibold">
            <span class="font-bold text-blue-900">FJ</span> Attachment performance system<span class="font-bold px-4 text-blue-900">FOR</span>  UZ Students</h1>
        <div class="space-x-5 mt-8">
            <a href="{{route('login')}}">
                <button
                    class="rounded-3xl mt-4 bg-gray-800 text-white hover:bg-gradient-to-bl from-blue-500 w-48 h-10">Get Started</button>
            </a>

        </div>
    </div>

    <img src="{{ asset('images/fox.png') }}" alt="" width="20%" height="10%" class="rounded-lg">
</div>
