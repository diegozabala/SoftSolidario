
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/estilos.css')}}">

</head>

<body class="admin-body-inicio">

  <script type="text/javascript" src="{{asset('plugins/jquery/js/jquery-3.1.0.js')}}"> </script>
  <script type="text/javascript" src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"> </script>

<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Quindío Solidario</a>
  </div>
  
  <div class="collapse navbar-collapse js-navbar-collapse">
    <ul class="nav navbar-nav">

 <!-- ---------------------------------------------- AQUI COMIENZAN LAS COOPERATIVAS ------------------------------------------------- -->
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cooperativas <span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Cooperativas</li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Cooperativa #1</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>     
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Cooperativa #2</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>     
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Cooperativa #3</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
            </ul>
          </li>
        </ul>       
      </li>
       <!-- ---------------------------------------------- AQUI TERMINAN LAS COOPERATIVAS ------------------------------------------------- -->

      <!-- ---------------------------------------------- AQUI COMIENZAN LOS FONDOS DE EMPLEADOS ------------------------------------------------- -->
            <li class="dropdown mega-dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fondos <span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-4">
              <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>
          <li class="col-sm-4">
            <ul>
              <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
            </ul>
          </li>
                    <li class="col-sm-4">
              <ul> 
              <li class="dropdown-header">Fondos de Empleados</li>                            
                            <div id="womenCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Fondo de Empleados #1</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>      
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Fondo de Empleados #2</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>      
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Fondo de Empleados #3</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>    
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
        </ul>       
      </li>
 <!-- ---------------------------------------------- AQUI TERMINAN LOS FONDOS DE EMPLEADOS ------------------------------------------------- -->

  <!-- ---------------------------------------------- AQUI COMIENZAN LAS ASOCIACIONES MUTUALES ------------------------------------------------- -->
      <li class="dropdown mega-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mutuales <span class="caret"></span></a>        
        <ul class="dropdown-menu mega-dropdown-menu">
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Asociaciones Mutuales</li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Asociación Mutual #1</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>     
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Asociación Mutual #2</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>      
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Asociación Mutual #3</small></h4>                                        
                                    <button class="btn btn-primary" type="button">Visitar</button>   
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Features</li>
              <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
              <li><a href="#">Four Columns Grid</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
              <li><a href="#">Google Fonts</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Plus</li>
              <li><a href="#">Navbar Inverse</a></li>
              <li><a href="#">Pull Right Elements</a></li>
              <li><a href="#">Coloured Headers</a></li>                            
              <li><a href="#">Primary Buttons & Default</a></li>              
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
              <li><a href="#">Calls to action</a></li>
              <li><a href="#">Custom Fonts</a></li>
              <li><a href="#">Slide down on Hover</a></li>                         
            </ul>
          </li>
        </ul>       
      </li>
       <!-- ---------------------------------------------- AQUI TERMINAN LAS ASOCIACIONES MUTUALES ------------------------------------------------- -->
    </ul>


    <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mi Cuenta<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

        <li><a href="#">My cart (0) items</a></li>

    </ul>

  </div><!-- /.nav-collapse -->
  </nav>
</div>

</body>
</html>