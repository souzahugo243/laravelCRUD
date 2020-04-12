<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Estrutura Template Gestão Financeira">
  <meta name="author"      content="Hugo Pereira de Souza">

  <title>Gestão Financeira</title>

   <!-- Bootstrap CSS CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> 
   
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>

<body>

  <div class="page-wrapper chiller-theme toggled">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          {{-- <a href="#"><img src="../App/lib/img/logo.png" alt=""></a> --}}
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <div class="sidebar-header">
          <div class="user-pic">
            <!-- Imagem Perfil Usuário --> 
            <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
              alt="User picture">
          </div>
          <div class="user-info">
            <span class="user-name">
              Hugo <strong>Souza</strong><!-- Usuário Logado -->
            </span>
            <span class="user-role">Administrator</span><!-- Tipo Usuario -->
            <span class="user-status">
              <i class="fa fa-circle" style="color: green;"></i>
              <span>Online</span>
            </span>
          </div>
        </div>
        <!-- sidebar-header  -->
        <div class="sidebar-search">
          <div>
            <div class="input-group">
              <input type="text" class="form-control search-menu" placeholder="Search...">
              <div class="input-group-append">
                <span class="input-group-text">
                  <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                </span>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar-search  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span>Menu</span>
            </li>
            <!-- <li class="sidebar-dropdown">
               <a href="#">
                <i class="fa fa-tachometer-alt"></i>
                <span>Dashboard</span>
                <span class="badge badge-pill badge-warning">New</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Dashboard 1
                      <span class="badge badge-pill badge-success">Pro</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">Dashboard 2</a>
                  </li>
                  <li>
                    <a href="#">Dashboard 3</a>
                  </li>
                </ul>
              </div> 
            </li> -->
            <li class="sidebar-dropdown">
              <a href="{{url('/')}}">
                <i class="fa fa-home"></i>
                <span>Inicio</span>                
              </a>            
            </li>             
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Cadastros</span>                
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="{{url('/category')}}">Categorias</a>  
                  </li>
                  <li>
                    <a href="#">Contas</a>
                  </li>                   
                </ul>
              </div>
            </li>             
            <li class="sidebar-dropdown">
              <a href="#">
                <i class="fa fa-chart-line"></i>
                <span>Relatórios</span>
              </a>
              <div class="sidebar-submenu">
                <ul>
                  <li>
                    <a href="#">Acompanhamento de Gastos</a>
                  </li>                     
                </ul>
              </div>
            </li>              
            <li class="header-menu">
              <span>Extra</span>
            </li>              
            <li>
              <a href="#">
                <i class="fa fa-calendar-alt"></i>
                <span>Calendário Contas</span>                
              </a>
            </li>            
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
      <!-- sidebar-content  -->
      <div class="sidebar-footer">                      
       <div class="container-fluid text-right botao-footer">
        <a href="#">
          <i class="fa fa-power-off" title="Sair do Sistema"></i>
        </a>
       </div>
      </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">                                     
     <div class="row">
       <div class="col-md-12">
        <div class="card">  
          <div class="card-header">
           <h5 class="text-center" id="cabecalho-card-header">@yield('cabecalho-card-header')</h5>
            <div class="col-8 m-auto">          
            @if(isset($errors) && count($errors) > 0)
             <div class="text-center mt-4 mb-4 p-2 alert-danger">
               @foreach($errors->all() as $erro)
                   {{$erro}}<br>
               @endforeach
             </div>             
            @endif
           </div>         
           <!-- <div class="card-columns">
             {{-- <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Título</h5>
                <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                {{-- <p class="card-text"><small class="text-muted">Registros</small></p> --}}
              </div>
             </div>
            </div> -->        
          </div>            
          <div class="card-body">
            @yield('content')
          </div>
        </div>
       </div>
     </div>
    </div>      
    </main>
    <!-- page-content" -->
  </div>
  
  <!-- Bootstrap core JavaScript -->
  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script> 
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{url('assets/js/fontawesome.js')}}"></script> 
  <!-- JS Page -->
  <script src="{{url('assets/js/style.js')}}"></script>
  <script src="{{url('assets/js/eventos.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript">
    @yield('data-table')
  </script>
</body>

</html>
