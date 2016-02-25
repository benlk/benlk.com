module.exports = function(grunt) {
    'use strict';

    // Force use of Unix newlines
    grunt.util.linefeed = '\n';

    // Find what the current theme's directory is, relative to the WordPress root
    var path = process.cwd();
    path = path.replace(/^[\s\S]+\/wp-content/, "\/wp-content");

    var CSS_LESS_FILES = {
        'css/style.css': 'less/style.less',
    };

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        less: {
            compile: {
                options: {
                    paths: ['less'],
                    sourceMap: true,
                    outputSourceFiles: true,
                    sourceMapBasepath: path,
                },
                files: CSS_LESS_FILES
            }
        },

        watch: {
            less: {
                files: [
                    'less/*.less',
                ],
                tasks: [
                    'less:compile',
                ]
            },
        },
    });

    require('load-grunt-tasks')(grunt, { scope: 'devDependencies' });
}
