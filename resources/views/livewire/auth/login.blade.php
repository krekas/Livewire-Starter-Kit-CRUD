<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Log in to your account')" :description="__('Enter your email and password below to log in')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <x-ui.field>
            <x-ui.label :text="__('Email address')" />
            <x-ui.input
                wire:model="email"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="email@example.com"
            />
        </x-ui.field>

        <!-- Password -->
        <div class="relative">
            <x-ui.field>
                <x-ui.label :text="__('Password')" />
                <x-ui.input
                    wire:model="password"
                    type="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                />
            </x-ui.field>

            @if (Route::has('password.request'))
                <x-ui.link variant="soft" class="absolute right-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </x-ui.link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <x-ui.button type="submit" class="w-full">{{ __('Log in') }}</x-ui.button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <x-ui.link :href="route('register')" wire:navigate>{{ __('Sign up') }}</x-ui.link>
        </div>
    @endif
</div>
