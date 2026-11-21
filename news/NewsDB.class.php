<?php
require_once 'INewsDB.class.php';

/**
 *  class NewsDB
 *  для работы с базой данных новостей
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
    protected function get_db() {
        return $this->_db;
    }

    /**
     *  Конструктор, записывающий в поле $_db новый экземпляр класса SQLite3 и
     *  открывающий соединение с базой данных под названием DB_NAME
    */
    function __construct() {
        if (file_exists(self::DB_NAME)) {
            $this->_db = new SQLite3(self::DB_NAME);
        }
        else {
            $this->_db = new SQLite3(self::DB_NAME);
            $fp = fopen('news.txt', 'r');
            $query = '';
            
            while (($buffer = fgets($fp, 4096)) !== false) {
                if (str_starts_with($buffer, '#')) {
                    $this->_db->exec($query);
                }
                else {
                    $query .= $buffer;
                }
            }
        }
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
        $this->_db->close();
        unset($this->_db);
    }
}

$news = new NewsDB();
