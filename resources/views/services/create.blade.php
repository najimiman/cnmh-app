@extends('layouts.app')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
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
                                <h3 class="card-title">@lang('crud.create') @lang('models/services.singular')</h3>
                            </div>
                            <div class="card-body ">
                                {!! Form::open(['route' => 'services.store']) !!}
                                <!-- Date -->
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
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
@push('page_scripts')
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Saisir une description du service.',
                placeholder: '{{__("models/services.summerNote-placeholder")}}',
                height: 100,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
