<x-login-layout>
    <div class="uk-section uk-flex uk-flex-middle uk-animation-fade bg" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div
                            class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-secondary uk-light uk-card-body uk-box-shadow-large">
                            <h3 class="uk-card-title uk-text-center">La
                                Fattura<small><br/>{{__('auth.messages.verify.title')}}</small></h3>
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf
                                <x-auth-validation-errors class="mb-4" :errors="$errors"/>


                                @if (session('status') == 'verification-link-sent')
                                    <div class="uk-margin">
                                        {{ __('auth.messages.verify.linkSent') }}
                                    </div>
                                @endif

                                <div class="uk-margin">
                                    <button type="submit"
                                            class="uk-button uk-button-primary uk-button-large uk-width-1-1">
                                        {{__('auth.messages.verify.resend')}}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
