<footer class="page-footer py-2 footer-background-{{ config('variants.name') }}">
    <div class="footer-copyright text-center">
        <p>
            &copy; {{ now()->year }}
            <a href="{{ route(config('variants.route_prefix_dash') . 'home') }}">
                @lang('messages.' . config('variants.name') . '_name')
            </a>
            | @lang('messages.footer_rights')
            | @lang('messages.created_by') <a id="created-by" href="" data-toggle="tooltip" data-placement="top"
                title="pesek.jirka at centrum.cz" data-delay='{"show":"200", "hide":"100"}'>Jiří Pešek</a>
        </p>
    </div>
</footer>

@section('scripts')
<script>

</script>
@endsection