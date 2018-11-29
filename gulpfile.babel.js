import gulp from 'gulp';
import jshint from 'gulp-jshint';
import stylish from 'jshint-stylish';
import uglify from 'gulp-uglify';
import csso from 'gulp-csso';
import sourcemaps from 'gulp-sourcemaps';
import rev from 'gulp-rev';
import revReplace from 'gulp-rev-replace';
import filter from 'gulp-filter';
import useref from 'gulp-useref';

/* Variables and paths
------------------------------------- */

const paths = {
  build: 'public_html/',
  index: 'src/index.html',
  scripts: 'src/js/*.js',
};

/* Tasks
------------------------------------- */

// 'Lints all javascript files'
export function lint () {
  return gulp.src(paths.scripts)
    .pipe(jshint())
    .pipe(jshint.reporter(stylish))
    ;
}

//  'Builds the app'
export function build () {
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
}

// 'Re-builds the app on changes'
export function watch () {
  gulp.watch(
    ['src/js/**/*.js', 'src/css/**/*.css', 'src/index.html'],
    { ignoreInitial: false },
    build
  );
}

/*
 * Export a default task
 */
export default build;

