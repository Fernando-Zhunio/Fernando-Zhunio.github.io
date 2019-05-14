<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>FZ Enterprise</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/toastr.min.css" rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <!--<link href="css/style.css" rel="stylesheet">-->

    <link href="css/stylePagePrincipal.css" rel="stylesheet" />
     <link href="css/StyleGradientes.css" rel="stylesheet" />

</head>

<body>

    <!-- Main navigation -->
    <div id="avatar" class=" h-50 rounded  border border-primary shadow">
        <button id="btChatl" type="button" class="close position-absolute" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span> </button>
        <div id="chat" class="row w-100 h-100 bg-info">
                <div  class="text-white w-75 p-2 my-2">
                    <h6 class="text">Hola tiene alguna pregunta</h5>
                </div>
        </div>        
        <img src="img/avatarChatMan.png" alt="imagen avatar chat" class="avatarClass  p-2 mt-1"/>
       
        <div id="textChat" class="row">
            <textarea  type="text"  class=" md-textarea form-control col-md-9 mb-2 ml-1" rows="4"></textarea>
        </div>
       <!-- <input id="textChat" type="text"  class="mb-2 ml-1">
        <label data-error="wrong" data-success="right" for="form34">Tu nombres</label> -->
  </div>
      
    


    <header>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top scrolling-navbar">

            <div class="container">

                <a class="navbar-brand" href="#">
                 <img src="img/logo.png" class="img-fluid" />
                FZ Enterprise</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">
                                Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link white-text" href="#Empresa" data-offset="90">Empresa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Trabajo" data-offset="90">Trabajos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Equipo" data-offset="90">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nulo" data-offset="30">nulo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contacto" data-offset="90">Contactos</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#contact" data-offset="90">Contact</a>
                        </li>-->
                    </ul>

                    <!-- Social Icon  -->
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-facebook-f light-green-text-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-twitter light-green-text-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fab fa-instagram light-green-text-2"></i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>

        </nav>
        <!-- Navbar -->
        
        <!-- Full Page Intro -->
        <div id="intro-section" class="view">
          
            <!-- <video class="video-intro" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg" playsinline
                   autoplay muted loop>
                <source src="https://mdbootstrap.com/img/video/animation.mp4" type="video/mp4">
            </video> -->
            <!-- <img  class="img-intro" src="img/imagenFondo.png" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg"> -->
               
            
          
            <!-- Mask & flexbox options-->
            <div  class=" mask img-intro d-flex justify-content-center align-items-center" poster="https://mdbootstrap.com/img/Photos/Others/background.jpg">
                <!-- Content -->
                <div id="particles-js"></div>
                <div id="miIntro" class=" container px-md-3 px-sm-0">
                 
                    <!--Grid row-->
                 <div class="bt-send row wow fadeIn">
                       
                        <!--Grid column-->
                        <div class="animated bounceInLeft col-md-12 mb-4 white-text text-center wow fadeIn">
                        
                        <h3 class="display-3 font-weight-bold white-text mb-0 pt-md-5 pt-5 ">Creative Agency</h3>
                			<h2   class="textHover bt-send">
                                <span>F</span><span>ernando</span>  - 
                                <span>Z</span><span>hunio</span>
                            </h2>
			               
                            
                            <hr class="hr-light my-4 w-75">
                            <h4 class="subtext-header mt-2 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                deleniti consequuntur nihil.
                            </h4>
                            <a href="#!" class=" z-i btn btn-rounded btn-outline-white"  data-toggle="modal" data-target="#modalMensaje">
                               <!-- <i class="fas fa-home"></i>-->
                                <i class="fas fa-envelope ali"></i>  Envianos tu mensaje
                            </a>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>
                <!-- Content -->

            </div>

            <!--modalllllllllllllllllllll-->
            <div class="modal fade gradiente_2c " id="modalMensaje" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Mensaje</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-1">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input id="nombre" type="text" id="form34" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form34">Tu nombres</label>
                            </div>

                            <div class="md-form mb-1">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input id="email" type="email" id="form29" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form29">Tu email</label>
                            </div>

                            <div class="md-form mb-1">
                                <!-- <i class="fas fa-tag prefix grey-text"></i> -->
                                <i class="fas fa-phone prefix grey-text"></i>
                                <input id="telefono" type="text" id="form32" maxlength="10" class="form-control validate integer">
                                <label data-error="wrong" data-success="right" for="form32">Teléfono</label>
                            </div>

                            <div class="md-form mb-1">
                                <i class="fas fa-tag prefix grey-text"></i>
                                <input id="asunto" type="text" id="form32" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="form32">Asunto</label>
                            </div>

                            <div class="md-form">
                                <i class="fas fa-pencil prefix grey-text"></i>
                                <textarea id="mensaje" type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                                <label data-error="wrong" data-success="right" for="form8">Tu mensaje</label>
                            </div>

                        </div>
                        <div  class="modal-footer d-flex justify-content-center">
                            <button id="EnviarMensaje" class="btn btn-unique">Enviar<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>

                        <!-- <div  class="alert alert-warning alert-dismissible fade" role="alert">
                         <strong>Error corrija!</strong> error de llenado de formulario. -->
                        <button id="btcloseModal" type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                              </button>
                </div>
                    </div>
                </div>
              
            </div>

            <!--fin modalllllllllllllllll-->

           
            <!-- Mask & flexbox options-->

       
       
        </div>
        <!-- Full Page Intro -->

    </header>
    <!-- Main navigation -->










   <div id="skin">
      
       <div class="mask container">
            <div id="container1"></div>
           <!-- Section: Features v.4 -->
           <section class="my-5">
               <!-- Section heading -->
               <h2 class="h1-responsive font-weight-bold text-center my-5">Quienes somos?</h2>
               <!-- Section description -->
               <p class="lead grey-text text-center w-responsive mx-auto mb-5">
                   Lorem ipsum dolor sit amet, consectetur
                   adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                   veniam.
               </p>
               
               <!-- Grid row -->
               <div  class="row">
                   <!-- Grid column -->
                   <div class="col-md-4">
                       <!-- Grid row -->
                       <div class="row mb-3 wow bounceInLeft" >
                           <!-- Grid column -->
                           <div class="col-2">
                               <!--<i class="fas fa-2x fa-flag-checkered deep-purple-text"></i>-->
                               <i class="fas fa-network-wired deep-purple-text"></i>
                           </div>
                           <!-- Grid column -->
                           <!-- Grid column -->
                           <div class="col-10">
                               <h5 class="font-weight-bold mb-3">Desarrollo</h5>
                               <p class="lead grey-text">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                                   nam, aperiam minima assumenda deleniti hic.
                               </p>
                           </div>
                           <!-- Grid column -->
                       </div>
                       <!-- Grid row -->
                       <!-- Grid row -->
                       <div class="row mb-3  wow bounceInLeft">
                           <!-- Grid column -->
                           <div class="col-2">
                               <i class="fas fa-2x fa-flask deep-purple-text"></i>
                           </div>
                           <!-- Grid column -->
                           <!-- Grid column -->
                           <div class="col-10">
                               <h5 class="font-weight-bold mb-3">Experiencia</h5>
                               <p class="grey-text">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                                   nam, aperiam minima assumenda deleniti hic.
                               </p>
                           </div>
                           <!-- Grid column -->
                       </div>
                       <!-- Grid row -->
                       <!-- Grid row -->
                       <div class="row mb-md-0 mb-3  wow bounceInLeft">
                           <!-- Grid column -->
                           <div class="col-2">
                               <i class="fas fa-2x fa-glass-martini deep-purple-text"></i>
                           </div>
                           <!-- Grid column -->
                           <!-- Grid column -->
                           <div class="col-10">
                               <h5 class="font-weight-bold mb-3">Codigo</h5>
                               <p class="grey-text mb-md-0">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                                   maiores nam, aperiam minima assumenda deleniti hic.
                               </p>
                           </div>
                           <!-- Grid column -->
                       </div>
                       <!-- Grid row -->
                   </div>
                   <!-- Grid column -->
                   <!-- Grid column -->
                   <div class="col-md-4 row text-center align-items-center justify-content-center">
                       <!--<img class="img-fluid" src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png"
                     alt="Sample image">-->
                      <!-- <img class="img-fluid d-none d-sm-block" src="img/lenguajes-programacion-establecen-iconos_24877-761.jpg" />-->
                       <img  class="img-fluid d-none d-sm-block wow flip"  alt="imagen" src="img/lenguajesProOk.png" />
                   </div>
                   <!-- Grid column -->
                   <!-- Grid column -->
                   <div class="col-md-4">
                       <!-- Grid row -->
                       <div class="row mb-3  wow bounceInRight">
                           <!-- Grid column -->
                           <div class="col-2">
                               <i class="far fa-2x fa-heart deep-purple-text"></i>
                           </div>
                           <!-- Grid column -->
                           <!-- Grid column -->
                           <div class="col-10">
                               <h5 class="font-weight-bold mb-3">Editores</h5>
                               <p class="grey-text">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                                   nam, aperiam minima assumenda deleniti hic.
                               </p>
                           </div>
                           <!-- Grid column -->
                       </div>
                       <!-- Grid row -->
                       <!-- Grid row -->
                       <div class="row mb-3 wow bounceInRight">
                           <!-- Grid column -->
                           <div class="col-2">
                               <i class="fas fa-2x fa-bolt deep-purple-text"></i>
                           </div>
                           <!-- Grid column -->
                           <!-- Grid column -->
                           <div class="col-10">
                               <h5 class="font-weight-bold mb-3">Garantia</h5>
                               <p class="grey-text">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                                   nam, aperiam minima assumenda deleniti hic.
                               </p>
                           </div>
                           <!-- Grid column -->
                       </div>
                       <!-- Grid row -->
                       <!-- Grid row -->
                       <div class="row wow bounceInRight">
                           <!-- Grid column -->
                           <div class="col-2">
                               <i class="fas fa-2x fa-magic deep-purple-text"></i>
                           </div>
                           <!-- Grid column -->
                           <!-- Grid column -->
                           <div class="col-10">
                               <h5 class="font-weight-bold mb-3">Mantenimiento</h5>
                               <p class="grey-text mb-0">
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit
                                   maiores nam, aperiam minima assumenda deleniti hic.
                               </p>
                           </div>
                           <!-- Grid column -->
                       </div>
                       <!-- Grid row -->
                   </div>
                   <!-- Grid column -->
               </div>
               <!-- Grid row -->
           </section>
           <!-- Section: Features v.4 -->
          
       </div>
      
   </div>
       
       

    <div id="Trabajos"  class="py-1 rgba-gradient_1">
      <div class="container">
        <!-- Projects section v.4 -->
        <section class="text-center my-5 white-text">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Algunos Proyectos</h2>
            <!-- Section description -->
            <p class="grey-text text-center w-responsive mx-auto mb-5 white-text">
                Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit est laborum.
            </p>
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-12 mb-4">
                    <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/img%20%2832%29.jpg);">
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                            <div>
                                <h6 class="purple-text">
                                    <i class="fas fa-plane"></i>
                                    <strong>Juegos</strong>
                                </h6>
                                <h3 class="py-3 font-weight-bold">
                                    <strong>Proyectos Unity</strong>
                                </h3>
                                <p class="pb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                    laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto
                                    nulla ipsum dignissimos. Odit sed qui, dolorum!
                                </p>
                                <a class="btn btn-secondary btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-4">
                    <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                            <div>
                                <h6 class="pink-text">
                                    <i class="fas fa-chart-pie"></i>
                                    <strong> Escritorio</strong>
                                </h6>
                                <h3 class="py-3 font-weight-bold">
                                    <strong>Windows y Linux</strong>
                                </h3>
                                <p class="pb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                    laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto
                                    nulla ipsum dignissimos. Odit sed qui, dolorum!
                                </p>
                                <a class="btn btn-pink btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-6">
                    <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg);">
                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                            <div>
                                <h6 class="green-text">
                                    <i class="fas fa-eye"></i>
                                    <strong> Web</strong>
                                </h6>
                                <h3 class="py-3 font-weight-bold">
                                    <strong>Paginas web</strong>
                                </h3>
                                <p class="pb-3">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                    laboriosam, voluptatem, optio vero odio nam sit officia accusamus minus error nisi architecto
                                    nulla ipsum dignissimos. Odit sed qui, dolorum!
                                </p>
                                <a class="btn btn-success btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </section>
        <!-- Projects section v.4 -->
        </div>
        </div>

    
        






        

    <div id="Equipo" class="py-1 gradiente_azulOscuro">
        <div class="container">
            <!-- Section: Team v.1 -->
            <section class="team-section text-center my-5 ">
                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold font-italic" >Equipo de Trabajo</h2>
                <h3 class="h3-responsive mb-3">Desarrolladores</h3>
                <!-- Section description -->
                <p class="grey-text w-responsive mx-auto mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                    eum porro a pariatur veniam.
                </p>
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5 wow rotateInDownLeft slow">
                        <div class="avatar mx-auto">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle z-depth-1"
                                 alt="Sample avatar">
                        </div>
                        <h5 class="font-weight-bold mt-4 mb-3">Anna Williams</h5>
                        <p class="text-uppercase blue-text"><strong>Graphic designer</strong></p>
                        <p class="grey-text">
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci sed quia non numquam modi tempora eius.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <!-- Facebook -->
                            <a class="p-2 fa-lg fb-ic">
                                <i class="fab fa-facebook-f blue-text"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="p-2 fa-lg tw-ic">
                                <i class="fab fa-twitter blue-text"> </i>
                            </a>
                            <!-- Instagram -->
                            <a class="p-2 fa-lg ins-ic">
                                <i class="fab fa-instagram blue-text"> </i>
                            </a>
                        </ul>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-lg-0 mb-5 wow rotateInDownLeft slow">
                        <div class="avatar mx-auto">
                        <!-- <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg" class="rounded-circle z-depth-1"/> -->
                            <img src="Mi_equipo/Fotos/yoFer.jpg" class="rounded-circle z-depth-1" alt="Sample avatar">
                        </div>
                        <h5 class="font-weight-bold mt-4 mb-3">Fernando Zhunio R</h5>
                        <p class="text-uppercase blue-text"><strong>Web developer</strong></p>
                        <p class="grey-text">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem ipsa accusantium
                            doloremque rem laudantium totam aperiam.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <!-- Facebook -->
                            <a class="p-2 fa-lg fb-ic">
                                <i class="fab fa-facebook-f blue-text"> </i>
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/zhuniofernando/" class="p-2 fa-lg ins-ic">
                                <i class="fab fa-instagram blue-text"> </i>
                            </a>
                        </ul>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 mb-md-0 mb-5 wow rotateInDownRight slow">
                        <div class="avatar mx-auto">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg" class="rounded-circle z-depth-1"
                                 alt="Sample avatar">
                        </div>
                        <h5 class="font-weight-bold mt-4 mb-3">Maria Smith</h5>
                        <p class="text-uppercase blue-text"><strong>Photographer</strong></p>
                        <p class="grey-text">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim est fugiat nulla id eu laborum.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <!-- Facebook -->
                            <a class="p-2 fa-lg fb-ic">
                                <i class="fab fa-facebook-f blue-text"> </i>
                            </a>
                            <!-- Instagram -->
                            <a class="p-2 fa-lg ins-ic">
                                <i class="fab fa-instagram blue-text"> </i>
                            </a>
                            <!-- Dribbble -->
                            <a class="p-2 fa-lg ins-ic">
                                <i class="fab fa-dribbble blue-text"> </i>
                            </a>
                        </ul>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-6 wow rotateInDownRight slow">
                        <div class="avatar mx-auto">
                            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1"
                                 alt="Sample avatar">
                        </div>
                        <h5 class="font-weight-bold mt-4 mb-3">Tom Adams</h5>
                        <p class="text-uppercase blue-text"><strong>Backend developer</strong></p>
                        <p class="grey-text">
                            Perspiciatis repellendus ad odit consequuntur, eveniet earum nisi qui consectetur
                            totam officia voluptates perferendis voluptatibus aut.
                        </p>
                        <ul class="list-unstyled mb-0">
                            <!-- Facebook -->
                            <a class="p-2 fa-lg fb-ic">
                                <i class="fab fa-facebook-f blue-text"> </i>
                            </a>
                            <!-- Github -->
                            <a class="p-2 fa-lg ins-ic">
                                <i class="fab fa-github blue-text"> </i>
                            </a>
                        </ul>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </section>
            <!-- Section: Team v.1 -->

        </div>

    </div>
              

    <div id="Contacto">
        <div class="container">
            <!-- Section: Contact v.2 -->
            <section class="my-5">
                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5">Contactos</h2>
                <!-- Section description -->
                <p class="text-center w-responsive mx-auto mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
                    eum porro a pariatur veniam.
                </p>
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-9 mb-md-0 mb-5">
                        <form>
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-name" class="form-control">
                                        <label for="contact-name" class="">Tu nombre</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-email" class="form-control">
                                        <label for="contact-email" class="">Tu Email</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>

                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-phone" class="form-control integer">
                                        <label for="contact-phone" class="">Tu Telefono</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                                <!-- Grid column -->
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-address" class="form-control">
                                        <label for="contact-address" class="">Tu Dirección (opcional)</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                            <!-- Grid row -->
                            
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <input type="text" id="contact-Subject" class="form-control">
                                        <label for="contact-Subject" class="">Asunto</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                            <!-- Grid row -->
                            <div class="row">
                                <!-- Grid column -->
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea id="contact-message" class="form-control md-textarea" rows="3"></textarea>
                                        <label for="contact-message">Tu mensaje</label>
                                    </div>
                                </div>
                                <!-- Grid column -->
                            </div>
                            <!-- Grid row -->
                        </form>
                        <div class="text-center text-md-left">
                            <a id="enviarMsm" class="btn btn-primary btn-md">Enviar</a>
                        </div>
                    </div>
                    <!-- Grid column -->
                    <!-- Grid column -->
                    <div class="col-md-3 text-center">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fas fa-map-marker-alt fa-2x blue-text"></i>
                                <p>San Francisco, CA 94126, USA</p>
                            </li>
                            <li>
                                <i class="fas fa-phone fa-2x mt-4 blue-text"></i>
                                <p>+ 01 234 567 89</p>
                            </li>
                            <li>
                                <i class="fas fa-envelope fa-2x mt-4 blue-text"></i>
                                <p class="mb-0">contact@example.com</p>
                            </li>
                        </ul>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </section>
            <!-- Section: Contact v.2 -->
        </div>
    </div>
        
   

    <hr />
    
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Pinterest-->
                        <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
  <!-- SCRIPTS -->
  
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.0.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
   <script> new WOW().init()</script>

  <script type="text/javascript" src="js/toastr.min.js"></script>   
   <script src="Mis_Js/particles.js"></script>
  <script src="Mis_Js/app.js"></script>
  <script src="Mis_Js/EnviarMensajeAjax.js"></script>
  <script src="Mis_Js/jquery.numeric.js"></script>
  <script src="Mis_Js/validarNumeros.js"></script>

        <script src="js/anime.min.js"></script>
        <!-- <script src="js/imagesloaded.pkgd.min.js"></script> -->
      
        
        <script src="js/sketch.min.js"></script>
        <script>
        
        // ----------------------------------------
        // Particle
        // ----------------------------------------

        function Particle( x, y, radius ) {
            this.init( x, y, radius );
        }

        Particle.prototype = {

            init: function( x, y, radius ) {

                this.alive = true;

                this.radius = radius || 10;
                this.wander = 0.15;
                this.theta = random( TWO_PI );
                this.drag = 0.92;
                this.color = '#fff';

                this.x = x || 0.0;
                this.y = y || 0.0;

                this.vx = 0.0;
                this.vy = 0.0;
            },

            move: function() {

                this.x += this.vx;
                this.y += this.vy;

                this.vx *= this.drag;
                this.vy *= this.drag;

                this.theta += random( -0.5, 0.5 ) * this.wander;
                this.vx += sin( this.theta ) * 0.1;
                this.vy += cos( this.theta ) * 0.1;

                this.radius *= 0.96;
                this.alive = this.radius > 0.5;
            },

            draw: function( ctx ) {

                ctx.beginPath();
                ctx.arc( this.x, this.y, this.radius, 0, TWO_PI );
                ctx.fillStyle = this.color;
                ctx.fill();
            }
        };

        // ----------------------------------------
        // Example
        // ----------------------------------------

        var MAX_PARTICLES = 280;
        var COLOURS = [ '#69D2E7', '#A7DBD8', '#E0E4CC', '#F38630', '#FA6900', '#FF4E50', '#F9D423' ];

        var particles = [];
        var pool = [];

        var demo = Sketch.create({
            container: document.getElementById( 'container1' ),
            retina: 'auto'
        });

        demo.setup = function() {

            // Set off some initial particles.
            var i, x, y;

            for ( i = 0; i < 20; i++ ) {
                x = ( demo.width * 0.5 ) + random( -100, 100 );
                y = ( demo.height * 0.5 ) + random( -100, 100 );
                demo.spawn( x, y );
            }
        };

        demo.spawn = function( x, y ) {
            
            var particle, theta, force;

            if ( particles.length >= MAX_PARTICLES )
                pool.push( particles.shift() );

            particle = pool.length ? pool.pop() : new Particle();
            particle.init( x, y, random( 5, 40 ) );

            particle.wander = random( 0.5, 2.0 );
            particle.color = random( COLOURS );
            particle.drag = random( 0.9, 0.99 );

            theta = random( TWO_PI );
            force = random( 2, 8 );

            particle.vx = sin( theta ) * force;
            particle.vy = cos( theta ) * force;

            particles.push( particle );
        };

        demo.update = function() {

            var i, particle;

            for ( i = particles.length - 1; i >= 0; i-- ) {

                particle = particles[i];

                if ( particle.alive ) particle.move();
                else pool.push( particles.splice( i, 1 )[0] );
            }
        };

        demo.draw = function() {

            demo.globalCompositeOperation  = 'lighter';

            for ( var i = particles.length - 1; i >= 0; i-- ) {
                particles[i].draw( demo );
            }
        };

        demo.mousemove = function() {

            var particle, theta, force, touch, max, i, j, n;

            for ( i = 0, n = demo.touches.length; i < n; i++ ) {

                touch = demo.touches[i], max = random( 1, 4 );
                for ( j = 0; j < max; j++ ) {
                  demo.spawn( touch.x, touch.y );
                }

            }
        };
        
        </script>

        
</body>

</html>
