@extends('layouts.app')
@push('third_party_scripts')
    <!-- Summernote CSS - CDN Link -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush
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
                                <h3 class="card-title"> @lang('crud.create') un nouveau
                                    {{ strtolower(__('models/employes.singular')) }}
                                </h3>
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
        <input type="hidden" class="desc" value="@lang('models/service.summerNote-placeholder')">
        <!-- /.container-fluid -->
    </section>
@endsection
@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
@endpush
@push('page_scripts')
    <script>
        $(document).ready(function() {
           desc =  $(".desc").val();
            $('#description').summernote({
                placeholder: desc,

                height: 100,
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
