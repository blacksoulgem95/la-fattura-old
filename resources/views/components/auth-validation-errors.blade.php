@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="uk-margin uk-text-danger">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="uk-margin uk-list uk-list-circle">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
