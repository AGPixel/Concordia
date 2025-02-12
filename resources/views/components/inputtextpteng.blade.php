<div class="form-group input-text-language-48percent m-left-4percent">
    <img class="m-bot-05 image_bandeira" src="{{asset("../storage/pt.png")}}" alt="">
    <label for="{{ $id_input_text }}">{{ $title }}</label>
    <input type="text" class="form-control" id="{{ $id_input_text }}" value="{{ $arg_value }}">
</div>
<div class="form-group input-text-language-48percent">
    <img class="m-bot-05 image_bandeira" src="{{asset("../storage/eng.png")}}" alt="">
    <label for="{{ $id_input_text }}Eng">{{ $title }}</label>
    <input type="text" class="form-control" id="{{ $id_input_text }}Eng" value="{{ $arg_value_eng }}">
</div>
