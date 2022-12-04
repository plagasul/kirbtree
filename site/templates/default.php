<!DOCTYPE html>
<html lang="en">
	<head>	
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title><?= $site->title() ?></title>
	    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	</head>
	<body class="min-h-screen bg-gray-100">
	    
	    <div id="header" class="max-w-7xl mx-auto">
	        
	        <div>
	            <figure class="p-6">
	            	<?php if ($site->avatar()->isNotEmpty()) : ?>
	                	<img id="portrait" class="w-32 h-32 rounded-full mx-auto" src="<?= $site->avatar()->toFile()->url() ?>" alt="profile picture" width="400" height="400">
	                <?php endif ?>
	                <div class="pt-6 text-center space-y-4">
	                  <figcaption class="font-medium">
	                    <div id="name" class="text-cyan-900 text-xl">
	                      <?= $site->name()->isNotEmpty() ? $site->name()->html() : '' ?>
	                    </div>
	                    <div id="handle" class="text-gray-500 font-light">
	                      <?= $site->handle()->isNotEmpty() ? $site->handle()->html() : '' ?>
	                    </div>
	                  </figcaption>
	                  <blockquote>
	                    <p id="bio" class="text-lg font-medium">
	                      <?= $site->bio()->isNotEmpty() ? $site->bio() : '' ?>
	                    </p>
	                  </blockquote>
	                </div>
	              </figure>
	        </div>
	        
	    </div>

	    <div id="cards" class="max-w-xs mx-auto">
	        
	        <div class="pt-6 text-center space-y-4">
	            <a href="https://cpintoval.github.io/" target="_blank" class="flex items-start rounded-lg border border-gray-400 bg-white px-5 py-4 text-lg leading-6 font-medium shadow-md hover:shadow-xl transition ease-in-out duration-150">
	                <p class="mr-3 h-6 w-6">👨🏽‍💻</p>
	                Website
	                <div class="ml-auto mt-0.5 pl-4">
	                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
	                    </svg>
	                </div>
	            </a>
	        </div>
	        
	        <div class="pt-6 text-center space-y-4">
	            <a href="https://twitter.com/cpintoval" target="_blank" class="flex items-start rounded-lg border border-gray-400 bg-white px-5 py-4 text-lg leading-6 font-medium shadow-md hover:shadow-xl transition ease-in-out duration-150">
	                <p class="mr-3 h-6 w-6">💬</p>
	                Twitter
	                <div class="ml-auto mt-0.5 pl-4">
	                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
	                    </svg>
	                </div>
	            </a>
	        </div>
	        
	        <div class="pt-6 text-center space-y-4">
	            <a href="https://www.linkedin.com/in/cpintoval/" target="_blank" class="flex items-start rounded-lg border border-gray-400 bg-white px-5 py-4 text-lg leading-6 font-medium shadow-md hover:shadow-xl transition ease-in-out duration-150">
	                <p class="mr-3 h-6 w-6">💼</p>
	                LinkedIn
	                <div class="ml-auto mt-0.5 pl-4">
	                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
	                    </svg>
	                </div>
	            </a>
	        </div>
	        
	        <div class="pt-6 text-center space-y-4">
	            <a href="https://github.com/cpintoval" target="_blank" class="flex items-start rounded-lg border border-gray-400 bg-white px-5 py-4 text-lg leading-6 font-medium shadow-md hover:shadow-xl transition ease-in-out duration-150">
	                <p class="mr-3 h-6 w-6">🛠</p>
	                GitHub
	                <div class="ml-auto mt-0.5 pl-4">
	                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
	                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
	                    </svg>
	                </div>
	            </a>
	        </div>
	        
	    </div>
	    

	</body>
	<script src="script.js"></script>
</html>
