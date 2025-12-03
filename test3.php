<?php


function convertStringArrayToIntArray(array $stringArray): array {
    $result = [];
    foreach ($stringArray as $str) {
        // Очищаем строку от пробелов
        $cleaned = str_replace(' ', '', $str);
        // Проверяем, что строка содержит только цифры
        if (ctype_digit($cleaned)) {
            $result[] = (int)$cleaned;
        } else {
            // Можно добавить логирование или выбросить исключение
            $result[] = 0; // или null, или пропустить элемент
        }
    }
    return $result;
}
