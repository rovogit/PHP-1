<article class="markdown-body entry-content" itemprop="text"><ol>
<li>Добейтесь корректной работы вашего сервера. Тщательно повторите шаги, которые мы делали на уроке. В случае затруднений - обращайтесь в чат поддержки!</li>
<li>Добавьте себе в закладки официальный мануал по языку <a href="http://fi2.php.net/manual/ru/">http://fi2.php.net/manual/ru/</a></li>
<li>В PHP есть функция var_dump($something), которая выводит подробную информацию о значениях и их типах. Попробуйте написать что-нибудь вроде var_dump(2*2); чтобы увидеть, как она работает. Изучите с помощью этой функции следующие выражения:
<ol>
<li>3 / 1</li>
<li>1 / 3</li>
<li>'20cats' + 40</li>
<li>18 % 4 (прочтите главу <a href="http://fi2.php.net/manual/ru/language.operators.arithmetic.php">http://fi2.php.net/manual/ru/language.operators.arithmetic.php</a> чтобы узнать, что это такое)</li>
</ol>
</li>
<li>Говорят, что в PHP "всё является выражением". Интересно, что даже присваивание переменной какого-либо значения тоже является выражением! Изучите примеры ниже и дайте ответ - что же является значением выражения присваивания?
<ol>
<li>echo ($a = 2);</li>
<li>$x = ($y = 12) - 8; echo $x;</li>
</ol>
</li>
<li>В PHP имеется логический (boolean) тип, имеющий два значения - true (истина) и false (ложь). Изучите с помощью var_dump() следующие выражения и объясните их (прочитайте предварительно <a href="http://fi2.php.net/manual/ru/language.operators.comparison.php">http://fi2.php.net/manual/ru/language.operators.comparison.php</a> ):
<ol>
<li>1 == 1.0</li>
<li>1 === 1.0</li>
<li>'02' == 2</li>
<li>'02' === 2</li>
<li>'02' == '2'</li>
</ol>
</li>
</ol>
</article>