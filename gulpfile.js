	



	/**
	*
	*	GULPFILE|JS
	*	----------------------------
	* 	DESC | Tasks runner definition
	*	LOCATION | > gulpfile.js
	*
	*/





	/*----------  DEPENDENCIES  ----------*/



	// Gulp

	var gulp = require('gulp');


	// Styles

	var sass = require('gulp-sass');
	var autoprefixer = require('gulp-autoprefixer');


	// Scripts

	var concat = require('gulp-concat');


	// Utils

	var rename = require('gulp-rename');


	// Testing

	var plumber = require('gulp-plumber');
	var php = require('gulp-connect-php');








	/*----------  WATCHERS  ----------*/



	// Dev

	gulp.task('dev', function ()
	{

  		// Serve
  		php.server(
  		{
  			port: '8889',
  		});

	});