@extends('layouts.masteradmin')

@section('title' ,'Panel Administrador')

@section('username' ,$usuario->name)
@section('usermail' ,$usuario->email)
@section('useravatar',$usuario->avatar)

@section('content')

@endsection