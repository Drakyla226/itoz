<?
$MESS["EXABIT_SCROLLUP_OPTION_DEFAULT_LABEL"] = "Применить эти настройки для всех сайтов: ";
$MESS["EXABIT_SCROLLUP_OPTION_DEFAULT_YES"] = "Да";
$MESS["EXABIT_SCROLLUP_OPTION_DEFAULT_NO"] = "Нет";
$MESS["EXABIT_SCROLLUP_OPTIONS_TAB_LABEL"] = "Настройки для сайта";
$MESS["EXABIT_SCROLLUP_OPTIONS_TAB_TITLE"] = "Настройка параметров модуля";
$MESS["EXABIT_SCROLLUP_OPTION_SHAPE_LABEL"] = "Форма кнопки: ";
$MESS["EXABIT_SCROLLUP_OPTION_COLOR_LABEL"] = "Цвет фона: ";
$MESS["EXABIT_SCROLLUP_OPTION_CUSTOM_COLOR_LABEL"] = "Свой цвет <em>(в формате HTML, например f7c221)</em>: ";
$MESS["EXABIT_SCROLLUP_OPTION_ICON_LABEL"] = "Иконка: ";
$MESS["EXABIT_SCROLLUP_OPTION_BOTTOM_POS_LABEL"] = "Отступ от нижнего края (пикселей): ";
$MESS["EXABIT_SCROLLUP_OPTION_SIDE_POS_LABEL"] = "Боковой отступ (пикселей): ";
$MESS["EXABIT_SCROLLUP_OPTION_SIDE_LABEL"] = "Положение кнопки: ";
$MESS["EXABIT_SCROLLUP_OPTION_SIDE_LEFT"] = "Слева";
$MESS["EXABIT_SCROLLUP_OPTION_SIDE_RIGHT"] = "Справа";
$MESS["EXABIT_SCROLLUP_OPTION_SHOW_EFFECT_LABEL"] = "Эффект появления: ";
$MESS["EXABIT_SCROLLUP_OPTION_SHOW_EFFECT_SLIDE"] = "Вылет";
$MESS["EXABIT_SCROLLUP_OPTION_SHOW_EFFECT_FADE"] = "Проявление";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_EFFECT_LABEL"] = "Эффект прокрутки: ";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_EFFECT_OUT"] = "Замедление";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_EFFECT_IN"] = "Ускорение";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_EFFECT_EVEN"] = "Равномерно";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_EFFECT_INOUT"] = "Ускорение и замедление";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_SPEED_LABEL"] = "Скорость прокрутки: ";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_SPEED_SLOW"] = "Медленно";
$MESS["EXABIT_SCROLLUP_OPTION_SCROLL_SPEED_FAST"] = "Быстро";
$MESS["EXABIT_SCROLLUP_OPTION_SIZE_LABEL"] = "Размер кнопки: ";
$MESS["EXABIT_SCROLLUP_OPTION_SIZE_NORMAL"] = "Стандартный";
$MESS["EXABIT_SCROLLUP_OPTION_SIZE_BIG"] = "Увеличенный";
$MESS["EXABIT_SCROLLUP_OPTION_INCLUDE_LIST_LABEL"] = "Страницы и разделы, на которых будет отображаться кнопка: ";
$MESS["EXABIT_SCROLLUP_OPTION_EXCLUDE_LIST_LABEL"] = "Страницы и разделы, на которых кнопка выводиться НЕ будет: ";
$MESS["EXABIT_SCROLLUP_OPTION_SEPARATOR_STYLE"] = "Внешний вид";
$MESS["EXABIT_SCROLLUP_OPTION_SEPARATOR_POS"] = "Положение на странице";
$MESS["EXABIT_SCROLLUP_OPTION_SEPARATOR_EFFECTS"] = "Поведение";
$MESS["EXABIT_SCROLLUP_OPTION_SEPARATOR_LISTS"] = "Ограничения показа";
$MESS["EXABIT_SCROLLUP_OPTION_CYR_REGEXP"] = "А-Яа-я";
$MESS["EXABIT_TO_RELOAD"] = "Вернуть сохраненные";
$MESS["EXABIT_TO_DEFAULT"] = "По умолчанию";
$MESS["EXABIT_TO_DEFAULT_WARN"] = "Настройки по умолчанию загружены, но не сохранены. Сайт использует старые настройки.";
$MESS["EXABIT_SCROLLUP_OPTION_NOTE_LISTS"] = "<p>Если оба списка пустые, то кнопка выводится на всех страницах.<br>
Символ <em><strong>*</strong></em> заменяет собой любое количество символов</p>";
$MESS["EXABIT_SCROLLUP_OPTION_NOTE_DESC"] = "<h3>Списки ограничения показа</h3>
<p>Первый список задает разрешенные адреса. Второй список дополняет первый, исключая из него отдельные адреса. <strong>Если оба списка пустые, то кнопка выводится на всех страницах</strong>.</p>
<p>Символ <em><strong>*</strong></em> может быть использован в любом месте шаблона и <strong>заменяет собой любое количество символов</strong>.<br>
Шаблон <em><strong>*index*</strong></em> выводит кнопку на страницах с текстом <em><strong>index</strong></em> в адресе, например <em><strong>example.ru/index.php</strong></em> или <em><strong>example.ru/111/index</strong></em></p>
<p>Протоколы <em><strong>http://</strong></em> и <em><strong>https://</strong></em> в начале строки игнорируются, их можно не указывать.</p>
<p>Если шаблон начинается с символа <em><strong>/</strong></em>, то в начале автоматически подставится домен.<br>
Т.е. шаблон <em><strong>/index.php</strong></em> аналогичен <em><strong>example.ru/index.php</strong></em></p>
<p>Шаблоны второго списка накладывают ограничения на первый список.<br>
Например, в первом списке есть шаблон <em><strong>example.ru/news/*</strong></em>, а во втором <em><strong>*tag=ny*</strong></em>, тогда кнопка отобразится на всех страницах раздела <em><strong>news</strong></em>, кроме тех, в адресе которых есть текст <em><strong>tag=ny</strong></em>.</p>";