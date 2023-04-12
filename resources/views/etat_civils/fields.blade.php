<!-- Nom Field -->
<div class="form-group col-md-12">
    {!! Form::label('nom', __('models/etatCivils.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-md-12">
    {!! Form::label('description', __('models/etatCivils.fields.description').':') !!}
    {{-- {!! Form::text('description', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!} --}}
    <textarea class="form-control" name="description" id="description" cols="80" rows="5" required>{!! old('description') !!}</textarea>
</div>