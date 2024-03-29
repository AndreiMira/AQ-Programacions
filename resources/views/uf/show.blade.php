@extends('layouts.app')

@section('template_title')
    {{ $uf->name ?? "{{ __('Show') Uf" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Uf</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ufs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $uf->name }}
                        </div>
                        <div class="form-group">
                            <strong>Hores:</strong>
                            {{ $uf->hours }}
                        </div>
                        <div class="form-group">
                            <strong>Modul:</strong>
                            {{ $uf->modul->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
