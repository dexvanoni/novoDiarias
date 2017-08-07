
@extends('layout')

@section('titulo')
  ATRIX | Dashboard
@endsection

@section('topo')
  ATRIX | Dash
@endsection


@section('conteudo')
@php
  $d1 = Session::get('pescodigo');
  $dono = Session::get('dono');
  $administrador = Session::get('administrador');
@endphp
<br><br><br>
<div class="container">
        <div class="row">
          <div class="col s6 offset-s3">
            <div class="card">
            <div class="card-image">

              <span class="card-title">Bem Vindo</span></img>
            </div>
            <div class="card-content">
              <p>Você está utilizando o novo Sistema de Controle de Diárias do GAP-CG</p>
              <p>Desenvolvido pela ATIC</p>
            </div>
            <div class="card-action">
              <a style="margin-left: 15px" href="#" data-activates="slide-out" class="btn-floating button-collapse pulse"><i class="medium material-icons">add_circle</i></a>
            </div>
          </div>
        </div>
      </div>

@include('dashboard.menu')
@endsection
