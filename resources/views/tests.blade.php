@extends('root')

@section('content-header')
    <h1>Título<small>DESCRIPCIÓN</small></h1>
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    {!! Field::text('name')!!}
                    {{ Date::now()->format('l') }}
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <solid-box title="Hola mundo" color="box-primary">
                Hola
            </solid-box>
        </div>
    </div>

    {!! $chart->render() !!}

@endsection
