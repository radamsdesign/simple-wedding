module.exports = function(grunt) { 

	grunt.initConfig({ pkg: grunt.file.readJSON('package.json'),
	
		  sass: {  // Task
		    dist: {  // Target
		      options: { // Target options
		        style: 'expanded',
		      },
		      files: { // Dictionary of files
		        'css/style.css': 'sass/style.scss'
		      }
		    }
		  },

		  concat: {
		    options: {
		      separator: ';',
		    },
		    dist: {
		      src: ['js/vendor/jquery-2.1.4.min.js', 'js/navigation.js', 'js/skip-link-focus.js', 'js/app.js'],
		      dest: 'js/prod/main.js',
		    },
		  },

			uglify: {
				 my_target: {
					files: {
					    'js/prod/main.min.js': ['js/prod/main.js']
					}
				}
			},

			cssmin: {
					 // options: {
					 //   shorthandCompacting: false,
					 //   roundingPrecision: -1
					 // },
				target: {
					files: {
					    'css/prod/style.min.css': ['css/style.css']
					}
				}
			},

			compass: {  // Task
				app: {  // Target
					options: {  // Target options
					    sassDir: 'sass',
					    cssDir: 'css',
					    environment: 'development'
					 }
				},
				build: {  // Another target
					options: {
					sassDir: 'sass',
					cssDir: 'css',
					environment: 'development'
					}
				}
			},

			watch: {
			  sass: {
				files: 'sass/**/*.scss',
				tasks: ['compass:app']
				},
				js: {
				  files: ['js/*.js'],
				  tasks: []
				     },
			}
		});
	
	
	 //});

	 //Build task
  	grunt.registerTask('build', ['uglify', 'sass', 'concat', 'compass', 'cssmin']); // 'concat', 'min', 'requirejs', 'cssmin', 
	
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-compass');


}

