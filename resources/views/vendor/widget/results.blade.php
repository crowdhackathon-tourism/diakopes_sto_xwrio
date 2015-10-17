<div class="resultsList">
	<h3>{{ $title or "" }}</h3>
    <div class="row">
        @foreach ($items as $item)
            @include('vendor.widget.results-item', ['item' => $item, 'base' => $base])
        @endforeach
    </div>
    @if($paginate)
	    @include('vendor.widget.results-pagination')
	@endif
</div>