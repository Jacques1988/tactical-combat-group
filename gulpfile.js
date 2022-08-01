const gulp = require('gulp')
const flatMap = require('flat-map').default
const scaleImages = require('gulp-scale-images')


function defaultTask(cb) {
    const twoVariantsPerFile = (file, cb) => {
        const pngFile = file.clone()
        pngFile.scale = {maxWidth: 500, maxHeight: 500, format: 'png'}
        const jpegFile = file.clone()
        jpegFile.scale = {maxWidth: 700, format: 'jpeg'}
        cb(null, [pngFile, jpegFile])
    }
    
    return gulp.src('img/**/*.{jpeg,jpg,png,gif}')
    .pipe(flatMap(twoVariantsPerFile))
    .pipe(scaleImages())
    .pipe(gulp.dest("img"))
}

exports.default = defaultTask