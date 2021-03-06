var gulp = require('gulp'),
    bs = require('browser-sync').create(),
    reload = bs.reload,
    sass = require('gulp-sass'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    concat = require('gulp-concat'),
    cleanCSS = require('gulp-clean-css'),
    bowerMain = require('bower-main'),
    mainBowerFiles = require('main-bower-files'),
    exists = require('path-exists').sync,
    gulpIgnore = require('gulp-ignore'),
    errorNotifier = require('gulp-error-notifier'),
    runSequence = require('run-sequence'),
    inject = require('gulp-inject'),
    del = require('del');


    var config = {
        baseDirRoot:'./',
        bowerBaseDir: './bower_components',
        publicCSS: './public/assets/css',
        publicJS: './public/assets/js',
        sassStyle: './resources/assets',
    }


//Clean Path CSS, JS compiladed
gulp.task('clean', function() {
    del(config.publicCSS);
    del(config.publicJS);
})

// Static Server + watching scss/html files
gulp.task('serve', ['clean', 'sass'], function() {
    bs.init({
        server: {
            baseDir: './'
        }
    });

    // gulp.watch('resources/assets/scss/stylesheets/general.scss', ['scss'])

});
// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
        config.publicCSS + '/**/*.css',
        config.publicJS + '/**/*.js',
        './*.html'
    ];

    //initialize bs
  // Static server
    bs.init(files,{
               proxy: "http://upinside.test", // makes a proxy for localhost:8080              
               files: ["**/**/*.php"],
               // Customise the placement of the snippet
//         // and ignore certain paths
        snippetOptions: {

            // Ignore all HTML files within the templates folder
            ignorePaths: "./*.html",

            // Provide a custom Regex for inserting the snippet.
            rule: {
                match: /<\/body>/i,
                fn: function(snippet, match) {
                    return snippet + match;
                }
            }
        }
    });

    gulp.watch(["*.html","*.php"]).on("change", bs.reload);
});

//    bs.init({
//     port: 8080,  // makes a proxy for localhost:8080
    
//         server: {
//             baseDir: './'
//         },
//         // Customise the placement of the snippet
//         // and ignore certain paths
//         snippetOptions: {

//             // Ignore all HTML files within the templates folder
//             ignorePaths: "./*.html",

//             // Provide a custom Regex for inserting the snippet.
//             rule: {
//                 match: /<\/body>/i,
//                 fn: function(snippet, match) {
//                     return snippet + match;
//                 }
//             }
//         }
//     });

// // register the bs plugin to inject snippet
// bs.use(require('bs-snippet-injector'), {
//     // path to the file containing the closing </body> tag
//     file: 'index.html'
// });

// Create some task bower components

//Here we only copy files to folder inside source code.
//In this case ./src/lib/
gulp.task("bower:copyfiles", function(cb) {
    return gulp.src(mainBowerFiles({
        overrides: {
            bootstrap: {
                main: [
                    './dist/js/bootstrap.js',
                    './dist/css/*.min.*',
                    './dist/fonts/*.*'
                ]
            },
            html5shiv: {
                main: [
                    './dist/js/html5shiv.js',
                    './dist/js/*.min.*',
                    
                ]
            },
            jquery: {
                main: [
                    './dist/js/jquery.js',
                    './dist/js/*.min.*',
                    
                ]
            }
        }
        }))
        .pipe(gulp.dest(config.publicCSS))
        .pipe(gulp.dest(config.publicJS))
    cb();
});


gulp.task('bower:insertfiles', function (cb) {
    // var target = gulp.src(config.baseDirRoot + 'index.php');
    // // It's not necessary to read the files (will speed up things), we're only after their paths:
    // var sources = gulp.src([config.publicJS + '/**/*.js', config.publicCSS +'/**/*.css'], {read: false});
   
    // return target.pipe(inject(sources,  {relative: true}))
    //   .pipe(gulp.dest(config.baseDirRoot))
     
     return  gulp.src(config.baseDirRoot + 'index.php')
  .pipe(inject(gulp.src([config.publicJS + '/*.js',config.publicJS + '/**/*.js', config.publicCSS +'/*.css', config.publicCSS +'/**/*.css', config.publicCSS +'**/**/*.css'], {read: false}), {relative: true}))
  .pipe(gulp.dest(config.baseDirRoot))
  .on("error", notify.onError("Error: <%= error.message %>"))
  .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }));
  
  });
