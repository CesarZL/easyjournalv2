<x-authentication-layout>
    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('messages.Reset_Password') }} </h1>
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <x-jet-label for="email">{{ __('messages.Email') }} <span class="text-rose-500">*</span></x-jet-label>
            <x-jet-input id="email" type="email" name="email" :value="old('email')" required autofocus />                
        </div>
        <div class="flex justify-end mt-6">
            <x-jet-button>
                {{ __('messages.Reset_Link') }}
            </x-jet-button>
        </div>
    </form>
    <x-jet-validation-errors class="mt-4" /> 
</x-authentication-layout>
