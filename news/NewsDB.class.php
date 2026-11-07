<?php
/**
 *  Класс для работы с базой данных новостей
*/
class NewsDB implements INewsDB {
    /**
     *  Имя файла с базой данных
    */
    const DB_NAME = 'news.db';

    /**
     *  Объект для взаимодействия с базой данных SQLite 3
    */
    private SQLite3 $_db;

    /**
     *  Обеспечение доступа на чтение объекта наследникам этого класса
     *  
     *  @return SQLite3 $_db
    */
    protected function get() {
        return $_db;
    }

    /**
     *  Конструктор, записывающий в поле $_db новый экземпляр класса SQLite3 и
     *  открывающий соединение с базой данных под названием DB_NAME
    */
    function __construct() {
        $_db = new SQLite3(DB_NAME);
    }

    function saveNews($title, $category, $description, $source) {

    }
	
	function getNews() {

    }
	
	function deleteNews($id) {

    }

    /**
     *  Деструктор, закрывающий соединение с базой данных и
     *  удаляющий объект $_db
    */
    function __destruct() {
        $_db->close();
        unset($_db);
    }
}

$news = new NewsDB();
