<x-layout>
    <div class="max-w-7xl max-auto p-8 mx-auto justify-center mb-5">
        <div class="flex space-x-2">
            <a href="{{ route('assessment.index') }}">
                <button
                    class="hover:bg-gray-200 hover:text-black transition w-28 bg-gray-800 rounded h-8 px-2 text-white">
                    All Assessment
                </button>
            </a>
            <a href="{{ route('assessment.create') }}">
                <button
                    class="hover:bg-gray-200 hover:text-black transition w-28 bg-gray-800 rounded h-8 px-2 text-white">
                    Create Assessment
                </button>
            </a>
        </div>
        <div class="grid justify-center grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($assessments as $assessment)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-bold text-gray-700 leading-none">Number: {{ $assessment->id }}</p>
                    <p class="mb-2 text-base font-medium leading-none text-gray-700">{{ $assessment->date }}</p>
                    <p class="mb-2 text-base leading-none text-gray-700">{{ $assessment->description }}</p>
                    <p class="text-sm leading-none text-red-700 font-bold">{{ $assessment->mark }}</p>
                    <p class="text-sm leading-none text-red-700 font-bold">{{ $assessment->feedback }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
