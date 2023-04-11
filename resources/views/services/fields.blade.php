<!-- Nom Field -->
<div class="form-group col-sm-10">
    {!! Form::label('nom', __('models/services.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-10">
    {!! Form::label('description', __('models/services.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>
