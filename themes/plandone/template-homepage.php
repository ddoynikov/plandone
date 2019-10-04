<?php 
/**
 * Template name: Homepage Design
 */
 get_header();
 ?>

<div class="content__main">
            <div class="content__left">
                <h1 class="header__offer">
                    Обучение системному маркетингу
                </h1>
                <p class="header__descriptor">
                    Получите системные знания в оффлайн маркетинге и отработайте
                    их на практике. Пройдите путь от нуля до профессионала
                </p>
                <div class="button_theme button__theme_header">
                    <div class="button__item">
                        <a href="#courses" class="button__color_8571ea button__item_link">
                            Выбрать курс
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__right">
            <div class="content__bg">
                <div class="geometric__wrapper">
            <!-- Parallax -->
            <div id="scene">
                    <div class="bg-2" data-depth="0.03"><img src="<?php echo get_template_directory_uri() . '/assets/img/header-bg/bg-h2.png'; ?>" alt=""></div>
                    <div class="bg-3" data-depth="0.06"><img src="<?php echo get_template_directory_uri() . '/assets/img/header-bg/bg-h3.png'; ?>" alt=""></div>
                    <div class="gm-1" data-depth="0.04"><img src="<?php echo get_template_directory_uri() . '/assets/img/header-bg/gm-1.png'; ?>" alt=""></div>
                    <div class="gm-2" data-depth="0.08"><img src="<?php echo get_template_directory_uri() . '/assets/img/header-bg/gm-2.png'; ?>" alt=""></div>
                    <div class="gm-3" data-depth="0.07"><img src="<?php echo get_template_directory_uri() . '/assets/img/header-bg/gm-3.png'; ?>" alt=""></div>
                    <div class="gm-4" data-depth="0.1"><img src="<?php echo get_template_directory_uri() . '/assets/img/header-bg/gm-4.png'; ?>" alt=""></div>
              </div>

            <!-- End Parallax -->
                </div>
            </div>
        </div>
 
        <div class="rtb">
            <div class="rtb__item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/rocket.png'; ?>" alt="Start" class="rtb__img">
                <p class="rtb__text">
                    Обучение с азов до профессионального уровня
                </p>
            </div>
            <div class="rtb__item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/information.png'; ?>" alt="Info" class="rtb__img">
                <p class="rtb__text">
                    Система и методология, а не готовые решения
                </p>
            </div>
            <div class="rtb__item">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/chat.png'; ?>" alt="Chat" class="rtb__img">
                <p class="rtb__text">
                    Детальный разбор ДЗ от практиков
                </p>
            </div>
        </div>
        </div>
    </header>
    <section class="internet">
        <div class="internet__wrapper container">
            <h2 class="internet__title">
                Все давно ушли в интернет?
            </h2>
            <div class="reasons__wrapper">
                <div class="internet__item">
                    <p class="internet__item_title text__title">8.5%</p>
                    <p class="internet__item_text">
                        Всего лишь 8,5% доля интернет торговли
                        в России <a href="https://www.iep.ru/ru/smi-o-nas/v-magaziny-bolshe-ne-khodyat.html"
                            target="_blank" class="internet__item_link">по данным Института Экономической
                            Политики им. Гайдара</a>
                    </p>
                </div>
                <div class="internet__item">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/tool.png'; ?>" alt="Tools" class="internet__item_title">
                    <p class="internet__item_text">
                        Интернет и классический маркетинг используют одинаковые инструменты
                        и не противоречат друг другу
                    </p>
                </div>
                <div class="internet__item">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/doc.png'; ?>" alt="System" class="internet__item_title">
                    <p class="internet__item_text">
                        Мы не против интернет-маркетинга и не отговариваем от него. Мы выступаем за системность
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="free__courses">
        <div class="container">
            <h2 class="free__title">
                Изучите главные инструменты
            </h2>
            <div class="free__courses_wrapper">
                <a href="#" class="free__courses_item">
                    <div class="free__courses_img free__courses_img-1"><img class="free__img free__img-1" src="/img/icons/excel.png" alt=""></div>
                    <div class="free__courses_content">
                        <div class="course__title free__course_title">
                            <h3>Excel: Основы</h3>
                        </div>
                        <div class="free__course_descriptor">
                            <p>
                                Базовый курс по основам Excel c домашними заданиями.
                            </p>
                            <div class="for-free__wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/money.png'; ?>" alt="" class="monet__img">
                                <p class="price">Бесплатно</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="free__courses_item">
                    <div class="free__courses_img free__courses_img-2"><img class="free__img free__img-2" src="/img/icons/powerpoint.png" alt=""></div>
                    <div class="free__courses_content">
                        <div class="course__title free__course_title">
                            <h3>PowetPoint: Начало</h3>
                        </div>
                        <div class="free__course_descriptor">
                            <p>
                                Курс по основам презентаций с проверкой домашних заданий
                            </p>
                            <div class="for-free__wrapper">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/icons/money.png'; ?>" alt="Money" class="monet__img">
                                <p class="price">500₽</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="courses" id="courses">
        <div class="container">
            <h2 class="courses__title">
                Получите полноценные курсы
            </h2>
            <div class="courses__wrapper">
                <a href="course-1.html" class="courses__item">
                    <div class="courses__img courses__img-1">
                        <h2 class="courses__content_title">Трейд-маркетолог:</h2>
                        <p class="courses__title-desc">
                            от нуля до профессионала
                        </p>
                    </div>
                    <div class="courses__content">
                        <p class="course__descriptor">
                            Практический курс по трейд-маркетингу. Подходит для FMCG, B2B c
                            коротким циклом продаж, а также для товаров с быстрым
                            принятием решения о покупке
                        </p>
                    </div>
                </a>
                <a href="#" class="courses__item">
                    <div class="courses__img courses__img-2">
                        <h2 class="courses__content_title">Трейд-маркетолог:</h2>
                        <p class="courses__title-desc">
                            от нуля до профессионала
                        </p>
                    </div>
                    <div class="courses__content">
                        <p class="course__descriptor">
                            Обучение созданию презентаций под любые цели.
                            Структура, слайды, дизайн. Вы научитесь доносить информацию с помощью
                            презентаций максимально эффективно
                        </p>
                    </div>
                </a>
            </div>
    </section>
    <section class="blog slider__container">
        <h2 class="blog__title">
            Читайте наш блог, в нем много полезного
        </h2>

        <div class="blog__wrapper">
            <a href="blog-open.html" class="blog__item">
                <h4 class="blog__item_title">Тема №1:</h4>
                <p class="blog__item_desc">
                    Тут очень интересное описание
                    на три строки, этого будет
                    достаточно
                </p>
                <div class="blog__img blog__img_1"></div>
                <div class="blog__button">Читать</div>
            </a>
            <a href="blog-open.html" class="blog__item">
                <h4 class="blog__item_title">Тема №1:</h4>
                <p class="blog__item_desc">
                    Тут очень интересное описание
                    на три строки, этого будет
                    достаточно
                </p>
                <div class="blog__img blog__img_1"></div>
                <div class="blog__button">Читать</div>
            </a>
            <a href="blog-open.html" class="blog__item">
                <h4 class="blog__item_title">Тема №1:</h4>
                <p class="blog__item_desc">
                    Тут очень интересное описание
                    на три строки, этого будет
                    достаточно
                </p>
                <div class="blog__img blog__img_1"></div>
                <div class="blog__button">Читать</div>
            </a>
            <a href="blog-open.html" class="blog__item">
                <h4 class="blog__item_title">Тема №1:</h4>
                <p class="blog__item_desc">
                    Тут очень интересное описание
                    на три строки, этого будет
                    достаточно
                </p>
                <div class="blog__img blog__img_1"></div>
                <div class="blog__button">Читать</div>
            </a>
            <a href="blog-open.html" class="blog__item">
                <h4 class="blog__item_title">Тема №1:</h4>
                <p class="blog__item_desc">
                    Тут очень интересное описание
                    на три строки, этого будет
                    достаточно
                </p>
                <div class="blog__img blog__img_1"></div>
                <div class="blog__button">Читать</div>
            </a>
            <a href="blog-open.html" class="blog__item">
                <h4 class="blog__item_title">Тема №1:</h4>
                <p class="blog__item_desc">
                    Тут очень интересное описание
                    на три строки, этого будет
                    достаточно
                </p>
                <div class="blog__img blog__img_1"></div>
                <div class="blog__button">Читать</div>
            </a>
        </div>
    </section>
    <section class="start">
        <div class="start__wrapper">
            <h2 class="start__title">
                Начните обучение прямо сейчас!
            </h2>
            <div class="button_theme button__theme_start">
                <div class="button__item">
                    <a href="#" class="button__color_ff73b3 button__item_link">
                        Начать обучение
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();