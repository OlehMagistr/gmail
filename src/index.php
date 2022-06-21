<!DOCTYPE HTML>
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="NewErrorPageTemplate.css" >

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Не удается отобразить эту страницу</title>

        <script src="errorPageStrings.js" language="javascript" type="text/javascript">
        </script>
        <script src="httpErrorPagesScripts.js" language="javascript" type="text/javascript">
        </script>
    </head>

    <body onLoad="javascript:getInfo();">
----------------
        <div id="contentContainer" class="mainContent">
            <div id="mainTitle" class="title">Не удается отобразить эту страницу</div>
            <div class="taskSection" id="taskSection">
                <ul id="cantDisplayTasks" class="tasks">
                    <li id="task1-1">Убедитесь, что веб-адрес <span id="webpage" class="webpageURL"></span> правильный.</li>
                    <li id="task1-2">Найдите страницу с помощью поисковой системы.</li>
                    <li id="task1-3">Обновите страницу через несколько минут.</li>
                </ul>
                <ul id="notConnectedTasks" class="tasks" style="display:none">
                    <li id="task2-1">Проверьте, подключены ли все сетевые кабели.</li>
                    <li id="task2-2">Проверьте, не включен ли режим "в самолете".</li>
                    <li id="task2-3">Убедитесь, что беспроводная связь включена.</li>
                    <li id="task2-4">Проверьте, можете ли вы подключиться к широкополосной мобильной сети.</li>
                    <li id="task2-5">Перезагрузите свой маршрутизатор.</li>
                </ul>
            </div>
            <div><button id="diagnose" class="diagnoseButton" onclick="javascript:diagnoseConnectionAndRefresh(); return false;">Исправить проблемы с подключением</button></div>
        </div>
    </body>
</html>
