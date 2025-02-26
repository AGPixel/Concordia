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
                                'img'=>isset($work->img_1) ? $work->img_1 : null,
                                'imgprox'=>isset($work->img_2) ? $work->img_2 : null,
                                'title1' => $work->title_1 ? $work->title_1 : '',
                                'title1eng' => isset($work->title_1_eng) ? $work->title_1_eng : '',
                                'typex1' => isset($work->type_1_1) ? $work->type_1_1 : '',
                                'typex2' => isset($work->type_1_2) ? $work->type_1_2 : '',
                                'typex1eng' => isset($work->type_1_1) ? $work->type_1_1 : '',
                                'typex2eng' => isset($work->type_1_2) ? $work->type_1_2 : '',
                                ])
                                <!-- 22222 -->
                                @include('components.blockimgportifolio', [
                                'id'=>2,
                                'img'=>$work->img_2 ? $work->img_2 : null,
                                'imgprox'=>isset($work->img_3) ? $work->img_3 : null,
                                'title1' => isset($work->title_2) ? $work->title_2 : '',
                                'title1eng' => isset($work->title_2_eng) ? $work->title_2_eng : '',
                                'typex1' => isset($work->type_2_1) ? $work->type_2_1 : '',
                                'typex2' => isset($work->type_2_2) ? $work->type_2_2 : '',
                                'typex1eng' => isset($work->type_2_1) ? $work->type_2_1 : '',
                                'typex2eng' => isset($work->type_2_2) ? $work->type_2_2 : '',
                                ])
                                <!-- 33333 -->
                                @include('components.blockimgportifolio', [
                                'id'=>3,
                                'img'=>isset($work->img_3) ? $work->img_3 : null,
                                'imgprox'=>isset($work->img_4) ? $work->img_4 : null,
                                'title1' => isset($work->title_3) ? $work->img_3 : '',
                                'title1eng' => isset($work->title_3_eng) ? $work->img_3 : '',
                                'typex1' => isset($work->type_3_1) ? $work->img_3 : '',
                                'typex2' => isset($work->type_3_2) ? $work->img_3 : '',
                                'typex1eng' => isset($work->type_3_1) ? $work->img_3 : '',
                                'typex2eng' => isset($work->type_3_2) ? $work->img_3 : '',
                                ])
                                <!-- 44444 -->
                                @include('components.blockimgportifolio', [
                                'id'=>4,
                                'img'=>isset($work->img_4) ? $work->img_4 : null,
                                'imgprox'=>isset($work->img_5) ? $work->img_5 : null,
                                'title1' => isset($work->title_4) ? $work->img_4 : '',
                                'title1eng' => isset($work->title_4_eng) ? $work->img_4 : '',
                                'typex1' => isset($work->type_4_1) ? $work->img_4 : '',
                                'typex2' => isset($work->type_4_2) ? $work->img_4 : '',
                                'typex1eng' => isset($work->type_4_1) ? $work->img_4 : '',
                                'typex2eng' => isset($work->type_4_2) ? $work->img_4 : '',
                                ])
                                <!-- 55555 -->
                                @include('components.blockimgportifolio', [
                                'id'=>5,
                                'img'=>isset($work->img_5) ? $work->img_5 : null,
                                'imgprox'=>isset($work->img_6) ? $work->img_6 : null,
                                'title1' => isset($work->title_5) ? $work->img_5 : '',
                                'title1eng' => isset($work->title_5_eng) ? $work->img_5 : '',
                                'typex1' => isset($work->type_5_1) ? $work->img_5 : '',
                                'typex2' => isset($work->type_5_2) ? $work->img_5 : '',
                                'typex1eng' => isset($work->type_5_1) ? $work->img_5 : '',
                                'typex2eng' => isset($work->type_5_2) ? $work->img_5 : '',
                                ])
                                <!-- 66666 -->
                                @include('components.blockimgportifolio', [
                                'id'=>6,
                                'img'=>isset($work->img_6) ? $work->img_6 : null,
                                'imgprox'=>isset($work->img_7) ? $work->img_7 : null,
                                'title1' => isset($work->title_6) ? $work->img_6 : '',
                                'title1eng' => isset($work->title_6_eng) ? $work->img_6 : '',
                                'typex1' => isset($work->type_6_1) ? $work->img_6 : '',
                                'typex2' => isset($work->type_6_2) ? $work->img_6 : '',
                                'typex1eng' => isset($work->type_6_1) ? $work->img_6 : '',
                                'typex2eng' => isset($work->type_6_2) ? $work->img_6 : '',
                                ])
                                <!-- 77777 -->
                                @include('components.blockimgportifolio', [
                                'id'=>7,
                                'img'=>isset($work->img_7) ? $work->img_7 : null,
                                'imgprox'=>isset($work->img_8) ? $work->img_8 : null,
                                'title1' => isset($work->title_7) ? $work->img_7 : '',
                                'title1eng' => isset($work->title_7_eng) ? $work->img_7 : '',
                                'typex1' => isset($work->type_7_1) ? $work->img_7 : '',
                                'typex2' => isset($work->type_7_2) ? $work->img_7 : '',
                                'typex1eng' => isset($work->type_7_1) ? $work->img_7 : '',
                                'typex2eng' => isset($work->type_7_2) ? $work->img_7 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>8,
                                'img'=>isset($work->img_8) ? $work->img_8 : null,
                                'imgprox'=>isset($work->img_9) ? $work->img_9 : null,
                                'title1' => isset($work->title_8) ? $work->img_8 : '',
                                'title1eng' => isset($work->title_8_eng) ? $work->img_8 : '',
                                'typex1' => isset($work->type_8_1) ? $work->img_8 : '',
                                'typex2' => isset($work->type_8_2) ? $work->img_8 : '',
                                'typex1eng' => isset($work->type_8_1) ? $work->img_8 : '',
                                'typex2eng' => isset($work->type_8_2) ? $work->img_8 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>9,
                                'img'=>isset($work->img_9) ? $work->img_9 : null,
                                'imgprox'=>isset($work->img_10) ? $work->img_10 : null,
                                'title1' => isset($work->title_9) ? $work->img_9 : '',
                                'title1eng' => isset($work->title_9_eng) ? $work->img_9 : '',
                                'typex1' => isset($work->type_9_1) ? $work->img_9 : '',
                                'typex2' => isset($work->type_9_2) ? $work->img_9 : '',
                                'typex1eng' => isset($work->type_9_1) ? $work->img_9 : '',
                                'typex2eng' => isset($work->type_9_2) ? $work->img_9 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>10,
                                'img'=>isset($work->img_10) ? $work->img_10 : null,
                                'imgprox'=>isset($work->img_11) ? $work->img_11 : null,
                                'title1' => isset($work->title_10) ? $work->img_10 : '',
                                'title1eng' => isset($work->title_10_eng) ? $work->img_10 : '',
                                'typex1' => isset($work->type_10_1) ? $work->img_10 : '',
                                'typex2' => isset($work->type_10_2) ? $work->img_10 : '',
                                'typex1eng' => isset($work->type_10_1) ? $work->img_10 : '',
                                'typex2eng' => isset($work->type_10_2) ? $work->img_10 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>11,
                                'img'=>isset($work->img_11) ? $work->img_11 : null,
                                'imgprox'=>isset($work->img_12) ? $work->img_12 : null,
                                'title1' => isset($work->title_11) ? $work->img_11 : '',
                                'title1eng' => isset($work->title_11_eng) ? $work->img_11 : '',
                                'typex1' => isset($work->type_11_1) ? $work->img_11 : '',
                                'typex2' => isset($work->type_11_2) ? $work->img_11 : '',
                                'typex1eng' => isset($work->type_11_1) ? $work->img_11 : '',
                                'typex2eng' => isset($work->type_11_2) ? $work->img_11 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>12,
                                'img'=>isset($work->img_12) ? $work->img_12 : null,
                                'imgprox'=>isset($work->img_13) ? $work->img_13 : null,
                                'title1' => isset($work->title_12) ? $work->img_12 : '',
                                'title1eng' => isset($work->title_12_eng) ? $work->img_12 : '',
                                'typex1' => isset($work->type_12_1) ? $work->img_12 : '',
                                'typex2' => isset($work->type_12_2) ? $work->img_12 : '',
                                'typex1eng' => isset($work->type_12_1) ? $work->img_12 : '',
                                'typex2eng' => isset($work->type_12_2) ? $work->img_12 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>13,
                                'img'=>isset($work->img_13) ? $work->img_13 : null,
                                'imgprox'=>isset($work->img_14) ? $work->img_14 : null,
                                'title1' => isset($work->title_13) ? $work->img_13 : '',
                                'title1eng' => isset($work->title_13_eng) ? $work->img_13 : '',
                                'typex1' => isset($work->type_13_1) ? $work->img_13 : '',
                                'typex2' => isset($work->type_13_2) ? $work->img_13 : '',
                                'typex1eng' => isset($work->type_13_1) ? $work->img_13 : '',
                                'typex2eng' => isset($work->type_13_2) ? $work->img_13 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>14,
                                'img'=>isset($work->img_14) ? $work->img_14 : null,
                                'imgprox'=>isset($work->img_15) ? $work->img_15 : null,
                                'title1' => isset($work->title_14) ? $work->img_14 : '',
                                'title1eng' => isset($work->title_14_eng) ? $work->img_14 : '',
                                'typex1' => isset($work->type_14_1) ? $work->img_14 : '',
                                'typex2' => isset($work->type_14_2) ? $work->img_14 : '',
                                'typex1eng' => isset($work->type_14_1) ? $work->img_14 : '',
                                'typex2eng' => isset($work->type_14_2) ? $work->img_14 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>15,
                                'img'=>isset($work->img_15) ? $work->img_15 : null,
                                'imgprox'=>isset($work->img_16) ? $work->img_16 : null,
                                'title1' => isset($work->title_15) ? $work->img_15 : '',
                                'title1eng' => isset($work->title_15_eng) ? $work->img_15 : '',
                                'typex1' => isset($work->type_15_1) ? $work->img_15 : '',
                                'typex2' => isset($work->type_15_2) ? $work->img_15 : '',
                                'typex1eng' => isset($work->type_15_1) ? $work->img_15 : '',
                                'typex2eng' => isset($work->type_15_2) ? $work->img_15 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>16,
                                'img'=>isset($work->img_16) ? $work->img_16 : null,
                                'imgprox'=>isset($work->img_17) ? $work->img_17 : null,
                                'title1' => isset($work->title_16) ? $work->img_16 : '',
                                'title1eng' => isset($work->title_16_eng) ? $work->img_16 : '',
                                'typex1' => isset($work->type_16_1) ? $work->img_16 : '',
                                'typex2' => isset($work->type_16_2) ? $work->img_16 : '',
                                'typex1eng' => isset($work->type_16_1) ? $work->img_16 : '',
                                'typex2eng' => isset($work->type_16_2) ? $work->img_16 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>17,
                                'img'=>isset($work->img_17) ? $work->img_17 : null,
                                'imgprox'=>isset($work->img_18) ? $work->img_18 : null,
                                'title1' => isset($work->title_17) ? $work->img_17 : '',
                                'title1eng' => isset($work->title_17_eng) ? $work->img_17 : '',
                                'typex1' => isset($work->type_17_1) ? $work->img_17 : '',
                                'typex2' => isset($work->type_17_2) ? $work->img_17 : '',
                                'typex1eng' => isset($work->type_17_1) ? $work->img_17 : '',
                                'typex2eng' => isset($work->type_17_2) ? $work->img_17 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>18,
                                'img'=>isset($work->img_18) ? $work->img_18 : null,
                                'imgprox'=>isset($work->img_19) ? $work->img_19 : null,
                                'title1' => isset($work->title_18) ? $work->img_18 : '',
                                'title1eng' => isset($work->title_18_eng) ? $work->img_18 : '',
                                'typex1' => isset($work->type_18_1) ? $work->img_18 : '',
                                'typex2' => isset($work->type_18_2) ? $work->img_18 : '',
                                'typex1eng' => isset($work->type_18_1) ? $work->img_18 : '',
                                'typex2eng' => isset($work->type_18_2) ? $work->img_18 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>19,
                                'img'=>isset($work->img_19) ? $work->img_19 : null,
                                'imgprox'=>isset($work->img_20) ? $work->img_20 : null,
                                'title1' => isset($work->title_19) ? $work->img_19 : '',
                                'title1eng' => isset($work->title_19_eng) ? $work->img_19 : '',
                                'typex1' => isset($work->type_19_1) ? $work->img_19 : '',
                                'typex2' => isset($work->type_19_2) ? $work->img_19 : '',
                                'typex1eng' => isset($work->type_19_1) ? $work->img_19 : '',
                                'typex2eng' => isset($work->type_19_2) ? $work->img_19 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>20,
                                'img'=>isset($work->img_20) ? $work->img_20 : null,
                                'imgprox'=>isset($work->img_21) ? $work->img_21 : null,
                                'title1' => isset($work->title_20) ? $work->img_20 : '',
                                'title1eng' => isset($work->title_20_eng) ? $work->img_20 : '',
                                'typex1' => isset($work->type_20_1) ? $work->img_20 : '',
                                'typex2' => isset($work->type_20_2) ? $work->img_20 : '',
                                'typex1eng' => isset($work->type_20_1) ? $work->img_20 : '',
                                'typex2eng' => isset($work->type_20_2) ? $work->img_20 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>21,
                                'img'=>isset($work->img_21) ? $work->img_21 : null,
                                'imgprox'=>isset($work->img_22) ? $work->img_22 : null,
                                'title1' => isset($work->title_21) ? $work->img_21 : '',
                                'title1eng' => isset($work->title_21_eng) ? $work->img_21 : '',
                                'typex1' => isset($work->type_21_1) ? $work->img_21 : '',
                                'typex2' => isset($work->type_21_2) ? $work->img_21 : '',
                                'typex1eng' => isset($work->type_21_1) ? $work->img_21 : '',
                                'typex2eng' => isset($work->type_21_2) ? $work->img_21 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>22,
                                'img'=>isset($work->img_22) ? $work->img_22 : null,
                                'imgprox'=>isset($work->img_23) ? $work->img_23 : null,
                                'title1' => isset($work->title_22) ? $work->img_22 : '',
                                'title1eng' => isset($work->title_22_eng) ? $work->img_22 : '',
                                'typex1' => isset($work->type_22_1) ? $work->img_22 : '',
                                'typex2' => isset($work->type_22_2) ? $work->img_22 : '',
                                'typex1eng' => isset($work->type_22_1) ? $work->img_22 : '',
                                'typex2eng' => isset($work->type_22_2) ? $work->img_22 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>23,
                                'img'=>isset($work->img_23) ? $work->img_23 : null,
                                'imgprox'=>isset($work->img_24) ? $work->img_24 : null,
                                'title1' => isset($work->title_23) ? $work->img_23 : '',
                                'title1eng' => isset($work->title_23_eng) ? $work->img_23 : '',
                                'typex1' => isset($work->type_23_1) ? $work->img_23 : '',
                                'typex2' => isset($work->type_23_2) ? $work->img_23 : '',
                                'typex1eng' => isset($work->type_23_1) ? $work->img_23 : '',
                                'typex2eng' => isset($work->type_23_2) ? $work->img_23 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>24,
                                'img'=>isset($work->img_24) ? $work->img_24 : null,
                                'imgprox'=>isset($work->img_25) ? $work->img_25 : null,
                                'title1' => isset($work->title_24) ? $work->img_24 : '',
                                'title1eng' => isset($work->title_24_eng) ? $work->img_24 : '',
                                'typex1' => isset($work->type_24_1) ? $work->img_24 : '',
                                'typex2' => isset($work->type_24_2) ? $work->img_24 : '',
                                'typex1eng' => isset($work->type_24_1) ? $work->img_24 : '',
                                'typex2eng' => isset($work->type_24_2) ? $work->img_24 : '',
                                ])
                                @include('components.blockimgportifolio', [
                                'id'=>25,
                                'img'=>isset($work->img_25) ? $work->img_25 : null,
                                'imgprox'=>null,
                                'title1' => isset($work->title_25) ? $work->img_25 : '',
                                'title1eng' => isset($work->title_25_eng) ? $work->img_25 : '',
                                'typex1' => isset($work->type_25_1) ? $work->img_25 : '',
                                'typex2' => isset($work->type_25_2) ? $work->img_25 : '',
                                'typex1eng' => isset($work->type_25_1) ? $work->img_25 : '',
                                'typex2eng' => isset($work->type_25_2) ? $work->img_25 : '',
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
