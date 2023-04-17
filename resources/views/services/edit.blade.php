@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>
                        @lang('crud.edit') @lang('models/service.singular')
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($service, ['route' => ['services.update', $service->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('services.fields')
                </div>
            </div>

           
            <div class="card-footer">
                <div class="d-flex bd-highlight mb-3">
                    <div class="p-2 bd-highlight">
                        {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
                    </div>
                    <div class="ml-auto p-2 bd-highlight">
                        <a href="{{ route('services.index') }}" class="btn btn-secondary"> @lang('crud.cancel')
                        </a>
                    </div>

                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
@push('page_scripts')
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 100,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
