module.exports = function(grunt) {

    // Load all grunt tasks.
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    // Project configuration.
    grunt.initConfig({
        "pkg": grunt.file.readJSON("package.json"),

        "browserDependencies": grunt.file.readJSON('package.json').browserDependencies,

        "jshint": {
            "files": [
                "public/js/**/*.js",
                "!public/js/lib/**/*.js"
            ]
        },

        "sass": {
            "dist": {
                "files": {
                    "public/css/main.css": "public/css/sass/main.scss"
                }
            }
        },

        "watch": {
            "css": {
                "files": "public/css/**/*.scss",
                "tasks": ["sass"]
            }
        },
    });

    grunt.registerTask("browser-deps", ["browserDependencies"]);
    grunt.registerTask("default", ["sass"]);

};
