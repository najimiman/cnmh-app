@extends('layouts.app')

@section('content')

    
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('models/couvertureMedicals.plural')</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('couvertureMedicals.create') }}">
                         @lang('crud.add_new') Couverture Medical
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            @include('couverture_medicals.table')
        </div>
    </div>

@endsection
