<?php
 declare(strict_types=1);

 namespace MyProject\Classes;
 use MyProject\SuperUserInterface;

 /**
  * Класс, в котором хранятся имя, логин и роль суперпользователя.
  */
 class SuperUser extends User implements SuperUserInterface {
     /**
      * Количество созданных суперпользователей.
      * @static
      */
     public static int $instanceCount = 0;

     /**
      * Конструктор, принимающий имя, логин, пароль и роль суперпользователя.
      *
      * @param string $name Имя суперпользователя.
      * @param string $login Логин суперпользователя.
      * @param string $password Пароль суперпользователя.
      * @param string $role Роль суперпользователя.
      */
     public function __construct(string $name, string $login,
                                 string $password, public string $role) {
         parent::__construct($name, $login, $password);
         parent::$instanceCount--;
         self::$instanceCount++;
     }

     /**
      * Выводит имя, логин, роль суперпользователя.
      */
     public function showInfo(): void {
         echo '<pre>Имя: ', $this->name, PHP_EOL, 'Логин: ', $this->login,
         PHP_EOL, 'Роль: ', $this->role, '</pre>';
     }

     /**
      * {@inheritDoc}
      *
      * Ключами массива являются названия публичных полей, а значениями —
      * значения этих полей.
      */
     public function getInfo(): array {
         return ['name' => $this->name, 'login' => $this->login,
                 'role' => $this->role];
     }
 }
