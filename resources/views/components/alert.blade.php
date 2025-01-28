@props(['type' => 'success', 'message' => ''])

<div class="p-4 fixed right-1 alert-{{ $type }}" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" aria-label="Close"></button>
</div>
