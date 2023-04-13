

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', __('models/employes.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', __('models/employes.fields.prenom').':') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/employes.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', __('models/employes.fields.telephone').':') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', __('models/employes.fields.adresse').':') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Naissance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_naissance', __('models/employes.fields.date_naissance').':') !!}
    {!! Form::date('date_naissance', null, ['class' => 'form-control','id'=>'date_naissance']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_naissance').datepicker()
    </script>
@endpush

<!-- Cin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cin', __('models/employes.fields.cin').':') !!}
    {!! Form::text('cin', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Fonction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonction', __('models/employes.fields.fonction').':') !!}
    {!! Form::text('fonction', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Embauche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_embauche', __('models/employes.fields.date_embauche').':') !!}
    {!! Form::date('date_embauche', null, ['class' => 'form-control','id'=>'date_embauche']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_embauche').datepicker()
    </script>
@endpush


@push('page_scripts')
    <script type="text/javascript">
        $('#date_depart').datepicker()
    </script>
@endpush


