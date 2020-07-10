<div class="toasts-position-relative" aria-live="polite" aria-atomic="true">
    <div class="toasts-position-absolute">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
            <div class="toast-header alert-{{ $message }}">
                <span class="mr-auto toast-title">
                    @if ($message === 'success')
                    Rezervace úspěšně odeslána
                    @else
                    Rezervace se nezdařila
                    @endif
                </span>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                @if ($message === 'success')
                {!! Session::get('flash_message_' . $message) !!} Děkujeme, budeme Vás kontaktovat.
                @else
                {!! Session::get('flash_message_' . $message) !!} Ozvěte se nám, prosím, na čísle uvedém v sekci <a href="{{ route(config('variants.route_prefix_dash') . 'contacts') }}">@lang('messages.contacts')</a>.
                @endif
            </div>
        </div>
    </div>
</div>