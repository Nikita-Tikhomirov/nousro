const gulp = require("gulp"),
    sass = require("gulp-sass"),
    postcss = require("gulp-postcss"),
    autoprefixer = require("autoprefixer"),
    cssnano = require("cssnano"),
    sourcemaps = require("gulp-sourcemaps");
const browserify = require("browserify");
const babelify = require("babelify");
const source = require("vinyl-source-stream");
const buffer = require("vinyl-buffer");
const uglify = require("gulp-uglify");

// Put this after including our dependencies
var paths = {
    styles: {
        // By using styles/**/*.sass we're telling gulp to check all folders for any sass file
        src: "sass/**/*.scss",
        // Compiled files will end up in whichever folder it's found in (partials are not compiled)
        dest: "css"
    },
    javascript: {
        source: "./",
        build: "./js"
    }
    // Easily add additional paths
    // ,html: {
    //  src: '...',
    //  dest: '...'
    // }
};

// Define tasks after requiring dependencies
function style() {
    return (
        gulp
            .src(paths.styles.src)
            // Initialize sourcemaps before compilation starts
            .pipe(sourcemaps.init())
            .pipe(sass())
            .on("error", sass.logError)
            // Use postcss with autoprefixer and compress the compiled file using cssnano
            .pipe(postcss([autoprefixer(), cssnano()]))
            // Now add/write the sourcemaps
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.styles.dest))
    );
}
 
// Expose the task by exporting it
// This allows you to run it from the commandline using
// $ gulp style
exports.style = style;

	
function watch() {
    //I usually run the compile task when the watch task starts as well
    // parallel(styles, javascriptBuild);
    style();
    javascriptBuild();
    gulp.watch(paths.styles.src, style);
    gulp.watch(paths.javascript.source, javascriptBuild);
}
    
// Don't forget to expose the task!
exports.watch = watch

function javascriptBuild() {
    return (
        browserify({
            entries: ["./index.js"]
        }).transform(babelify.configure({
            presets: ["es2015"]
          }))
            .bundle()
            .pipe(source("bundle.js"))
            // Turn it into a buffer!
            .pipe(buffer())
            // And uglify
            .pipe(uglify())
            .pipe(gulp.dest("./js"))
    );
}
 
exports.build = javascriptBuild;