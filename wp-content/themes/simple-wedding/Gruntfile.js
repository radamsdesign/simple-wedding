module.exports = function(grunt) { 

	grunt.initConfig({ pkg: grunt.file.readJSON('package.json'),
	
		  sass: {                              // Task
		    dist: {                            // Target
		      options: {                       // Target options
		        style: 'expanded'
		      },
		      files: {                         // Dictionary of files
		        'css/style.css': 'sass/style.scss'
		      }
		    }
		  },

		  concat: {
		    options: {
		      separator: ';',
		    },
		    dist: {
		      src: ['js/customizer.js', 'js/navigation.js', 'js/skip-link-focus.js'],
		      dest: 'js/build/main.js',
		    },
		  },

		 //  min: {
			//     'dist': {
			//         'src': ['src/foo.js', 'src/bar.js'],
			//         'dest': 'build/foobar.min.js'
			//     }
			// },
			cssmin: {
			    'dist': {
			        'src': ['css/style.css'],
			        'dest': 'css/build/style.min.css'
			    }
			},

			watch: {
			  sass: {
				files: 'sass/*/*.scss',
				tasks: 'sass'
				},
			},
		});
	
	
	 //});
	
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-yui-compressor');


}

