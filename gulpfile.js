'use strict';

var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');

sass.compiler = require('node-sass');

gulp.task('css-compile', function (path) {
   return gulp.src('./assets/**/*.scss')
   .pipe(concat('app.scss'))
   .pipe(sass().on('error', sass.logError))
   .pipe(postcss([autoprefixer() ]))
   .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', function() {
  gulp.watch('./assets/**/*.scss', gulp.series('css-compile'));
});