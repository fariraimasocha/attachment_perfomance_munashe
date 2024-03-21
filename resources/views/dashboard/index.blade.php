
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

</x-layout>
