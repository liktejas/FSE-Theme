module.exports = function( grunt ) {
    'use strict';

    const pkg = grunt.file.readJSON( 'package.json' );

    grunt.initConfig( {

        pkg,

        clean: {
            build: [ 'build/' ],
        },

        copy: {
            build: {
                files: [
                    {
                        expand: true,
                        src: [
                            '!**/*.{ai,eps,psd}',
                            'license',
                            'admin/**',
                            'dist/**',
                            'inc/**',
                            'parts/**',
                            'templates/**',
                            'assets/**',
                            'readme.txt',
                            '!**/*.css.map',
                            '!**/*.js.map',
                            'functions.php',
                            'index.php',
                            'theme.json',
                            'style.css'
                        ],
                        dest: 'build/<%= pkg.name %>',
                    },
                ],
            },
        },

        compress: {
            responsive_block_editor_addons: {
                options: {
                    archive: 'build/tailwindfse.zip',
                },
                files: [
                    {
                        cwd: 'build/<%= pkg.name %>/',
                        dest: '<%= pkg.name %>/',
                        src: [ '**' ],
                    },
                ],
            },
        },

        replace: {
            readme: {
                src: 'readme.*',
                overwrite: true,
                replacements: [
                    {
                        from: /^(\*\*|)Stable tag:(\*\*|)(\s*?)[a-zA-Z0-9.-]+(\s*?)$/mi,
                        to: '$1Stable tag:$2$3<%= pkg.version %>$4',
                    },
                    {
                        from: /Tested up to:(\s*?)[a-zA-Z0-9\.\-\+]+$/m,
                        to: 'Tested up to:$1' + pkg.tested_up_to,
                    },
                ],
            },
            tests: {
                src: '.dev/tests/phpunit/**/*.php',
                overwrite: true,
                replacements: [
                    {
                        from: /\'version\'(\s*?)\=\>(\s*?)\'(.*)\'/,
                        to: '\'version\' \=\> \'<%= pkg.version %>\'',
                    },
                ],
            },
            languages: {
                src: 'languages/tailwindfse.pot',
                overwrite: true,
                replacements: [
                    {
                        from: /(Project-Id-Version: TailwindFSE )[0-9\.]+/,
                        to: '$1' + pkg.version,
                    },
                ],
            },
        },

        shell: {
            build: [ 'npm run build' ].join( ' && ' ),
            translations: [ 'npm run makepot' ].join( ' && ' ),
        },

    } );

    require( 'matchdep' ).filterDev( 'grunt-*' ).forEach( grunt.loadNpmTasks );

    grunt.registerTask( 'build', [ 'shell:build', 'update-pot', 'replace', 'clean:build', 'copy:build', 'compress' ] );
    grunt.registerTask( 'update-pot', [ 'replace:languages' ] );
    grunt.registerTask( 'version', [ 'replace' ] );
};
