<div class="card-header">
    <div class="col-sm-12 d-flex justify-content-between p-0">
        <div class="d-flex justify-content-between">
            <select   class="form-select  btn-default dropdown-toggle ml-2 filter" aria-label="Default select example">
                <option selected>Parents</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input type="search" class="form-control form-control-lg"
                    placeholder="Recherche">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table table-striped" id="employes-table">
            <thead>
            <tr>
                <th>Etat Civil Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Adresse</th>
                <th>Date Naissance</th>
                <th>Lieu Naissance</th>
                <th>Sexe</th>
                <th>Cin</th>
                <th>Fonction</th>
                <th>Date Embauche</th>
                <th>Date Depart</th>
                <th>Statut</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employes as $employe)
                <tr>
                    <td>{{ $employe->etat_civil_id }}</td>
                    <td>{{ $employe->nom }}</td>
                    <td>{{ $employe->prenom }}</td>
                    <td>{{ $employe->email }}</td>
                    <td>{{ $employe->telephone }}</td>
                    <td>{{ $employe->adresse }}</td>
                    <td>{{ $employe->date_naissance }}</td>
                    <td>{{ $employe->lieu_naissance }}</td>
                    <td>{{ $employe->sexe }}</td>
                    <td>{{ $employe->cin }}</td>
                    <td>{{ $employe->fonction }}</td>
                    <td>{{ $employe->date_embauche }}</td>
                    <td>{{ $employe->date_depart }}</td>
                    <td>{{ $employe->statut }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['employes.destroy', $employe->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('employes.show', [$employe->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('employes.edit', [$employe->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
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
            @include('adminlte-templates::common.paginate', ['records' => $employes])
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
