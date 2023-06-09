<div>
    @isset($addcart)
    @forelse ($addcart as $ad)
    <div class="col-12 container d-flex justify-content-center flex-column content-mini-card mb-3 mt-3">
        <div class="card-container rounded row p-1 mb-2 mx-3" style="width: 12rem;">
            <img src="{{ !$ad->images()->get()->isEmpty() ? $ad->images()->first()->getUrl(400,400) : 'https://via.placeholder.com/150'}} "
                class=" col-4 p-0 rounded" alt="{{ $ad->title }}" style="height: 4rem;">
            <div class="card-body col-8 ps-2 d-flex flex-column justify-content-around">
                <p class="title-cart m-0">{{ $ad->title }}</p>
                <p class="price-cart text-success m-0">{{ $ad->price }} &#8364</p>
            </div>
        </div>
        <div>
            <form action="{{ route('cart.ad.reject', $ad->id ) }}" method="POST" class="d-flex justify-content-center mb-3">
                @method('PATCH')
                @csrf
                <button type="submit" class="badge rounded-pill bg-danger border-0 fs-7 col-12"><span class="fa-solid fa-trash-can"></span></button>

            </form>
        </div>
    </div>
    @empty
    <div class="my-2">
        <p class="text-center">{{__('Tu carrito está vacío')}}</p>
    </div>
    @endforelse
    @endisset
</div>
