'use strict';

var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
var postcss = require('gulp-postcss');

sass.compiler = require('node-sass');

gulp.task('css-compile', function (path) {
   return gulp.src(['./assets/**/*.scss', '!./assets/**/login.scss'])
   .pipe(concat('app.scss'))
   .pipe(sass().on('error', sass.logError))
   .pipe(postcss([autoprefixer() ]))
   .pipe(gulp.dest('./assets/css/'));
});

gulp.task('login-compile', function (path) {
  return gulp.src('./assets/**/login.scss')
  .pipe(concat('login.scss'))
  .pipe(sass().on('error', sass.logError))
  .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', function() {
  gulp.watch('./assets/**/*.scss', gulp.series('css-compile'));
  gulp.watch('./assets/**/login.scss', gulp.series('login-compile'));
});