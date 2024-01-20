@extends('layouts.app')

@section('template_title')
    {{ $modul->name ?? "{{ __('Show') Modul" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Modul</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('moduls.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $modul->name }}
                        </div>
                        <div class="form-group">
                            <strong>Hores:</strong>
                            {{ $modul->hours }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcio:</strong>
                            {{ $modul->descripcio }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
