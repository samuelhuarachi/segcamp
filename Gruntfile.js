module.exports = function(grunt) {



	// Project configuration.
	grunt.initConfig({
	  concat: {
	    options: {
	      separator: ';',
	    },
	    dist: {
	      src: ['src/intro.js', 'src/project.js', 'src/outro.js'],
	      dest: 'dist/built.js',
	    },
	  },

	  cssmin: {
		  options: {
		    shorthandCompacting: false,
		    roundingPrecision: -1
		  },
		  target: {
		    files: {
		      'css/main.min.css': ['css/reset.css', 'css/style.css']
		    }
		  }
		}

	});



	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');


};