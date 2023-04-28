
<?php
$url = parse_url($_SERVER['REQUEST_URI']);
$explodePath = explode('=', $url['path']);
$parentId = $explodePath[1];
$explodeQuery = explode('=', $url['query']);
$patientId = $explodeQuery[1];
?>
<!-- Numero Dossier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_dossier', __('models/dossierPatients.fields.numero_dossier').':') !!}
    {!! Form::number('numero_dossier', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fonction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type handycap', __('models/employes.fields.type_handicap') . ':') !!}
    {{ Form::select(
        'type_handicap_id',
        ['' => '-- select Type handycape --'] + $type_handicap->pluck('nom', 'id')->toArray(),
        null,
        ['class' => 'form-control', 'required'],
    ) }}
</div>
<!-- Couverture Medical Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonction', __('models/employes.fields.couverture_medical') . ':') !!}
    {{ Form::select(
        'couverture_medical_id',
        ['' => '-- select couverture medical --'] + $couverture_medical->pluck('nom', 'id')->toArray(),
        null,
        ['class' => 'form-control', 'required'],
    ) }}
</div>

<!-- Date Enregsitrement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_enregsitrement', __('models/dossierPatients.fields.date_enregsitrement').':') !!}
    {!! Form::date('date_enregsitrement', null, ['class' => 'form-control','id'=>'date_enregsitrement']) !!}
</div>


<!-- Patient Id Field -->
<div class="form-group col-sm-6">
       {!! Form::label('patient_id', __('models/dossierPatients.fields.patient_id').':', ['hidden']) !!}
    {!! Form::number('patient_id', $patientId, ['class' => 'form-control', 'required', 'hidden']) !!}
</div>


<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('models/dossierPatients.fields.etat').':', ['hidden']) !!}
    {!! Form::text('etat', 'entretien social', ['class' => 'form-control', 'required', 'maxlength' => 255, 'hidden']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_enregsitrement').datepicker()
    </script>
@endpush
