<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidenav">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <a href="{{ route('dashboard') }}" class="ml-2 mr-5 mb-4 flex items-center space-x-2 lg:ml-0" wire:navigate>
            <x-app-logo />
        </a>

        <ul class="space-y-2">
            <x-flowbite.navbar.item icon="home" :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>{{ __('Dashboard') }}</x-flowbite.navbar.item>
            <x-flowbite.navbar.item icon="list-todo" :href="route('tasks.index')" :active="request()->routeIs('tasks.*')" wire:navigate>{{ __('Tasks') }}</x-flowbite.navbar.item>
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <x-flowbite.navbar.item icon="notebook-text" :href="route('about')" :active="request()->routeIs('about')" wire:navigate>{{ __('About') }}</x-flowbite.navbar.item>
        </ul>
    </div>
    <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex bg-white dark:bg-gray-800 z-20 border-r border-gray-200 dark:border-gray-700">
        <a href="{{ route('settings.profile') }}" data-tooltip-target="tooltip-settings" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
            <x-flowbite.icons.settings />
        </a>
        <div id="tooltip-settings" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
            Settings page
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:bg-gray-100 dark:hover:bg-gray-600">
            @csrf
            <button data-tooltip-target="tooltip-logout" class="hover:cursor-pointer">
                <x-flowbite.icons.log-out />
            </button>
            <div id="tooltip-logout" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip">
                Logout
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </form>
    </div>
</aside>
