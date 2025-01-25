@props(['employer', 'width' => 90, 'height' => 90])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="" class="rounded" width="{{ $width }}"
    height="{{ $height }}">
