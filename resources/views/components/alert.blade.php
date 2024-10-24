@props(['type', 'message'])

@if (session()->has($type))
    <div class="p4 mb-4 text-sm text-white rounded {{ $type == 'success' ? 'bg-green-500' : 'bg-red-500' }}"></div>
@endif
