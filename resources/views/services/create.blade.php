<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Summernote CSS - CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <!-- //Summernote CSS - CDN Link -->
@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        @lang('crud.create') @lang('models/services.singular')
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
                                <h3 class="card-title">Ajouter un nouveau service</h3>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'services.store']) !!}
                                <!-- Date -->
                                <div class="row">
                                    @include('services.fields')
                                </div>


                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('services.index') }}" class="btn btn-secondary"> @lang('crud.cancel') </a>
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
    {{-- <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card ">

            {!! Form::open(['route' => 'services.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('services.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('services.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div> --}}
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Summernote JS - CDN Link -->
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
