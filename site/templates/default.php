<!DOCTYPE html>
<html lang="en">
	<head>	
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title><?= $site->title() ?></title>
	    <script src="https://cdn.tailwindcss.com"></script>
	</head>
	<body class="min-h-screen bg-gray-100">
	    
	    <div id="header" class="max-w-7xl mx-auto">
	        
	        <div>
	            <figure class="pt-12 px-6">
	            	<?php if ($site->avatar()->isNotEmpty()) : ?>
	                	<img id="portrait" class="w-24 h-24 md:w-32 md:h-32 rounded-full mx-auto" src="<?= $site->avatar()->toFile()->url() ?>" alt="profile picture" width="400" height="400">
	                <?php endif ?>
	                <div class="pt-6 text-center space-y-4">
	                  <figcaption class="font-medium">
	                    <div id="name" class="text-gray-700 text-lg md:text-xl">
	                      <?= $site->name()->isNotEmpty() ? $site->name()->html() : '' ?>
	                    </div>
	                    <div id="handle" class="text-gray-500 font-light text-base">
	                    	<?php if ($site->handles()->isNotEmpty()): ?>
		                    	<?php foreach ($site->handles()->toStructure() as $h): ?>
		                      		<a href="<?= $h->url() ?>" target="_blank"><?= $h->handle()->html() ?></a>
	    	                	<?php endforeach ?>
	        				<?php endif ?>
	                    </div>
	                  </figcaption>
	                  <blockquote>
	                    <p id="bio" class="text-sm md:text-base">
	                      <?= $site->bio()->isNotEmpty() ? $site->bio()->inline() : '' ?>
	                    </p>
	                  </blockquote>
	                </div>
	              </figure>
	        </div>
	        
	    </div>

	    <div id="cards" class="pt-6 pb-24 px-4 max-w-xl mx-auto">
	        
	        <?php if ($site->links()->isNotEmpty()): ?>
		        <?php foreach ($site->links()->toStructure() as $l):?>
			        <div class="pt-4 text-center space-y-4">
			            <a href="<?= $l->url()->isNotEmpty() ? $l->url() : '' ?>" target="_blank" class="flex items-center justify-left rounded-lg border bg-white px-2 py-2 text-sm md:text-base md:text-md leading-6 font-medium shadow-md hover:shadow-lg transition ease-in-out duration-150">
			                <?php if ($l->image()->isNotEmpty()): ?>
			                	<img class="w-12 h-12 rounded object-cover object-center" src="<?= $l->image()->toFile()->resize(100)->url() ?>">
			            	<?php endif ?>	
			                <p class="text-gray-600 p-2 text-center grow">
			                	<?= $l->what()->html() ?>
			                	<?= $l->where()->isNotEmpty() ? ' @ ' . $l->where()->html() : '' ?>		
		                	</p>
			            </a>
			        </div>
			    <?php endforeach ?>
			<?php endif ?>

	    </div>
	    

	</body>
	<script src="script.js"></script>
</html>
