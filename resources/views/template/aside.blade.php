<aside class="main-sidebar" style="position:fixed">
  <section class="sidebar">
    <ul class="sidebar-menu">

      <li><a href="{{route('solidario.welcome.index')}}"><i class="fa fa-home"></i> <span>Home</span></a></li>

      @if(Auth::user()->rol=="QUINDIO SOLIDARIO")
        <li><a href="{{route('solidario.users.index')}}"><i class="glyphicon glyphicon-user"></i> <span> Usuarios</span></a></li>
        <li><a href="{{route('solidario.orgs.index')}}"><i class="fa fa-sitemap"></i> <span> Organizaciones</span></a></li>
        <li><a href="{{route('solidario.patrimonios.index')}}"><i class="glyphicon glyphicon-euro"></i> <span> Patrimonios</span></a></li>
        <li><a href="{{route('solidario.dictamenes.index')}}"><i class="glyphicon glyphicon-book"></i> <span> Dictamenes</span></a></li>
        <li><a href="{{route('solidario.comentarios.index')}}"><i class="glyphicon glyphicon-comment"></i> <span> Comentarios</span></a></li>
        <li><a href="{{route('solidario.reuniones.index')}}"><i class="glyphicon glyphicon-calendar"> </i><span> Reuniones</span></a></li>
        <li><a href="{{route('solidario.indicadores.index')}}"><i class="glyphicon glyphicon-signal"></i> <span> Indicadores</span></a></li>
      @endif

      @if(Auth::user()->rol=="COODEQ")
        <li><a href="{{route('solidario.indicadores.index')}}"><i class="fa fa-comment-o"></i> <span> Indicadores</span></a></li>
      @endif

      @if(Auth::user()->rol=="COFINCAFÉ")
        <li><a href="{{route('solidario.indicadores.index')}}"><i class="fa fa-comment-o"></i> <span> Indicadores</span></a></li>
      @endif
            @if(Auth::user()->rol=="FEIBG")
        <li><a href="{{route('solidario.indicadores.index')}}"><i class="fa fa-comment-o"></i> <span> Indicadores</span></a></li>
      @endif

      @if(Auth::user()->rol=="FEUQ")
        <li><a href="{{route('solidario.indicadores.index')}}"><i class="fa fa-comment-o"></i> <span> Indicadores</span></a></li>
      @endif

      @if(Auth::user()->rol=="AVANZA")
        <li><a href="{{route('solidario.indicadores.index')}}"><i class="fa fa-comment-o"></i> <span> Indicadores</span></a></li>
      @endif

    </ul>
  </section>
</aside>
