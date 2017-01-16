# Sound Lounge 2017

This site was built using the Foundation mobile first framework which uses Sass.

Do not add styles to /wp-content/themes/style.css. Instead, modify the .scss files in the /wp-content/themes/scss directory after running the "bundle exec compass watch" command on the command line in the theme directory. This command will compile the .scss files to .css files. 

For more on this: http://foundation.zurb.com/sites/docs/sass.html

The file watch.sh in the theme directory can run this command if you run chmod +x watch in the theme directory and then starting it by typing ./watch