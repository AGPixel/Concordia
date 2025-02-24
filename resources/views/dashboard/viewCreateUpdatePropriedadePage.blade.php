@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Propriedade')

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

                                @include('components.metatags',[ 'arg_object' => $propriedade ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title',
                                    'id_input_text' => 'InputPropriedadeTitle',
                                    'arg_value' => isset($propriedade->title) ? $propriedade->title : '',
                                    'arg_value_eng' => isset($propriedade->title_eng) ? $propriedade->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputPropriedadeDescription',
                                    'arg_value' => isset($propriedade->description) ? $propriedade->description : '',
                                    'arg_value_eng' => isset($propriedade->description_eng) ? $propriedade->description_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Year',
                                    'id_input_text' => 'InputPropriedadeYear',
                                    'arg_value' => isset($propriedade->year) ? $propriedade->year : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 1',
                                    'id_input_text' => 'InputPropriedadeJob1',
                                    'arg_value' => isset($propriedade->job_1) ? $propriedade->job_1 : '',
                                    'arg_value_eng' => isset($propriedade->job_1_eng) ? $propriedade->job_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 2',
                                    'id_input_text' => 'InputPropriedadeJob2',
                                    'arg_value' => isset($propriedade->job_2) ? $propriedade->job_2 : '',
                                    'arg_value_eng' => isset($propriedade->job_2_eng) ? $propriedade->job_2_eng : ''
                                    ])
                                </div>
                                @include('components.blockimgpropriedade', [
                                'id'=>1,
                                'img'=>$propriedade->img_1,
                                'imgprox'=>$propriedade->img_2,
                                'type' => $propriedade->type_1,
                                'type_eng' => $propriedade->type_1_eng,
                                'legend' => $propriedade->legend_1,
                                'legend_eng' => $propriedade->legend_1_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>2,
                                'img'=>$propriedade->img_2,
                                'imgprox'=>$propriedade->img_3,
                                'type' => $propriedade->type_2,
                                'type_eng' => $propriedade->type_2_eng,
                                'legend' => $propriedade->legend_2,
                                'legend_eng' => $propriedade->legend_2_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>3,
                                'img'=>$propriedade->img_3,
                                'imgprox'=>$propriedade->img_4,
                                'type' => $propriedade->type_3,
                                'type_eng' => $propriedade->type_3_eng,
                                'legend' => $propriedade->legend_3,
                                'legend_eng' => $propriedade->legend_3_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>4,
                                'img'=>$propriedade->img_4,
                                'imgprox'=>$propriedade->img_5,
                                'type' => $propriedade->type_4,
                                'type_eng' => $propriedade->type_4_eng,
                                'legend' => $propriedade->legend_4,
                                'legend_eng' => $propriedade->legend_4_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>5,
                                'img'=>$propriedade->img_5,
                                'imgprox'=>$propriedade->img_6,
                                'type' => $propriedade->type_5,
                                'type_eng' => $propriedade->type_5_eng,
                                'legend' => $propriedade->legend_5,
                                'legend_eng' => $propriedade->legend_5_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>6,
                                'img'=>$propriedade->img_6,
                                'imgprox'=>$propriedade->img_7,
                                'type' => $propriedade->type_6,
                                'type_eng' => $propriedade->type_6_eng,
                                'legend' => $propriedade->legend_6,
                                'legend_eng' => $propriedade->legend_6_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>7,
                                'img'=>$propriedade->img_7,
                                'imgprox'=>$propriedade->img_8,
                                'type' => $propriedade->type_7,
                                'type_eng' => $propriedade->type_7_eng,
                                'legend' => $propriedade->legend_7,
                                'legend_eng' => $propriedade->legend_7_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>8,
                                'img'=>$propriedade->img_8,
                                'imgprox'=>$propriedade->img_9,
                                'type' => $propriedade->type_8,
                                'type_eng' => $propriedade->type_8_eng,
                                'legend' => $propriedade->legend_8,
                                'legend_eng' => $propriedade->legend_8_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>9,
                                'img'=>$propriedade->img_9,
                                'imgprox'=>$propriedade->img_10,
                                'type' => $propriedade->type_9,
                                'type_eng' => $propriedade->type_9_eng,
                                'legend' => $propriedade->legend_9,
                                'legend_eng' => $propriedade->legend_9_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>10,
                                'img'=>$propriedade->img_10,
                                'imgprox'=>$propriedade->img_11,
                                'type' => $propriedade->type_10,
                                'type_eng' => $propriedade->type_10_eng,
                                'legend' => $propriedade->legend_10,
                                'legend_eng' => $propriedade->legend_10_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>11,
                                'img'=>$propriedade->img_11,
                                'imgprox'=>$propriedade->img_12,
                                'type' => $propriedade->type_11,
                                'type_eng' => $propriedade->type_11_eng,
                                'legend' => $propriedade->legend_11,
                                'legend_eng' => $propriedade->legend_11_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>12,
                                'img'=>$propriedade->img_12,
                                'imgprox'=>$propriedade->img_13,
                                'type' => $propriedade->type_12,
                                'type_eng' => $propriedade->type_12_eng,
                                'legend' => $propriedade->legend_12,
                                'legend_eng' => $propriedade->legend_12_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>13,
                                'img'=>$propriedade->img_13,
                                'imgprox'=>$propriedade->img_14,
                                'type' => $propriedade->type_13,
                                'type_eng' => $propriedade->type_13_eng,
                                'legend' => $propriedade->legend_13,
                                'legend_eng' => $propriedade->legend_13_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>14,
                                'img'=>$propriedade->img_14,
                                'imgprox'=>$propriedade->img_15,
                                'type' => $propriedade->type_14,
                                'type_eng' => $propriedade->type_14_eng,
                                'legend' => $propriedade->legend_14,
                                'legend_eng' => $propriedade->legend_14_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>15,
                                'img'=>$propriedade->img_15,
                                'imgprox'=>$propriedade->img_16,
                                'type' => $propriedade->type_15,
                                'type_eng' => $propriedade->type_15_eng,
                                'legend' => $propriedade->legend_15,
                                'legend_eng' => $propriedade->legend_15_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>16,
                                'img'=>$propriedade->img_16,
                                'imgprox'=>$propriedade->img_17,
                                'type' => $propriedade->type_16,
                                'type_eng' => $propriedade->type_16_eng,
                                'legend' => $propriedade->legend_16,
                                'legend_eng' => $propriedade->legend_16_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>17,
                                'img'=>$propriedade->img_17,
                                'imgprox'=>$propriedade->img_18,
                                'type' => $propriedade->type_17,
                                'type_eng' => $propriedade->type_17_eng,
                                'legend' => $propriedade->legend_17,
                                'legend_eng' => $propriedade->legend_17_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>18,
                                'img'=>$propriedade->img_18,
                                'imgprox'=>$propriedade->img_19,
                                'type' => $propriedade->type_18,
                                'type_eng' => $propriedade->type_18_eng,
                                'legend' => $propriedade->legend_18,
                                'legend_eng' => $propriedade->legend_18_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>19,
                                'img'=>$propriedade->img_19,
                                'imgprox'=>$propriedade->img_20,
                                'type' => $propriedade->type_19,
                                'type_eng' => $propriedade->type_19_eng,
                                'legend' => $propriedade->legend_19,
                                'legend_eng' => $propriedade->legend_19_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>20,
                                'img'=>$propriedade->img_20,
                                'imgprox'=>$propriedade->img_21,
                                'type' => $propriedade->type_20,
                                'type_eng' => $propriedade->type_20_eng,
                                'legend' => $propriedade->legend_20,
                                'legend_eng' => $propriedade->legend_20_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>21,
                                'img'=>$propriedade->img_21,
                                'imgprox'=>$propriedade->img_22,
                                'type' => $propriedade->type_21,
                                'type_eng' => $propriedade->type_21_eng,
                                'legend' => $propriedade->legend_21,
                                'legend_eng' => $propriedade->legend_21_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>22,
                                'img'=>$propriedade->img_22,
                                'imgprox'=>$propriedade->img_23,
                                'type' => $propriedade->type_22,
                                'type_eng' => $propriedade->type_22_eng,
                                'legend' => $propriedade->legend_22,
                                'legend_eng' => $propriedade->legend_22_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>23,
                                'img'=>$propriedade->img_23,
                                'imgprox'=>$propriedade->img_24,
                                'type' => $propriedade->type_23,
                                'type_eng' => $propriedade->type_23_eng,
                                'legend' => $propriedade->legend_23,
                                'legend_eng' => $propriedade->legend_23_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>24,
                                'img'=>$propriedade->img_24,
                                'imgprox'=>$propriedade->img_25,
                                'type' => $propriedade->type_24,
                                'type_eng' => $propriedade->type_24_eng,
                                'legend' => $propriedade->legend_24,
                                'legend_eng' => $propriedade->legend_24_eng,
                                ])
                                @include('components.blockimgpropriedade', [
                                'id'=>25,
                                'img'=>$propriedade->img_25,
                                'imgprox'=>null,
                                'type' => $propriedade->type_25,
                                'type_eng' => $propriedade->type_25_eng,
                                'legend' => $propriedade->legend_25,
                                'legend_eng' => $propriedade->legend_25_eng,
                                ])

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Contact Title',
                                    'id_input_text' => 'InputPropriedadeContactTitle',
                                    'arg_value' => isset($propriedade->contact_title) ? $propriedade->contact_title : '',
                                    'arg_value_eng' => isset($propriedade->contact_title_eng) ? $propriedade->contact_title_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="savePropriedadePage({{ isset($propriedade->id) ? $propriedade->id : 0 }})">Salvar modificações Propriedade Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formPropriedadePage.js") }}"></script>
        <!-- /.content -->
        @endsection
