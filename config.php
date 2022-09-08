<?php

include $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$slug = 'Illuminate\Support\Str::slug';

$markdown = 'Illuminate\Support\Str::markdown';
	
$items = [
	'Empezando' => [
		'Instalación',
		'Configuración',
		'Estructura de directorios',
		'Frontend',
		'Despliegue'
	],

	'Básico' => [
		'Rutas',
		'Middleware',
		'Controladores',
		'Vistas',
		'Plantillas Blade',
		'Sesión',
		'Validaciones'
	],

	'Más a fondo' => [
		'Consola',
		'Colecciones',
		'Almacenamiento',
		'Helpers',
		'Cliente HTTP',
		'Localización',
		'Correos electrónicos',
		'Colas'
	],

	'Seguridad' => [
		'Autenticación',
		'Verificación de correo electrónico',
		'Encriptación'
	],

	'Base de datos' => [
		'Como empezar',
		'Query builder',
		'Paginación',
		'Migraciones'
	],

	'Eloquent ORM' => [
		'Como empezar',
		'Relaciones',
		'Colecciones',
		'Mutadores',
		'Recursos API'
	],

	'Pruebas' => [
		'Como empezar',
		'Pruebas HTTP',
		'Pruebas de consola',
		'Pruebas de navegador',
		'Base de datos'
	]
];
