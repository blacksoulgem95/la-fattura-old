<x-login-layout>
    <div class="uk-section uk-flex uk-flex-middle uk-animation-fade bg" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div
                            class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-secondary uk-light uk-card-body uk-box-shadow-large">
                            <h3 class="uk-card-title uk-text-center">La Fattura<small><br/>Administrator Login</small></h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
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
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input name="password" placeholder="{{__('auth.title.password')}}"
                                               class="uk-input uk-form-large"
                                               required autocomplete="current-password" type="password">
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <label>
                                            <input id="remember_me" type="checkbox"
                                                   class="uk-checkbox" name="remember"> {{__('auth.title.remember')}}
                                        </label>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <button type="submit"
                                            class="uk-button uk-button-primary uk-button-large uk-width-1-1">
                                        {{__('auth.cta.login')}}
                                    </button>
                                </div>
                                <div class="uk-margin">
                                    <p class="uk-text-center">
                                        <a class="uk-button uk-button-large uk-width-1-1"
                                           href="{{route('password.request')}}">{{__('auth.title.recovery')}}</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
