var gulp = require('gulp'),
    plumber = require('gulp-plumber');
    stylus = require('gulp-stylus');
    nib = require('nib');

gulp.task('stylus2css', function(){
	gulp.src("stylus/main.styl")
	.pipe(plumber())
	.pipe(stylus({
		use: [nib()],
		compress : true
	}))
	.pipe(gulp.dest("dist/css"));
});

gulp.task('cssproduc', function(){
	
	gulp.src("stylus/main.styl")
	.pipe(plumber())
	.pipe(stylus())
	.pipe(gulp.dest("css"));
	
});

gulp.task("watch", function(){
	gulp.watch("stylus/main.styl", ["stylus2css"] );
	gulp.watch("stylus/main.styl", ["cssproduc"] );
});

gulp.task('default', ["stylus2css" , "cssproduc"]);
