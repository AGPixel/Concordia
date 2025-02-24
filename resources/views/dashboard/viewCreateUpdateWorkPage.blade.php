@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Projetos')

        @section('conteudo')
        <!-- Colocado esse style somente por enquanto, mudar depois. -->
        <style>
            .card-body {
                padding-bottom: 0em !important;
                padding-top: 0.5em !important;
            }

            .first-card-body {
                padding-top: 1.5em !important;
            }

            .last-card-body {
                padding-bottom: 1em !important;
            }

            .card-invisible {
                display: none;
            }

        </style>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form id="quickForm">

                                @include('components.metatags',[ 'arg_object' => $work ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title',
                                    'id_input_text' => 'InputWorkTitle',
                                    'arg_value' => isset($work->title) ? $work->title : '',
                                    'arg_value_eng' => isset($work->title_eng) ? $work->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputWorkDescription',
                                    'arg_value' => isset($work->description) ? $work->description : '',
                                    'arg_value_eng' => isset($work->description_eng) ? $work->description_eng : ''
                                    ])
                                </div>
                                <!-- 11111 -->
                                @include('components.blockimgportifolio', [
                                'id'=>1,
                                'img'=>$work->img_1,
                                'imgprox'=>$work->img_2,
                                'title1' => $work->title_1,
                                'title1eng' => $work->title_1_eng,
                                'typex1' => $work->type_1_1,
                                'typex2' => $work->type_1_2,
                                'typex1eng' => $work->type_1_1,
                                'typex2eng' => $work->type_1_2,
                                ])
                                <!-- 22222 -->
                                @include('components.blockimgportifolio', [
                                'id'=>2,
                                'img'=>$work->img_2,
                                'imgprox'=>$work->img_3,
                                'title1' => $work->title_2,
                                'title1eng' => $work->title_2_eng,
                                'typex1' => $work->type_2_1,
                                'typex2' => $work->type_2_2,
                                'typex1eng' => $work->type_2_1,
                                'typex2eng' => $work->type_2_2,
                                ])
                                <!-- 33333 -->
                                @include('components.blockimgportifolio', [
                                'id'=>3,
                                'img'=>$work->img_3,
                                'imgprox'=>$work->img_4,
                                'title1' => $work->title_3,
                                'title1eng' => $work->title_3_eng,
                                'typex1' => $work->type_3_1,
                                'typex2' => $work->type_3_2,
                                'typex1eng' => $work->type_3_1,
                                'typex2eng' => $work->type_3_2,
                                ])
                                <!-- 44444 -->
                                @include('components.blockimgportifolio', [
                                'id'=>4,
                                'img'=>$work->img_4,
                                'imgprox'=>$work->img_5,
                                'title1' => $work->title_4,
                                'title1eng' => $work->title_4_eng,
                                'typex1' => $work->type_4_1,
                                'typex2' => $work->type_4_2,
                                'typex1eng' => $work->type_4_1,
                                'typex2eng' => $work->type_4_2,
                                ])
                                <!-- 55555 -->
                                @include('components.blockimgportifolio', [
                                'id'=>5,
                                'img'=>$work->img_5,
                                'imgprox'=>$work->img_6,
                                'title1' => $work->title_5,
                                'title1eng' => $work->title_5_eng,
                                'typex1' => $work->type_5_1,
                                'typex2' => $work->type_5_2,
                                'typex1eng' => $work->type_5_1,
                                'typex2eng' => $work->type_5_2,
                                ])
                                <!-- 66666 -->
                                @include('components.blockimgportifolio', [
                                'id'=>6,
                                'img'=>$work->img_6,
                                'imgprox'=>$work->img_7,
                                'title1' => $work->title_6,
                                'title1eng' => $work->title_6_eng,
                                'typex1' => $work->type_6_1,
                                'typex2' => $work->type_6_2,
                                'typex1eng' => $work->type_6_1,
                                'typex2eng' => $work->type_6_2,
                                ])
                                <!-- 77777 -->
                                @include('components.blockimgportifolio', [
                                'id'=>7,
                                'img'=>$work->img_7,
                                'imgprox'=>$work->img_8,
                                'title1' => $work->title_7,
                                'title1eng' => $work->title_7_eng,
                                'typex1' => $work->type_7_1,
                                'typex2' => $work->type_7_2,
                                'typex1eng' => $work->type_7_1,
                                'typex2eng' => $work->type_7_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>8,
                                'img'=>$work->img_8,
                                'imgprox'=>$work->img_9,
                                'title1' => $work->title_8,
                                'title1eng' => $work->title_8_eng,
                                'typex1' => $work->type_8_1,
                                'typex2' => $work->type_8_2,
                                'typex1eng' => $work->type_8_1,
                                'typex2eng' => $work->type_8_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>9,
                                'img'=>$work->img_9,
                                'imgprox'=>$work->img_10,
                                'title1' => $work->title_9,
                                'title1eng' => $work->title_9_eng,
                                'typex1' => $work->type_9_1,
                                'typex2' => $work->type_9_2,
                                'typex1eng' => $work->type_9_1,
                                'typex2eng' => $work->type_9_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>10,
                                'img'=>$work->img_10,
                                'imgprox'=>$work->img_11,
                                'title1' => $work->title_10,
                                'title1eng' => $work->title_10_eng,
                                'typex1' => $work->type_10_1,
                                'typex2' => $work->type_10_2,
                                'typex1eng' => $work->type_10_1,
                                'typex2eng' => $work->type_10_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>11,
                                'img'=>$work->img_11,
                                'imgprox'=>$work->img_12,
                                'title1' => $work->title_11,
                                'title1eng' => $work->title_11_eng,
                                'typex1' => $work->type_11_1,
                                'typex2' => $work->type_11_2,
                                'typex1eng' => $work->type_11_1,
                                'typex2eng' => $work->type_11_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>12,
                                'img'=>$work->img_12,
                                'imgprox'=>$work->img_13,
                                'title1' => $work->title_12,
                                'title1eng' => $work->title_12_eng,
                                'typex1' => $work->type_12_1,
                                'typex2' => $work->type_12_2,
                                'typex1eng' => $work->type_12_1,
                                'typex2eng' => $work->type_12_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>13,
                                'img'=>$work->img_13,
                                'imgprox'=>$work->img_14,
                                'title1' => $work->title_13,
                                'title1eng' => $work->title_13_eng,
                                'typex1' => $work->type_13_1,
                                'typex2' => $work->type_13_2,
                                'typex1eng' => $work->type_13_1,
                                'typex2eng' => $work->type_13_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>14,
                                'img'=>$work->img_14,
                                'imgprox'=>$work->img_15,
                                'title1' => $work->title_14,
                                'title1eng' => $work->title_14_eng,
                                'typex1' => $work->type_14_1,
                                'typex2' => $work->type_14_2,
                                'typex1eng' => $work->type_14_1,
                                'typex2eng' => $work->type_14_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>15,
                                'img'=>$work->img_15,
                                'imgprox'=>$work->img_16,
                                'title1' => $work->title_15,
                                'title1eng' => $work->title_15_eng,
                                'typex1' => $work->type_15_1,
                                'typex2' => $work->type_15_2,
                                'typex1eng' => $work->type_15_1,
                                'typex2eng' => $work->type_15_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>16,
                                'img'=>$work->img_16,
                                'imgprox'=>$work->img_17,
                                'title1' => $work->title_16,
                                'title1eng' => $work->title_16_eng,
                                'typex1' => $work->type_16_1,
                                'typex2' => $work->type_16_2,
                                'typex1eng' => $work->type_16_1,
                                'typex2eng' => $work->type_16_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>17,
                                'img'=>$work->img_17,
                                'imgprox'=>$work->img_18,
                                'title1' => $work->title_17,
                                'title1eng' => $work->title_17_eng,
                                'typex1' => $work->type_17_1,
                                'typex2' => $work->type_17_2,
                                'typex1eng' => $work->type_17_1,
                                'typex2eng' => $work->type_17_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>18,
                                'img'=>$work->img_18,
                                'imgprox'=>$work->img_19,
                                'title1' => $work->title_18,
                                'title1eng' => $work->title_18_eng,
                                'typex1' => $work->type_18_1,
                                'typex2' => $work->type_18_2,
                                'typex1eng' => $work->type_18_1,
                                'typex2eng' => $work->type_18_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>19,
                                'img'=>$work->img_19,
                                'imgprox'=>$work->img_20,
                                'title1' => $work->title_19,
                                'title1eng' => $work->title_19_eng,
                                'typex1' => $work->type_19_1,
                                'typex2' => $work->type_19_2,
                                'typex1eng' => $work->type_19_1,
                                'typex2eng' => $work->type_19_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>20,
                                'img'=>$work->img_20,
                                'imgprox'=>$work->img_21,
                                'title1' => $work->title_20,
                                'title1eng' => $work->title_20_eng,
                                'typex1' => $work->type_20_1,
                                'typex2' => $work->type_20_2,
                                'typex1eng' => $work->type_20_1,
                                'typex2eng' => $work->type_20_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>21,
                                'img'=>$work->img_21,
                                'imgprox'=>$work->img_22,
                                'title1' => $work->title_21,
                                'title1eng' => $work->title_21_eng,
                                'typex1' => $work->type_21_1,
                                'typex2' => $work->type_21_2,
                                'typex1eng' => $work->type_21_1,
                                'typex2eng' => $work->type_21_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>22,
                                'img'=>$work->img_22,
                                'imgprox'=>$work->img_23,
                                'title1' => $work->title_22,
                                'title1eng' => $work->title_22_eng,
                                'typex1' => $work->type_22_1,
                                'typex2' => $work->type_22_2,
                                'typex1eng' => $work->type_22_1,
                                'typex2eng' => $work->type_22_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>23,
                                'img'=>$work->img_23,
                                'imgprox'=>$work->img_24,
                                'title1' => $work->title_23,
                                'title1eng' => $work->title_23_eng,
                                'typex1' => $work->type_23_1,
                                'typex2' => $work->type_23_2,
                                'typex1eng' => $work->type_23_1,
                                'typex2eng' => $work->type_23_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>24,
                                'img'=>$work->img_24,
                                'imgprox'=>$work->img_25,
                                'title1' => $work->title_24,
                                'title1eng' => $work->title_24_eng,
                                'typex1' => $work->type_24_1,
                                'typex2' => $work->type_24_2,
                                'typex1eng' => $work->type_24_1,
                                'typex2eng' => $work->type_24_2,
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>25,
                                'img'=>$work->img_25,
                                'imgprox'=>$work->img_25,
                                'title1' => $work->title_25,
                                'title1eng' => $work->title_25_eng,
                                'typex1' => $work->type_25_1,
                                'typex2' => $work->type_25_2,
                                'typex1eng' => $work->type_25_1,
                                'typex2eng' => $work->type_25_2,
                                ])
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveWorkPage({{ isset($work->id) ? $work->id : 0 }})">Salvar modificações Work Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formWorkPage.js") }}"></script>
        <!-- /.content -->
        @endsection
