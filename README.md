# Copper PHP Application
PHP Application Template powered by [Copper PHP Framework](https://github.com/therceman/copper)

# Dev Setup (Apache)
1. Clone project into your `htdocs` folder
```
git clone https://github.com/copperphp/project copper_php_project
```
2. Navigate to cloned project folder & install composer dependencies
```
composer install
```
3. Navigate to the project web address and check that everything is working
```
http://localhost/copper_php_project
```
**Note:** You should see a page with the title `PHP Application Template ...`

# Configuration

### Project Information
1. Open `composer.json` and change the project name and description.
2. Open `config/app.php` and change project name, description, author.<br>
   Additionally, you can change the timezone (if needed).
3. Update your project favicon (more info at the bottom of this Readme)

### Database Connection (MySQL)
1. Create a new database for your project. For example: `copper_php_project`<br>
 You can use `utf8mb4_general_ci` collation.
2. Open `config/db.php` and change `host`, `dbname`, `user`, `password` accordingly to your DB config.<br>
 Change `hashSalt` for your database to any random string.<br>
 Enable database by changing `status` to `true`.

### Control Panel
1. Open `config/cp.php` and change your control panel `password`.

# Database Management (via Control Panel)
**Creating User Table** (as Example)
1. Navigate to `/copper_cp` route path and login into your control panel.
2. Click `DB Generator` link and you will be redirected to `Resource Generator`.
3. Near `Resource` label (top left corner), enter `User` and hit Enter key.
4. Check `Service`, `Controller`, `Seed` checkboxes
5. Focus field under `Name` label, type `login` as VARCHAR (255) and click `ADD`
6. Add field `password` as VARCHAR (255) and hit `ADD`
7. Add field `role` as `ENUM`, input `super_admin, user, guest` and hit `ADD`
8. Hit `Generate` button (bottom right corner)
9. Hit `Migrate` button (top right corner) - this will create table in DB

# Other

### How To Generate Your Website Icon Correctly
1. Navigate to https://realfavicongenerator.net & upload your icon (400 x 400)
2. Download Favicon Package and extract it into public folder (with overwrite)