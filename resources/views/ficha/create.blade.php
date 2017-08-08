
@extends('layout')

@section('titulo')
  ATRIX | Criar
@endsection

@section('topo')
  ATRIX | Criar
@endsection


@section('conteudo')

<div class="container">
    @include('dashboard.botoes')


        {!! Form::open(array('route' => 'ficha.store', 'method' => 'POST', 'name'=>'form1', 'id'=>'form1')) !!}
         {!! csrf_field() !!}
        @php
          $tela = 'create';
          $apresenta = '';
        @endphp

        @include('ficha.formulario.formulario')

        {!! Form::close() !!}

</div>

@include('dashboard.menu')

@endsection
