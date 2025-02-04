<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger']) }}>
    @yield('button-text')
</button>
