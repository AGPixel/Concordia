<img class="m-bot-05 image_bandeira" src="{{asset("../storage/$flag.png")}}" alt="">
<label for="{{ $id_img_file }}">{{ $title }}</label><br>
<img class="m-bot-05 image_preview" src="{{ $arg_value }}" alt="">
<div class="input-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="{{ $id_img_file }}">
        <label class="custom-file-label disable" for="{{ $id_img_file }}" id="{{ $id_text_file }}">Clique para escolher o arquivo</label>
    </div>
</div>
