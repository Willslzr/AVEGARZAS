<div class="card container-fluid py-0 my-0 col-12 bg-light">
    @if ($header)
        <div class="bg-gradient-info shadow-info border-radius-lg pt-3 pb-2 mt-3">
            {{ $header }}
        </div>
    @endif
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            {{ $body }}
        </div>
    </div>
    @if (isset($footer))
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endif
</div>
