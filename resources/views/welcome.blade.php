
@extends('layout')

@section('titulo')
  ATRIX - Diárias | Home
@endsection

@section('topo')
  ATRIX
@endsection


@section('conteudo')
  <br><br><br>
<div class="container">

  <div class="row">

  <div class="col s4">
              <div class="center promo promo-example">
                <i class="material-icons">flash_on</i>
                  <p class="promo-caption">Acelera o desenvolvimento</p>
                  <p class="light center">Processamento rápido do começo ao fim das Ordens de Serviço</p>
              </div>
  </div>
  <div class="col s4">
              <div class="center promo promo-example">
                <i class="material-icons">group</i>
                  <p class="promo-caption">Foco na Experiência do Usuário</p>
                  <p class="light center">Sistema intuitivo e de fácil navegação.</p>
              </div>
  </div>
  <div class="col s4">
                  <div class="center promo promo-example">
                    <i class="material-icons">settings</i>
                      <p class="promo-caption">Fácil para Trabalhar</p>
                      <p class="light center">Poucos cliques, porém robusto!</p>
                  </div>
  </div>

</div>

<div class="row">
  <div class="col s4"></div>
  <div class="center col s4">
      <a class="btn tooltipped btn-floating btn-large pulse" href="/login" data-position="top" data-delay="50" data-tooltip="Entrar"><i class="material-icons">person</i></a>
  </div>
  <div class="col s4"></div>
</div>

</div>

@endsection
