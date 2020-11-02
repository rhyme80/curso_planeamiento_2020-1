@extends('layouts.start')
@section('titulo','Create Tickets')
@section('content')
<div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREzZQ34jbjvNzJWajPZLYdOOw7xUPz_NRJzQ&usqp=CAU" >

                    
            </div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MATRIZ FODA</font></font></h1>
            <!--/.ox.header-->
            @include('partial.info')
            <div class="box box-solid">
            <div class="box-header with-border">
            
            
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/fo.PNG" >

                    
            </div>
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/fa.PNG" >

                    
            </div>
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/do.PNG">
                    
            </div>
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <div class="item">
                    <img src="/images/da.PNG">
                    
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
    
@endsection