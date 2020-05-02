<div class="info-box">
    <span class="info-box-icon {{ $infobox->color ?? 'bg-info' }}"><i class="far {{ $infobox->icon ?? 'fa-envelope' }}"></i></span>
    <div class="info-box-content">
        <span class="info-box-text">{{ $infobox->text ?? 'Message' }}</span>
        <span class="info-box-number">{{ $infobox->number ?? '1234'}}</span>
    </div>
</div>

