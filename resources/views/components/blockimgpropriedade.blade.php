<div id="container-img-{{$id}}" class="{{ !isset($img) && $id > 1 ? 'card-invisible' : '' }}">
    <div class="card-body">
        <div class="form-group">
            @include('components.inputimg',['flag' => 'pteng',
            'title' => 'Image '.$id,
            'id_img_file' => 'InputPropriedadeImg'.$id,
            'id_text_file' => 'ImagePropriedadeImg'.$id.'Preview',
            'arg_value' => isset($img) ? asset("../storage/$img") : asset("/assets/img/sem_foto.png")])
        </div>
    </div>
    <div class="card-body first-card-body">
        @include('components.inputtextpteng',[
        'title' => 'Type '.$id,
        'id_input_text' => 'InputPropriedadeType'.$id,
        'arg_value' => isset($type) ? $type : '',
        'arg_value_eng' => isset($type_eng) ? $type_eng : ''
        ])
    </div>
    <!--
    <div class="card-body first-card-body">
        @ include('components.inputtextpteng',[
        'title' => 'Legend '.$id,
        'id_input_text' => 'InputPropriedadeLegend'.$id,
        'arg_value' => isset($legend) ? $legend : '',
        'arg_value_eng' => isset($legend_eng) ? $legend_eng : ''
        ])
    </div>
    -->
    @if($id < 25) @include('components.buttonaddimage',['img'=> $imgprox, 'num_img' => $id+1, 'bt_type' => 'propriedade'])
        @endif
</div>
