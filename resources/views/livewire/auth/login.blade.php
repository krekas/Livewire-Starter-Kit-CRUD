<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-text-input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            class="w-full"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <x-text-input
                wire:model="password"
                :label="__('Password')"
                type="password"
                class="w-full"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
            />

            @if (Route::has('password.request'))
                <x-link class="absolute right-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </x-link>
            @endif
        </div>

        <!-- Remember Me -->
        <x-checkbox class="checkbox-accent" wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <x-button type="submit" class="w-full btn-accent">{{ __('Log in') }}</x-button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <x-link :href="route('register')" wire:navigate>{{ __('Sign up') }}</x-link>
        </div>
    @endif
</div>
