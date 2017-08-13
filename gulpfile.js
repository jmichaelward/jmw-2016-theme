const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'jmichaelward.dev'
    });

    gulp.watch('assets/src/scss/**/*.scss', ['sass']);
    gulp.watch('*.php').on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp.src('assets/src/scss/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/dist/css'))
        .pipe(browserSync.stream());
});

gulp.task('watch', ['browser-sync']);
gulp.task('default', ['sass']);