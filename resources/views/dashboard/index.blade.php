
<x-layout>
    <div class="px-40 mt-10 to-black1 flex justify-between">
        @php
            $totalLogs = \App\Models\Obook::count();
        @endphp

        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Logs
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalLogs }}
            </h1>
        </div>

        @php
            $totalUsers = \App\Models\User::count();
        @endphp

        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Users
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalUsers }}
            </h1>
        </div>

        @php
            $totalReports = \App\Models\Report::count();
        @endphp

        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Reports
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalReports }}
            </h1>
        </div>

        @php
            $totalPermissions= Spatie\Permission\Models\Permission::count();
        @endphp

        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Permissions
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalPermissions }}
            </h1>
        </div>


        @php
            $totalRoles = Spatie\Permission\Models\Role::count();
        @endphp

        <div class="bg-blue1 w-2/12 rounded py-3 hover:bg-black1 transition">
            <p class="text-white text-center">
                Total Roles
            </p>
            <h1 class="text-white text-center text-2xl font-semi">
                {{ $totalRoles }}
            </h1>
        </div>
    </div>

    <div
        class="flex flex-col items-center w-10/12 p-6 pb-6 bg-white rounded-lg shadow-xl justify-center mx-auto mt-20 px-20">
        <h2 class="text-xl font-bold">Monthly Users</h2>
        <span class="text-sm font-semibold text-gray-500">2023</span>
        <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
            @foreach ($users as $user)
                <div class="relative flex flex-col items-center flex-grow pb-5 group">
                         <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">
                             {{ $user->count() }}
                         </span>
                    <div class="relative flex justify-center w-full h-8">
                        <div class="h-full bg-indigo-200">{{ $user->name }}</div>
                        <div class="h-full bg-transparent border border-indigo-400">{{ $user->id }}</div>
                    </div>
                    <span class="absolute bottom-0 text-xs font-bold">{{ $user->created_at }}</span>
                </div>
            @endforeach
        </div>
        <div class="flex w-full mt-3">
            <div class="flex items-center ml-auto">
                <span class="block w-4 h-4 bg-indigo-400"></span>
                <span class="ml-1 text-xs font-medium">All</span>
            </div>
            <div class="flex items-center ml-4">
                <span class="block w-4 h-4 bg-transparent border border-indigo-400"></span>
                <span class="ml-1 text-xs font-medium">Completed</span>
            </div>
            <div class="flex items-center ml-4">
                <span class="block w-4 h-4 bg-indigo-200"></span>
                <span class="ml-1 text-xs font-medium">Pending</span>
            </div>
        </div>
    </div>

</x-layout>
