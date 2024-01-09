<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-slate-800 leading-tight">
            {{ __('Add User') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Add new user') }} ✨</h1>
        <!-- Form -->
        <form method="POST" action="{{ route('store-new-user') }}">
            @csrf
            <div class="space-y-4">
                <div>
                    <x-jet-label for="name">{{ __('Full Name') }} <span class="text-rose-500">*</span></x-jet-label>
                    <x-jet-input id="name" type="text" name="name" :value="old('name')" required autofocus
                        autocomplete="name" />
                </div>

                <div>
                    <x-jet-label for="email">{{ __('Email Address') }} <span
                            class="text-rose-500">*</span></x-jet-label>
                    <x-jet-input id="email" type="email" name="email" :value="old('email')" required />
                </div>

                <div>
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div>
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" />
                </div>
            </div>
            <div class="flex items-center justify-between mt-6">
                <x-jet-button>
                    {{ __('Sign Up') }}
                </x-jet-button>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-6">
                    <label class="flex items-start">
                        <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                        <span class="text-sm ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('terms.show') .
                                    '" class="text-sm underline hover:no-underline">' .
                                    __('Terms of Service') .
                                    '</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('policy.show') .
                                    '" class="text-sm underline hover:no-underline">' .
                                    __('Privacy Policy') .
                                    '</a>',
                            ]) !!}
                        </span>
                    </label>
                </div>
            @endif
        </form>
        <x-jet-validation-errors class="mt-4" />
    </div>
</x-app-layout>