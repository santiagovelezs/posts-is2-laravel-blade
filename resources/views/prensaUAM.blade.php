@extends('layouts.app')
@section('body')    

   <!-- As a heading 
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Navbar</span>
        </div>
    </nav>
    -->

    <!-- https://getbootstrap.com/docs/5.0/examples/ -->
    <!-- https://getbootstrap.com/docs/5.0/examples/dashboard/ -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <ul class="navbar-nav">        
        <li class="nav-item mb-2 px-3">
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>   
        </li>
        <hr>
        <li class="nav-item mb-3 px-2">
          <img width="90" src="https://congresos.autonoma.edu.co/sites/default/files/Logos_UAM-09.png" alt="">
          <a class="navbar-brand px-2 mb-2" href="#">Prensa UAM <i class="far fa-newspaper"></i></a>          
        </li>
      </ul>    
      <ul class="navbar-nav px-2">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </header>

    <div class="container-fluid">        
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">            
            <!-- Trying Collapse -->
            <ul class="nav flex-column">
            <div class="card">
              <div class="card-header" id="headingOne">
                <p>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                      <i class="fas fa-home"></i>
                      Dashboard
                    </a>
                  </li>
                </p>
              </div>
              <div class="card-header" id="headingOne">
                <p>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">                      
                      <i class="fas fa-clipboard"></i>
                      Posts
                    </a>
                  </li>                                  
                </p>
              </div>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <a class="btn btn-dark mt-2" href="{{ route('post.index') }}">Listar</a>
                  <a class="btn btn-dark mt-2" href="{{ route('post.create') }}">Crear</a>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <p>
                  <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                      <i class="fas fa-list-ul"></i>
                      Categories
                    </a>
                  </li>                                
                </p>
              </div>
              <div class="collapse" id="collapseExample2">
                <div class="card card-body">
                  <a class="btn btn-dark mt-2" href="{{ route('category.index') }}">Listar</a>
                  <a class="btn btn-dark mt-2" href="{{ route('category.create') }}">Crear</a>
                </div>
              </div>
            </div>
            </ul>
            <!-- -->
          </nav>
      
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">@yield('title')</h1>
              <hr>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                  <img width="50" src="https://play-lh.googleusercontent.com/Jh2b5ExL3ziWSDlxcT62iNL3I9L2zhtyMnFCH-0Asv4PcSVjUz1ysa78YhsXOO6MdA=s128-rw" alt="">                
                </div>                
              </div>
            </div>
            <div class="row">
                @yield('content')
            </div>            
          </main>
        </div>
      </div>
    
      
  
@endsection