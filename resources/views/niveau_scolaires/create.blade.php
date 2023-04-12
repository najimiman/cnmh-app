
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">


@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                   
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content px-3 ">
        @include('adminlte-templates::common.errors')
        <div class="container-fluid ">
            <div class="d-flex justify-content-center">

                <div class="col-md-10  ">

                    <div class="col-md-12  ">
                        <div class="card card-primary card-create ">
                            <div class="card-header">
                                <h3 class="card-title"> @lang('crud.create') un  @lang('models/niveauScolaires.singular')</h3>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'niveauScolaires.store']) !!}
                                <!-- Date -->
                                <div class="row">
                                    @include('niveau_scolaires.fields')
                                </div>


                            </div>

                            <div class="card-footer">
                                <div class="d-flex bd-highlight mb-3">
                                    <div class="p-2 bd-highlight">
                                        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
                
                                    </div>
                                    <div class="ml-auto p-2 bd-highlight">
                                        <a href="{{ route('niveauScolaires.index') }}" class="btn btn-secondary"> @lang('crud.cancel') </a>
                                    </div>
                
                                </div>
                            </div>
                          

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> --}}
    {{-- link add --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Saisir une description du service.',

                height: 100,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>




    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> --}}
