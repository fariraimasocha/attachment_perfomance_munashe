<x-layout>
    <x-splade-form confirm="are you sure" :default="$task" :action="route('task.update', $task)" method="PUT"
                   class="w-full md:w-4/12 justify-center mx-auto mt-16 space-y-4 px-5 py-5 bg-white">
        <h1 class="text-xl font-semibold text-center">Create</h1>
        <x-splade-input type="text" name="name" label="Name" class="w-full" />
        <x-splade-textarea type="text" name="description" label="Description" class="w-full" />
        <x-splade-select name="status" label="Status" class="w-full">
            <option value="pending">Pending</option>
            <option value="rejected">Rejected</option>
            <option value="approved">Approved</option>
        </x-splade-select>
        <x-splade-input type="text" name="leftover" label="Leftover" class="w-full" />

        <x-splade-submit
            class="w-full h-10 px-2 mt-3 font-sans font-semibold text-white transition bg-gray-800 rounded hover:bg-gray-200 hover:text-black md:w-28"
            :spinner="true" />
    </x-splade-form>
</x-layout>
