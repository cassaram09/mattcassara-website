var gulp = require('gulp');
var gutil = require('gulp-util');
var bower = require('bower');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var sh = require('shelljs');
var browserSync = require('browser-sync').create();

var paths = {
  sass: './wp-content/themes/master/_sass/*.scss',
  css: './wp-content/themes/master',
  theme: './wp-content/themes/master/*.*'
};

gulp.task('browser-sync', function() {
    //watch files
    var files = [paths.theme]

    //initialize browsersync
    browserSync.init(files, {
    proxy: "development/personal/mattcassara-website/",
    notify: false
    });
});
 
gulp.task('sass', function(done) {
  gulp.src('./wp-content/themes/master/_sass/style.scss')
    .pipe(sass())
    .on('error', sass.logError)
    .pipe(gulp.dest(paths.css))
    .pipe(minifyCss({
      keepSpecialComments: 0
    }))
    .pipe(rename({ extname: '.min.css' }))
    .pipe(gulp.dest(paths.css))
    .on('end', done);
});

gulp.task('serve', ['sass', 'browser-sync'], function() {
  gulp.watch(paths.sass, ['sass']);
})

