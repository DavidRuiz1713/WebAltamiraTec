<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Carrusel DAVID con jQuery y CSS</title>
        <link rel="stylesheet" href="estilomenu.css">
        <link rel="stylesheet" href="slider1.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="secciones.css">
        <link rel="stylesheet" href="redes.css">
        <link rel="stylesheet" href="Tablaprecios.css">
        <link rel="stylesheet" href="SSS-master/sss/sss.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="mapa.css">
        <link rel="stylesheet" href="formulario.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="estilocarrusel.css">
        <script type="text/javascript" src="../AltamiraTec/js/jquery-3.2.1.min.js"></script>
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap-flex.css">
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <section class="carrusel">
            <ul id="c"> 

                <li class="carruselli"><p><strong>1</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>2</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>3</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>4</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>

                <li class="carruselli"><p><strong>5</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>6</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>7</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>8</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li> 

                <li class="carruselli"><p><strong>9</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>10</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>11</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li>
                <li class="carruselli"><p><strong>12</strong></p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></li> 

            </ul>
        </section>
     <?php
        // put your code here
        ?>
<!--        <script src="../AltamiraTec/js/carrusel.js"></script>-->
        <script>
      var timer = 4000;

            var i = 0;
            var max = $('#c > li').length;

            $("#c > li").eq(i).addClass('active').css('left', '0');
            $("#c > li").eq(i + 1).addClass('active').css('left', '25%');
            $("#c > li").eq(i + 2).addClass('active').css('left', '50%');
            $("#c > li").eq(i + 3).addClass('active').css('left', '75%');


            setInterval(function () {

                $("#c > li").removeClass('active');

                $("#c > li").eq(i).css('transition-delay', '0.25s');
                $("#c > li").eq(i + 1).css('transition-delay', '0.5s');
                $("#c > li").eq(i + 2).css('transition-delay', '0.75s');
                $("#c > li").eq(i + 3).css('transition-delay', '1s');

                if (i < max - 4) {
                    i = i + 4;
                } else {
                    i = 0;
                }

                $("#c > li").eq(i).css('left', '0').addClass('active').css('transition-delay', '1.25s');
                $("#c > li").eq(i + 1).css('left', '25%').addClass('active').css('transition-delay', '1.5s');
                $("#c > li").eq(i + 2).css('left', '50%').addClass('active').css('transition-delay', '1.75s');
                $("#c > li").eq(i + 3).css('left', '75%').addClass('active').css('transition-delay', '2s');

            }, timer);

    </script>
        <script src="https://use.fontawesome.com/23e06cd314.js"></script>
        
        <script src="../AltamiraTec/js/particles.min.js"></script>
        <script src="../AltamiraTec/js/app.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js">integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
        <script src="abrirmenu.js"></script> 
        <script src="SSS-master/sss/sss.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
        <!-- Scroll -->
    <script src="js/smooth-scroll.min.js"></script>
    <script>
      smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 2000, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function ( anchor, toggle ) {} // Function to run after scrolling
      });
    </script>
        
    </body>
</html>
