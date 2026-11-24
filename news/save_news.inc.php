<?php
$title = $_POST['title'];
$category = $_POST['category'];
$description = $_POST['description'];
$source = $_POST['source'];

if ($title && $category && $description && $source) {
    $title = trim($title);
    $description = trim($description);
    $source = trim($source);

    if ($news->saveNews($title, $category, $description, $source)) {
        header("Location: news.php");
        exit;
    }
    else {
        $errMsg = "Произошла ошибка при добавлении новости";
    }
}
else {
    $errMsg = "Заполните все поля формы!";
}
