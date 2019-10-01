<footer class="footer">
    <div class="footer__box container">
        <div class="footer__items">
            <div class="footer__item footer__item_logo">
                <a href="#" class="footer__logo">
                    <img src="img/logo-white.webp" alt="Logo">
                </a>
            </div>
            <div class="footer__item">
                <p class="footer__copyrights">
                    2019 © Success Marketing <br>
                    Все права защищены
                </p>
                <a href="#" class="oferta">Публичная оферта</a>
            </div>
        </div>
        <div class="footer__items">
            <h5 class="footer__title">
                Основное
            </h5>
            <ul class="footer__menu">
                <li class="footer__menu_items">Главная</li>
                <li class="footer__menu_items">О проекте</li>
                <li class="footer__menu_items">Курсы</li>
                <li class="footer__menu_items">Блог</li>
                <li class="footer__menu_items">Контакты</li>
            </ul>
        </div>
        <div class="footer__items">
            <h5 class="footer__title">
                Медиа
            </h5>
            <p class="footer__media">
                Разрешите нам присылать вам уведомления о новых эффективных материалах
            </p>
            <form class="footer__form" action="contact-form.php" method="post">
                <input id='input-email' class="order__input input-email" name="email" id="email" type="text" placeholder="Введите ваш Email" 
                    required>                
                <button id='buttonLogin' type="submit" class="footer__btn act">›</button>
            </form>
            <p class="footer__media">
                <img src="/img/icons/lock.png" alt=""> Обещаем никакого спама!
            </p>
        </div>
        <div class="footer__items">
            <h5 class="footer__title">
                Аккаунт
            </h5>
            <ul class="footer__menu">
                <li class="footer__menu_items">Личный кабинет</li>
                <li class="footer__menu_items">Обучение</li>
                <li class="footer__menu_items">Выход</li>
            </ul>
        </div>
        <div class="footer__items">
            <h5 class="footer__title">
                Контакты
            </h5>
            <ul class="footer__menu">
                <li class="footer__menu_items"><a href="mailto:hello@scsmarketing.ru"></a>hello@scsmarketing.ru</li>
                <li class="footer__menu_items"><a href="#"></a>Заказать звонок</li>
                <li class="footer__menu_items">+7 (962) 727-27-92</li>
            </ul>
            <h5 class="footer__title footer__title_last">
                Помощь
            </h5>
            <a href="#" class="problem">Сообщить о проблеме</a>
        </div>
    </div>
    <div id="top" class="totop">
        <div class="totop__arrow"></div>   
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
