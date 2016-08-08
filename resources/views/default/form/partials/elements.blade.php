@if($items instanceof \SleepingOwl\Admin\Form\Columns\Columns)
    {!! $items->render() !!}
@else
@foreach ($items as $item)
    @if($item instanceof \Illuminate\Contracts\Support\Renderable)
        {!! $item->render() !!}
    @else
        {!! $item !!}
    @endif
@endforeach
@endif