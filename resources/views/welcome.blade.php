@extends('layouts.app')

@push('css')
  <style>
    .menu_title_2{
      text-align: center;
      padding: 10px; 
      margin:0px -10px 0px -10px; 
      background-color: #172D44; 
      color: #fff
    }
    .menu_options{
      background-color: #2A3F54;  
      margin:0px -10px 0px -10px;
    }
    .menu_options>a{
      color : #fff;
    }
    .menu_options>a:hover{
      background-color: #ffffff33
    }
  </style>
@endpush
@section('content')
<div class="">
    <div class="page-title">
        <div class="title_left">
          <h3><strong>SISTEMA INTEGRADO UATF</strong></h3>
        </div>
      </div>
    </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_content">

          <div class="col-md-9 col-sm-9 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{ asset('img/imagen1.jpg') }}" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h3>TITULO DE LA DESCRIPCION </h3>
                    <p>...</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/imagen2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('img/imagen3.jpg') }}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 " style="border:1px solid #172D44; ">
            <div class="menu_title_2"><h6>INFORMACION DE INTERES</h6></div>
            <nav class="nav flex-column menu_options">
              <a class="nav-link active" href="#">NORMATIVA</a>
              <a class="nav-link" href="#">CONTACTOS</a>
              <a class="nav-link" href="#">CHAT CORPORATIVO</a>
              <a class="nav-link" href="#">EMAIL</a>
              <a class="nav-link" href="#">CALENDARIO ACADEMICO</a>
            </nav>
          </div>


          <div class="clearfix"></div>
          <div class="col-md-12">

            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Comunicados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Otros</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                    synth. Cosby sweater eu banh mi, qui irure terr.
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk aliquip
              </div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                    booth letterpress, commodo enim craft beer mlkshk 
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clearfix"></div>
<div class="clearfix"></div>
@endsection
@section('options')
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>SISTEMAS DISPONIBLES</h3>
    <ul class="nav side-menu">
      @foreach ($systems as $system)
        <li><a href="{{ url($system->slug) }}">{{ $system->name }} <span class="fa fa-chevron-right"></span></a></li>
      @endforeach
    </ul>
  </div>
</div>  
@endsection