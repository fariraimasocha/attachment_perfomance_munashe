<x-layout>
    <div class="max-w-7xl max-auto p-8 mx-auto justify-center mb-5">
        <div class="flex space-x-2">
            <a href="{{ route('task.index') }}">
                <button
                    class="hover:bg-gray-200 hover:text-black transition w-28 bg-gray-800 rounded h-8 px-2 text-white">
                    All
                </button>
            </a>
            <a href="{{ route('task.create') }}">
                <button
                    class="hover:bg-gray-200 hover:text-black transition w-28 bg-gray-800 rounded h-8 px-2 text-white">
                    Create
                </button>
            </a>
        </div>
        <div class="grid justify-center grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($tasks as $task)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-bold text-gray-700 leading-none">Assessment: {{ $task->id }}</p>
                    <p class="mb-2 text-base font-medium leading-none text-gray-700">Name: {{ $task->name }}</p>
                    <p class="mb-2 text-base leading-none text-gray-700">Description: {{ $task->description }}</p>
                    <p class="text-sm leading-none text-red-700 font-bold">Date: {{ $task->created_at }}</p>
                    <p class="text-sm leading-none text-red-700 font-bold mt-1">Status: {{ $task->status }}</p>
                    <p class="text-sm leading-none text-red-700 font-bold mt-1">Mark: {{ $task->leftover }}</p>
                    <div class="flex space-x-4 mt-2">
                        <Link href="{{ route('task.edit', $task->id) }}"
                              class="font-semibold text-white hover:text-white hover:bg-blue-800 bg-blue-500 py-1 px-1 rounded w-16 text-center">
                            Edit
                        </Link>
                        <form action="{{ route('task.destroy', $task->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete this task?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="font-semibold text-white hover:text-white hover:bg-gray-900 bg-red-500 py-1 px-1 rounded w-16">
                                Delete
                            </button>
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
</x-layout>
