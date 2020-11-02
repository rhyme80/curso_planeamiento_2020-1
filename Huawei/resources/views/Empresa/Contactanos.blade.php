@extends('Plantillas.Base') 
@section('Contenido')
    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        <article>
          <header class="section background-white">
            <div class="line text-center">        
              <h1 class="text-dark text-s-size-30 text-m-size-40 text-l-size-headline text-thin text-line-height-1">Contactate con Nosotros</h1>
              <p class="margin-bottom-0 text-size-16 text-dark"></p>
            </div>  
          </header>
          <section class="full-width background-dark">
            <div class="s-12 m-12 l-6">
              <!-- Change the background image -->  
              <div style="background-image: url({!! asset('Estilos/img/Fondo.jpeg') !!});" class="contact-image" ></div>
            </div>
            <div class="s-12 m-12 l-6 text-center">
              <div class="padding-2x">
                <i class="icon-sli-location-pin text-white text-size-30 center"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Huawei</h2>                
                <p>Banxuegang Industrial Park, Buji Longgang</p>
                <p>Guangdong</p>
                <p>China</p>
                <i class="icon-sli-envelope text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">E-mail</h2>                
                <a class="text-primary-hover" href="mailto:contact@sampledomain.com">Huawei@enterprice.com</a><br>
                <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@enterprice.com</a>
                <i class="icon-sli-earphones-alt text-white text-size-30 center margin-top-20"></i>
                <h2 class="text-size-20 margin-bottom-0 text-white">Telefonos</h2>                
                <p>0800 4521 800 50</p>
                <p>0450 5896 625 16</p>
                <p>0798 6546 465 </p>
              </div>
            </div>
          </section>
          
          <section class="section background-white">
            <div class="s-12 m-12 l-4 center">
              <h4 class="text-size-20 margin-bottom-20 text-dark text-center">Contactanos</h4>
              <form name="contactForm" class="customform" method="post">
                <div class="s-12">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                      <input name="email" class="required email" placeholder="E-mail" title="E-mail" type="text">
                      <p class="email-error form-error">Ingrese su e-mail.</p>
                    </div>
                    <div class="s-12 m-12 l-6">
                      <input name="name" class="name" placeholder="Nombre" title="Nombre" type="text">
                      <p class="name-error form-error">Ingrese su nombre.</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="subject" class="subject" placeholder="Empresa" title="Subject" type="text">
                  <p class="subject-error form-error">Please enter the subject.</p>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Mensaje" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12"><button type="button">Enviar</button></div>
              </form>
            </div>           
          </section> 
        </article>
      </main>
@endsection
