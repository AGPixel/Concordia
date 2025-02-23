<div id="bt-portiflio-nova-imagem{{$num_img-1}}" class="card-body {{isset($img) ? 'card-invisible' : ''}}">
    <div class="row">
        <div class="col-md-10">
        </div>
        <div class="col-md-2 col-flex m-bot-1em">
            <button type="button" class="btn btn-info btn-block btn-flat bt-width" onclick="showNewImage({{$num_img}})">
                <i class="fa fa-plus"></i>
                &nbsp;Nova Imagem
            </button>
        </div>
    </div>
</div>
