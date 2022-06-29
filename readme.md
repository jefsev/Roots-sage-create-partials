# WordPress Sage Create partials terminal


Using [Sage](https://roots.io/sage/) and [acf builder](https://github.com/StoutLogic/acf-builder).

## Usage

Run following commands in your terminal in theme root:<br />

### Header partials<br />
```
php -r 'require "app/create-partials.php"; CreatePartials::create_files_header("name-name");'
```

### Body partials<br />
```
php -r 'require "app/create-partials.php"; CreatePartials::create_files("name-name");'
```

php script is inside app/ folder
Other files are as example.
