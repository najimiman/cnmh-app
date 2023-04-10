<!-- Nom Field -->
<div class="form-group">
    {!! Form::label('nom', __('models/etatCivils.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/etatCivils.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>