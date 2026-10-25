<?php
 declare(strict_types=1);

 namespace MyProject\Classes;

 /**
  * Класс, в котором хранятся имя, логин и пароль пользователя.
  */
 class User extends AbstractUser {
     /**
      * Количество созданных пользователей.
      * @static
      */
     public static int $instanceCount = 0;

     /**
      * Конструктор, принимающий имя, логин, пароль пользователя.
      *
      * @param string $name Имя пользователя.
      * @param string $login Логин пользователя.
      * @param string $password Пароль пользователя.
      */
     public function __construct(public string $name, public string $login,
     private string $password) {
         self::$instanceCount++;
     }

     /**
      * Выводит имя, логин и пароль пользователя.
      */
     public function showInfo(): void {
         echo '<pre>Имя: ', $this->name, PHP_EOL, 'Логин: ', $this->login,
         PHP_EOL, 'Пароль: ', $this->password, PHP_EOL, '</pre>';
     }

     public function __destruct() {
         echo '<pre>Пользователь ', $this->login, ' удалён.</pre>';
     }
 }
