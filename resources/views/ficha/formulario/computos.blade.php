
<div style="border: 1px solid #D3D3D3; border-radius:3px" class="row">
  <center><h5><b>CÔMPUTO DE DIÁRIAS E ACRÉSCIMOS - POR LOCALIDADE</b></h5></center>
</div>
<!-- IDENTIFICAÇÃO DOS CAMPOS DA TABELA-->
<div style="border: 1px solid #D3D3D3; border-radius:3px" class="row">
  <div class="col-md-2">
    <center><b>Valor</b></center>
  </div>
  <div class="col-md-6">
    <center><b>Cidades</b></center>
  </div>
  <div class="col-md-2">
    <center><b>Quantidade</b></center>
  </div>
  <div class="col-md-2">
    <center><b>Subtotal</b></center>
  </div>
</div>
<div style="border: 1px solid #D3D3D3; border-radius:3px"  class="row">
  <!-- PRIMEIRA LINHA DA TABELA-->
  <div class="row">
    <div class="col-md-2">
      <center>{!! Form::text('val_br_am_rj', null, array('size'=>'6', 'id'=>'a')) !!}</center>
    </div>
    <div class="col-md-6">
      <center><h6>Brasília, Manaus, Rio de Janeiro</h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('qt_br_am_rj', null, array('size'=>'6', 'id'=>'a1')) !!} <label style="color: red; font-size: 10px" id="l1">+1/2</label> </center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('resultado1', null, array('size'=>'6', 'id'=>'resultado1')) !!}</center>
    </div>
  </div>
  <!-- SEGUNDA LINHA DA TABELA-->
  <div class="row">
    <div class="col-md-2">
      <center>{!! Form::text('val_bh_fl_pa_rc_sl_sp', null, array('size'=>'6', 'id'=>'b')) !!}</center>
    </div>
    <div class="col-md-6">
      <center><h6>Belo Horizonte, Fortaleza, Porto Alegre, Recife, Salvador e São Paulo</h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('qt_bh_fl_pa_rc_sl_sp', null, array('size'=>'6', 'id'=>'b1')) !!}<label style="color: red; font-size: 10px" id="l2">+1/2</label></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('resultado2', null, array('size'=>'6', 'id'=>'resultado2')) !!}</center>
    </div>
  </div>
  <!-- TERCEIRA LINHA DA TABELA-->
  <div class="row">
    <div class="col-md-2">
      <center>{!! Form::text('val_capitais', null, array('size'=>'6', 'id'=>'c')) !!}</center>
    </div>
    <div class="col-md-6">
      <center><h6>Demais capitais de Estado</h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('qt_capitais', null, array('size'=>'6', 'id'=>'c1')) !!}<label style="color: red; font-size: 10px" id="l3">+1/2</label></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('resultado3', null, array('size'=>'6', 'id'=>'resultado3')) !!}</center>
    </div>
  </div>
  <!-- QUARTA LINHA DA TABELA-->
  <div class="row">
    <div class="col-md-2">
      <center>{!! Form::text('val_cidades', null, array('size'=>'6', 'id'=>'d')) !!}</center>
    </div>
    <div class="col-md-6">
      <center><h6>Demais Cidades</h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('qt_cidades', null, array('size'=>'6', 'id'=>'d1')) !!}<label style="color: red; font-size: 10px" id="l4">+ 1/2</label></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('resultado4', null, array('size'=>'6', 'id'=>'resultado4')) !!}</center>
    </div>
  </div>
  <!-- LINHA DE ACRÉSCIMOS-->
  <hr>
  <div class="row">
    <div class="col-md-8">
      <center><h6><b>Acréscimos de Deslocamento</b></h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::input('text', 'qt_acrescimo', null, $attributes = ['id'=>'qt_acrescimo', 'size'=>'6']) !!} </center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::input('text', 'val_ac', null, $attributes = ['id'=>'val_ac','size'=>'6']) !!}</center>
    </div>
  </div>
  <!-- LINHA DE DESCONTOS-->
  <hr>
  <div class="row">
    <div class="col-md-2">
      <center><b>Valor Diário</b></center>
    </div>
    <div class="col-md-6">
      <center><b>Cômputo de Descontos</b></center>
    </div>
    <div class="col-md-2">
      <center><b>Dias Úteis</b></center>
    </div>
    <div class="col-md-2">
      <center><b>Subtotal</b></center>
    </div>
  </div>
  <!-- PRIMEIRA LINHA DESCONTO-->
  <div class="row">
    <div class="col-md-2">
      <center>{!! Form::text('desc_a', null, array('size'=>'6', 'id'=>'desc_a')) !!}</center>
    </div>
    <div class="col-md-6">
      <center><h6>Auxílio Alimentação - Valor líquido mensal: R$ 0</h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('qt_dias_a', null, array('size'=>'6', 'id'=>'qt_dias_a')) !!}</center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('resultado_dias_a', null, array('size'=>'6', 'id'=>'resultado_dias_a')) !!}</center>
    </div>
  </div>
  <!-- SEGUNDA LINHA DESCONTO-->
  <div class="row">
    <div class="col-md-2">
      <center>{!! Form::text('desc_b', null, array('size'=>'6', 'id'=>'desc_b')) !!}</center>
    </div>
    <div class="col-md-6">
      <center><h6>Auxílio Transporte - Valor líquido mensal: R$ 0</h6></center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('qt_dias_b', null, array('size'=>'6', 'id'=>'qt_dias_b')) !!}</center>
    </div>
    <div class="col-md-2">
      <center>{!! Form::text('resultado_dias_b', null, array('size'=>'6', 'id'=>'resultado_dias_b')) !!}</center>
    </div>
  </div>
  <div class="col-md-4">
    <center><p> ________________________________________ </p></center>
    <center><p>ORDENADOR DE DESPESAS</p></center>
  </div>
  <div class="col-md-2">
    <center><b>TOTAL</b></center>
  </div>
  <div class="col-md-2">
    <center>{!! Form::text('resultado_total', null, array('size'=>'6', 'id'=>'resultado_total')) !!}</center>
  </div>
