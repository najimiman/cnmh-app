<div class="card-header">
    <div class="col-sm-12 d-flex justify-content-sart p-3">
        {{-- <div class="d-flex justify-content-between">
            <select   class="form-select  btn-default dropdown-toggle ml-2 filter" aria-label="Default select example">
                <option selected>Parents</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div> --}}
        {{-- <div class="col-sm-6">
            <a class="btn btn-primary float-right" href="{{ route('etatCivils.create') }}">
                @lang('crud.add_new') @lang('models/etatCivils.singular')
            </a>
        </div> --}}
        <a href="{{ route('etatCivils.create') }}" class="btn btn-primary">
            <i class="fa fa-plus"></i>
        </a>
    </div>
</div>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="etat-civils-table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($etatCivils as $etatCivil)
                    <tr>
                        <td>{!! $etatCivil->nom !!}</td>
                        <td>{!! $etatCivil->description !!}</td>
                        <td style="width: 120px">
                            {!! Form::open(['route' => ['etatCivils.destroy', $etatCivil->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('etatCivils.show', [$etatCivil->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('etatCivils.edit', [$etatCivil->id]) }}"
                                    class='btn btn-default btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'onclick' => "return confirm('Are you sure?')",
                                ]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $etatCivils])
        </div>
        {{-- <div class="float-left">
            <button type="button" class="btn btn-default swalDefaultQuestion">
                <i class="fas fa-download"></i> Exporter
            </button>
            <button type="button" class="btn btn-default swalDefaultQuestion">
                <i class="fas fa-file-import"></i> Importer
            </button>
        </div> --}}

        <div class="float-left">
            <a href="{{ route('etatCivils.export') }}" class="btn btn-default swalDefaultQuestion">
                <i class="fas fa-download"></i> Exporter
            </a>
            <form action="{{ route('etatCivils.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <button class="btn btn-default swalDefaultQuestion">
                    <i class="fas fa-file-import"></i> Importer
                </button>
            </form>
        </div>
    </div>
</div>

