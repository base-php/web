<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Base PHP</title>

	<link rel="icon" href="/img/favicon.svg">

	<link rel="stylesheet" href="/node_modules/flowbite/src/flowbite.css">
	<link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">
	<link rel="stylesheet" href="/css/docs.css">

	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="w-full">
		<div class="flex">
			<div class="w-3/12 sidebar">
				<h1 class=" ml-8 pl-6 text-2xl mt-3 font-bold">
					<i class="fa fa-shapes"></i>
					Base PHP
				</h1>

				<div class="menu ml-8 mt-8">
					<div class="ml-3 mt-5">
						<?php foreach ($items as $menu => $submenus): ?>
							<div x-data="{ <?php echo $slug($menu, ''); ?>: false }">
								<a href="#" x-on:click="<?php echo $slug($menu, ''); ?> = !<?php echo $slug($menu, ''); ?>" class="block m-3"><?php echo $menu; ?></a>

								<div class="ml-6" x-show="<?php echo $slug($menu, ''); ?>" x-transition>
									<?php foreach ($submenus as $submenu): ?>
										<a hx-post="markdown.php" hx-vals='<?php echo json_encode(['file' => $slug($menu, '-')]) ?>' hx-target=".content" href="#" class="block text-gray-500"><?php echo $submenu; ?></a>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<div class="w-9/12 bg-white content p-5">
				
			</div>
		</div>
	</div>

	<script src="/node_modules/flowbite/dist/flowbite.js"></script>
	<script src="/node_modules/htmx.org/dist/htmx.js"></script>
	<script src="/node_modules/alpinejs/dist/cdn.js"></script>
</body>
</html>