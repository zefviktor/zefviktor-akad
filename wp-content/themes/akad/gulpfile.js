

const gulp         = require('gulp');
const browserSync  = require('browser-sync').create();
const sass         = require('gulp-sass');
const clean        = require('gulp-clean');
const autoprefixer = require('gulp-autoprefixer');
const concatCss    = require('gulp-concat-css');
const cleanCSS     = require('gulp-clean-css');
const rename       = require("gulp-rename");
const uglify       = require('gulp-uglify');
const sourcemaps   = require('gulp-sourcemaps');



//
// gulp.task('directories', function () {
//     return gulp.src('*.*', {read: false})
//         .pipe(gulp.dest('assets/css'))
//         .pipe(gulp.dest('assets/fonts'))
//         .pipe(gulp.dest('assets/img'))
//         .pipe(gulp.dest('assets/js'))
//         .pipe(gulp.dest('assets/sass'))
// });





// gulp.task('clean', function () {
//     return gulp.src(['css', 'fonts', 'img'], {read: false})
//         .pipe(clean());
// });




gulp.task('php', function () {
    return gulp.src('**/*.php')
        .pipe(browserSync.reload({stream: true}))
});


gulp.task('sass', function () {
    return gulp.src('assets/sass/**/*.sass')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            overrideBrowserslist: ['last 2 versions'],
            // browsers: ['last 1 versions'],
            // browsers: ['> 0.1%'],
            cascade: false
        }))
        // .pipe(concatCss("style2.css"))
        .pipe(rename({suffix: ".min"}))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({stream: true}));
});


gulp.task('fonts', function () {
    return gulp.src('assets/fonts/**/*')
        .pipe(gulp.dest('fonts'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('img', function () {
    return gulp.src('assets/img/**/*.*')
        .pipe(gulp.dest('img'))
        .pipe(browserSync.reload({stream: true}))
});



gulp.task('mincss', function() {
    return gulp.src("assets/css/*.css")
        .pipe(rename({suffix: ".min"}))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest("css"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('minjs', function() {
    return gulp.src("assets/js/*.js")
        .pipe(rename({suffix: ".min"}))
        .pipe(uglify())
        .pipe(gulp.dest("js"))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('watch', gulp.series('php', 'img', 'sass', 'minjs', 'mincss', 'fonts', (done) => {
    browserSync.init({
        proxy: "localhost/zefviktor-akad",
        port: 8000,
        // tunnel: true
    });
    // browserSync.init({
    //     server: "./akad",
    //     notify: false,
    //     ui: {
    //         port: 3000
    //     },
    //     // tunnel: true
    // });
    gulp.watch('assets/sass/**/*.sass', gulp.parallel('sass'));
    gulp.watch('assets/js/**/*.js', gulp.parallel('minjs'));
    gulp.watch('assets/css/**/*.css', gulp.parallel('mincss'));
    gulp.watch('assets/img/**/*.*', gulp.parallel('img'));
    // gulp.watch('assets/**/*.html', gulp.parallel('html'));
    gulp.watch('assets/**/*.php', gulp.parallel('php'));
    gulp.watch('assets/fonts/**/*', gulp.parallel('fonts'));
    done();
}));


