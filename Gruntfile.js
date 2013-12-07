module.exports = function(grunt) {
	'use strict';

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: [
					'wp-content/themes/trinitypines/js/src/tab.js',
					'wp-content/themes/trinitypines/js/src/dropdown.js',
					'wp-content/themes/trinitypines/js/src/carousel.js',
					'wp-content/themes/trinitypines/js/src/script.js',
				],
				dest: 'wp-content/themes/trinitypines/js/build/script.js'
			}
		},
		uglify: {
			options: {
				mangle: false
			},
			my_target: {
				files: {
					'wp-content/themes/trinitypines/js/build/scripts.min.js': ['wp-content/themes/trinitypines/js/build/script.js']
				}
			}
		},
		less:	{
			my_target: {
				files: {
					'wp-content/themes/trinitypines/css/build/style.css': 'wp-content/themes/trinitypines/css/src/style.less'
				}
			}
		},
		cssmin: {
			my_target: {
				expand: true,
				cwd: 'wp-content/themes/trinitypines/build/',
				src: ['*.css', '!*.min.css'],
				dest: 'wp-content/themes/trinitypines/build/',
				ext: '.min.css'
			}
		},
                watch: {
			jss: {
			    files: ['wp-content/themes/trinitypines/js/src/*.js'],
			    tasks: ['concat', 'uglify']
			},
			css: {
				files: ['wp-content/themes/trinitypines/css/src/style.less'],
				tasks: ['less', 'cssmin']
			}
                },
	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
        grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-less');

	grunt.registerTask('default', ['concat:dist', 'uglify']);
};