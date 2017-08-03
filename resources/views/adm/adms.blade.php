@extends('layout')

@section('titulo')
  ATRIX | admin
@endsection

@section('topo')
  ATRIX | Admin
@endsection

@section('conteudo')
<div class="container">
  <table>
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
                  <!--<li title="Ver">
                    <a href="{{ route('ficha.show', ['oss' => $diarias->id]) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span></a>
                  </li>
                  <li>|</li>-->
                  <li title="Imprimir">
                    <a href="{{ route('ficha.impressao', ['oss' => $diarias->id]) }}" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                  </li>
                  <li>|</li>
                  <li title="Apresentação">
                    <a href="{{ route('ficha.edit', ['oss' => $diarias->id, 'apresenta' => 'apresenta']) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></a>
                  </li>
                </ul>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
