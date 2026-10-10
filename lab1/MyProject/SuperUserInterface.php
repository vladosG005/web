<?php
 declare(strict_types=1);

 namespace MyProject;

/**
 * Интерфейс суперпользователя.
 */
 interface SuperUserInterface { 
     /**
      * Получение информации о суперпользователе.
      * @return array Массив с информацией.
      */
     public function getInfo(): array;
 }