<div class="card card-primary collapsed-card">
    <div class="card-header">
        <h3 class="card-title">{{ basename($item) }}</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i> </button>
        </div>
    </div>
        <div class="card-body">
            @foreach (glob("$item/*") as $value)
                <a href="{!! route('software',['folder'=>$folder, 'sub'=>basename($item), 'soft'=>basename($value)]) !!}">
                    {{ basename($value) }}
                </a>
            @endforeach
        </div>
    </div>
</div>
