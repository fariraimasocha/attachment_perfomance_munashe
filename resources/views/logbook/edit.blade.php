<x-layout>
    <x-splade-form :default="$logbook" :action="route('logbooks.update', $logbook)" method="PUT"
                   class="w-full md:w-4/12 justify-center mx-auto mt-16 space-y-4 px-5 py-5 bg-white">
        <h1 class="text-xl font-semibold text-center">Edit Log</h1>
        <x-splade-input type="date" name="date" label="Date" class="w-full" />
        <x-splade-input type="text" name="task" label="Task" class="w-full" />
        <x-splade-input type="text" name="complete" label="Complete" class="w-full" />
        <x-splade-submit
            class="mt-5 hover:bg-gray-200 hover:text-black transition w-full md:w-28 bg-gray-800
             h-10 px-2 text-white font-semibold rounded font-sans"
            :spinner="true" />
    </x-splade-form>
</x-layout>
