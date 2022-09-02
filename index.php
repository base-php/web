<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Base PHP</title>

	<link rel="icon" href="/img/favicon.svg">

	<link rel="stylesheet" href="/node_modules/flowbite/src/flowbite.css">
	<link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">
	<link rel="stylesheet" href="/css/style.css">

	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="text-center">
		<h1 class="text-6xl font-bold">
			<i class="fa fa-shapes"></i> 
			Base PHP
		</h1>

		<h2 class="text-3xl">Un framework para minimalistas</h2>

		<div class="mt-3">
			<a data-tooltip-target="tooltip-twitter" target="_blank" href="https://github.com/base-php">
				<span class="fab fa-twitter"></span>
			</a>

			<div id="tooltip-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
			    Ir a Twitter
			</div>


			<a data-tooltip-target="tooltip-youtube" target="_blank" href="https://youtube.com/base-php">
				<span class="fab fa-youtube"></span>
			</a>

			<div id="tooltip-youtube" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
			    Ir a YouTube
			</div>


			<a data-tooltip-target="tooltip-mail" target="_blank" href="mailto:info@base-php.com">
				<span class="fas fa-envelope"></span>
			</a>

			<div id="tooltip-mail" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
			    Enviar un correo electrónico
			</div>


			<a data-tooltip-target="tooltip-docs" target="_blank" href="/docs">
				<span class="fas fa-book"></span>
			</a>

			<div id="tooltip-docs" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
			    Ir a la documentación
			</div>
		</div>
	</div>

	<script src="/node_modules/flowbite/dist/flowbite.js"></script>
</body>
</html>