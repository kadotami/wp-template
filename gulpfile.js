var gulp = require('gulp');
var sass = require('gulp-sass');

// SassとCssの保存先を指定
gulp.task('sass', function(){
  return gulp.src('./scss/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('./'));
});

//自動監視のタスクを作成(sass-watchと名付ける)
gulp.task('watch', gulp.series( gulp.parallel('sass'), function(){
  var watcher = gulp.watch('./scss/**/*.scss', gulp.task('sass'));
  watcher.on('change', function(event) {
  });
}));

// タスク"watch"がgulpと入力しただけでdefaultで実行されるようになる
gulp.task('default', gulp.task('watch'));
