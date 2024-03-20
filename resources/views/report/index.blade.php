<x-layout>
    <div class="max-w-7xl max-auto p-8 mx-auto justify-center mb-5">
        <div class="flex space-x-2">
            <a href="{{ route('report.index') }}">
                <button
                    class="hover:bg-gray-200 hover:text-black transition w-28 bg-gray-800 rounded h-8 px-2 text-white">
                    All reports
                </button>
            </a>
            <a href="{{ route('report.create') }}">
                <button
                    class="hover:bg-gray-200 hover:text-black transition w-28 bg-gray-800 rounded h-8 px-2 text-white">
                    Create report
                </button>
            </a>
        </div>


        <div class="grid justify-center grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($reports as $report)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-bold text-gray-700 leading-none">Number: {{ $report->id }}</p>
                    <p class="mb-2 text-base font-medium leading-none text-gray-700">{{ $report->description }}</p>
                    <p class="mb-2 text-base leading-none text-gray-700">{{ $report->additional }}</p>
                    <a href="{{ Storage::url($report->report) }}" class="hover:bg-gray-200 hover:text-black transition w-full mt-4 bg-gray-800 rounded h-8 px-2 text-white flex items-center justify-center">
                        Download Report
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
