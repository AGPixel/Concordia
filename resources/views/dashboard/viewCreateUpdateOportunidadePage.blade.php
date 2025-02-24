@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Oportunidade')

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

                                @include('components.metatags',[ 'arg_object' => $oportunidade ])

                                <hr />

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Title',
                                    'id_input_text' => 'InputOportunidadeTitle',
                                    'arg_value' => isset($oportunidade->title) ? $oportunidade->title : '',
                                    'arg_value_eng' => isset($oportunidade->title_eng) ? $oportunidade->title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Description',
                                    'id_input_text' => 'InputOportunidadeDescription',
                                    'arg_value' => isset($oportunidade->description) ? $oportunidade->description : '',
                                    'arg_value_eng' => isset($oportunidade->description_eng) ? $oportunidade->description_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Year',
                                    'id_input_text' => 'InputOportunidadeYear',
                                    'arg_value' => isset($oportunidade->year) ? $oportunidade->year : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 1',
                                    'id_input_text' => 'InputOportunidadeJob1',
                                    'arg_value' => isset($oportunidade->job_1) ? $oportunidade->job_1 : '',
                                    'arg_value_eng' => isset($oportunidade->job_1_eng) ? $oportunidade->job_1_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Job 2',
                                    'id_input_text' => 'InputOportunidadeJob2',
                                    'arg_value' => isset($oportunidade->job_2) ? $oportunidade->job_2 : '',
                                    'arg_value_eng' => isset($oportunidade->job_2_eng) ? $oportunidade->job_2_eng : ''
                                    ])
                                </div>
                                @include('components.blockimgoportunidade', [
                                'id'=>1,
                                'img'=>$oportunidade->img_1,
                                'imgprox'=>$oportunidade->img_2,
                                'type' => $oportunidade->type_1,
                                'type_eng' => $oportunidade->type_1_eng,
                                'title' => $oportunidade->title_1,
                                'title_eng' => $oportunidade->title_1_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>2,
                                'img'=>$oportunidade->img_2,
                                'imgprox'=>$oportunidade->img_3,
                                'type' => $oportunidade->type_2,
                                'type_eng' => $oportunidade->type_2_eng,
                                'title' => $oportunidade->title_2,
                                'title_eng' => $oportunidade->title_2_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>3,
                                'img'=>$oportunidade->img_3,
                                'imgprox'=>$oportunidade->img_4,
                                'type' => $oportunidade->type_3,
                                'type_eng' => $oportunidade->type_3_eng,
                                'title' => $oportunidade->title_3,
                                'title_eng' => $oportunidade->title_3_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>4,
                                'img'=>$oportunidade->img_4,
                                'imgprox'=>$oportunidade->img_5,
                                'type' => $oportunidade->type_4,
                                'type_eng' => $oportunidade->type_4_eng,
                                'title' => $oportunidade->title_4,
                                'title_eng' => $oportunidade->title_4_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>5,
                                'img'=>$oportunidade->img_5,
                                'imgprox'=>$oportunidade->img_6,
                                'type' => $oportunidade->type_5,
                                'type_eng' => $oportunidade->type_5_eng,
                                'title' => $oportunidade->title_5,
                                'title_eng' => $oportunidade->title_5_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>6,
                                'img'=>$oportunidade->img_6,
                                'imgprox'=>$oportunidade->img_7,
                                'type' => $oportunidade->type_6,
                                'type_eng' => $oportunidade->type_6_eng,
                                'title' => $oportunidade->title_6,
                                'title_eng' => $oportunidade->title_6_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>7,
                                'img'=>$oportunidade->img_7,
                                'imgprox'=>$oportunidade->img_8,
                                'type' => $oportunidade->type_7,
                                'type_eng' => $oportunidade->type_7_eng,
                                'title' => $oportunidade->title_7,
                                'title_eng' => $oportunidade->title_7_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>8,
                                'img'=>$oportunidade->img_8,
                                'imgprox'=>$oportunidade->img_9,
                                'type' => $oportunidade->type_8,
                                'type_eng' => $oportunidade->type_8_eng,
                                'title' => $oportunidade->title_8,
                                'title_eng' => $oportunidade->title_8_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>9,
                                'img'=>$oportunidade->img_9,
                                'imgprox'=>$oportunidade->img_10,
                                'type' => $oportunidade->type_9,
                                'type_eng' => $oportunidade->type_9_eng,
                                'title' => $oportunidade->title_9,
                                'title_eng' => $oportunidade->title_9_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>10,
                                'img'=>$oportunidade->img_10,
                                'imgprox'=>$oportunidade->img_11,
                                'type' => $oportunidade->type_10,
                                'type_eng' => $oportunidade->type_10_eng,
                                'title' => $oportunidade->title_10,
                                'title_eng' => $oportunidade->title_10_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>11,
                                'img'=>$oportunidade->img_11,
                                'imgprox'=>$oportunidade->img_12,
                                'type' => $oportunidade->type_11,
                                'type_eng' => $oportunidade->type_11_eng,
                                'title' => $oportunidade->title_11,
                                'title_eng' => $oportunidade->title_11_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>12,
                                'img'=>$oportunidade->img_12,
                                'imgprox'=>$oportunidade->img_13,
                                'type' => $oportunidade->type_12,
                                'type_eng' => $oportunidade->type_12_eng,
                                'title' => $oportunidade->title_12,
                                'title_eng' => $oportunidade->title_12_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>13,
                                'img'=>$oportunidade->img_13,
                                'imgprox'=>$oportunidade->img_14,
                                'type' => $oportunidade->type_13,
                                'type_eng' => $oportunidade->type_13_eng,
                                'title' => $oportunidade->title_13,
                                'title_eng' => $oportunidade->title_13_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>14,
                                'img'=>$oportunidade->img_14,
                                'imgprox'=>$oportunidade->img_15,
                                'type' => $oportunidade->type_14,
                                'type_eng' => $oportunidade->type_14_eng,
                                'title' => $oportunidade->title_14,
                                'title_eng' => $oportunidade->title_14_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>15,
                                'img'=>$oportunidade->img_15,
                                'imgprox'=>$oportunidade->img_16,
                                'type' => $oportunidade->type_15,
                                'type_eng' => $oportunidade->type_15_eng,
                                'title' => $oportunidade->title_15,
                                'title_eng' => $oportunidade->title_15_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>16,
                                'img'=>$oportunidade->img_16,
                                'imgprox'=>$oportunidade->img_17,
                                'type' => $oportunidade->type_16,
                                'type_eng' => $oportunidade->type_16_eng,
                                'title' => $oportunidade->title_16,
                                'title_eng' => $oportunidade->title_16_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>17,
                                'img'=>$oportunidade->img_17,
                                'imgprox'=>$oportunidade->img_18,
                                'type' => $oportunidade->type_17,
                                'type_eng' => $oportunidade->type_17_eng,
                                'title' => $oportunidade->title_17,
                                'title_eng' => $oportunidade->title_17_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>18,
                                'img'=>$oportunidade->img_18,
                                'imgprox'=>$oportunidade->img_19,
                                'type' => $oportunidade->type_18,
                                'type_eng' => $oportunidade->type_18_eng,
                                'title' => $oportunidade->title_18,
                                'title_eng' => $oportunidade->title_18_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>19,
                                'img'=>$oportunidade->img_19,
                                'imgprox'=>$oportunidade->img_20,
                                'type' => $oportunidade->type_19,
                                'type_eng' => $oportunidade->type_19_eng,
                                'title' => $oportunidade->title_19,
                                'title_eng' => $oportunidade->title_19_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>20,
                                'img'=>$oportunidade->img_20,
                                'imgprox'=>$oportunidade->img_21,
                                'type' => $oportunidade->type_20,
                                'type_eng' => $oportunidade->type_20_eng,
                                'title' => $oportunidade->title_20,
                                'title_eng' => $oportunidade->title_20_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>21,
                                'img'=>$oportunidade->img_21,
                                'imgprox'=>$oportunidade->img_22,
                                'type' => $oportunidade->type_21,
                                'type_eng' => $oportunidade->type_21_eng,
                                'title' => $oportunidade->title_21,
                                'title_eng' => $oportunidade->title_21_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>22,
                                'img'=>$oportunidade->img_22,
                                'imgprox'=>$oportunidade->img_23,
                                'type' => $oportunidade->type_22,
                                'type_eng' => $oportunidade->type_22_eng,
                                'title' => $oportunidade->title_22,
                                'title_eng' => $oportunidade->title_22_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>23,
                                'img'=>$oportunidade->img_23,
                                'imgprox'=>$oportunidade->img_24,
                                'type' => $oportunidade->type_23,
                                'type_eng' => $oportunidade->type_23_eng,
                                'title' => $oportunidade->title_23,
                                'title_eng' => $oportunidade->title_23_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>24,
                                'img'=>$oportunidade->img_24,
                                'imgprox'=>$oportunidade->img_25,
                                'type' => $oportunidade->type_24,
                                'type_eng' => $oportunidade->type_24_eng,
                                'title' => $oportunidade->title_24,
                                'title_eng' => $oportunidade->title_24_eng,
                                ])
                                @include('components.blockimgoportunidade', [
                                'id'=>25,
                                'img'=>$oportunidade->img_25,
                                'imgprox'=>null,
                                'type' => $oportunidade->type_25,
                                'type_eng' => $oportunidade->type_25_eng,
                                'title' => $oportunidade->title_25,
                                'title_eng' => $oportunidade->title_25_eng,
                                ])

                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Contact Title',
                                    'id_input_text' => 'InputOportunidadeContactTitle',
                                    'arg_value' => isset($oportunidade->contact_title) ? $oportunidade->contact_title : '',
                                    'arg_value_eng' => isset($oportunidade->contact_title_eng) ? $oportunidade->contact_title_eng : ''
                                    ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveOportunidadePage({{ isset($oportunidade->id) ? $oportunidade->id : 0 }})">Salvar modificações Oportunidade Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formOportunidadePage.js") }}"></script>
        <!-- /.content -->
        @endsection
