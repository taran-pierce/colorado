var gulp         = require('gulp');
var sass         = require('gulp-sass');
var sourcemaps   = require('gulp-sourcemaps');
var php          = require('gulp-connect-php');
var browserSync  = require('browser-sync').create();
var gulpIf       = require('gulp-if');
var uglify       = require('gulp-uglify');
var concat       = require('gulp-concat');
var cssnano      = require('gulp-cssnano');
var imagemin     = require('gulp-imagemin');
var cache        = require('gulp-cache');
var del          = require('del');
var runSequence  = require('run-sequence');


// production vars
var production = false;

// NODE_ENV=production gulp from command line triggers production build
if ( process.env.NODE_ENV == 'production' ) {
  production = true;
}

// create JS bundle for carousel
gulp.task('jsBundle', function() {
  return gulp.src( 'app/node_modules/siema/dist/siema.min.js' )
    .pipe( gulp.dest( 'app/js') )
});

gulp.task('lazyBundle', function() {
  return gulp.src( 'app/node_modules/lazysizes/lazysizes.min.js' )
    .pipe( gulp.dest( 'app/js' ) )
});

// compile sass
// production flag will trigger compression
gulp.task( 'sass', function() {
  return gulp.src( 'app/scss/**/*.scss' )
    .pipe( gulpIf( !production, sourcemaps.init() ) )
    .pipe( sass({
        outputStyle: ( production ? 'compressed' : 'expanded' )
      })
    )
    .pipe( gulpIf( !production, sourcemaps.write() ) )
    .pipe( gulp.dest( production ? 'dist/css' : 'app/css' ) )
    .pipe( gulpIf( !production, browserSync.reload({
        stream: true
      }) )
    );
});

// set up php server for deving
gulp.task( 'php', function() {
  php.server({
    base: 'app',
    port: 8011,
    keepalive: true
  });
});

// watch app and run different tasks
gulp.task( 'watch', ['browserSync', 'sass'], function() {
  gulp.watch( 'app/scss/**/*.scss', ['sass'] );
  gulp.watch( 'app/**/*.php', browserSync.reload );
  gulp.watch( 'app/js/**/*.js', browserSync.reload );
});

// hook browserySync up to local php server 
gulp.task( 'browserSync', ['php'], function() {
  browserSync.init({
    proxy: 'http://127.0.0.1:8011/'
  });
});


gulp.task('bsBundle', function() {
  gulp.src([
      'app/node_modules/bootstrap/js/dist/dropdown.js',
      'app/node_modules/bootstrap/js/dist/button.js',
      'app/node_modules/bootstrap/js/dist/collapse.js',
      'app/node_modules/bootstrap/js/dist/modal.js'
    ])
    .pipe(concat('bundle.js'))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js/'))
});


// optimze and move images
gulp.task('images', function() {
  return gulp.src( 'app/images/**/*.+(png|jpg|jpg|svg)')
    .pipe( cache( imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.jpegtran({ progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 }),
        imagemin.svgo({
          plugins: [
            { removeViewBox: true },
            { cleanupIDs: false }
          ]
        })
      ]) )
    )
    .pipe( gulp.dest( 'dist/images') );
});

// move needed files like favicon
gulp.task( 'move-assets', function() {
  return gulp.src( 'app/**/*.+(ico|json)' )
    .pipe( gulp.dest( 'dist' ) );
});

// clean dist directory
gulp.task( 'clean:dist', function() {
  return del.sync( 'dist' );
});

// build project
gulp.task( 'build', function(callback) {
  return runSequence( 'clean:dist',
    ['sass', 'move-assets', 'jsBundle', 'lazyBundle', 'images'],
    callback
  );
});

// default task for easy start
gulp.task('default', function(callback) {
  runSequence(
    ['build', 'browserSync', 'watch'],
    callback
  )
});
