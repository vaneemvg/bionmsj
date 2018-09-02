@extends('layouts.masteradmin')

@section('title' ,'Modificar Cliente '.$cliente->nombre)

@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!!   Form::open(['route'=>['clientes.update', $cliente],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('id','Id') !!}
        {!! Form::text('id',$cliente->id,['class'=>'form-control','placeholder'=>'Ingrese Id del Cliente','required','readonly']) !!}
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',$cliente->nombre,['class'=>'form-control','placeholder'=>'Ingrese Nombre','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close()!!}

@endsection
