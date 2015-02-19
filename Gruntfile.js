module.exports = function(grunt) {
	// Project configuration.
	grunt.initConfig({
	  concat: {
	    options: {
	      separator: ';',
	    },
	    dist: {
	      src: ['src/jquery.cycle.all.js'],
	      dest: 'dist/built.js',
	    },
	  },

	  // Project configuration.
	  uglify: {
	    my_target: {
	    	
	      files: {
	        'dest/cycle.min.js': ['src/jquery.cycle.all.js']
	      }
	    }
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
		},
		smushit: {
		    mygroup: {
		      src: ['images/**/*.png','images/**/*.jpg'],
		      dest: 'images/min'
		    }
		  }

	});

	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-smushit');


};