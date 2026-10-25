<?php
 declare(strict_types=1);

 use MyProject\Classes\User;
 use MyProject\Classes\SuperUser;

 function userLoad(string $class_name): void {
     require_once $class_name . '.php';
 }

 spl_autoload_register('userLoad');
 
 $user1 = new User('Павел', 'koren12', 'DZL8pr');
 $user1->showInfo();

 $user2 = new User('Роман', 'romance', 'cSrQSXEE');
 $user2->showInfo();

 $user3 = new User('Саня', 'burdraco', 'CIUzgLp');
 $user3->showInfo();
 
 $user = new SuperUser('Алексей', 'root',
 'N1Y1GXYgKYs7mB1T', 'Администратор');
 $user->showInfo();
 
 echo '<pre>';
 print_r($user->getInfo());
 
 echo 'Всего обычных пользователей: ' . User::$instanceCount . PHP_EOL .
      'Всего суперпользователей: ' . SuperUser::$instanceCount . PHP_EOL;
 echo '</pre>';
