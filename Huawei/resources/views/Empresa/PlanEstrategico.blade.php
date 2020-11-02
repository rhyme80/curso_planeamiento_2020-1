@extends('Plantillas.Base') 
@section('Contenido')
<main role="main">
    <!-- Content -->
    <article>
      <header class="section-top-padding background-white">
        <div class="line text-center">        
          <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Ejes Estratégicos</h1>
        </div>  
      </header>
      <section class="section-top-padding background-white"> 
        <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-0 margin-m-bottom">
              <h2>I. Desarrollo de productos diversos y de calidad </h2>
              <a class="margin-bottom" ><img src="{!! asset('Estilos/img/I.png') !!}" alt=""></a>
              <p class="text-size-16 text-dark"></p>
            </div>
            <div class="s-12 m-12 l-0 margin-m-bottom">
                <h2>II. Fidelizar y captar nuevos clientes</h2>
                <a class="margin-bottom" ><img src="{!! asset('Estilos/img/II.png') !!}" alt=""></a>
                <p class="text-size-16 text-dark"></p>    
            </div>
            <div class="s-12 m-12 l-0 margin-m-bottom">
                <h2>III. Incrementar el desempeño y el grado de satisfacción de los trabajadores</h2>
                <a class="margin-bottom" ><img src="{!! asset('Estilos/img/III.png') !!}" alt=""></a>
                <p class="text-size-16 text-dark"></p>   
            </div>
            <div class="s-12 m-12 l-0 margin-m-bottom">
                <h2>IV. Desarrollo, investigación e innovación de nuevas tecnologías</h2>
                <a class="margin-bottom" ><img src="{!! asset('Estilos/img/IV.png') !!}" alt=""></a>
                <p class="text-size-16 text-dark"></p>            
            </div>
         </div>
        </div>
      </section>  

    </article>
</main>
@endsection