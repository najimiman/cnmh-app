 <!-- Summernote CSS - CDN Link -->
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
 <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    @lang('crud.create') @lang('models/typeHandicaps.singular')
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid d-flex justify-content-center">
            <!-- Small boxes (Stat box) -->
            <div class="col-md-10 ">
                <!-- general form elements -->
                <div class="card card-primary card-create">
                    <div class="card-header">
                        <h3 class="card-title">Ajouter un nouveau type d'handicap</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    {!! Form::open(['route' => 'typeHandicaps.store']) !!}

                        <div class="card-body">
                            <div class="row">
                                @include('type_handicaps.fields')
                            </div>
                        </div>

                        <div class="card-footer">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                            <a href="{{ route('typeHandicaps.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
                        </div>
            
                        {!! Form::close() !!}
                </div>
                </form>
                <!-- /.card -->
            </div>
        </div>
    </section>
    {{-- <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'typeHandicaps.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('type_handicaps.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('typeHandicaps.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
 