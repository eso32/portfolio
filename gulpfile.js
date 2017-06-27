var gulp = require('gulp'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-ruby-sass'),
    livereload = require('gulp-livereload'),
    prefix = require('gulp-autoprefixer'),
    browserSync = require('browser-sync');

// Scripts task
//uglifies
gulp.task('scripts', function(){
  gulp.src('js/*/*.js')
    .pipe(gulp.dest('build/js'))
    .pipe(browserSync.reload({stream: true}));
});

// Scripts task
//compile sass
gulp.task('styles', function(){
  return sass('scss/main.scss', {style: 'expanded'})
    .on('error', sass.logError)
    .pipe(prefix('last 15 versions'))
    .pipe(gulp.dest('build/css/'))
    .pipe(browserSync.reload({stream: true}));
});

//Watch task
//Watches JS
gulp.task('watch', function(){
  browserSync.init({
    server: './'
    // proxy: 'localhost/gulp/'
  });
  gulp.watch('js/*/*.js', ['scripts']);
  gulp.watch('scss/*.scss', ['styles']);
  gulp.watch('*.html').on('change', browserSync.reload);
  gulp.watch('js/templates/*.html').on('change', browserSync.reload);
})


gulp.task('default',['scripts', 'styles', 'watch']);
