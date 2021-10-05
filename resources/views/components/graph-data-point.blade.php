@php 
    $fullSize = "64px";
    $halfSize = "32px";
@endphp

<small class="position-absolute rounded-pill text-secondary px-1 text-center border-danger border-2 text-white d-flex"
       data-bs-toggle="tooltip"
       data-bs-placement="top"
       title="{{ $name }}"
       style="
           width: {{ $fullSize }};
           height: {{ $fullSize }};
           bottom: calc({{ ($yValue + 1) / 0.02 }}% - {{ $fullSize }});
           left: calc({{ ($xValue + 1) / 0.02 }}% - {{ $halfSize }});
       ">
        <div class="m-auto">
            {{-- @if (file_exists($imagePath)) --}}
                <img class="rounded-circle" src="{{ $imagePath }}" width="100%" height="100%">
            {{-- @else --}}
                {{-- {{ $name[0] . $name[1] }} --}}
            {{-- @endif --}}
        </div>
</small>
