<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <!--<link type="text/css" rel="stylesheet" href="/materialize/css/icons.css"  media="screen,projection"/>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>-->
    <link href="/materialize/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="/bst/css/jquery.dataTables.min.css" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

  </head>
  <body>
    <?php $tela = ''; ?>
    <nav>
       <div class="nav-wrapper">
         <a style="margin-left: 2em" href="/" class="brand-logo">@yield('topo')</a>
         <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
         <ul class="right hide-on-med-and-down">
           @if (!Session::get('pesnguerra'))

           @else
             <li class="dropdown">
                         <a href="#" class="dropdown-button btn" data-activates="dropdown1">Sair</a>

                         <ul id="dropdown1" class="dropdown-content">
                             <li>
                                 <a href="{{ url('/logout') }}"
                                     onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                     Logout
                                 </a>
                                 <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                 </form>
                             </li>
                         </ul>
                     </li>
            @endif
        </ul>
         <ul class="side-nav" id="mobile-demo">
           <li><a href="/login">Login</a></li>
          </ul>
       </div>
     </nav>


@yield('conteudo')


<div class="fixed-action-btn horizontal">
  <a class="btn-floating btn-large blue">
    <i class="material-icons">menu</i>
  </a>
  <ul>
    <li><a href="http://10.152.16.203/eti" target="_blank" class="btn-floating tooltipped red" data-position="top" data-delay="50" data-tooltip="Página ATIC-CG"><i class="material-icons">airplanemode_active</i></a></li>
    <li><a href="http://10.152.16.203/glpi" target="_blank" class="btn-floating tooltipped yellow darken-1" data-position="top" data-delay="50" data-tooltip="HelpDesk TI"><i class="material-icons">library_books</i></a></li>
    <li><a href="http://www.gapcg.intraer/gapcg/index.php/chefe" target="_blank" class="btn-floating tooltipped green" data-position="top" data-delay="50" data-tooltip="Conheça o Chefe do GAP-CG"><i class="material-icons">person_pin</i></a></li>
    <li><a href="http://servicos.sti.intraer/portal/consumer_email" target="_blank" class="btn-floating tooltipped blue" data-position="top" data-delay="50" data-tooltip="Webmail"><i class="material-icons">email</i></a></li>
  </ul>
</div>
<script src="/bst/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="/materialize/js/jquery-3.2.1.min.js"></script>
  <script src="/materialize/js/materialize.min.js"></script>
   <script src="/bst/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
        $('.tooltipped').tooltip({delay: 50});
         $(".button-collapse").sideNav();
         $('.collapsible').collapsible();
         $('select').material_select();

         var a = "<?php echo $tela; ?>";
         if ( a == 'edit') {
           $('#camposExtras').show();
         } else {
           $('#camposExtras').hide();
         };
         $("#alteracao_servico_s").click(function(){
           $('#camposExtras').show();
         });
         $("#alteracao_servico_n").click(function(){
           $('#camposExtras').hide();
         });

      });

  </script>
  <script>
 $(document).ready(function(){
   $('#pesquisa').DataTable( {
     "scrollY":        "300px",
       "scrollCollapse": true,
       "language": {
         "url": "/js/Portuguese-Brasil.json"
       }
   } );
});
 </script>
  </body>
</html>
