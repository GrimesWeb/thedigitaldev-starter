const { src, dest } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');
const autoprefixer = require('autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');

/* Variables */
sassSrc = 'sass/**/*.scss';
sassDest = '../assets/css/';



function generateCSS(cb) {
    var plugins = [
        autoprefixer(),
        //cssnano(),
    ];
    src(sassSrc)
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(rename({
        extname: ".css"
    }))
    .pipe(postcss(plugins))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(sassDest));
    cb();
}

exports.css = generateCSS;

// Use the following syntax to create a default task if needed (only need to use gulp in terminal)
/*
exports.default = () => (
	gulp.src('src')
		.pipe()
		.pipe(gulp.dest('dist'))
);
*/