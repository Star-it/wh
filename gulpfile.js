'use strict';
// common plugins
var gulp = require('gulp');
var livereload = require('gulp-livereload');
var plumber = require('gulp-plumber');
var util = require('gulp-util');
var sass = require('gulp-sass');
var babel = require('gulp-babel');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var jsConcat = require('gulp-concat');
var cleanCSS = require('gulp-clean-css');

//Error handling function
var onError = function (error) { 
  util.log(util.colors.red('EROR APPEARED'));
  util.log(error.toString());
  util.log(util.colors.red('Error (' + error.plugin + '): ' + error.message));
  this.emit('end');
};

// copy vendor files from node modules

gulp.task('copy', function() {
    gulp.src(['node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('./js/libs/'))
    gulp.src(['node_modules/normalize.css/normalize.css'])
        .pipe(gulp.dest('./dest'));
})

// js tasks

gulp.task('lib-js',function(){
	gulp.src(['./js/libs/jquery.min.js'])
	.pipe(plumber({
      errorHandler: onError
    }))
    .pipe(jsConcat('libs.js'))
    .pipe(uglify())
	.pipe(rename('libs.min.js'))
	.pipe(gulp.dest('./dest'));
});

gulp.task('js',function(){
	gulp.src('./js/*.js')
	.pipe(plumber({
      errorHandler: onError
    }))
    .pipe(babel({
		presets: ['es2015']
	}))
	.pipe(uglify())
	.pipe(rename({ suffix: '.min' }))
	.pipe(gulp.dest('./dest'))
	.pipe(livereload());
});

// other tasks

gulp.task('html', function(){
	gulp.src('./*.html')
	.pipe(livereload());

});

gulp.task('php', function() {
	gulp.src('./*.php')
	.pipe(livereload());
})

gulp.task('sass', function() {
	gulp.src('./sass/**/*.scss')
	.pipe(plumber({
      errorHandler: onError
    }))
	.pipe(sass())
	.pipe(gulp.dest('./css'))
	.pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./dest'))
	.pipe(livereload());
});

gulp.task('css',function(){
	gulp.src('./css/**/*.css')
	.pipe(plumber({
      errorHandler: onError
    }))
	.pipe(livereload());
});

gulp.task('watch', function(){
	livereload.listen();
	gulp.watch('./sass/**/*.scss',['sass']);
	gulp.watch('./css/**/*.css',['css']);
	gulp.watch('./*.html',['html']);
	gulp.watch('./js/*.js',['js']);
	gulp.watch('./*.php',['php']);
});

	gulp.task('default',['html','copy','lib-js','css','js','sass','php','watch']);
