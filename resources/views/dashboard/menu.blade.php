<ul id="slide-out" class="side-nav">
  <li ><div class="user-view">
    <div class="background">
      <img src="/imagens/maxresdefault.jpg">
    </div>
    <a href="#!user"><img class="circle" src="http://10.152.16.34/projetos/sims_bacg/sims/fotos_bacg/{{ Session::get('pesidentidade') }}.JPG"></a>
    <a href="#!name"><span class="white-text name">{{ Session::get('grad') }} {{ Session::get('pesnguerra') }}</span></a>
    <a href="#!saram"><span class="white-text email">SARAM: {{ Session::get('pescodigo') }}</span></a>
  </div></li>
  <li>
    <a href="#!"><i class="material-icons">verified_user</i>
    @if ($administrador)
      <h6>Você é administrador do sistema</h6>
    @else
      <h6>Usuário do sistema</h6>
    @endif
    </a>
  </li>
    <li><div class="divider"></div></li>
    <br>
    <ul class="collapsible popout" data-collapsible="accordion">
      <li>
        <div class="collapsible-header"><i class="material-icons">lock</i>Administração</div>
        <div class=" center collapsible-body">
          <span>Ver todas as Ordens de Serviço</span><br>
        @if ($administrador)
          <a style="margin-bottom: 10px" href="{{ route('verTodasOs') }}" class="btn-floating waves-effect waves-light blue"><i class="material-icons">assignment</i></a>
        @endif
        <br>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">place</i>Ord. Serviço</div>
          <div class=" center collapsible-body">
        <span>Minhas Ordens de Serviço</span><br>
        <a style="margin-bottom: 10px" href="{{ route('ficha.index') }}" class="btn-floating waves-effect waves-light blue"><i class="material-icons">assignment</i></a>
      </div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons">group_add</i>Outro Militar</div>
        <div style="margin: 10px" class="collapsible-body">
          {!! Form::open(array('route' => 'outro', 'method' => 'POST')) !!}
           <label for="outro_militar">SARAM</label>
          {!! Form::text('outro_militar', null, array('size'=>'15', 'id'=>'outro_militar', 'placeholder' => 'SARAM')) !!}
          <button style="margin-bottom: 10px" class="btn-floating waves-effect waves-light" type="submit" name="action"><i class="material-icons right">send</i></button>
          {!! Form::close() !!}
        </div>
      </li>
    </ul>
</ul>
<br>
