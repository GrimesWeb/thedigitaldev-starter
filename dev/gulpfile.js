const { src, dest } = require("gulp");
const sass = require('gulp-sass')(require('sass'));
const rename = require('gulp-rename');

/* Variables */
sassSrc = 'sass/**/*.scss';
sassDest = '../assets/css/';


function generateCSS(cb) {
    src(sassSrc)
    .pipe(sass().on('error', sass.logError))
    .pipe(rename({
        extname: ".css"
    }))
    .pipe(dest(sassDest));
    cb();
}

exports.css = generateCSS;