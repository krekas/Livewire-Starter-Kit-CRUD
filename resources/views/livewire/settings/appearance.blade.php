<div class="flex flex-col items-start">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Appearance')" :subheading=" __('Update the appearance settings for your account')">
        <x-ui.radio.group x-data variant="segmented" x-model="$flux.appearance" name="environment" :indicator="false" variant="segmented" direction="horizontal">
            <x-ui.radio.item
                icon="sun"
                value="light"
                :label="__('Light')"
            />
            <x-ui.radio.item
                icon="moon"
                value="dark"
                :label="__('Dark')"
                checked
            />
            <x-ui.radio.item
                icon="computer-desktop"
                value="system"
                :label="__('System')"
            />
        </x-ui.radio.group>
    </x-settings.layout>
</div>
