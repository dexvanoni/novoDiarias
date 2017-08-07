
@extends('layout')

@section('titulo')
  ATRIX | Index
@endsection

@section('topo')
  ATRIX | Index
@endsection


@section('conteudo')
  @php
      $d1 = Session::get('pescodigo');
      $dono = Session::get('dono');
    @endphp
    <div class="container">
      <div class="row">
        <br>
        <div class="col s7 push-s5">
          <a href="{{ route('ficha.create') }}"class="btn-floating tooltipped waves-effect waves-light red" data-tooltip="Criar uma nova OS"><i class="material-icons">add</i></a>
        </div>
        <div class="col s5 pull-s7">
          <a href="{{ route('dashboard') }}"class="btn-floating tooltipped waves-effect waves-light blue lighten-1" data-tooltip="Voltar para o Dashboard"><i class="material-icons">home</i></a>
        </div>
      </div>

      <table id="pesquisa">
            <thead>
              <tr>
                <th>OS</th>
                <th>SARAM</th>
                <th>Referente a</th>
                <th>Serviço</th>
                <th>Ações</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($diaria as $diarias)
                <tr>
                  <th scope="row">{{ $diarias->id }}</th>
                  <td style="width: 10%" >{{ $diarias->saram }}</td>
                  <td style="width: 20%" >{{ $diarias->pnome}}</td>
                  <td style="width: 50%">{{ $diarias->servico }}</td>
                  <td style="width: 15%" >
                    <ul class="list-inline list-small">
                      <li title="Editar">
                        <a href="{{ route('ficha.edit', ['diarias' => $diarias->id, 'apresenta'=>'editando']) }}" class="btn-floating waves-effect waves-light red"><i class="material-icons">mode_edit</i></a>
                      </li>
                      <li>|</li>
                      <li title="Imprimir">
                        <a href="{{ route('ficha.impressao', ['diarias' => $diarias->id]) }}"class="btn-floating waves-effect waves-light red"><i class="material-icons">print</i></a>
                      </li>
                      <li>|</li>
                      <li title="Excluir">
                        <form action="{{ route('ficha.destroy', ['diarias' => $diarias->id]) }}" method="post">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                        </form>
                      </li>
                    </ul>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
    </div>


@endsection
