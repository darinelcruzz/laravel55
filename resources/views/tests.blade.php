@extends('root')

@section('content-header')
    <h1>Caja de arena    <small>PARA JUGAR Y PROBRAR COSAS</small></h1>
@endsection

@section('main-content')

    <div class="row">
        <div class="col-md-6">
            <solid-box title="Acordeon" color="default">
                <accordion>
                    <accordion-item title="Uno" color="success" open>
                        Acordeon número uno
                    </accordion-item>
                    <accordion-item title="Dos" color="danger">
                        Acordeon número dos
                    </accordion-item>
                    <accordion-item title="Tres" color="warning">
                        Acordeon número tres
                    </accordion-item>
                </accordion>
            </solid-box>
        </div>

        <div class="col-md-6">
            <tabs :tabs="['Víctor', 'Gauss', 'Enrique', 'Dari']">
                <tab i="1" active>
                    El cara
                </tab>
                <tab i="2">
                    El carismático
                </tab>
                <tab i="3">
                    El ausente
                </tab>
                <tab i="4">
                    El listo
                </tab>
            </tabs>

            <simple-box title="Carrusel">

                <carousel :items="5">
                    <carousel-item active
                          img="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"
                          caption="Primera">
                    </carousel-item>

                    <carousel-item
                        img="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"
                        caption="Segunda">
                    </carousel-item>
                    <carousel-item
                        img="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"
                        caption="Tercera">
                    </carousel-item>
                    <carousel-item
                        img="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"
                        caption="Cuarta">
                    </carousel-item>
                    <carousel-item
                        img="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"
                        caption="Quinta">
                    </carousel-item>
                </carousel>
            </simple-box>
        </div>
    </div>

@endsection
