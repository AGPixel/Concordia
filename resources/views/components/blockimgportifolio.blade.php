<div id="container-img-{{$id}}" class="{{ !isset($img) && $id > 1 ? 'card-invisible' : '' }}">
    <div class="card-body">
        <div class="form-group">
            @include('components.inputimg',['flag' => 'pteng',
            'title' => 'Image '.$id,
            'id_img_file' => 'InputWorkImg'.$id.'',
            'id_text_file' => 'ImageWorkImg'.$id.'Preview',
            'arg_value' => isset($img) ? asset("../storage/$img") : asset("/assets/img/sem_foto.png")])
        </div>
    </div>
    <div class="card-body">
        @include('components.inputtextpteng',[
        'title' => 'Type '.$id.' 1',
        'id_input_text' => 'InputWorkType'.$id.'1',
        'arg_value' => isset($typex1) ? $typex1 : '',
        'arg_value_eng' => isset($typex1eng) ? $typex1eng : ''
        ])
    </div>
    <div class="card-body">
        @include('components.inputtextpteng',[
        'title' => 'Type '.$id.' 2',
        'id_input_text' => 'InputWorkType'.$id.'2',
        'arg_value' => isset($typex2) ? $typex2 : '',
        'arg_value_eng' => isset($typex2eng) ? $typex2eng : ''
        ])
    </div>
    <div class="card-body">
        @include('components.inputtextpteng',[
        'title' => 'Title '.$id,
        'id_input_text' => 'InputWorkTitle'.$id.'',
        'arg_value' => isset($title1) ? $title1 : '',
        'arg_value_eng' => isset($title1eng) ? $title1eng : ''
        ])
    </div>
    @if($id < 25) @include('components.buttonportifolio',['img'=> $imgprox, 'num_img' => $id+1])
        @endif
</div>
