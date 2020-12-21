<!doctype html>
<html lang='ru'>
<head>
    <meta name="yandex-verification" content="19eebd51726cbdf6" />
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>
    <link rel='shortcut icon' href='https://radchuk.ru/img/favicon.png' type='image/png'>
    <link rel='shortcut icon' href='https://radchuk.ru/img/favicon.ico' type='image/x-icon'>
    <title>Владимир Радчук</title>
    <?php $getTime = ''.time();?>
    <link href="https://radchuk.ru/css/normalize.css?<?php echo $getTime;?>" rel='stylesheet'>
    <link href="https://radchuk.ru/css/main.css?<?php echo $getTime;?>" rel='stylesheet'>

    <meta name='description' content='Сайт содержит полезную информацию.'/>
    <meta name='keywords' content='HTML, CSS, Верстка, Основы HTML, Основы CSS, Теги, Верстальщик, Сайт, Уроки CSS, Уроки HTML, Создание сайтов, Стили, Каскадные, Таблицы, Основы, Уроки, Учимся, Владимир, Радчук, Владимир Радчук, wRadchuk, radchuk, Селектор, JS, PHP, ООП'/>
</head>


    <body>
        <header class="header" id="header">
            <a href="/page/stat"><img class="header-logo" src="https://radchuk.ru/img/logo.png" alt="header-logo"></a>
            <nav class="header-nav">
                <ul class="header-menu">
                <li class="header-menu-list"><a class="header-link" href="/page/home#card">Вступление</a></li>
                <li class="header-menu-list"><a class="header-link" href="/page/home#crib">Шпаргалка</a></li>
                <li class="header-menu-list"><a class="header-link" href="/page/home#res">Ресурсы</a></li>
                </ul>
            </nav>
        </header>


        <?php
        require_once 'php/wRadchukConfig.php';

        // подключаемся к серверу
        $link = mysqli_connect($wrDbHost, $wrDbUser, $wrDbPass, $wrDbName) or die("Connect: Ошибка " . mysqli_error($link));
        // выполняем операции с базой данных
        $query = "SET NAMES 'utf8';";
        $result = mysqli_query($link, $query) or die("SET: Ошибка " . mysqli_error($link));

        $s_time   = $_SERVER['REQUEST_TIME'];    // Время запрос
        $s_addr   = $_SERVER['REMOTE_ADDR'];     // IP клиента
        $s_agent  = $_SERVER['HTTP_USER_AGENT']; // Браузер клиента
        $s_ref    = getenv("HTTP_REFERER");      // От куда пришли
        $s_script = '/';                         // Имя страници
        $s_bname = '';


        $bots = array('rambler', 'googlebot', 'aport', 'yahoo', 'msnbot', 'turtle', 'mail.ru', 'omsktele', 'yetibot', 'picsearch', 'sape.bot', 'sape_context', 'gigabot', 'snapbot', 'alexa.com', 'megadownload.net', 'askpeter.info', 'igde.ru', 'ask.com', 'qwartabot', 'yanga.co.uk', 'scoutjet', 'similarpages', 'oozbot', 'shrinktheweb.com', 'aboutusbot', 'followsite.com', 'dataparksearch', 'google-sitemaps', 'appEngine-google', 'feedfetcher-google', 'liveinternet.ru', 'xml-sitemaps.com', 'agama', 'metadatalabs.com', 'h1.hrn.ru', 'googlealert.com', 'seo-rus.com', 'yaDirectBot', 'yandeG', 'yandex', 'yandexSomething', 'Copyscape.com', 'AdsBot-Google', 'domaintools.com', 'Nigma.ru', 'bing.com', 'dotnetdotcom', 'python-requests', 'BackupLand', 'nimbostratus-Bot', 'google favicon');

        foreach($bots as $bot)
            if(stripos($s_agent, $bot) !== false) {
                $s_bname = $bot;
            }

        if($_GET['page']=='home' || $_GET['page']=='') {
            $s_script = '/page/home';     // Имя страници

        ?>


        <section class="info-block" id="card">
            <img class="card-photo" src="https://radchuk.ru/img/photo.jpg" alt="Владимир Радчук">

            <h1 class="card-title">Владимир Радчук</h1>

            <div class="card-text">
                <p>Добро пожаловать на мой персональный сайт для применения навыков адаптивной кроссбраузерной верстки. Здесь используется исключительно HTML5 и CSS3. Я так же хорошо знаком с PHP и имел дело с MySQL. Сейчас занимаюсь исключительно версткой, но могу вполне комфортно окунуться в любимый синтаксис PHP.</p>

                <p>Так как это учебный сайт, то здесь вы найдёте полезные выписки из учебного материала, а также будет блок ссылок на учебные ресурсы. Я в разработке уже не первый год. Изначально я писал на Java ME с кнопочного телефона для таких же кнопочных телефонов. С появлением ноутбука увлёкся OpenGL и изучал C++ и Java SE.</p>

                <p>В один прекрасный момент меня пригласили в Android стартап. Два года я был единственным Android разработчиком в стартапе. Со временем добавлю сюда некоторые свои наработки, а то сложно наверное поверить что человек с таким багажом знаний переметнулся в верстальщики. Или нет?</p>

                <p>Сейчас читаю книгу по CSS и параллельно практикуюсь. Как только пойму что уверенно чувствую себя в верстке, займусь освоением нативного Javascript. Много читал о нём и считаю что тот Javascript что я ковырял в 2014 неплохо вырос в хороший инструмент. Единственное что мне непривычно в нём, так это отсутствие явной типизации данных. Но когда меняешь языки программирования как перчатки, понимаешь одно, привыкание к языку происходит довольно быстро.</p>

                <h2 class="subtitle">Мои навыки:</h2>
                <ul class="card-list">
                    <li>HTML  - 70.0 %</li>
                    <li>CSS   - 20.0 %</li>
                    <li>PHP   - 40.0 %</li>
                    <li>MySQL - 60.0 %</li>
                </ul>

                <h2 class="subtitle">Мои контакты:</h2>
                <p>Телефон: <a class="info-block-link" href="tel:+79786618769">+7 (978) 661-87-69</a></p>
                <p>E-mail: <a class="info-block-link" href="mailto:wRadchuk@gmail.com">wRadchuk@gmail.com</a></p>
                <p>ВК: <a class="info-block-link" href="https://vk.com/wradchuk" target="_blank">wRadchuk</a></p>

            </div>
        </section>

        <section class="info-block" id="crib">
            <h1 class="subtitle">Шпаргалка</h1>

            <ul class="card-list">
                <li>HTML (Hypertext Markup Language) - это язык гипертекстовой разметки, который используется для структурирования и отображения веб-страницы и её содержимого (контента). В середини 90-х так же использовался для дизайна страниц (табличная верстка).</li>

                <li>CSS (Cascading Style Sheets) - это каскадные таблицы стилей, которые придают сайту внешний вид. Всё что касается дизайна сайта описывается с помощью языка CSS.</li>

                <li>Грамотное оформление структуры сайта (чистый HTML код) и понимание иерархии наследования CSS (да, в CSS есть ООП) очень упрощают жизнь верстальшику.</li>

                <li>Стоит отметить что браузеры уже содержат стили по умолчанию (к примеру синии ссылки с подчеркиванием и отступы от краёв) и чтобы сайт отображался корректно, можно использовать уже готовые CSS стили сброса. Например <a class="info-block-link" href="https://meyerweb.com/eric/tools/css/reset/" target="_blank">Reset.css</a> либо более лояльный <a class="info-block-link" href="https://necolas.github.io/normalize.css/" target="_blank">Normalize.css</a>, который не стирает под чистую многие полезные стандартные стили. Так же можно создать свой CSS файл сброса.</li>

                <li>Важно подключать файлы сброса до применения ваших стилей, иначе стили написанные вами будут так же отменены (важна последовательность). Это базовые принципы кроссбраузерной верстки веб-сайтов. Но помимо браузеров есть ещё и различные типы устройств (телефоны, смартфоны, планшеты, ноутбуки и ПК) о которых не стоит забывать. Важно чтобы сайт работал и корректно отображался на всех устройствах. Для этого необходимо владеть адаптивной версткой.</li>

                <li>Для того чтобы придать определённый стиль HTML элементам нужно воспользоваться селекторами CSS. Селекторы бывают разные, например селекторы тегов - a, div, span, p, h1-h6 и т.д), селекторы класссов - .class_name, селекторы индификаторов #id_name, селекторы групп - это когда мы сразу задаём стиль нескольким селекторам, например параграфу и всем заголовкам установить один шрифт или цвет (так же можно добавить в такую группу селекторы классов и индификаторов).</li>

                <li>Помимо выше перечисленных селекторов есть и другие. Но о них поговорим чуть позже. Немного о селекторах индификаторов. Эти селекторы в основном нужны Javascript для управления элементами страницы и они не используются в дизайне. Есть исключение, селекторы индексов можно использовать в качестве якоря для навигации повесив ссылку на индекс. Если вы кликните в шапке сайта на ссылки, то вы увидите как это работает.</li>

                <li>С приходом HTML5 появились семантические теги. Они не как не влияют на вид элементов, но теперь например чтобы указать header можно написать <b>&lt;header class="header"&gt;...&lt;/header&gt;</b> вместо <b>&lt;div class="header"&gt;...&lt;/div&gt;</b>. Так же для подвала сайта есть тег footer, nav для навигации и ещё с десяток тегов которые легко находятся если загуглить "Семантика HTML5", но так же есть <a class="info-block-link" href="https://youtu.be/bQRmGxhARhc?list=PL3LQJkGQtzc7aWRyr-GaxyO_dwj5inJ1t" target="_blank">видео на YouTube</a> с разбором части тегов.</li>

            </ul>

        </section>


        <section class="info-block" id="res">
            <h2 class="subtitle">Ресурсы</h2>
            <ul class="card-list">
                <li><a class="info-block-link" href="https://idg.net.ua/blog/uchebnik-css" target="_blank">Современный учебник CSS</a> - это онлайн-книга, призванная ознакомить веб-разработчиков с современными способами создания сайтов, в том числе и адаптивных. В ней рассматриваются новейшие методы применения CSS и HTML. Материал рассчитан на тех, кто уже знаком с HTML хотя бы на начальном уровне.</li>
                <li><a class="info-block-link" href="https://habr.com/ru/company/piter/blog/280828/" target="_blank">Новая большая книга CSS</a> - полностью переработанное четвертое издание этой книги поможет вам поднять навыки работы с HTML и CSS на новый уровень; она содержит множество ценных советов, описаний приемов, а также инструкции, написанные в стиле справочного руководства. Веб-дизайнеры, как начинающие, так и опытные, при помощи этой книги быстро научатся создавать красивые веб-страницы, которые при этом молниеносно загружаются как на ПК, так и на мобильных устройствах.</li>
                <li><a class="info-block-link" href="file/book_ccs.pdf" target="_blank">Новая большая книга CSS</a> - это ссылка на PDF файл.</li>
                <li><a class="info-block-link" href="https://youtu.be/CvEttNvty0U" target="_blank">BrainsCloud</a> - Хочешь научиться создавать сайты? Тогда тебе сюда! Много качественного контента по веб-разработке тебе обеспечено!</li>
                <li><a class="info-block-link"href="https://htmlbase.ru/" target="_blank">HTMLBASE</a> - самый современный справочник по HTML и CSS от BrainsCloud.</li>
                <li><a class="info-block-link" href="https://www.youtube.com/c/VictorStork/featured" target="_blank">Victor Stork</a> - привет, меня зовут Виктор Сторк и я веб-программист. На этом канале ты научишься создавать сайты используя HTML, CSS и JavaScript.</li>
                <li><a class="info-block-link" href="https://habr.com/ru/post/125247/" target="_blank">Responsive Web Design</a> - как сделать один сайт для всех устройств.</li>
                <li><a class="info-block-link" href="https://habr.com/ru/post/125247/" target="_blank">Отзывчивый веб-дизайн</a> - это технология создания веб-страниц, которая обеспечивает удобство их просмотра на различных устройствах (стационарных компьютерах, ноутбуках, планшетах, смартфонах, телевизорах, имеющих подключение к Интернет (например, через игровую приставку), и т.д.).</li>
                <li><a class="info-block-link" href="file/book_design.pdf" target="_blank">Отзывчивый веб-дизайн</a> - это ссылка на PDF файл.</li>
                <li><a class="info-block-link" href="https://webref.ru/html" target="_blank">Онлайн справочник</a> - это ссылка на очередной справочник по HTML. Также на сайте есть много вкусной информации.</li>
            </ul>
        </section>

        <?php
        }
        else if($_GET['page']=='stat') {
            $s_script = '/page/stat';     // Имя страници

            $query1 ="SELECT `time`, `bname`, `agent`, `addr`, `ref`, `script` FROM visitor ORDER BY `id` DESC";

            $result = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));

            if($result) {
                $rows = mysqli_num_rows($result); // количество полученных строк

                for ($i = 0 ; $i < $rows ; ++$i) {
                    $row = mysqli_fetch_row($result);



                    $m_time   = $row[0]; // Время запрос
                    $m_bname  = $row[1]; // Бот
                    if($m_bname=='') $m_bname = 'ЧЕЛОВЕК';
                    $m_agent  = $row[2]; // Браузер клиента
                    $m_addr   = $row[3]; // IP клиента
                    $m_ref    = $row[4]; // От куда
                    if($m_ref=='') $m_ref = '..отсутствует..';
                    $m_script = $row[5]; // Имя страници


                    if($m_addr!='31.131.78.26') {

                        echo '<ul class="info-block">';

                        echo "<h1 class='subtitle'>Время посещения:</h1><li>".date("d/m/Y H:i:s", $m_time)."</li>";
                        echo "<h1 class='subtitle'>Софт:</h1><li>".$m_agent."</li>";
                        echo "<h1 class='subtitle'>Кто смотрел:</h1><li>".$m_bname."</li>";
                        echo "<h1 class='subtitle'>IP-адрес:</h1><li>".$m_addr."</li>";
                        echo "<h1 class='subtitle'>Трафик из:</h1><li>".$m_ref."</li>";
                        echo "<h1 class='subtitle'>Страница:</h1><li>".$m_script."</li>";

                        echo '</ul>';
                    }

                }

                // очищаем результат
                mysqli_free_result($result);

            }
        }
        else if($_GET['page']=='400') {
            $s_script = '/page/400';     // Имя страници
            echo "400 page";
        }
        else if($_GET['page']=='401') {
            $s_script = '/page/401';     // Имя страници
            echo "401 page";
        }
        else if($_GET['page']=='403') {
            $s_script = '/page/403';     // Имя страници
            echo "403 page";
        }

        else if($_GET['page']=='404') {
            $s_script = '/page/404';     // Имя страници
            echo "404 page";
        }

        else if($_GET['page']=='500') {
            $s_script = '/page/500';     // Имя страници
            echo "500 page";
        }

        else {
            $s_script = '/page/404';     // Имя страници
            echo "404 page";
        }

        $query = "INSERT INTO `visitor`(`time`, `bname`, `agent`, `addr`, `ref`, `script`) VALUES ('".$s_time."', '".$s_bname."', '".$s_agent."', '".$s_addr."', '".$s_ref."' ,'".$s_script."');";

        mysqli_query($link, $query) or die("INSERT: Ошибка " . mysqli_error($link));

        ?>


        <footer class="footer">
            <p>© <a class="footer-link" href="https://vk.com/wradchuk" target="_blank">Владимир Радчук</a> | <a class="footer-link" href="/page/home#header">В этом мире ничего не даётся просто так - даже в момент зачатия мы боремся за своё право на жизнь</a></p>
        </footer>


    </body>
</html>



