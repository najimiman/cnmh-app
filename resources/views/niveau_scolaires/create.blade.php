@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                    @lang('crud.create') @lang('models/niveauScolaires.singular')
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
                                <h3 class="card-title">Ajouter un Nouveau Scolaire</h3>
                            </div>
                            <div class="card-body">
                                {!! Form::open(['route' => 'niveauScolaires.store']) !!}
                                <!-- Date -->
                                <div class="row">
                                    @include('niveau_scolaires.fields')
                                </div>


                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                <a href="{{ route('niveauScolaires.index') }}" class="btn btn-secondary"> @lang('crud.cancel') </a>
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

        <div class="card">

            {!! Form::open(['route' => 'niveauScolaires.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('niveau_scolaires.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('niveauScolaires.index') }}" class="btn btn-default"> @lang('crud.cancel') </a>
            </div>

            {!! Form::close() !!}

        </div>
    </div> --}}
@endsection
