module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    uglify: {
		my_target:{
			files:{
				'./public/js/output.min.js': ['./public/js/app.js']
		}
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('default', ['uglify']);

};