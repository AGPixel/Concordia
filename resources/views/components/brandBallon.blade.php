<div class="brand-boxs d-flex flex-column align-items-{{ rand(0,1) == 0 ? 'start' : 'end' }}">
    @if(isset($img))
    <div class="brand-item brand-item-sm content-blure">
        <img src="{{ asset("../storage/$img") }}" alt="">
    </div>
    @endif
</div>
