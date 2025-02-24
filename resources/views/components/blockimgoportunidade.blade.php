<div class="card-body">
    <div class="form-group">
        @include('components.inputimg',['flag' => 'pteng',
        'title' => 'Image 1',
        'id_img_file' => 'InputOportunidadeImg1',
        'id_text_file' => 'ImageOportunidadeImg1Preview',
        'arg_value' => isset($oportunidade->img_1) ? asset("../storage/$oportunidade->img_1") : asset("/assets/img/sem_foto.png")])
    </div>
</div>
<div class="card-body first-card-body">
    @include('components.inputtextpteng',[
    'title' => 'Type 1',
    'id_input_text' => 'InputOportunidadeType1',
    'arg_value' => isset($oportunidade->type_1) ? $oportunidade->type_1 : '',
    'arg_value_eng' => isset($oportunidade->type_1_eng) ? $oportunidade->type_1_eng : ''
    ])
</div>
<div class="card-body first-card-body">
    @include('components.inputtextpteng',[
    'title' => 'Title 1',
    'id_input_text' => 'InputOportunidadeTitle1',
    'arg_value' => isset($oportunidade->title_1) ? $oportunidade->title_1 : '',
    'arg_value_eng' => isset($oportunidade->title_1_eng) ? $oportunidade->title_1_eng : ''
    ])
</div>
