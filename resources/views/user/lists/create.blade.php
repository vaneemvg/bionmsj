@extends('layouts.masteruser')

@section('title' ,'Nueva Lista')

@section('content')

    <form class="form-inline" method="POST" action="{{ route('listas.store') }}">
        @csrf

        <div class="form-group">
            <label for="inline-inputname" class="sr-only">Nombre de lista</label>
            <input type="name" placeholder="Ingrese Nombre" id="inline-inputname" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>

        </div>
    </form>
    <br>
    <p class="text-main text-bold mar-no">Contactos de lista</p>
    <p>Suba su archivo y cree una nueva lista.</p>


    <!--Dropzonejs-->
    <!--===================================================-->
    <form id="dropzone" action="#" class="dropzone">
        <div class="dz-default dz-message">
            <div class="dz-icon">
                <i class="pli-upload-to-cloud icon-5x"></i>
            </div>
            <div>
                <span class="dz-text">Suelta los archivos para subir</span>
                <p class="text-sm text-muted">o haga clic para seleccionar manualmente</p>
            </div>
        </div>
        <div class="fallback">
            <input name="file" type="file" multiple>
        </div>
    </form>
    <!--===================================================-->
    <!-- End Dropzonejs -->


    <!--Dropzone [ OPTIONAL ]-->
    <script src="{{asset('plugins/dropzone/dropzone.min.js')}}"></script>



@endsection