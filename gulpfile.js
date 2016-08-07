/* Dependencies
------------------------------------- */
var gulp = require('gulp-help')(require('gulp'));
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var uglify = require('gulp-uglify');
var csso = require('gulp-csso');
var sourcemaps = require('gulp-sourcemaps');
var rev = require('gulp-rev');
var revReplace = require('gulp-rev-replace');
var filter = require('gulp-filter');
var useref = require('gulp-useref');

/* Variables and paths
------------------------------------- */

var paths = {
  build: 'public_html/',
  index: 'src/index.html',
};

/* Tasks
------------------------------------- */

gulp.task('jshint', 'Lints all javascript files', [], function() {
  return gulp.src(paths.scripts)
    .pipe(jshint())
    .pipe(jshint.reporter(stylish))
    ;
});

gulp.task('build', 'Builds the app', [], function() {
  var jsFilter = filter('**/*.js', { restore: true });
  var cssFilter = filter('**/*.css', { restore: true });
  var notIndexHtmlFilter = filter(['**/*', '!**/index.html'], { restore: true });

  return gulp.src(paths.index)
    .pipe(useref({ searchPath: '.' }))
    .pipe(jsFilter)
    .pipe(uglify())             // Minify any javascript sources
    .pipe(jsFilter.restore)
    .pipe(cssFilter)
    .pipe(csso())               // Minify any CSS sources
    .pipe(cssFilter.restore)
    .pipe(notIndexHtmlFilter)
    .pipe(rev())                // Rename the concatenated files (but not index.html)
    .pipe(notIndexHtmlFilter.restore)
    .pipe(revReplace())         // Substitute in new filenames
    .pipe(gulp.dest(paths.build))
    ;
});

gulp.task('watch', 'Re-builds the app on changes', ['build'], function () {
  gulp.watch(['src/js/**/*.js', 'src/js/**/*.css', 'src/index.html'], ['build']);
});
