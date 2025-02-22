<div class="card-body first-card-body">
    @include('components.inputtext',['flag' => 'pteng',
    'title' => 'Meta tags Title',
    'id_input_text' => 'InputMetaTagsTitle',
    'arg_value' => $arg_object->meta_tags_title ? $arg_object->meta_tags_title : '' ])
</div>
<div class="card-body first-card-body">
    @include('components.inputtext',['flag' => 'pteng',
    'title' => 'Meta tags Description',
    'id_input_text' => 'InputMetaTagsDescription',
    'arg_value' => $arg_object->meta_tags_description ? $arg_object->meta_tags_description : '' ])
</div>
<div class="card-body first-card-body">
    @include('components.inputtext',['flag' => 'pteng',
    'title' => 'Meta tags Keywords',
    'id_input_text' => 'InputMetaTagsKeywords',
    'arg_value' => $arg_object->meta_tags_keywords ? $arg_object->meta_tags_keywords : '' ])
</div>
