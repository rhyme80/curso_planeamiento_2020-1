<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Huawei</title>
    <link rel="stylesheet" href="{!! asset('Estilos/css/components.css') !!}">
    <link rel="stylesheet" href="{!! asset('Estilos/css/icons.css') !!}">
    <link rel="stylesheet" href="{!! asset('Estilos/css/responsee.css') !!}">
    <link rel="stylesheet" href="{!! asset('Estilos/owl-carousel/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('Estilos/owl-carousel/owl.theme.css') !!}">
    <link rel="stylesheet" href="{!! asset('Estilos/css/lightcase.css') !!}">
    <!-- CUSTOM STYLE -->       
    <link rel="stylesheet" href="{!! asset('Estilos/css/template-style.css') !!}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,400,600,900&subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="{!! asset('Estilos/js/jquery-1.8.3.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('Estilos/js/jquery-ui.min.js') !!}"></script>      
  </head>

  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="{!! asset('Estilos/../template/minimalista-premium-responsive-business-template/') !!}" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <div id="page-wrapper">
      <!-- HEADER -->
      <header role="banner" class="position-absolute margin-top-30 margin-m-top-0 margin-s-top-0">    
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
          <div class="s-12 l-2">
            <a href="{{ route('Empresa.index') }}" class="logo">
              <!-- Logo version before sticky nav -->
              <img class="logo-before" src="{!! asset('Estilos/img/Empresa2.png') !!}" alt="">
              <!-- Logo version after sticky nav -->
              <img class="logo-after" src="{!! asset('Estilos/img/Empresa2.png') !!}" alt="">
            </a>
          </div>
          <div class="s-12 l-10">
            <div class="top-nav right">
              <p class="nav-text"></p>
              <ul class="right chevron">
                <li><a href="{{ route('Empresa.index') }}">Inicio</a></li>
                <li><a href="{{ route('Empresa.Informacion') }}">Acerca de la empresa</a></li>   
                <li><a href="{{ route('Empresa.Matrices') }}">Matrices</a></li>
                <li><a href="{{ route('Empresa.PlanEstrategico') }}">Ejes Estrategico</a></li>          
                <li><a href="{{ route('Empresa.Contactanos') }}">Contactanos</a></li>
              </ul>
            </div>
          </div>  
        </nav>
      </header>