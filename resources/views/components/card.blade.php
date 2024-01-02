<div class="card container-fluid py-2 my-2 col-12">
    @if ($header)
    <div class="card-header">
        <div class="bg-gradient-info shadow-primary border-radius-lg pt-3 pb-2">
        {{ $header }}
        </div>
    </div>
    @endif
    <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
            {{ $body }}
        </div>
    </div>
</div>
