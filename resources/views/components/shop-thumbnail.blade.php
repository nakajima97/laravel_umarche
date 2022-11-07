<div>
    @if (empty($shop->filename))
        <img src="{{ asset('images/no_image.jpg') }}" alt="">
    @else
        <img src="{{ assets('storage/shops/' . $shop->filename) }}" alt="">
    @endif
</div>
