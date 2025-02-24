@if(isset($img_1) && isset($img_2))
<div class="container p-relative">
    <div class="d-grid grid-sm-2 align-items-center">
        <div class="p-relative img-box-parallax before-z-index has-popup">
            <div class="effect-popup before-z-index h-v-70 " data-src="{{ isset($img_1) ? asset("../storage/$img_1") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($type_1) ?? $type_1 }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                <img class="cover-bg-img has-border-radius" src="{{ isset($img_1) ? asset("../storage/$img_1") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
            </div>
            <div class="cap">
                <span>{{ isset($type_1) ? $type_1 : ''}}</span>
            </div>
        </div>
        <div class="p-relative img-box-parallax before-z-index has-popup">
            <div class="effect-popup before-z-index h-v-70" data-src="{{ isset($img_2) ? asset("../storage/$img_2") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($type_2) ?? $type_2 }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                <img class="cover-bg-img has-border-radius" src="{{ isset($img_2) ? asset("../storage/$img_2") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
            </div>
            <div class="cap">
                <span>{{ isset($type_2) ? $type_2 : '' }}</span>
            </div>
        </div>
    </div>
</div>
@else
@if(isset($img_1))
<div class="container over-hidden mt-30">
    <div class="img-box-parallax dsn-animate dsn-effect-down has-popup dsn-active" data-dsn-grid="move-up">

        <div class="effect-popup before-z-index h-100" data-src="{{ isset($img_1) ? asset("../storage/$img_1") : 'assets/img/portfolio/project1/1.jpg' }}" data-caption="{{ isset($type_1) ?? $type_1 }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
            <img class="cover-bg-img has-direction has-border-radius" src="{{ isset($img_1) ? asset("../storage/$img_1") : 'assets/img/portfolio/project1/1.jpg' }}" alt="">
        </div>

        <div class="cap">
            <span>{{ isset($type_1) ? $type_1 : '' }}</span>
        </div>
    </div>
</div>
@endif
@endif
