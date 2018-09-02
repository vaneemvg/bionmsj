@extends('layouts.masteradmin')

@section('title' ,'Nuevo Usuario')

@section('content')
    {!!   Form::open(['route'=>'clientes.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('nombre','Nombre') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Email') !!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@gmail.com','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Contraseña') !!}
        {!! Form::password('password',null,['class'=>'form-control','placeholder'=>'*********','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tipo','Tipo') !!}
        {!! Form::select('tipo',[''=>'Seleccione un tipo','USER'=>'Usuario','ADMIN'=>'Administrador'],null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close()!!}
@endsection