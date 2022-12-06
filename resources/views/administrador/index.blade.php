<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurant DSM</title>
        <link rel="stylesheet" href="https://unpkg.com/bulma">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@5.9.55/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="estilos.css">
    </head>
<body>
    <section class="section">
        <div align="center"><b>Administrador Restaurant</b> </div>
        <div align="center" ><img src="/images/camaleon.png" alt="Foto de restaurant" width="200" height="200"></div>



		<div class="columns is-centered" id="elemento-1">
			<div class="column has-text-centered">
				<div id="contenedorInputs">
					<div class="field" >
						<label class="label">Minutos</label>
						<div class="control">
							<input class="input" id="minutos" type="number">
						</div>
					</div>
				<h2 id="tiempoRestante">00:00.0</h2>
				<button id="btnIniciar"><span class="mdi mdi-play"></span></button>
				<button id="btnPausar" ><span class="mdi mdi-pause"></span></button>
				<button id="btnDetener"><span class="mdi mdi-stop"></span></button>
			</div>
		</div>
	</section>
	<script src="{{ asset('script.min.js') }}"></script>
</body>
</html>
