<x-layout>
    <x-splade-form :action="route('report.store')" class="justify-center w-full px-5 py-5 mx-auto mt-16 space-y-4 bg-white md:w-4/12">
        <h1 class="text-xl font-semibold text-center">Create Report</h1>
        <x-splade-textarea type="text" name="description" label="Description" class="w-full" />Description
        <x-splade-textarea type="text" name="additional" label="Additional" class="w-full" />
        <x-splade-file type="file" name="report" label="Report" class="w-full" preview filepond />
        <x-splade-submit
            class="w-full h-10 px-2 mt-5 font-sans font-semibold text-white transition bg-gray-800 rounded hover:bg-gray-200 hover:text-black md:w-28"
            :spinner="true" />
    </x-splade-form>
</x-layout>
