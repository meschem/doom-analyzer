<div class="graph-canvas w-100 h-100">
    @foreach ($demons as $demon)
        <x-graph-data-point name="{{ $demon->name }}" xValue="{{ $demon->$xAxisProperty }}" yValue="{{ $demon->$yAxisProperty }}" borderColor="{{ $demon->color }}" />
    @endforeach
</div>
