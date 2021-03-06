var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');

gulp.task('styles', function() {
  return gulp.src('assets/css/sass/main.scss')
    .pipe(sass({ style: 'expanded' }))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('assets/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('assets/css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('scripts', function() {
  return gulp.src([ 'assets/js/libs/jquery-ui-1.9.2.custom.min.js', 'assets/js/modules/*.js', 'assets/js/libs/jquery.ui.touch-punch.min.js'] )

    // .pipe(jshint('.jshintrc'))
    // .pipe(jshint.reporter('default'))

    .pipe(concat('concat.js'))
    .pipe(gulp.dest('assets/js/min'))
    .pipe(rename({suffix: '.min'}))

    .pipe(uglify())
    .pipe(gulp.dest('assets/js/min'))

    .pipe(notify({ message: 'Scripts task complete' }));
});

gulp.task('images', function() {
  return gulp.src('src/images/**/*')
    .pipe(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true }))
    .pipe(gulp.dest('assets/images'))
    .pipe(notify({ message: 'Images task complete' }));
});

gulp.task('clean', function() {
  return gulp.src(['assets/css', 'assets/js', 'assets/img'], {read: false})
    .pipe(clean());
});

gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts');
});

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('assets/css/sass/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('assets/js/**/*.js', ['scripts']);

  // Watch image files
  gulp.watch('assets/images/**/*', ['images']);

});







