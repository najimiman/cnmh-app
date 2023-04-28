@extends('layouts.app')
<style>
    .md-stepper-horizontal {
        display: table;
        width: 100%;
        margin: 0 auto;
        background-color: #FFFFFF;
        box-shadow: 0 3px 8px -6px rgba(0, 0, 0, .50);
    }

    .md-stepper-horizontal .md-step {
        display: table-cell;
        position: relative;
        padding: 24px;
    }

    .md-stepper-horizontal .md-step:hover,
    .md-stepper-horizontal .md-step:active {
        background-color: rgba(0, 0, 0, 0.04);
    }

    .md-stepper-horizontal .md-step:active {
        border-radius: 15% / 75%;
    }

    .md-stepper-horizontal .md-step:first-child:active {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .md-stepper-horizontal .md-step:last-child:active {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .md-stepper-horizontal .md-step:hover .md-step-circle {
        background-color: #757575;
    }

    .md-stepper-horizontal .md-step:first-child .md-step-bar-left,
    .md-stepper-horizontal .md-step:last-child .md-step-bar-right {
        display: none;
    }

    .md-stepper-horizontal .md-step .md-step-circle {
        width: 30px;
        height: 30px;
        margin: 0 auto;
        background-color: #999999;
        border-radius: 50%;
        text-align: center;
        line-height: 30px;
        font-size: 16px;
        font-weight: 600;
        color: #FFFFFF;
    }


    .md-stepper-horizontal.orange .md-step.active .md-step-circle {
        background-color: #0275d8;
    }


    /* .md-stepper-horizontal .md-step.done .md-step-circle:before {

        font-weight: 100;
        content: "\f00c";
    } */

    .md-stepper-horizontal .md-step.done .md-step-circle *,
    .md-stepper-horizontal .md-step.editable .md-step-circle * {
        display: block;
    }

        .md-stepper-horizontal .md-step.editable .md-step-circle {
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    }
    .md-stepper-horizontal .md-step.editable .md-step-circle:before {
        /* font-family:'FontAwesome'; */
        font-weight: 100;
        content: "\f040";
    }

    .md-stepper-horizontal .md-step .md-step-title {
        margin-top: 16px;
        font-size: 16px;
        font-weight: 600;
    }

    .md-stepper-horizontal .md-step .md-step-title,
    .md-stepper-horizontal .md-step .md-step-optional {
        text-align: center;
        color: rgba(0, 0, 0, .26);
    }

    .md-stepper-horizontal .md-step.active .md-step-title {
        font-weight: 600;
        color: rgba(0, 0, 0, .87);
    }

    .md-stepper-horizontal .md-step.active.done .md-step-title,
    .md-stepper-horizontal .md-step.active.editable .md-step-title {
        font-weight: 600;
    }

     .md-stepper-horizontal .md-step .md-step-optional {
        font-size: 12px;
    }

    .md-stepper-horizontal .md-step.active .md-step-optional {
        color: rgba(0, 0, 0, .54);
    }

    .md-stepper-horizontal .md-step .md-step-bar-left,
    .md-stepper-horizontal .md-step .md-step-bar-right {
        position: absolute;
        top: 36px;
        height: 1px;
        border-top: 1px solid #DDDDDD;
    }

    .md-stepper-horizontal .md-step .md-step-bar-right {
        right: 0;
        left: 50%;
        margin-left: 20px;
    }

    .md-stepper-horizontal .md-step .md-step-bar-left {
        left: 0;
        right: 50%;
        margin-right: 20px;
    }
</style>
@section('content')
    <section class="content-header">


        <div class="container-fluid">

        </div>
    </section>


    <section class="content">
        <div class="container-fluid ">
            @include('flash::message')

            <div class="clearfix"></div>


            <div class="row">

                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <div class="md-stepper-horizontal orange">
                            <div class="md-step active done">
                                <div class="md-step-circle"><span>1</span></div>
                                <div class="md-step-title">Tuteur</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="md-step active done">
                                <div class="md-step-circle"><span>2</span></div>
                                <div class="md-step-title">Tuteur</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>
                            <div class="md-step active">
                                <div class="md-step-circle"><span>3</span></div>
                                <div class="md-step-title">Entretien social</div>
                                <div class="md-step-bar-left"></div>
                                <div class="md-step-bar-right"></div>
                            </div>

                        </div>
                        <div class="card-header">

                            <div class="col-sm-12 d-flex justify-content-between ">
                                <div class="col-sm-6">
                                    <a class="btn btn-primary " href="{{ route('tuteurs.create') }}">
                                        @lang('crud.add_new') Tuteur
                                    </a>
                                </div>

                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Recherche">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                @php
                                    $url = parse_url($_SERVER['REQUEST_URI']);
                                    // var_dump($url['query']);
                                @endphp
                                <form action="{{ route('dossier-patients.patient') }}" method="GET">

                                    <table class="table table-striped" id="tuteurs-table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Telephone</th>
                                                <th>Email</th>
                                                <th>Adresse</th>
                                                <th>Etat Civil</th>

                                                {{-- <th>Cin</th>
                                            <th>Remarques</th> --}}
                                                <th colspan="3">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tuteurs as $tuteur)
                                                <tr>
                                                    <td>

                                                        <input type="radio" value="{{ $tuteur->id }}" name="parentRadio"
                                                            aria-label="Radio button for following text input">
                                                    </td>

                                                    <td>{{ $tuteur->nom }}</td>
                                                    <td>{{ $tuteur->prenom }}</td>
                                                    <td>{{ $tuteur->telephone }}</td>
                                                    <td>{{ $tuteur->email }}</td>
                                                    <td>{{ $tuteur->adresse }}</td>
                                                    <td>{{ $tuteur->etatCivil->nom }}</td>
                                                    {{-- <td>{{ $tuteur->cin }}</td>
                                                <td>{{ $tuteur->remarques }}</td> --}}
                                                    <td style="width: 120px">

                                                        <div class='btn-group'>
                                                            <a href="{{ route('tuteurs.show', [$tuteur->id]) }}"
                                                                class='btn btn-default btn-sm'>
                                                                <i class="far fa-eye"></i>
                                                            </a>

                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>


                            </div>
                            <div class="ml-4 mb-3">
                                <button class="btn btn-primary">Next</button>

                            </div>
                            </form>
                            <div class="card-footer clearfix">
                                <div class="float-right">
                                    @include('adminlte-templates::common.paginate', [
                                        'records' => $tuteurs,
                                    ])
                                </div>
                                <div class="float-left">
                                    <button type="button" class="btn btn-default swalDefaultQuestion">
                                        <i class="fas fa-download"></i> Exporter
                                    </button>
                                    <button type="button" class="btn btn-default swalDefaultQuestion">
                                        <i class="fas fa-file-import"></i> Importer
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->

                </div>
            </div>
            <!-- /.card -->
            <div class="card-header row" style="display: flow-root;">
                <div style="display: flex;  justify-content: space-between;">

                    <ul class="pagination pagination my-0">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                    <div class="">

                        <button type="button" class="btn btn-default swalDefaultQuestion">
                            <i class="fas fa-download"></i> Export
                        </button>
                        <button type="button" class="btn btn-default swalDefaultQuestion">
                            <i class="fas fa-file-import"></i> Import
                        </button>
                    </div>
                </div>
            </div>



    </section>
@endsection

@push('page_scripts')
    <script>
        const tableContainer = $('#table-container')
        var searchQuery = ''

        const search = (query = '', page = 1) => {
            $.ajax('{{ route('tuteurs.index') }}', {
                data: {
                    query: query,
                    page: page
                },
                success: (data) => updateTable(data)
            })
            history.pushState(null, null, '?query=' + query + '&page=' + page)
        }

        const updateTable = (html) => {
            tableContainer.html(html)
            updatePaginationLinks()
        }

        const updatePaginationLinks = () => {
            $('button[page-number]').each(function() {
                $(this).on('click', function() {
                    pageNumber = $(this).attr('page-number')
                    search(searchQuery, pageNumber)
                })
            })
        }

        $(document).ready(() => {
            $('[type="search"]').on('input', function() {
                searchQuery = $(this).val()
                search(searchQuery)
            })
            updatePaginationLinks()
        })
    </script>
@endpush
