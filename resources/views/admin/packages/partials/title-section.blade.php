<div class="title-section">
    <div class="title">
        <h3>{{ $title }}</h3>
    </div>
    @if( isset($showAction) && $showAction )
        <div class="actions">
            <a id="add" class="btn btn-default" href="{{ $target }}" data-target="{{ $target }}" role="button">
                Add
            </a>
        </div>
    @endif
</div>
