module.exports = function (grunt) {
    'use strict';
    // Project configuration.
    grunt.initConfig({
        path: {
            WPcss: 'wordpress/wp-content/themes/quatrorodas/css/',
            WPfonts: 'wordpress/wp-content/themes/quatrorodas/fonts/',
            WPimg: 'wordpress/wp-content/themes/quatrorodas/img/',
            WPjs: 'wordpress/wp-content/themes/quatrorodas/js/',
            css: 'dist/css/',
            fonts: 'dist/fonts/',
            img: 'dist/img/',
            js: 'dist/js/',
            html: 'dist/',
            sass: 'source/sass/',
            fontssrc: 'source/fonts/',
            imgsrc: 'source/img/',
            jssrc: 'source/js/',
            htmlsrc: 'source/'
        },
        //Watch Task
        watch: {
            options: {
                livereload: true
            },
            sass: {
                files: '<%= path.sass %>**/*.scss',
                tasks: ['compass:compile','compass:compileForWP']
            },
            html: {
                files: '<%= path.htmlsrc %>**/*.html',
                tasks: ['htmlmin:allhtml']
            },
            js: {
                files: '<%= path.jssrc %>**/*.js',
                tasks: ['copy:alljs', 'uglify:myjs','copy:alljsForWP', 'uglify:myjsForWP']
            },
            img: {
                files: '<%= path.imgsrc %>**/*.{jpg,gif,png}',
                tasks: ['imagemin:allimg','imagemin:allimgForWP']
            },
            fonts: {
                files: '<%= path.fontssrc %>**/*.{ttf,svg,woff,woof2,eot}',
                tasks: ['copy:allfonts','copy:allfontsForWP']
            }
        },
        watchForWP: {
            options: {
                livereload: true
            },
            sass: {
                files: '<%= path.sass %>**/*.scss',
                tasks: ['compass:compileForWP']
            },
            js: {
                files: '<%= path.jssrc %>**/*.js',
                tasks: ['copy:alljsForWP', 'uglify:myjsForWP']
            },
            img: {
                files: '<%= path.imgsrc %>**/*.{jpg,gif,png}',
                tasks: ['imagemin:allimgForWP']
            },
            fonts: {
                files: '<%= path.fontssrc %>**/*.{ttf,svg,woff,woof2,eot}',
                tasks: ['copy:allfontsForWP']
            }
        },
        //Clean Task
        clean: {
            build: ['dist/'],
            ForWP: [
                '<%= path.WPjs %>',
                '<%= path.WPcss %>',
                '<%= path.WPfonts %>',
                '<%= path.WPimg %>'
            ]
        },
        //Copy Task
        copy: {
            alljs: {
                expand: true,
                cwd: '<%= path.jssrc %>',
                src: '**/*.js',
                dest: '<%= path.js %>'
            },
            allcss: {
                expand: true,
                cwd: '<%= path.sass %>',
                src: '**/*.css',
                dest: '<%= path.css %>'
            },
            allfonts: {
                expand: true,
                cwd: '<%= path.fontssrc %>',
                src: '**/*.*',
                dest: '<%= path.fonts %>'
            },
            alljsForWP: {
                expand: true,
                cwd: '<%= path.jssrc %>',
                src: '**/*.js',
                dest: '<%= path.WPjs %>'
            },
            allcssForWP: {
                expand: true,
                cwd: '<%= path.sass %>',
                src: '**/*.css',
                dest: '<%= path.WPcss %>'
            },
            allfontsForWP: {
                expand: true,
                cwd: '<%= path.fontssrc %>',
                src: '**/*.*',
                dest: '<%= path.WPfonts %>'
            }
        },
        //Compass Task
        compass: {
            compile: {
                options: {
                    sassDir: '<%= path.sass %>',
                    cssDir: '<%= path.css %>',
                    imageDir: '<%= path.imgsrc %>',
                    environment: 'development',
                    outputStyle: 'compress',
                    noLineComments: true,
                    relativeAssets: true
                }
            },
            compileForWP: {
                options: {
                    sassDir: '<%= path.sass %>',
                    cssDir: '<%= path.WPcss %>',
                    imageDir: '<%= path.imgsrc %>',
                    environment: 'development',
                    outputStyle: 'expand',
                    noLineComments: true,
                    relativeAssets: true
                }
            }
        },
        //Imagemin Task
        imagemin: {
            allimg: {
                files: [{
                    expand: true,
                    cwd: '<%= path.imgsrc %>',
                    src: ['**/*.{png,jpg}'],
                    dest: '<%= path.img %>'
                }]
            },
            allimgForWP: {
                files: [{
                    expand: true,
                    cwd: '<%= path.imgsrc %>',
                    src: ['**/*.{png,jpg}'],
                    dest: '<%= path.WPimg %>'
                }]
            }
        },
        //Htmlmin Task
        htmlmin: {
            options: {
                force: true,
                removeScriptTypeAttributes: true,
                removeComments: true,
                collapseWhitespace: false
            },
            allhtml: {
                files: [{
                    expand: true,
                    cwd: '<%= path.htmlsrc %>',
                    src: '**/**/*.html',
                    dest: '<%= path.html %>'
                }]
            }
        },
        //uglify
        uglify: {
            options: {
                mangle: false,
                compress: true
            },
            myjs: {
                files: [{
                    expand: true,
                    cwd: '<%= path.jssrc %>',
                    src: '**/*.js',
                    dest: '<%= path.js %>'
                }]
            },
            myjsForWP: {
                files: [{
                    expand: true,
                    cwd: '<%= path.jssrc %>',
                    src: '**/*.js',
                    dest: '<%= path.WPjs %>'
                }]
            }
        }
    });

    function runAllTasks() {
        grunt.task.run('clean:build');
        grunt.task.run('copy:alljs');
        grunt.task.run('copy:allcss');
        grunt.task.run('copy:allfonts');
        grunt.task.run('uglify:myjs');
        grunt.task.run('imagemin:allimg');
        grunt.task.run('compass:compile');
        grunt.task.run('htmlmin:allhtml');
    }
    function runWPTasks() {
        grunt.task.run('clean:ForWP');
        grunt.task.run('copy:alljsForWP');
        grunt.task.run('copy:allcssForWP');
        grunt.task.run('copy:allfontsForWP');
        grunt.task.run('uglify:myjsForWP');
        grunt.task.run('imagemin:allimgForWP');
        grunt.task.run('compass:compileForWP');
    }


    // Plugins
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-htmlmin');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-imagemin');

    // Default task(s)
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', runAllTasks);
    grunt.registerTask('buildwp', runWPTasks);
};
