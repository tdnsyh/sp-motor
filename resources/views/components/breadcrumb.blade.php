<ul class="breadcrumb">
    @php
        $link = '';
    @endphp

    @foreach ($segments as $key => $segment)
        @php
            $link .= '/' . $segment;
            $isLast = $loop->last;
            $label = ucwords(str_replace(['-', '_'], ' ', $segment));
        @endphp

        @if ($isLast)
            <li class="breadcrumb-item active" aria-current="page">{{ $label }}</li>
        @else
            <li class="breadcrumb-item"><a href="{{ url($link) }}">{{ $label }}</a></li>
        @endif
    @endforeach
</ul>
