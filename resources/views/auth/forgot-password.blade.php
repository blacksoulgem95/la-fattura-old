<x-login-layout>
    <div class="uk-section uk-flex uk-flex-middle uk-animation-fade bg" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div
                            class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <h3 class="uk-card-title uk-text-center">La Fattura<small><br/>{{__('auth.title.recovery')}}
                                </small></h3>
                            <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')"/>

                                <!-- Validation Errors -->
                                <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input name="email" placeholder="{{__('auth.title.email')}}"
                                               class="uk-input uk-form-large" required autofocus type="text">
                                    </div>
                                </div>

                                <div class="uk-margin">
                                    <button type="submit"
                                            class="uk-button uk-button-primary uk-button-large uk-width-1-1">
                                        {{__('auth.cta.send')}}
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
