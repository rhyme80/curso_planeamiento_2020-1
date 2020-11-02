@extends('layouts.start')
@section('titulo','Create Tickets')
@section('content')
<div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREzZQ34jbjvNzJWajPZLYdOOw7xUPz_NRJzQ&usqp=CAU" >

                    
            </div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MATRIZ EFE</font></font></h1>
            <!--/.ox.header-->
            @include('partial.info')
            <div class="box box-solid">
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/EFE.PNG" >

                    
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
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Interpretacion de la matriz</font></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              El valor calculado en la matriz EFE es de 2.75, el cual nos indica que TELEFÓNICA DEL PERÚ es una empresa que tiene más oportunidades que amenazas, en tal sentido podemos afirmar que esta empresa debe aprovechar el entorno externo para favorecer su crecimiento. 
              </font></font></p>

             

              

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> El componente principal para el éxito de la empresa es la gran demanda existente en el mercado, ya que la sociedad hace uso cada vez más y más de las telecomunicaciones. En cuanto a las amenazas, podemos decir que la amenaza más relevante para TELEFÓNICA DEL PERÚ es la competencia de los demás operadores. </font></font></p>

             

              <hr>

              
            </div>
@endsection