var path = '/Applications/MAMP/htdocs/portalczn';module.exports = function( grunt ) {   grunt.initConfig({  	pkg: grunt.file.readJSON('package.json'),  	uglify: {  		options: {   			// the banner is inserted at the top of the output    		banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'  		},  		  		dist: {    		files: {      			'scripts.js': [              'bower_components/foundation/js/foundation.min.js',              'js/jpreloader.js',              'js/slick.js',              'js/cycle.js',              'js/app.js'            ],    		}  		}	  },    sprite:{      'all': {        src: 'sprites/*.png',        destImg: 'images/spritesheet.png',        destCSS: 'sprites.css',        algorithm: 'binary-tree'      }    },  cssmin: {    add_banner: {      options: {        banner: '/*\nTheme Name: <%= pkg.title %>\nTheme URI: <%= pkg.homepage %>\nDescription: <%= pkg.description %>\nVersion: <%= pkg.version %>\nAuthor: <%= pkg.author %>\nTags: <%= pkg.tags %>\n*/'      },          files: {        'style.css': [          'stylesheets/*.css',          'sprites.css'        ]      }    }  },  imagemin: {            dist: {                options: {                    optimizationLevel: 7,                    progressive: false                },                files: [{                    //expand: true,                    cwd: 'images/',                    src: 'images/*',                    dest: 'images/'                }]            }  },	watch : {      dist : {        files : [          'js/*','stylesheets/*','images/*','*.php','*.html','sprites/*'        ],         tasks : [ 'uglify','sprite','cssmin','imagemin' ]      }    },    /*    rsync: {    options: {        args: ["--verbose"],        exclude: ["config.rb","bower.json","Gruntfile.js","package.json",".git*","*.scss","node_modules",".sass-cache","bower_components","sprites","stylesheets","js","scss"],        recursive: true    },    prod: {        options: {            src: "./",            dest: "/home/piollingrup/public_html/site/wp-content/themes/piollin",            host: "portalczn@portalczn.com.br",            syncDestIgnoreExcl: true        }    }  },  */  'ftp-deploy': {      build: {        auth: {        host: 'ftp.portalczn.com.br',        port: 21,        authKey: 'key1'      },        src: path,        dest: '/public_html/wp-content/themes/portalczn/',        exclusions: [          path+'/node_modules/*',          path+'/node_modules',          path+'/bower_components/*',          path+'/bower_components',          path+'/sprites/*',          path+'/sprites',          path+'/scss/*',          path+'/scss',          path+'/js',          path+'/js/*',          path+'/stylesheets/*',          path+'/stylesheets',          path+'/media/*',          path+'/media',          path+'/.sass-cache/*',          path+'/.sass-cache',          path+'/Gruntfile.js',          path+'/bower.json',          path+'/README.md',          path+'/.gitignore',          path+'/.ftppass',          path+'/.bowerrc',          path+'/.DS_Store',          path+'/package.json',          path+'/.git/*',          path+'/.git',          path+'/config.rb',          path+'/fonts/*',          path+'/images/*',          path+'/functions',          path+'/includes',          path+'/post-types',          path+'/screenshot.png',          path+'/sprites.css',          path+'/robots.txt',          path+'/favicon.ico',          path+'/humans.txt',          path+'/fonts/.DS_Store'        ]      }    }  });    grunt.loadNpmTasks('grunt-ftp-deploy');  grunt.loadNpmTasks('grunt-contrib-uglify');  grunt.loadNpmTasks('grunt-contrib-cssmin');  grunt.loadNpmTasks('grunt-spritesmith');  grunt.loadNpmTasks('grunt-contrib-watch');  //grunt.loadNpmTasks("grunt-rsync");  grunt.loadNpmTasks('grunt-contrib-imagemin');  grunt.registerTask( 'default', ['ftp-deploy'] );  grunt.registerTask( 'w', [ 'watch' ] );};