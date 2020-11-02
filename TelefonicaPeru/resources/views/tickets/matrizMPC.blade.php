@extends('layouts.start')
@section('titulo','Create Tickets')
@section('content')
<div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREzZQ34jbjvNzJWajPZLYdOOw7xUPz_NRJzQ&usqp=CAU" >

                    
            </div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MATRIZ MPC</font></font></h1>
            <!--/.ox.header-->
            @include('partial.info')
            <div class="box box-solid">
            <div class="box-header with-border">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/mpc.PNG" >

                    
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
              <h3 class="box-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Interpretación de la matriz MPC</font></font></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             

              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              La empresa claro cuenta con un resultado de 2,74, superior al resto de empresas que son parte de la competencia, por tanto se le considera como la mayor amenaza. 
              </font></font></p>


              <p class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Por otra parte la empresa Bitel cuenta con un resultado de 2.38 que sería el mínimo, por tanto es considerado la empresa de menor amenaza.</font></font></p>

             

              <hr>

              
            </div>
@endsection