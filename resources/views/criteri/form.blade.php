<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('criteri') }}
            {{ Form::text('criteri', $criteri->criteri, ['class' => 'form-control' . ($errors->has('criteri') ? ' is-invalid' : ''), 'placeholder' => 'Criteri']) }}
            {!! $errors->first('criteri', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('ra_id', 'Ra') }}
            <select class="form-control" name="ra_id" id="ra_id">
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" {{ $ra->id == $criteri->ra_id ? 'selected' : '' }}>
                        {{ $ra->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('ra_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
