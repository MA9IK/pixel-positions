@props(['width' => 90, 'height' => 90])

<img src="http://picsum.photos/seed/{{ rand(0, 1000000000) }}/{{ $width }}/{{ $height }}" alt=""
    class="rounded">
