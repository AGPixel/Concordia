@if(isset($img))
<a class="link-pop fj-gallery-item" href="{{asset("../storage/$img")}}" data-fancybox="_1" data-caption="{{ $title }}">
    <img class="" src="{{asset("../storage/$img")}}" alt="">
    @if(isset($type))
    <div class="cap">
        <span>{{ $type }}</span>
    </div>
    @endif
</a>
@endif
