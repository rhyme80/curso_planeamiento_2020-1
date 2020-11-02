@extends('layouts.start')
@section('titulo','Create Tickets')
@section('content')
<div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREzZQ34jbjvNzJWajPZLYdOOw7xUPz_NRJzQ&usqp=CAU" >

                    
            </div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MATRIZ MPEC</font></font></h1>
            <!--/.ox.header-->
            @include('partial.info')
            <div class="box box-solid">
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/mpec1.PNG" >

                    
            </div>
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/mpec2.PNG" >

                    
            </div>

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          
          
        <!-- /.box-->
        
    </div>
    
            <!-- /.box-body -->
          </div>
    <!-- /.col -->
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Interpretación de la matriz MPEC</font></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              En este caso a través de la matriz MPEC lo que se determina es que la estrategia que tiene mayor puntaje tiene mayor grado de atractivo, para la empresa Telefónica del Perú se obtiene un 4.98 de la estrategia de Penetración en el Mercado que vendría a ser el valor más alto y por ende la estrategia más atractiva, en resumen la matriz MPEC es una matriz que permite reducir el grado de subjetividad a la hora de determinar qué estrategia es la más atractiva y tiene mayor probabilidad de éxito.
              </font></font></p>

              

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Se recomienda a la empresa Telefónica del Perú implementar la Estrategia de Penetración en el mercado. Donde se podría aumentar el número de vendedores, aumentar gastos en publicidad, aumentar las ofertas en artículos de promoción, entre otros. Usualmente esta estrategia se aplica cuando los mercados no están muy saturados, en nuestro país el mercado en telecomunicaciones se encontraba saturado hasta el año 2019, se vio un ligero incremento en el mercado a comienzos del año 2020, pero desde el inicio de la cuarentena se note un aumento considerable, ya que la demanda aumento por la necesidad de las personas de utilizar internet y otros servicios para poder estudiar, trabajar o realizar otras actividades. Ahora la situación nacional por la pandemia sigue vigente y por ende el mercado de telecomunicaciones sigue estando activo.   </font></font></p>
              <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">La situación actual genera que la sociedad se adapte al uso de la tecnología, por tanto se espera que para los próximos años post pandemia las personas continúen con el uso de los servicios en telecomunicaciones y este mercado siga en crecimiento, además que es un mercado en constante crecimiento e innovación. </font></font></p>
              <hr>
            </div>
@endsection