<?php global $redux_demo; ?>
<footer class="footer">
    <div class="footer__box container">
        <div class="footer__items">
            <div class="footer__item footer__item_logo">
                <a href="#" class="footer__logo">
                    <img src="<?php echo $redux_demo['logo-white']['url']; ?>" alt="Logo">
                </a>
            </div>
            <div class="footer__item">
                <p class="footer__copyrights">
                    <?php 
                        echo $redux_demo['copyright'];
                    ?>
                </p>
                <a href="#" class="oferta">Публичная оферта</a>
            </div>
        </div>
        <div class="footer__items">
            <h5 class="footer__title">
                Основное
            </h5>

            <?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
                'menu'            => '',
                'container'       => 'null',
                'menu_class'      => 'footer__menu', 
                'menu_id'         => 'footer__menu',
			) );
			?>
        </div>
        <div class="footer__items">
            <h5 class="footer__title">
                Медиа
            </h5>
            <p class="footer__media">
                Разрешите нам присылать вам уведомления о новых эффективных материалах
            </p>
            <form class="footer__form" action="contact-form.php" method="post">
                <input id='input-email' class="order__input input-email" name="email" type="text" placeholder="Введите ваш Email" 
                    required>   
                <input id='input-name' class="order__input input-name hide" name="name" type="text" placeholder="Введите ваше имя" 
                    required>
                <button id='buttonLogin' type="submit" class="footer__btn act">›</button> 
            </form>
            <p class="footer__media">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/lock.png'; ?>" alt=""> Обещаем никакого спама!
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
