<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $message)
    @if (Session::has('flash_message_' . $message))
    @include('partials/toasts')
    @endif
    @endforeach
</div>