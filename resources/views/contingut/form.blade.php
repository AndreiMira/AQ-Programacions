<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', $contingut->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RA') }}
            <select name="ra_id" id="ra_id" class="form-control">
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" {{ $ra->id == $contingut->ra_id ? 'selected' : '' }}>
                        {{ $ra->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
