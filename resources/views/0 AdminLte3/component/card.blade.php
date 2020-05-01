<style>
    .cardt{
        font-weight: bold;
        font-size: 25px;
    }

</style>

<div class="card">
  @isset($card->image)
      <img src="{{ $card->image }}" class="card-img-top" alt="{{ $card->image }}" height="230px">
  @endisset
  <div class="card-body">
    <h5 class="card-title cardt">{{ $card->title }}</h5>
    <p class="card-text">{{ $card->description }}</p>
    @isset($card->button)
        <a href="{!! route($card->route) !!}" class="btn btn-primary">{{ $card->button }}</a>
    @endisset
  </div>
</div>
