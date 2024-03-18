<x-layout>
    <x-splade-form :action="route('obook.store')" class="justify-center w-full px-5 py-5 mx-auto mt-16 space-y-4 bg-white md:w-4/12">
        <h1 class="text-xl font-semibold text-center">Create Obook</h1>
        <x-splade-input type="date" name="date" label="Date" class="w-full" />
        <x-splade-input type="text" name="task" label="Task" class="w-full" />
        <x-splade-input type="text" name="status" label="Status" class="w-full" />
        <x-splade-submit
            class="w-full h-10 px-2 mt-5 font-sans font-semibold text-white transition bg-gray-800 rounded hover:bg-gray-200 hover:text-black md:w-28"
            :spinner="true" />
    </x-splade-form>
</x-layout>
