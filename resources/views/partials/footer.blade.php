<footer class="page-footer font-small">
    <div class="footer-copyright text-center py-1">
        <small>
            &copy; {{ now()->year }}
            <a href="{{ url('/') }}">
                @lang('messages.penzion_name')
            </a>
            | @lang('messages.footer_rights')
        </small>
    </div>
</footer>
