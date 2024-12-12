@props(['messages'])

@if ($messages)
    <small {{ $attributes->merge(['class' => 'text-sm text-red-600 text-danger space-y-1']) }}>
        @foreach ((array) $messages as $message){{ $message }}
        @endforeach
    </small>
@endif
