<?php

return [
    'title' => "Программа символьного дифференцирования с диспетчеризацией",
    'description' => [
        '1' =>
        "В разделе 2.3.2 описывается программа, которая осуществляет символьное дифференцирование:",
        '2' =>
        "Можно считать, что эта программа осуществляет диспетчеризацию по типу выражения, которое требуется продифференцировать. " .
        "В этом случае «меткой типа» элемента данных является символ алгебраической операции (например, ",
        '3' =>
        "), а операция, которую нужно применить – ",
        '4' =>
        ". Эту программу можно преобразовать в управляемый данными стиль, если переписать основную процедуру взятия производной в виде",
        '5' =>
        "а. Объясните, что происходит в приведенном фрагменте кода. Почему нельзя включить в операцию выбора, управляемого данными, предикаты ",
        '6' =>
        " и ",
        '7' =>
        "?",
        '8' =>
        "б. Напишите процедуры для вычисления производных от суммы и произведения, а также дополнительный код, чтобы добавить их к таблице, которой пользуется приведенный фрагмент.",
        '9' =>
        "в. Выберите еще какое-нибудь правило дифференцирования, например для возведения в степень (упражнение ",
        '10' =>
        "), и установите его в систему.",
        '11' =>
        "г. В этой простой алгебраической системе тип выражения — это алгебраическая операция верхнего уровня. Допустим, однако, что мы индексируем процедуры противоположным образом, так что строка диспетчеризации в ",
        '12' =>
        " выглядит как",
        '13' =>
        "Какие изменения потребуются в системе дифференцирования?",
    ],
];
