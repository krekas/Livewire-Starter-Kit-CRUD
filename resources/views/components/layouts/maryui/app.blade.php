<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>{{ $title ?? 'Laravel' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen font-sans antialiased bg-base-200">
        {{-- NAVBAR mobile only --}}
        <x-mary-nav sticky class="lg:hidden">
            <x-slot:brand>
                <div class="ml-5 pt-5">App</div>
            </x-slot:brand>
            <x-slot:actions>
                <label for="main-drawer" class="lg:hidden mr-3">
                    <x-heroicon-o-bars-3 class="cursor-pointer" />
                </label>
            </x-slot:actions>
        </x-mary-nav>

        {{-- MAIN --}}
        <x-mary-main full-width>
            {{-- SIDEBAR --}}
            <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">

                {{-- BRAND --}}
                <div class="flex items-center space-x-2 lg:ml-0 mr-5 ml-5 pt-5">
                    <x-app-logo />
                </div>

                {{-- MENU --}}
                <x-mary-menu activate-by-route>

                    {{-- User --}}
                    @if($user = auth()->user())
                        <x-mary-menu-separator />

                        <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded">
                            <x-slot:actions>
                                <x-mary-button icon="o-power" class="btn-circle btn-ghost btn-xs" tooltip-left="logoff" no-wire-navigate link="/logout" />
                            </x-slot:actions>
                        </x-mary-list-item>

                        <x-mary-menu-separator />
                    @endif

                    <x-mary-menu-item :title="__('Dashboard')" icon="o-home" :link="route('dashboard')" :active="request()->routeIs('dashboard')" />
                    <x-mary-menu-item :title="__('Tasks')" icon="m-numbered-list" :link="route('tasks.livewire.index')" :active="request()->routeIs('tasks.*')" />
                </x-mary-menu>
            </x-slot:sidebar>

            {{-- The `$slot` goes here --}}
            <x-slot:content>
                {{ $slot }}
            </x-slot:content>
        </x-mary-main>

        {{-- Toast --}}
        <x-mary-toast />
    </body>
</html>
