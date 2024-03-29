<x-authentication-layout>
    <x-jet-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="block">
            <x-jet-label for="email" value="{{ __('messages.Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('messages.password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('messages.Confirm_Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button>
                {{ __('messages.ResetPassword') }}
            </x-jet-button>
        </div>
    </form>
</x-authentication-layout>
