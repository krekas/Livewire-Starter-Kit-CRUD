<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <x-ui.field>
            <x-ui.label :text="__('Name')" />
            <x-ui.input
                wire:model="name"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />
            <x-ui.error name="name" />
        </x-ui.field>

        <!-- Email Address -->
        <x-ui.field>
            <x-ui.label :text="__('Email address')" />
            <x-ui.input
                wire:model="email"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />
        </x-ui.field>

        <!-- Password -->
        <x-ui.field>
            <x-ui.label :text="__('Password')" />
            <x-ui.input
                wire:model="password"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
            />
        </x-ui.field>

        <!-- Confirm Password -->
        <x-ui.field>
            <x-ui.label :text="__('Confirm password')" />
            <x-ui.input
                wire:model="password_confirmation"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
            />
        </x-ui.field>

        <div class="flex items-center justify-end">
            <x-ui.button type="submit" class="w-full">
                {{ __('Create account') }}
            </x-ui.button>
        </div>
    </form>

    <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
        {{ __('Already have an account?') }}
        <x-ui.link :href="route('login')" wire:navigate>{{ __('Log in') }}</x-ui.link>
    </div>
</div>
