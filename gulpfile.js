var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('assets/scss/style.scss')
  .pipe(sass())
  .pipe(gulp.dest('./'));
});

gulp.task('default', ['sass']);
