<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="dossier-patients-table">
            <thead>
                <tr>
                    <th>Numero Dossier</th>
                    <th>Patient</th>
                    {{-- <th>Couverture Medical</th> --}}
                    <th>État de processus</th>
                    {{-- <th>Date Enregsitrement</th> --}}
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dossierPatients as $dossierPatient)
                <tr>
                    <td>{{ $dossierPatient->numero_dossier }}</td>
                    <td>{{ $dossierPatient->patient->nom }}</td>
                    {{-- <td>{{ $dossierPatient->couvertureMedical->nom }}</td> --}}
                    <td>{{ $dossierPatient->etat }}</td>
                    {{-- <td>{{ $dossierPatient->date_enregsitrement }}</td> --}}

                    <td style="width: 120px">
                        {{-- {!! Form::open(['route' => ['dossierPatients.destroy', $dossierPatient->id], 'method' =>
                        'delete']) !!} --}}

                        <div class='btn-group'>
                            <a href="{{ route('dossier-patients.show', [$dossierPatient->id]) }}"
                                class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dossier-patients.edit', [$dossierPatient->id]) }}"
                                class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $dossierPatients])
        </div>
        <div class="float-left">
            <button type="button" class="btn btn-default swalDefaultQuestion">
                <i class="fas fa-download"></i> Exporter
            </button>
            <button type="button" class="btn btn-default swalDefaultQuestion">
                <i class="fas fa-file-import"></i> Importer
            </button>
        </div>
    </div>
</div>