//This task is the one wich insert the script tag into
// HTML file. In this case is index.html and is in root
// gulp.task('bower:insertfiles', function(cb) {
//     return gulp.src(config.baseDirRoot + 'index.php') //file with tags for injection
//         .pipe(inject(gulp.src([config.publicJS + '/*.js', config.publicCSS + '/*.css'], { read: false }), {
//             starttag: '<!-- bower:{{ext}} -->',
//             endtag: '<!-- endbower -->',
//             relative: true
//         }))
//         .pipe(gulp.dest(config.baseDirRoot)); //where index.html will be saved. Same dir for overwrite old one
// })

//And this task will launch the process of copy and include into index.html
gulp.task('bower:buildlib', function(cb) {
    runSequence('copy-bower-dep', 'bower:insertfiles', cb);
})

gulp.task('copy-bower-dep', function() {

    // Copy minified resources (Bower)
    gulp.src(bowerMain('js', 'min.js').minified, { base: config.bowerBaseDir })
        .pipe(gulp.dest(config.publicJS ));

    gulp.src(bowerMain('css', 'min.css').minified, { base: config.bowerBaseDir })
        .pipe(gulp.dest(config.publicCSS));

    // Copy non-minified resources (Bower)
    // Notice we filter these resources to distinguish which one are minified.
    gulp.src(mainBowerFiles(), { base: config.bowerBaseDir })
        .pipe(gulpIgnore.include(keepNonMinified))
        .pipe(gulp.dest(config.publicCSS))
        .pipe(gulp.dest(config.publicJS));
});

/*
 * A function that checks whether a Bower file has a minified version.
 */
function keepNonMinified(file) {

    var keep = true;
    if (file.path.match('\.js$')) {
        var minPath = file.path.replace('.js', '.min.js');
        keep = !exists(minPath);

    } else if (file.path.match('\.css$')) {
        var minPath = file.path.replace('.css', '.min.css');
        keep = !exists(minPath);
    }

    // gutil.log( file.path + ' => ' + keep );
    return keep;
}

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass:boot', function() {

    return gulp.src('resources/assets/sass/dist/*.sass')
        .pipe(errorNotifier())
        // .pipe(sass({
        //     style: 'compressed',
        //     errLogToConsole: false,
        //     onError: function(err) {
        //         return notify().write(err);
        //     }
        // }))
        // .pipe(sass({ errLogToConsole: false, }))
        // .on('error', function(err) {
        //     notify().write(err);
        //     this.emit('end');
        // })
        .pipe(sass({}).on('error', function(err) {
            return notify().write(err);
        }))
        .pipe(plumber())
        .pipe(cleanCSS())
        // .pipe(through(function() {
        //     this.emit("error", new Error("Something happend: Error message!"))
        // }))
        // .on("error", notify.onError("Error: <%= error.message %>"))
        // .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
        // .pipe(through(function() {
        //     this.emit("error", new Error("Something happend: Error message!"))
        // }))
        .pipe(concat('boot.min.css'))
        .pipe(gulp.dest(config.publicCSS + '/dist/boot'))
        .pipe(bs.stream())
        .pipe(notify({ message: 'Styles boot task complete' }));
    // .pipe(notify({
    //     title: 'Gulp',
    //     subtitle: 'success',
    //     message: 'Sass task',
    //     sound: "Pop"
    // }));
});

gulp.task('sass:style', function() {

    return gulp.src('resources/assets/sass/*.sass')
        .pipe(errorNotifier())
        // .pipe(sass({
        //     style: 'compressed',
        //     errLogToConsole: false,
        //     onError: function(err) {
        //         return notify().write(err);
        //     }
        // }))
        // .pipe(sass({ errLogToConsole: false, }))
        // .on('error', function(err) {
        //     notify().write(err);
        //     this.emit('end');
        // })
        .pipe(sass({}).on('error', function(err) {
            return notify().write(err);
        }))
        .pipe(plumber())
        .pipe(cleanCSS())
        // .pipe(through(function() {
        //     this.emit("error", new Error("Something happend: Error message!"))
        // }))
        // .on("error", notify.onError("Error: <%= error.message %>"))
        // .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))
        // .pipe(through(function() {
        //     this.emit("error", new Error("Something happend: Error message!"))
        // }))
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest(config.publicCSS))
        .pipe(bs.stream())
        .pipe(notify({ message: 'Styles task complete' }));
    // .pipe(notify({
    //     title: 'Gulp',
    //     subtitle: 'success',
    //     message: 'Sass task',
    //     sound: "Pop"
    // }));
});
gulp.task('watch', function() {
    gulp.watch('resources/assets/sass/*.sass', ['sass:style'])
    gulp.watch('resources/assets/sass/dist/*.sass', [ 'sass:boot'])
    gulp.watch('*.html').on('change', bs.reload);
});

gulp.task('default', ['browser-sync','watch', 'sass:style','sass:boot', 'bower:buildlib']);