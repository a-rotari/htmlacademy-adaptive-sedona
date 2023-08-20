const gulp = require("gulp");
const plumber = require("gulp-plumber");
const sourcemap = require("gulp-sourcemaps");
const less = require("gulp-less");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const connectPHP = require("gulp-connect-php");
const sync = require("browser-sync").create();

// Styles

const styles = () => {
  return gulp.src("source/less/style.less")
    .pipe(plumber())
    .pipe(sourcemap.init())
    .pipe(less())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(sourcemap.write("."))
    .pipe(gulp.dest("source/public/css"))
    .pipe(sync.stream());
}

exports.styles = styles;

// PHP Server

const phpServerTask = (done) => {
  connectPHP.server({
    base: 'source/public',
    port: 8000,
    keepalive: true,
  }, done);
};

exports.phpServerTask = phpServerTask;

// Watcher

const watcher = () => {
  gulp.watch("source/less/**/*.less", gulp.series("styles"));
  gulp.watch("source/public/*.php").on("change", sync.reload);
}

exports.watcher = watcher;

exports.default = gulp.series(
  styles, phpServerTask, watcher
);
