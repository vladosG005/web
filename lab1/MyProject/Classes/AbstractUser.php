<?php
 declare(strict_types=1);

 namespace MyProject\Classes;

 /**
  * Абстрактный класс пользователя.
  */
 abstract class AbstractUser {
     /**
      * Выводит информацию о пользователе.
      */
     abstract protected function showInfo(): void;
 }
