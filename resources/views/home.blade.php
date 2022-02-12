<x-login-layout>
    <div class="uk-section bg uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div
                            class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-secondary uk-card-body uk-box-shadow-large uk-background-secondary uk-light">
                            <h3 class="uk-card-title uk-text-center">La Fattura</h3>
                            <div class="uk-margin">
                                <p class="uk-text-center">
                                    <a  class="uk-button uk-button-large uk-width-1-1" href="{{route('customer.login')}}">{{__('auth.cta.customerAreaLogin')}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-login-layout>
