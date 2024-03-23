<x-splade-data default="{ open: false }">
    <nav class="bg-white border border-gray-150 w-9/12 justify-center mx-auto rounded-full mt-10 ">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard.index') }}">
                            <x-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        @auth()
                            <a href="/">
                                <h1 class="font-semibold text-black mt-5 text-xl">
                                    {{ auth()->user()?->name ?: 'Guest' }}
                                </h1>
                            </a>
                        @endauth
                           <x-nav-link href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                              {{ __('Dashboard') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                                {{ __('Users') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('obook.index') }}" :active="request()->routeIs('obook.index')">
                                {{ __('Obook') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('report.index') }}" :active="request()->routeIs('report.index')">
                                {{ __('Files') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('task.index') }}" :active="request()->routeIs('task.index')">
                                {{ __('Tasks') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('assessment.index') }}" :active="request()->routeIs('assessment.index')">
                                {{ __('Assessment') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('roles.index') }}" :active="request()->routeIs('roles.index')">
                                {{ __('Roles') }}
                            </x-nav-link>
                            <x-nav-link href="{{ route('permissions.index') }}" :active="request()->routeIs('permissions.index')">
                                {{ __('Permissions') }}
                            </x-nav-link>
                            @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="block w-full px-4 py-2 text-sm text-white hover:bg-gray-100 mt-4 bg-gray-700 rounded-xl"
                                        type="submit">
                                    Logout
                                </button>
                            </form>
                            @endauth
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="data.open = ! data.open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path v-bind:class="{'hidden': data.open, 'inline-flex': ! data.open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path v-bind:class="{'hidden': ! data.open, 'inline-flex': data.open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </nav>
</x-splade-data>
