<!DOCTYPE html>
<html lang="en">


<head>

	<!-- METAS -->

	<meta charset="UTF-8">
	<title>HOLI</title>


	<!-- STYLES -->
	
	<style>
		html, body{ width:100%; height:100%; margin:0; padding:0; border:none;}
		main{ position:absolute; top:0; left:0; width:100%; height:100%; overflow: hidden; }
		.loader{ position:absolute; top:0; left:0; width:100%; height:100%; background-image:url(assets/medias/images/couverture.jpg); background-size:cover; background-position:center; background-repeat: no-repeat; -webkit-filter:grayscale(1); -moz-filter:grascale(1); -o-filter:grayscale(1); -ms-filter:grayscale(1); filter:grayscale(100); -webkit-transition:all 0.3s ease; transition:all 0.3s ease;}
		.loader-content{ box-sizing:border-box; position:absolute; top:50%; left:50%; width:150px; height:200px; margin-top:-100px; margin-left:-75px; padding:20px; }
		.loader-content .holi-text{ display: block; width:100%; height:auto; padding-bottom:30px; border-bottom:4px solid #FEFEFE; }
		.loader-content .loader-percentage{ display: block; text-align:center; font-family:Gotham, Helvetica; color:#FEFEFE; font-size:25px; margin-top:25px; }
		.loader-content .loader-percentage:after{ content:'%'; font-size:20px; margin-left:5px; }
		.loader-content svg{ position:absolute; top:0; left:0; }
		.loader-content svg rect{ transition: all 0.3s ease; }
	</style>

</head>


<body>


	<main class="main">
	
		<div class="loader">
			<div class="loader-content">
				<img class="holi-text" src="assets/medias/images/logo_text_holi.png" alt="">
				<span class="loader-percentage">00</span>
				<svg width="150" height="200"><rect class="loader-stroke" x="0" y="0" width="150" height="200" stroke="#FEFEFE" stroke-width="8" stroke-dasharray="700" stroke-dashoffset="700" fill="transparent"/></svg>
			</div>
		</div>

	</main>

	
</body>


</html>


<!-- SCRIPTS -->

<script src="vendors/js/jquery.js"></script>
<script src="app/controllers/App.controller.js"></script>

<script>



	/* STORAGE */

	var storage = {
		templates: {},
		images: {},
		videos: {}
	};


	var chapters = {
		summary: null,
		episodes: new Array()
	};





	/* LAUNCH */
	
	$(document).ready(function ()
	{

		// Create doc
		var app = new App($('body'));

		// Init
		app.load({
			css: [
				'assets/styles/css/app.css'
			],
			js: [
				'app/controllers/Doc.controller.js',
				'app/controllers/Home.controller.js',
				'app/controllers/Doc.controller.js',
				'app/controllers/Menu.controller.js',
				'app/controllers/Chapter.controller.js?i=10',
				'app/controllers/Personna.controller.js',
				'app/controllers/Annex.controller.js?i=10',
				'app/models/Summary.model.js',
				'app/models/Chapter1.model.js',
				'app/models/Chapter2.model.js',
				'app/models/Chapter3.model.js',
				'app/models/Chapter4A.model.js',
				'app/models/Chapter4B.model.js',
				'app/models/Chapter5.model.js',
				'app/models/Chapter6A.model.js',
				'app/models/Chapter6B.model.js',
				'app/models/Chapter6C.model.js',
				'app/models/Chapter7.model.js'
			],
			templates: [
				{ name: 'header', url: 'app/views/header.template.html?i=10', load: true },
				{ name: 'timeline', url: 'app/views/timeline.template.html', load: true },
				{ name: 'home', url: 'app/views/home.template.html?i=2', load: true },
				{ name: 'menu', url: 'app/views/menu.template.html?i=12', load: true },
				{ name: 'personna', url: 'app/views/personna.template.html', load: false },
				{ name: 'next', url: 'app/views/next.template.html', load: false },
				{ name: 'diaporama', url: 'app/views/diaporama.template.html', load: false },
				{ name: 'finish', url: 'app/views/finish.template.html?i=3', load: true },
			],
			images: [
				{ name: 'cover', url: 'http://www.hdwallpapersos.com/wp-content/uploads/2015/02/roger-federer-best-wide-high-definition-wallpaper.jpg' },
				{ name: 'cover_chapitre_1', url: 'storage/1/cover_chapitre_1.jpg' },
				{ name: 'cover_chapitre_2', url: 'storage/2/cover_chapitre_2.jpg' },
				{ name: 'cover_chapitre_3', url: 'storage/3/cover_chapitre_3.jpg' },
				{ name: 'cover_chapitre_4A', url: 'storage/4A/cover_chapitre_4A.jpg' },
				{ name: 'cover_chapitre_4B', url: 'storage/4B/cover_chapitre_4B.jpg' },
				{ name: 'cover_chapitre_5', url: 'storage/5/cover_chapitre_5.jpg' },
				{ name: 'cover_chapitre_6A', url: 'storage/6A/cover_chapitre_6A.jpg' },
				{ name: 'cover_chapitre_6B', url: 'storage/6B/cover_chapitre_6B.jpg' },
				{ name: 'cover_chapitre_6C', url: 'storage/6C/cover_chapitre_6C.jpg' },
				{ name: 'cover_chapitre_7', url: 'storage/7/cover_chapitre_7.jpg' }
			]
		},
		function ()
		{
			
			// Init
			app.init();

		});


	});

</script>