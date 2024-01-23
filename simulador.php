<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehiko Simulador</title>
    <meta name="description" content="EHIKO MICROCREDITO – é uma Instituição de Crédito que oferece serviços financeiros à população de baixa renda, com soluções de crédito ao consumo, para investimento ou fundo de maneio.">

    <!-- External CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/et-line.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/plyr.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/components.min.css">


    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400%7CUbuntu:400,700%7COpen+Sans" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">

    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader 
    <div class="loader-wrap" id="loader-wrap">
        <div class="cssload-loader"></div>
    </div>-->
    <!-- Preloader End -->

    <!-- Navigation -->
       
  <nav class="navbar navbar-default" data-spy="affix" data-offset-top="60">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="images/logo3.png" alt="Site Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" style="padding-top: 20px" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right" id="one-page-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#footer">Contacto</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>    <!-- Navigation End -->

    <!-- Page Header -->
    <div class="page-header">
        <div class="container text-center">
            <h1 style="font-size: 40px; color: white;" class="text-uppercase">Simulador</h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">Simulador</li>
            </ol>
        </div>
    </div>
    <!-- Page Header End-->

    <div class="main-wrap">
        <div class="section blog-wrap" style="padding: 60px 0 20px 0">
            <div class="container">
                <div class="row">
                      <div class="col-md-12">
                          
                                 <fieldset>
                                            <legend class="text-semibold"><i class="fa fa-calculator position-left"></i> Detalhes do Pedido de Empréstimo</legend>
                                                   <form id="simular" method="get" action="#">
                                                       <div class="row">
                                                           
                                                          <div class="col-md-6">
                                                            <label for="exampleInputEmail1">Montante (MZN)</label>
                                                            <input id="montante" type="number" min="5000" max="1000000" style="font-size: 14px; background-color: white; border: 1px solid #c7c7c7; border-radius: 5px" class="" id="exampleInputEmail1" placeholder="Ex: 10000" aria-describedby="emailHelp" required>
                                                            <small id="emailHelp" class="form-text text-muted">Introduza o valor sem casas decimais</small>
                                                          </div>
                                                          
                                                         <div class="col-md-6">
                                                            <label for="exampleInputEmail1">Taxa (%)</label>
                                                            <input type="text" style="font-size: 14px; background-color: #f0f0f0; border: 1px solid #c7c7c7; border-radius: 5px" class="" id="taxa" placeholder="Taxa baseada na categoria" disabled aria-describedby="emailHelp">
                                                            <small id="emailHelp" class="form-text text-muted"></small>
                                                          </div>
                                                          
                                                      </div>  <!-- row -->
                                                      
                                                      <div class="row">
                                                      
                                                           <div class="col-md-6" style="margin-top: 15px;">
                                                            <label for="exampleInputPassword1">Categoria</label>
                                                            <select id="categoria" style="height: 45px;" class="form-control select2" data-placeholder="Choose Browser" required>
                                                                <option label="Escolha a categoria de crédito"></option>
                                                                        <option value="2" >Colaborador</option> 
                                                                        
                                                                        <option value="3" >Comerciante 1</option> 
                                                                        
                                                                        <option value="4" >Comerciante 2</option> 
                                                                        
                                                            </select>
                                                          </div>
                                                          
                                                          <div class="col-md-6" style="margin-top: 15px;">
                                                            <label for="exampleInputPassword1">Prazo (Mês)</label>
                                                            <select id="prazo" style="height: 45px;" class="form-control" data-placeholder="Choose Browser" disabled required>
                                                                <option label="Escolha o prazo de reembolso"></option>
                                                                        <option value="1" >1</option> 
                                                                        
                                                                        <option value="2" >2</option> 
                                                                        
                                                                        <option value="3" >3</option> 
                                                                        
                                                                        <option class="comerciante2" value="4" >4</option> 
                                                                        
                                                                        <option class="comerciante2" value="5" >5</option> 
                                                                        
                                                                        <option class="comerciante2" value="6" >6</option> 
                                                                        
                                                                        <option class="colab" value="7" >7</option> 
                                                                        
                                                                        <option class="colab" value="8" >8</option> 
                                                                        
                                                                        <option class="colab" value="9" >9</option> 
                                                                        
                                                                        <option class="colab" value="10" >10</option> 
                                                                        
                                                                        <option class="colab" value="11" >11</option> 
                                                                        
                                                                        <option class="colab" value="12" >12</option> 
                                                            </select>
                                                          </div>
                                                          
                                                          
                                                        </div>
                                                        
                                                          <div style="padding-top: 5px;"></div>
                                                          <button type="submit" class="btn btn-small">Simular Cr&eacute;dito</button>
                                                   </form>

                                                </fieldset>
                                                       
                    </div>
                    
                   
                     <div class="col-md-12" style="padding: 60px 0 40px 0">
                        
                              <!-- Vertical borders -->
                        <div class="simulacao">
                     

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <caption>Simula&ccedil;&atilde;o de Crédito</caption>
                                    <thead style="background-color: #016064; color: white;">
                                        <tr>
                                            <th scope="col" class="text-bold text-uppercase">#</th>
                                            <th scope="col" class="text-bold text-uppercase text-right">Prestações</th>
                                            <th scope="col" class="text-bold text-uppercase text-right">Capital Mensal</th>
                                            <th scope="col" class="text-bold text-uppercase text-right">Juro</th>
                                            <th scope="col" class="text-bold text-uppercase text-right">Total de Débito</th>
                                            <th scope="col" class="text-bold text-uppercase text-right">Capital</th>
                                        </tr>
                                    </thead>
                                    <tbody id="resultado">
                                        <tr>
                                            <td class="text-right" colspan="2"><h6 class="text-bold ">---</h6></td>
                                            <td class="text-right"><h6 class="text-bold text-danger-700 ">0,00</h6></td>
                                            <td class="text-right"><h6 class="text-bold text-danger-700 ">0,00</h6></td>
                                            <td class="text-right"><h6 class="text-bold text-success-700 ">0,00</h6></td>
                                            <td class="text-right"><h6 class="text-bold text-indigo-700 ">0,00</h6></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <!-- /vertical borders -->
                        
                    </div>
                  
                </div>
            </div>
        </div>
    </div> 
    
    

       <footer id="footer">

        <!-- Footer Subscribe -->
        <div class="subscription-area section-padding theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p style="font-size: 36px;" class="wow fadeInLeft" data-wow-duration="1.5s">Solicitar liga&ccedil;&atilde;o de um<br/>Gestor</p>
                    </div>
                    <div class="col-md-6">
                        <form class="subscription wow fadeInRight" data-wow-duration="1.5s" action="#" method="post">
                            <input type="text" id="phone2" name="phone2" placeholder="Introduza o seu número de celular" required>
                            <button type="submit">Solicitar</button>
                            <p class="newsletter-success"></p>
                            <p class="newsletter-error"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Subscribe -->

        <!-- Footer logo and social media button -->
        <div class="logo-social-area section-padding">
            <div class="container text-center">
                <a class="logo logo-footer wow fadeInDown" data-wow-duration="1.5s" href="#">
                    <img src="images/logo-footer2.png" alt="Site Logo">
                </a>
                <div class="socials wow fadeInUp" data-wow-duration="1.5s">

                   
                </div>
                 <div class="col-md-12" >
                        <ul class="footer-nav2 icon-list" style="font-size: 16px; text-align: center">
                            <li><span style="font-size: 16px;" class="icon-map-pin"></span> Av. Vladimir Lenine, 1791 - Maputo</li>
                            <li><span style="font-size: 16px;" class="fa fa-phone"></span> +258 86 700 1212 / 86 800 1212</li>
                            <li><span style="font-size: 16px;" class="fa fa-envelope"></span> mcuamba@ehikogroup.co.mz / fcossa@ehikogroup.co.mz</li>
                        </ul>
                </div>
            </div>
        </div>
        <!-- Footer logo and social media button -->

        <!-- Footer copyrgiht and navigation -->
        <div class="copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright">Copyright 2018, <a href="#">Ehiko Microcr&eacute;dito</a>. Todos direitos reservados</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-nav">
                            <li>Desenvolvido por <a style="color: #fffff" target="_blank" rel="noopener noreferrer" href="https://www.dintell.co.mz">Dintell, Lda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer copyrgiht and navigation -->
    </footer>



    <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.localScroll.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="js/map.js"></script>
    <script src="js/custom.js?1706016553"></script>
    
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5aba692b4b401e45400e1a09/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    
    
</body>

</html>
