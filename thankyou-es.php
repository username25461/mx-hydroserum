<!DOCTYPE html>
<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>¡Gracias!</title>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
		<link rel="shortcut icon" href="thanks.ico" type="image/x-icon">
		<link href="css/thanks.css" rel="stylesheet">
		<img height="1" width="1" src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars($_GET['pixel'], ENT_QUOTES, 'UTF-8'); ?>&ev=Lead&noscript=1"/>
		<img height="1" width="1" src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars($_GET['pixel'], ENT_QUOTES, 'UTF-8'); ?>&ev=Purchase&noscript=1"/>
    </head>
    <body>
        <header>
            <h1>¡Su pedido ha sido aceptado!</h1>
        </header>
        <main class="main">
            <section>
                <div>
                    <p>
                        Uno de nuestros especialistas se comunicará con usted para confirmar el pedido en el horario laboral<span>de 9 a 21 horas.</span>
                        <br>
                        <br>La entrega se realiza por mensajería <span>o correo.</span> Pago - <span>¡al recibirlo!</span>
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>