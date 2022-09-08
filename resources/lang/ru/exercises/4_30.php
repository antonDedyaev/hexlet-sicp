<?php

return [
    'title' => 'Работа с последовательностями в ленивом интерпретаторе',
    'description' => [
        '1' =>
        "Пабло Э. Фект, бывший программист на языке C, беспокоится, что ленивый интерпретатор не вынуждает " .
        "выражения в последовательности, и оттого некоторые побочные эффекты могут никогда не произойти. Поскольку " .
        "ни у одного выражения в последовательности, помимо конечного, значение не используется (выражение стоит " .
        "там только ради своего эффекта, например, чтобы присвоить значение переменной или что-нибудь напечатать), " .
        "у значения такого выражения не может впоследствии быть применения, для которого его потребуется вынудить " .
        "(например, в качестве аргумента элементарной процедуры). Поэтому П.Э. Фект считает, что при выполнении " .
        "последовательности нужно все выражения, кроме последнего, вынуждать. Он предлагает изменить ",
        '2' =>
        " из раздела 4.1.1 так, чтобы она использовала ",
        '3' =>
        " вместо ",
        '4' =>
        ":",
        '5' =>
        "а. Бен Битобор считает, что Пабло неправ. Он показывает ему процедуру ",
        '6' =>
        " из упражнения ",
        '7' =>
        " — важный пример последовательности с побочными эффектами:",
        '8' =>
        "Он утверждает, что интерпретатор из текста (с исходным ",
        '9' =>
        ") правильно работает с этой процедурой:",
        '10' =>
        "Объясните, почему Бен прав насчет поведения ",
        '11' =>
        ".",
        '12' =>
        "б. Пабло соглашается с Беном по поводу примера с ",
        '13' =>
        ", но говорит, что, предлагая изменить ",
        '14' =>
        ", он имел в виду другой тип программ. Он определяет в ленивом интерпретаторе следующие две процедуры:",
        '15' =>
        "Какие значения вернут ",
        '16' =>
        " и ",
        '17' =>
        " с исходной ",
        '18' =>
        "? Каковы будут значения с изменением, которое предлагает Пабло?",
        '19' =>
        "в. Пабло указывает также, что изменение ",
        '20' =>
        ", которое он предлагает, не влияет на поведение примера из части a. Объясните, почему это так.",
        '21' =>
        "г. Как, по-Вашему, нужно работать с последовательностями в ленивом интерпретаторе? Что Вам " .
        "нравится больше: подход Пабло, подход, приведенный в тексте, или что-нибудь третье?",
    ],
];
