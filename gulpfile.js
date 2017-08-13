let gulp = require('gulp');
let browserSync = require('browser-sync').create();
let sass = require('gulp-sass');

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'jmichaelward.dev'
    });

    gulp.watch('assets/src/scss/**/*.scss', ['sass']);
});

gulp.task('sass', function() {
    return gulp.src('assets/src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('watch', ['browser-sync']);
gulp.task('default', ['sass']);