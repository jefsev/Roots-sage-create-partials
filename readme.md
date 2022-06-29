# WordPress Sage Create partials terminal


using [Sage](https://roots.io/sage/) and [acf builder](https://github.com/StoutLogic/acf-builder).

## usage

Run following command in your terminal in theme root:<br />

### Header partials<br />
Usage: php -r 'require "app/create-partials.php"; CreatePartials::create_files_header("name-name");' <br />

### Body partials<br />
Usage: php -r 'require "app/create-partials.php"; CreatePartials::create_files("name-name");'<br />

php script is inside app/ create-partials.php
Other files are as example.