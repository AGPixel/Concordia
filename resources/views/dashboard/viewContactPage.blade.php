@include('components.header')

<body class="hold-transition sidebar-mini">

    @include('components.modalLoading')

    <div class="wrapper">

        @include('components.topMenu')

        @include('components.leftMenu')

        @extends('components.tituloConteudo')

        @section('titulo','Index Page')

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
                                    <div class="form-group">
                                        <label for="InputContactEmail1">Contact Email 1</label>
                                        <input type="text" name="contactEmail1" class="form-control" id="InputContactEmail1" value="{{ $contact->email1 ? $contact->email1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputContactEmail2">Contact Email 2</label>
                                        <input type="text" name="contactEmail2" class="form-control" id="InputContactEmail2" value="{{ $contact->email2 ? $contact->email2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputContactTitle">Contact Title</label>
                                        <input type="text" name="contactTitle" class="form-control" id="InputContactTitle" value="{{ $contact->contact_form_title ? $contact->contact_form_title : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputBusinessHour1">Business Hour 1</label>
                                        <input type="text" name="businessHours1" class="form-control" id="InputBusinessHour1" value="{{ $contact->business_hours1 ? $contact->business_hours1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputBusinessHour2">Business Hour 2</label>
                                        <input type="text" name="businessHours2" class="form-control" id="InputBusinessHour2" value="{{ $contact->business_hours2 ? $contact->business_hours2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputBusinessHour3">Business Hour 3</label>
                                        <input type="text" name="businessHours3" class="form-control" id="InputBusinessHour3" value="{{ $contact->business_hours3 ? $contact->business_hours3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAddress1">Address 1</label>
                                        <input type="text" name="address1" class="form-control" id="InputAddress1" value="{{ $contact->address1 ? $contact->address1 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAddress2">Address 2</label>
                                        <input type="text" name="address2" class="form-control" id="InputAddress2" value="{{ $contact->address2 ? $contact->address2 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputAddress3">Address 3</label>
                                        <input type="text" name="address3" class="form-control" id="InputAddress3" value="{{ $contact->address3 ? $contact->address3 : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputMapLat">Map Latitude</label>
                                        <input type="text" name="mapLat" class="form-control" id="InputMapLat" value="{{ $contact->map_lat ? $contact->map_lat : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputMapLen">Map Longitude</label>
                                        <input type="text" name="mapLen" class="form-control" id="InputMapLen" value="{{ $contact->map_len ? $contact->map_len : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputFooterEmail">Footer Email</label>
                                        <input type="text" name="footerEmail" class="form-control" id="InputFooterEmail" value="{{ $contact->footer_email ? $contact->footer_email : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputFooterCall">Footer Call</label>
                                        <input type="text" name="footerCall" class="form-control" id="InputFooterCall" value="{{ $contact->footer_call ? $contact->footer_call : '' }}">
                                    </div>
                                </div>
                                <div class="card-body first-card-body">
                                    <div class="form-group">
                                        <label for="InputFooterSkype">Footer Skype</label>
                                        <input type="text" name="footerSkype" class="form-control" id="InputFooterSkype" value="{{ $contact->footer_skype ? $contact->footer_skype : '' }}">
                                    </div>
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
