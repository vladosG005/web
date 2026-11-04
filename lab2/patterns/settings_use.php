<?php
spl_autoload_register();

use Singleton\Settings;

Settings::get()->items_per_page = 20;
Settings::get()->header = 'Настройки';
Settings::get()->dark_theme = true;

echo Settings::get()->items_per_page;
echo Settings::get()->header;
echo Settings::get()->dark_theme;
