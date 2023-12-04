<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('any') }}
            {{ Form::text('any', $programacion->any, ['class' => 'form-control' . ($errors->has('any') ? ' is-invalid' : ''), 'placeholder' => 'Any']) }}
            {!! $errors->first('any', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('modul_id', 'Modul') }}
            <select class="form-control" name="modul_id" id="modul_id">
                @foreach (\App\Models\Modul::all() as $modul)
                    <option value="{{ $modul->id }}" {{ $modul->id == $programacion->modul_id ? 'selected' : '' }}>
                        {{ $modul->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('modul_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('user_id', 'User') }}
            <select class="form-control" name="user_id" id="user_id">
                @foreach (\App\Models\User::all() as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $programacion->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
