<!-- Patients Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patients_id', __('models/reclamations.fields.patients_id').':') !!}
    {!! Form::number('patients_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Objet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objet', __('models/reclamations.fields.objet').':') !!}
    {!! Form::text('objet', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/reclamations.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Remarques Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarques', __('models/reclamations.fields.remarques').':') !!}
    {!! Form::text('remarques', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Reclamation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_reclamation', __('models/reclamations.fields.date_reclamation').':') !!}
    {!! Form::text('date_reclamation', null, ['class' => 'form-control','id'=>'date_reclamation']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_reclamation').datepicker()
    </script>
@endpush