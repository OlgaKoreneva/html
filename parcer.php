<?php
//откуда будем парсить информацию
$content = file_get_contents('http://www.vorontsovskie-bani.ru/articles/155-banya-eto-sostoyanie-dushi');
// Определяем позицию строки, до которой нужно все отрезать
$pos = strpos($content, 'itemprop="articleBody"');
//Отрезаем все, что идет до нужной нам позиции
$content = substr($content, $pos);
// Точно таким же образом находим позицию конечной строки
$pos = strpos($content, '</div>');
// Отрезаем нужное количество символов от нулевого
$content = substr($content, 0, $pos);
//если в тексте встречается текст, который нам не нужен, вырезаем его
$content = str_replace('itemprop="articleBody">','', $content);
// выводим спарсенный текст.
echo $content;
//echo "вставляем сюда завершающий код";
?>
