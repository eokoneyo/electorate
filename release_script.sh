#!/bin/bash

gulp
zip -r election_theme.zip ./* -x './node_modules/*' './lib/*' './bower.json' './gulpfile.js' './release_script'