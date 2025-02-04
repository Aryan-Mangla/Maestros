@props(['value'])

<label {{ $attributes->merge(['class' => 'form-label text-muted']) }}>
    {{ $value ?? $slot }}
</label>
