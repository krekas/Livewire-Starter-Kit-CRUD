<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <div>
            <!-- Name -->
            <x-text-input
                wire:model="name"
                :label="__('Name')"
                type="text"
                class="w-full"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />

            <!-- Email Address -->
            <x-text-input
                wire:model="email"
                :label="__('Email address')"
                type="email"
                class="w-full"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <x-text-input
                wire:model="password"
                :label="__('Password')"
                type="password"
                class="w-full"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
            />

            <!-- Confirm Password -->
            <x-text-input
                wire:model="password_confirmation"
                :label="__('Confirm password')"
                type="password"
                class="w-full"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
            />
        </div>

        <div class="flex items-center justify-end">
            <x-button type="submit" class="w-full btn-accent">
                {{ __('Create account') }}
            </x-button>
        </div>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <x-link :href="route('login')" wire:navigate>{{ __('Log in') }}</x-link>
    </div>
</div>
