<?php
spl_autoload_register();

use Singleton\Settings;

Settings::get()->items_per_page = 20;
Settings::get()->header = 'Настройки';
Settings::get()->dark_theme = true;

echo Settings::get()->items_per_page, PHP_EOL;
echo Settings::get()->header, PHP_EOL;
echo Settings::get()->dark_theme ? 'true' : 'false', PHP_EOL;
