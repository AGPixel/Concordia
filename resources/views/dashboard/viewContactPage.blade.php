@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Contacto')

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

        </style>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- form start -->
                            <form id="quickForm">
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Contact Email 1',
                                    'id_input_text' => 'InputContactEmail1',
                                    'arg_value' => $contact->email1 ? $contact->email1 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Contact Email 2',
                                    'id_input_text' => 'InputContactEmail2',
                                    'arg_value' => $contact->email2 ? $contact->email2 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtextpteng',[
                                    'title' => 'Contact Title',
                                    'id_input_text' => 'InputContactTitle',
                                    'arg_value' => $contact->contact_form_title ? $contact->contact_form_title : '',
                                    'arg_value_eng' => $contact->contact_form_title_eng ? $contact->contact_form_title_eng : ''
                                    ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Business Hour 1',
                                    'id_input_text' => 'InputBusinessHour1',
                                    'arg_value' => $contact->business_hours1 ? $contact->business_hours1 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Business Hour 2',
                                    'id_input_text' => 'InputBusinessHour2',
                                    'arg_value' => $contact->business_hours2 ? $contact->business_hours2 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Business Hour 3',
                                    'id_input_text' => 'InputBusinessHour3',
                                    'arg_value' => $contact->business_hours3 ? $contact->business_hours3 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Address 1',
                                    'id_input_text' => 'InputAddress1',
                                    'arg_value' => $contact->address1 ? $contact->address1 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Address 2',
                                    'id_input_text' => 'InputAddress2',
                                    'arg_value' => $contact->address2 ? $contact->address2 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Address 3',
                                    'id_input_text' => 'InputAddress3',
                                    'arg_value' => $contact->address3 ? $contact->address3 : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Map Latitude',
                                    'id_input_text' => 'InputMapLat',
                                    'arg_value' => $contact->map_lat ? $contact->map_lat : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Map Longitude',
                                    'id_input_text' => 'InputMapLen',
                                    'arg_value' => $contact->map_len ? $contact->map_len : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Footer Email',
                                    'id_input_text' => 'InputFooterEmail',
                                    'arg_value' => $contact->footer_email ? $contact->footer_email : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Footer Call',
                                    'id_input_text' => 'InputFooterCall',
                                    'arg_value' => $contact->footer_call ? $contact->footer_call : '' ])
                                </div>
                                <div class="card-body first-card-body">
                                    @include('components.inputtext',['flag' => 'pteng',
                                    'title' => 'Footer Skype',
                                    'id_input_text' => 'InputFooterSkype',
                                    'arg_value' => $contact->footer_skype ? $contact->footer_skype : '' ])
                                </div>

                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveContactPage()">Salvar modificações Contact Page</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <script src="{{ asset ("/js/formContactPage.js") }}"></script>
        <!-- /.content -->
        @endsection
