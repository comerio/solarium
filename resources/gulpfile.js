var gulp         = require('gulp'),
    sass         = require('gulp-sass'),
    uglify       = require('gulp-uglify'),
    imagemin    = require('gulp-imagemin'),
    bs           = require('browser-sync').create(),
    concat = require('gulp-concat');

var src = {
    js     : ['js/*.js'],
    sass   : ['scss-pages/*.scss','scss/*.scss'],
    html   : ['../*.php', '../*/*.php'],
    img    : ['img/**/*.jpg','img/**/*.jpeg','img/**/*.png','img/**/*.gif','img/**/*.svg']
};

gulp.task('build-img', function() {
  gulp.src(src.img)
  .pipe(imagemin())
  .pipe(gulp.dest('../build/img'));
});

gulp.task('js', function () {
    gulp.src(src.js)
        .pipe(uglify({ compress: true }))
        .pipe(gulp.dest('../build/js/'))
        .pipe(bs.stream());
});

gulp.task('sass', function () {
    gulp.src('scss-pages/*.scss')
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(gulp.dest('../build/css/'))
        .pipe(bs.stream());
});

gulp.task('concat-home', function() {
  return gulp.src(['js/slick.js','js/home.js'])
    .pipe(uglify({ compress: true }))
    .pipe(concat('scripts-home.js'))
    .pipe(gulp.dest('../build/js'));
});

gulp.task('concat-archive', function() {
    return gulp.src(['js/slick.js','js/slick-category.js'])
      .pipe(uglify({ compress: true }))
      .pipe(concat('scripts-archive.js'))
      .pipe(gulp.dest('../build/js'));
  });

  gulp.task('concat-single', function() {
    return gulp.src(['js/slick.js','js/single-gallery.js'])
      .pipe(uglify({ compress: true }))
      .pipe(concat('scripts-single.js'))
      .pipe(gulp.dest('../build/js'));
  });

gulp.task('default', ['sass','js','build-img','concat-home', 'concat-archive', 'concat-single'], function () {
    gulp.watch(src.sass, ['sass']);
    gulp.watch(src.img, ['build-img']);
    gulp.watch(src.js,['js']);
    gulp.watch(src.js,['concat-home']);
    gulp.watch(src.js,['concat-archive']);
    gulp.watch(src.js,['concat-single']);
    // bs.watch(src.html).on("change", bs.reload);
});