module.exports = function(grunt) {

  grunt.initConfig({
    less: {
  development: {
    options: {
      paths: ["assets/css"]
    },
    files: {
      "css/main.css": "css/less/main.less"
    }
  }},
    watch: {
      files: ['**/**/*.less'],
      tasks: ['less']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['less']);

};