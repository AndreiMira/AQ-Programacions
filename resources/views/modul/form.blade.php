<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $modul->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hours') }}
            {{ Form::text('hours', $modul->hours, ['class' => 'form-control' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => 'Hores']) }}
            {!! $errors->first('hours', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', $modul->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
