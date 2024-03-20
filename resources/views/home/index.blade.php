@include('layout.app')
<div class="flex mt-20 px-20 space-x-2">
    <img src="{{ asset('images/bg.png') }}" alt="nothing" width="4%" height="3%" class="rounded-b-3xl">
</div>

<div class="flex mt-20 px-10 w-full">

    <div class="flex-col px-10 w-6/12">
        <h1 class="text-6xl text-gray-800 mt-10 font-semibold">
            Speech to text Shona Model for<span class="font-bold px-4 text-blue-900">ECD</span>  students using AI Models.</h1>
        <div class="space-x-5 mt-8">
            <a href="{{route('audio.index')}}">
                <button
                    class="rounded-3xl mt-4 bg-gray-800 text-white hover:bg-gradient-to-bl from-blue-500 w-48 h-10">Start</button>
            </a>

        </div>
    </div>

    <img src="{{ asset('images/bg.png') }}" alt="" width="30%" height="20%" class="rounded-lg">
</div>
