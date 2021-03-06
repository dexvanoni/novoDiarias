@php
$val1 = Session::get('val1');
$val2 = Session::get('val2');
$val3 = Session::get('val3');
$val4 = Session::get('val4');
@endphp
<input type="hidden" name="_token" value="{!! csrf_token() !!}">

<ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header"><i class="material-icons">person</i>Topo</div>
    <div style="display: block; padding-bottom: 0px;"  class="collapsible-body">

      <div style="margin-bottom: 5px;" class="row">
        <div class="col s2">
          <img style="margin-left: 60px" src="/imagens/brasao.png" height="100em" width="100em" />
        </div>
        <div class="col s7">
          <center>
            <h5>COMANDO DA AERONÁUTICA</h5>
            <h6>GRUPAMENTO DE APOIO DE CAMPO GRANDE</h6>
            <div class="">
              @if ($tela == 'show')
                ORDEM DE SERVIÇO DE SOLICITAÇÃO DE DIÁRIAS Nº: {{ $os->id }}
              @else
                ORDEM DE SERVIÇO DE SOLICITAÇÃO DE DIÁRIAS
              @endif
              @php
              $don = Session::get('dono');
              @endphp
              {!! Form::input('hidden', 'dono', $value = $don) !!}
            </div>
            <div class="input-field col s2 push-s5">
              {!! Form::text('sc', null, ['id'=>'sc',  'size' => '4', 'width' => '3', 'class'=>'validate']) !!}
              <label for="sc"><sup>1</sup>SC</label>
            </div>
          </center>
        </div>
        <div class="center col s3">
            <h6>Data: {{ date('d/m/Y') }}</h6>
            <div class="center input-field col s6 push-s3">
            {!! Form::text('pcdp', null, ['id'=>'pcdp', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
              <label for="sc">N° PCDP:</label>
            </div>
        </div>
      </div>

    </div>
  </li>
  <li>
    <div class="collapsible-header"><i class="material-icons">person_pin_circle</i>Dados pessoais</div>
    <div class="collapsible-body">

      <div class="row">
        <h6>1 - DETERMINAÇÃO:</h6>
      </div>
      <div class="row">
        <h6>Determino ao militar/servidor civil abaixo que realize o serviço especificado, fora da sede desta OM, nas condições seguintes: <label style="color: red; font-size: 10px">* Campos automáticos (Alterar ficha no SIMS)</label></h6>
      </div>
      <!-- primeira linha da tabela-->
      <div class="row">
          <div class="input-field col s7">
              @if ($tela == 'create')
                {!! Form::input('text', 'pnome', $value = $pgrad, $attributes = ['id'=>'pcdp', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                <label for="pnome"><sup>2</sup>POSTO/GRAD e NOME COMPLETO*</label>
              @elseif ($tela == 'edit')
                {!! Form::text('pnome', null, ['id'=>'pnome', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                <label for="pnome"><sup>2</sup>POSTO/GRAD e NOME COMPLETO*</label>
              @endif
          </div>
          <div class="input-field col s2">
                  @if ($tela == 'create')
                    {!! Form::input('text', 'saram', $value = $saram, $attributes = ['id'=>'pcdp', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                    {!! Form::input('hidden', 'pescodigo', $value = $saram) !!}
                    <label for="saram"><sup>3</sup>SARAM*</label>
                  @elseif ($tela == 'edit')
                    {!! Form::text('saram', null, ['id'=>'saram', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                    <label for="saram"><sup>3</sup>SARAM*</label>
                  @endif
              </div>
              <div class="input-field col s3">
                      @if ($tela == 'create')
                        {!! Form::input('text', 'cpf', $value = $cpf, $attributes = ['id'=>'pcdp', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                        <label for="cpf"><sup>4</sup>CPF*</label>
                      @elseif ($tela == 'edit')
                        {!! Form::text('cpf', null, ['id'=>'cpf', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                        <label for="cpf"><sup>4</sup>CPF*</label>
                      @endif
                  </div>
            </div>

      <div class="row">
            <div class="input-field col s2">
                  {!! Form::text('banco', null, ['id'=>'banco', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                  <label for="banco"><sup>5</sup>BANCO</label>
            </div>

            <div class="input-field col s2">
                  {!! Form::text('agencia', null, ['id'=>'agencia', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                  <label for="agencia"><sup>6</sup>AGÊNCIA</label>
            </div>

            <div class="input-field col s2">
                  {!! Form::text('conta', null, ['id'=>'conta', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                  <label for="conta"><sup>7</sup>CONTA</label>
            </div>

            <div class="input-field col s4">
                    @if ($tela == 'create')
                      {!! Form::input('text', 'email', $value = $pemail, $attributes = ['id'=>'email', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                      <label for="email"><sup>8</sup>EMAIL*</label>
                    @elseif ($tela == 'edit')
                      {!! Form::text('email', null, ['id'=>'email', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                      <label for="email"><sup>8</sup>EMAIL*</label>
                    @endif
            </div>

            <div class="input-field col s2">
                    @if ($tela == 'create')
                      {!! Form::input('text', 'datanascimento', $value = date('d/m/Y', strtotime($datadenascimento)), $attributes = ['id'=>'datanascimento', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                      <label for="datanascimento"><sup>9</sup>DATA DE NASCIMENTO*</label>
                    @elseif ($tela == 'edit')
                      {!! Form::text('datanascimento', null, ['id'=>'datanascimento', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                      <label for="datanascimento"><sup>9</sup>DATA DE NASCIMENTO*</label>
                    @endif
            </div>
          </div>
      <!-- terceira linha da tabela-->
      <div class="row">
        <div class="input-field col s6">
              {!! Form::input('text', 'enquadramento', $value = 'Art. 18, do Dec. 4.307, de 19.jul.2002, e Portaria nº 1348/GC4, de 3 set 2015.', $attributes = ['id'=>'enquadramento', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
              <label for="enquadramento"><sup>10</sup>ENQUADRAMENTO</label>
        </div>

        <div class="input-field col s2">
                @if ($tela == 'create')
                  {!! Form::input('text', 'identidade', $value = $identidade, $attributes = ['id'=>'datanascimento', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                  <label for="identidade"><sup>11</sup>IDENTIDADE*</label>
                @elseif ($tela == 'edit')
                  {!! Form::text('identidade', null, ['id'=>'identidade', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                  <label for="identidade"><sup>11</sup>IDENTIDADE*</label>
                @endif
        </div>

          <div class="input-field col s2">
            {{ Form::select('om', ['GAP-CG'=>'GAP-CG', 'NuALA5'=> 'NuALA5'], null, ['placeholder'=>'Selecione']) }}
            <label for="om"><sup>12</sup>OM</label>
          </div>

          <div class="input-field col s2">
                  @if ($tela == 'create')
                    {!! Form::input('text', 'telefone', $value = $ramal, $attributes = ['id'=>'telefone', 'size' => '20', 'width' => '20', 'class'=>'validate']) !!}
                    <label for="telefone"><sup>13</sup>TELEFONE*</label>
                  @elseif ($tela == 'edit')
                    {!! Form::text('telefone', null, ['id'=>'telefone', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
                    <label for="telefone"><sup>13</sup>TELEFONE*</label>
                  @endif
          </div>
      </div>
  </li>

  <li>
    <div class="collapsible-header"><i class="material-icons">build</i>Serviço</div>
    <div class="collapsible-body">

      <div class="row">
        <div class="input-field col s12">
          {!! Form::text('servico', null, ['id'=>'servico', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
          <label for="servico"><sup>14</sup>SERVIÇO</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s5">
          {!! Form::text('documentos', null, ['id'=>'documentos', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
          <label for="documentos"><sup>15</sup>DOCUMENTOS QUE ORIGINARAM A MISSÃO</label>
        </div>

        <div class="input-field col s1">
          {!! Form::text('ne', null, ['id'=>'ne', 'size' => '6', 'width' => '10', 'class'=>'validate']) !!}
          <label for="ne"><sup>16</sup>NE</label>
        </div>

        <div class="input-field col s3">
          {{ Form::select('em_proveito', ['UNIÃO'=>'UNIÃO', 'PRÓPRIO'=> 'PRÓPRIO'], null, ['placeholder'=>'Selecione']) }}
          <label for="em_proveito"><sup>17</sup>MISSÃO EM PROVEITO</label>
        </div>

        <div class="input-field col s3">
          {{ Form::select('custeio', ['SEM CUSTO'=>'SEM CUSTO', 'DIÁRIA'=> 'DIÁRIA', 'COMISSIONAMENTO'=>'COMISSIONAMENTO'], null, ['placeholder'=>'Selecione']) }}
          <label for="custeio"><sup>18</sup>CUSTEIO</label>
        </div>
      </div>

    </div>
  </li>
  <!--################################# EDITAR DEPOIS OS TRECHOS##############################################-->
  <li>
    <div class="collapsible-header"><i class="material-icons">flight_takeoff</i>Trechos</div>
    <div class="collapsible-body">

      <!-- SÉTIMA linha da tabela-->
      <div id="camposAdd">
      <div class="row">
          <div title="Informe a cidade de realização do serviço" class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">19</span>
              {!! Form::select('tr[0][local_servico]', ['placeholder'=>'LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade):', 'val_br_am_rj'=>'Brasília, Manaus ou Rio de Janeiro', 'val_bh_fl_pa_rc_sl_sp'=> 'Belo Horizonte, Fortaleza, Porto Alegre, Recife, Salvador ou São Paulo', 'val_capitais'=>'Outra capital de Estado', 'val_cidades'=>'Outra Cidade'], null, ['class' => 'form-control input-sm', 'title'=>'LOCAL DE REALIZAÇÃO DO SERVIÇO (Cidade)', 'id'=>'local_servico[0]']) !!}
            </div>
          </div>
          <div class="col-md-2">
            {!! Form::input('checkbox', 'tr[0][houve_pernoite]', $value = "s", $attributes = ['id'=>'hp[0]']) !!}&nbsp&nbsp&nbspHouve Pernoite?
          </div>
          <div class="col-sm-2">
            {!! Form::text('tr[0][qt_pernoite]', null, array('id'=>'qt_pernoite[0]','class' =>'form-control input-sm', 'placeholder'=>'QNT DE PERNOITES:')) !!}
          </div>
          <div title="Informe os locais de pernoite" class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">20</span>
              {!! Form::text('tr[0][local_pernoite]', null, array('class' =>'form-control input-sm', 'placeholder'=>'LOCAL(IS) DE PERNOITE:')) !!}
            </div>
          </div>
          <p></p>
        </div>
        <p></p>
        <!-- datas e horas SÉTIMA linha da tabela-->
        <div class="row">
          <div title="Informe a data e hora de início e retorno do afastamento da sede" class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">21 - AFASTAMENTO DE SEDE:</span>
              {!! Form::text('tr[0][data_afastamento_inicio]', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Data Início:', 'id'=>'dt_ida[0]')) !!}
              {!! Form::text('tr[0][hora_afastamento_inicio]', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Hora:', 'id'=>'hr_ida[0]')) !!}
              {!! Form::text('tr[0][data_afastamento_retorno]', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Data Retorno:', 'id'=>'dt_ret[0]')) !!}
              {!! Form::text('tr[0][hora_afastamento_retorno]', null, array('class' => 'form-control input-sm a', 'placeholder'=>'Hora:', 'id'=>'hr_ret[0]')) !!}
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">22</span>
              {!! Form::select('tr[0][adicional_deslocamento]', ['placeholder'=>'Informe se houve ou não adicional de deslocamento:', 'SIM'=>'SIM', 'NÃO'=> 'NÃO'], null, ['id'=>'h_d[0]', 'class' => 'form-control input-sm a'], null, ['title'=>'(§1º, do Art.20, do Dec. 4.307/2002, alterado pelo Dec.6.907/2009)']) !!}
              {!! Form::select('tr[0][total_acrescimos]', ['placeholder'=>'TOTAL DE ACRÉSCIMOS:', 'DIÁRIA COMPLETA'=>'DIÁRIA COMPLETA', '1/2 DIÁRIA'=> '1/2 DIÁRIA'], null, ['class' => 'form-control input-sm a', 'id'=>'total_acrescimos[0]'], null, ['title'=>'Informe se Diária completa ou 1/2 diária']) !!}
            </div>
            <div style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group">
              <span style="border: 1px solid #D3D3D3; border-radius:3px; font-size: 10px" class="input-group-addon" id="basic-addon1">23 - VALOR TOTAL (Diária + Adc. Desl.)<br><br><br>Sem custo = </span>
              {!! Form::text('tr[0][valor_total]', null, array('title'=>'Valor total de diárias + adicionais de deslocamento', 'class' => 'form-control input-sm a', 'placeholder'=>'R$', 'id'=>'valor_total[0]')) !!}
              {!! Form::input('checkbox', 'tr[0][ck_valor_total]', $value = "Sem Custo", $attributes = ['id'=>'zc[0]', 'class' => 'form-control input-sm a']) !!}
            </div>
          </div>
          <!-- oitava linha da tabela-->
          <div class="col-md-4">
            <div class="input-group">
              <span title="Informe se faz jus a auxílio transporte" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">24 - AUXÍLIO TRANSPORTE:&nbsp</span>
              {!! Form::text('tr[0][t_s]', null, array('title'=>'Valor de transporte', 'class' => 'form-control input-sm a', 'placeholder'=>'R$', 'id'=>'valor_transp[0]')) !!}
            </div>
            <div class="input-group">
              <span title="Informe se faz jus a auxílio alimentação" style="border: 1px solid #D3D3D3; border-radius:3px" class="input-group-addon" id="basic-addon1">25 - AUXÍLIO ALIMENTAÇÃO:</span>
                {!! Form::text('tr[0][a_s]', null, array('title'=>'Valor de Alimentação', 'class' => 'form-control input-sm a', 'placeholder'=>'R$', 'id'=>'valor_alim[0]')) !!}
            </div>
          </div>
        </div>
      </div>
      <!-- campos para inserir mais localidades----------------------------------------------------------->
      <br><div id="campoPai"></div>
      <div class="pull-right">
        <button id="btAdd" type="button" class="btn btn-primary" aria-label="addCampo" onclick="addCampos()" title="Adicionar trecho">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Adicionar trecho
        </button><br>
      </div>
      <!--<input type="hidden" name="qtdeCampos" id="qtdeCampos"></input>-->
      <!------------------------------------------------------------------------------------------------------->

    </div>
  </li>
  <!--################################# EDITAR DEPOIS OS TRECHOS##############################################-->
  <li>
    <div class="collapsible-header"><i class="material-icons">help</i>Justificativas</div>
    <div class="collapsible-body">

      <div class="row">
        <div class="input-field col s12">
          {!! Form::textarea('fim_semana', null, ['id'=>'fim_semana', 'class'=>'materialize-textarea']) !!}
          <label for="fim_semana"><sup>26</sup>JUSTIFICATIVA DA MISSÃO EM FINAL DE SEMANA / FERIADO: (§ 2º, Art. 5º, do Dec. 5.992/2006)</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          {!! Form::textarea('conveniencia_servico', null, ['id'=>'conveniencia_servico', 'class'=>'materialize-textarea']) !!}
          <label for="conveniencia_servico"><sup>27</sup>JUSTIFICATIVA DA CONVENIÊNCIA DO SERVIÇO: (Inciso 2.1.3, da ICA 177-42)</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          {!! Form::textarea('justificativa', null, ['id'=>'justificativa', 'class'=>'materialize-textarea']) !!}
          <label for="justificativa"><sup>28</sup>JUSTIFICATIVA: (Art 1º, da Portaria 1348/GC4/2015)</label>
        </div>
      </div>
    </div>
  </li>

  <li>
    <div class="collapsible-header"><i class="material-icons">monetization_on</i>FACD</div>
    <div class="collapsible-body">

      <!-- ##########################  SEGUNDA SEÇÃO DA FICHA #############################################-->
      <!-- na tela de criação não aparece a FACD e nem HOMOLOGAÇÃO e na tela de edição não aparece a HOMOLOGAÇÃO. A HOMOLOGAÇÃO só aparece para o administrador -->
      <!-- decima TERCEIRA linha da tabela-->
        <div class="row">
          <h6>II - <sup>31</sup>FICHA DE APRESENTAÇÃO DE CONCESSÃO DE DIÁRIAS (FACD):</h6>
        </div>

        <div class="row">
          <div class="col s12">
            <h6>OCORRERAM, POR MOTIVO DE FORÇA MAIOR, ALTERAÇÕES NO LOCAL DE REALIZAÇÃO DO SERVIÇO E/OU NAS DATAS DE INÍCIO/RETORNO AUTORIZADOS INICIALMENTE?</h6>
          </div>
          <div class="col s12">
            {!! Form::radio('alteracao_servico', 'SIM', null, ['id'=>'alteracao_servico_s']) !!}
            <label for="alteracao_servico_s">Sim</label>

            {!! Form::radio('alteracao_servico', 'NÃO', null, ['id'=>'alteracao_servico_n']) !!}
            <label for="alteracao_servico_n">Não</label>
          </div>
          </div>
          <!-- DIV abaixo só aparece se o radio (de cima) SIM for selecionado (jquery escrita no template) -->
          <div class="row" style="border: 1px solid #42a5f5">
            <div class="input-field col s12" id="camposExtras" >
            <div class="col s12">
              {!! Form::textarea('justificativa_alteracao', null, ['id'=>'justificativa_alteracao', 'class'=>'materialize-textarea']) !!}
              <label for="justificativa_alteracao"><sup>28</sup>JUSTIFICATIVA</label>
            </div>
              <div class="col s2" style="padding-top: 7px; margin-right: -69px;">
                <h6>Campo Grande,</h6>
              </div>
              <div class="col s1">
                  {!! Form::text('dia', null, ['size'=>'3']) !!}
              </div>
              <div class="col s1" style="padding-top: 7px; margin-right: -63px;">
                <h6> de </h6>
              </div>
              <div class="col s3">
                {!! Form::text('mes', null,array('size' => '15')) !!}
              </div>
              <div class="col s3" style="padding-top: 7px; margin-right: -28px;">
                <h6>de 2017. Responsável pelo serviço: </h6>
              </div>
              <div class="col s3">
                {!! Form::text('responsavel', null,array('size' => '20')) !!}
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col s4" style="padding-top: 7px; margin-right: -75px;">
                <h6>Número de diárias completas computadas</h6>
              </div>
              <div class="col s2">
                {!! Form::text('qtn_dc', null, array('size'=>'6', 'id'=>'qtn_dc')) !!}
              </div>
              <div class="col s3" style="padding-top: 7px; margin-right: -32px;">
                <h6>Número de 1/2 diárias computadas</h6>
              </div>
              <div class="col s3">
                {!! Form::text('qtn_md', null, array('size'=>'6', 'id'=>'qtn_md')) !!}
              </div>
            </div>

          <div class="row">
              <h6>Publique-se</h6>
          </div>

          <div class="row">
              <h6>Campo Grande/MS, {{ date('d/m/Y') }}</h6>
          </div>

        </div>
  </li>

  <li>
    <div class="collapsible-header"><i class="material-icons">gavel</i>Homologação</div>
    <div class="collapsible-body">
      <div class="homologa">
          <div class="row">
            <h6><sup>32</sup>HOMOLOGAÇÃO</h6>
          </div>
          <div class="row">
            <div class="col s12">
              <p>a) Homologo a concessão de diárias</p>
            </div>
          </div>

          <div class="row">
          <div class="col s1">
            <p>b) 1.</p>
          </div>
          <div class="col s7" style="padding-top: 14px;">
            {!! Form::checkbox('conforme_previsto', 'Conforme previsto na presente Ordem de Serviço', false, array('id'=>'conforme_previsto')) !!}
            <label for="conforme_previsto" style="margin-left: -50px">Conforme previsto na presente Ordem de Serviço</label>
          </div>
          </div>

          <div class="row">
          <div class="col s1" style="padding-left: 1.75rem;">
            <p>2.</p>
          </div>
          <div class="col s7" style="padding-top: 14px;">
            {!! Form::checkbox('conforme_forca_maior', 'Conforme a seguir, por motivo de força maior', false, array('id'=>'conforme_forca_maior')) !!}
            <label for="conforme_forca_maior" style="margin-left: -50px">Conforme a seguir, por motivo de força maior</label>
          </div>
          </div>

          <div class="row">
            <div class="col s3">
              {!! Form::text('qt_meia_diaria', null, array('size'=>'3', 'id'=>'qt_meia_diaria')) !!}
              <label for="qt_meia_diaria">1/2 diária - Qtd</label>
              <div class="col s3">
                {!! Form::text('localidade_meia_diaria', null, array('size'=>'25')) !!}
                <label for="localidade_meia_diaria">referente a localidade de</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s3">
              {!! Form::text('qt_diaria_completa', null, array('size'=>'3', 'id'=>'qt_diaria_completa')) !!}
              <label for="qt_meia_diaria">Diária Completa</label>
              <div class="col s3">
                {!! Form::text('localidade_diaria_completa', null, array('size'=>'45')) !!}
                <label for="localidade_meia_diaria">referente a pernoite(s) em</label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col s3">
              {!! Form::text('num_total_acrescimos', null, array('size'=>'3', 'id'=>'num_total_acrescimos')) !!}
              <label for="qt_meia_diaria">Número total de acréscimos</label>
            </div>
          </div>

          <div class="row">
            <div class="col s12">
              {!! Form::radio('restituicao', 'SIM') !!}
              <label for="restituicao">Sim</label>

              {!! Form::radio('restituicao', 'NÃO') !!}
              <label for="restituicao">Não</label>
            </div>
          </div>


        <div class="col-md-offset-2">
          <div class="row">
            3. Restituição a efetuar:&nbsp&nbsp&nbsp&nbsp
            <div class="radio-inline">
              {!! Form::radio('restituicao', 'SIM') !!}SIM&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              {!! Form::radio('restituicao', 'NÃO') !!}NÃO&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </div>
            Valor: R$ {!! Form::text('valor_restituicao', null, array('size'=>'15', 'id'=>'valor_restituicao')) !!}
          </div>
          <div class="row">
            <br><br>
            <p>Publique-se:____________________________________________________________</p>
            <br>
          </div>
        </div>
      </div>

</div>
  </li>

</ul>

@if ($tela == 'show')
  <a href="{{ route('verTodasOs') }}" class="btn btn-primary"> Voltar</a>
@else
  <input type="submit" name="envia" id="sub" value="Salvar" class="btn btn-primary">
  {{ Form::reset('Limpar', array('class'=>'btn btn-danger')) }}
@endif
