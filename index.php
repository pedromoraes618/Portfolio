<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="_css/bootstrap.min.css" rel="stylesheet">
    <link href="_css/estilo.css" rel="stylesheet">
    <meta name="author" content="Pedro moraes -+5598988814696">
    <meta property="og:title"
        content="Desenvolvedor de Sistemas, sites, app, SAO LUIS/MA, Developer of Systems, websites, app, aplicativos, sistemas web SAO LUIS/MA" />
    <script src="https://kit.fontawesome.com/e8ff50f1be.js" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Pedro moraes Portfólio</title>

</head>

<body>
    <?php
	include "menu.php";
	?>
    <div class="container">
        <?php
		if(!$_GET){
			include "inicial.php";
		}else{
			include "controler/controler.php";
		}

		include "footer.php";

	?>
    </div>
    <!-- Fim do seu codigo -->
    <script src="_js/jquery.js"></script>
    <script src="_js/bootstrap.min.js"></script>
    <script src="_js/script.js"></script>
    <script src="_js/vanilla-tilt.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!--	descer suavemente o scrol-->
    <script>
    var $doc = $('html, body');
    $('#movelmenu a').click(function() {
        $doc.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
    $('.navbar').css({
        'opacity': '0'
    });

    $(window).scroll(function() {

        if ($(window).scrollTop() == 0 | $(window).scrollTop() == "") {
            $('.navbar').css({
                'opacity': '0'
            });
        } else {
            $('.navbar').css({
                'opacity': '1',
                'transition': 'opacity 200ms ease-in'

            });
        }
    });
    </script>

</body>

</html>