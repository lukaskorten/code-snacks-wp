const gulp = require('gulp');
const sass = require('gulp-sass');
const nodeSass = require('node-sass');
const webpack = require('webpack-stream');
const named = require('vinyl-named');

sass.compiler = nodeSass;

gulp.task('sass', () => {

    const targetDir = 'css';

    return gulp.src('style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(targetDir));
});

gulp.task('sass:watch', function () {
    gulp.watch('sass/**/*.scss', ['sass']);
});


gulp.task('package', () => {

    const entryFile = 'js/index.js';
    const targetDir = 'dist/js';
    const webpackConfig = {
        devtool: 'source-map',
        mode: 'development'
    };

    return gulp.src(entryFile)
        .pipe(named())
        .pipe(webpack(webpackConfig))
        .pipe(gulp.dest(targetDir));
});


gulp.task('default', gulp.parallel('sass', 'package'));
gulp.task('build', gulp.parallel('sass', 'package'));