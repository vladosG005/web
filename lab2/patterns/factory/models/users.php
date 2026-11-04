<?php
namespace Factory\Models;

class Users extends Collection
{
    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'dmitry.koterov@gmail.com',
                 'password',
                 'Дмитрий',
                 'Котеров'),
            new User(
                 'igorsimdyanov@gmail.com',
                 'password',
                 'Игорь',
                 'Симдянов'),
            new User(
                 'mikhailmagomedov@yandex.ru',
                 'password',
                 'Михаил',
                 'Магомедов'),
            new User(
                 'artyom.gavrilov@gmail.com',
                 'password',
                 'Артём',
                 'Гаврилов'),
            new User(
                 'ekaterina.alexeeva@mail.ru',
                 'password',
                 'Екатерина',
                 'Алексеева'),
            new User(
                 'yurinikitin@gmail.com',
                 'password',
                 'Юрий',
                 'Никитин'),
            new User(
                 'ivan.nikitin@yandex.ru',
                 'password',
                 'Иван',
                 'Никитин'),
        ];
        parent::__construct($users);
    }
}
