<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
    <section class="content-header">
        {{-- <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    @lang('crud.create') @lang('models/etatCivils.singular')
                    </h1>
                </div>
            </div>
        </div>  --}}
    </section>




    <section class="content">
        @include('adminlte-templates::common.errors')
        <div class="container-fluid d-flex justify-content-center">

                <div class="col-md-10">
                    <div class="card card-primary card-create">
                        <div class="card-header">
                            <h3 class="card-title">@lang('crud.create') une nouvelle
                                {{ strtolower(__('models/etatCivils.singular')) }}</h3>
                        </div>
                        {!! Form::open(['route' => 'etatCivils.store']) !!}
                        <div class="card-body">
                            <div class="row">
                                @include('etat_civils.fields')
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex bd-highlight mb-1">
                                <div class="p-2 bd-highlight">
                                    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    
                                </div>
                                <div class="ml-auto p-2 bd-highlight">
                                    <a href="{{ route('etatCivils.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
                                </div>
    
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Saisir une description du service.',
                height: 100
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endsection
