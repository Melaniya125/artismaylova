<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mirage-event
 */

get_header();
$first = get_field('first');
$first_adv = get_field('first_adv');
$why_we = get_field('why_we');
$why_we_title = get_field('why_we_title');
$ourl_places = get_field('ourl_places');
$our_cases = get_field('our_cases');
$form = get_field('form');
$services = get_field('services');
$clients = get_field('clients');
$reviews = get_field('reviews');
$questions = get_field('questions');
?>



<div class="organisation-block">
    <div class="container">
        <? if (!empty($first)): ?>                                                                                      
            <div class="organisation-block__in">
                <div class="organisation-block-left">
                    <h2 class="wow fadeInLeft" data-wow-delay="0s"><?= $first['title']; ?> <span> <?= $first['subtitle']; ?> </span></h2>
                    <p class="wow fadeInLeft" data-wow-delay="0.3s"><?= $first['text']; ?></p>
                    <div class="organisation-block-left-buttons wow fadeInLeft" data-wow-delay="0.6s">
                        <button type="submit" class="modalOpener">Отправить заявку</button>
                        <div class="social">
                            <span>Мы в соц. сетях:</span>
                        <a href=""><img src="<?= get_template_directory_uri();?>/src/dist/img/youtube.svg" alt="icon"></a>
                        <a href=""><img src="<?= get_template_directory_uri();?>/src/dist/img/inst.svg" alt="icon"></a>

                        </div>
                    </div>
                </div>
                <div class="organisation-block-right">
                    <?
                        $image = $first['картинки']['image1'];
                        $size = 'large';
                        $alt = $image['alt'];
                        $thumb = $image['sizes'][ $size ];

                        if( $image ):
                    ?>
                        <img class="translateOnMouseMove wow zoomIn" data-wow-delay="0s" data-animatespeed="80" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                    <?endif; ?>
                    <?
                        $image2 = $first['картинки']['image2'];
                        $size2 = 'large';
                        $alt2 = $image2['alt'];
                        $thumb2 = $image2['sizes'][ $size ];

                        if( $image2 ):
                    ?>
                        <img class="image-bg-1 translateOnMouseMove wow zoomIn" data-wow-delay="0.3s" data-animatespeed="150" src="<?php echo esc_url($thumb2); ?>" alt="<?php echo esc_attr($alt2); ?>">
                    <?endif; ?>
                    <?
                        $image3 = $first['картинки']['image3'];
                        $size3 = 'large';
                        $alt3 = $image3['alt'];
                        $thumb3 = $image3['sizes'][ $size ];

                        if( $image3 ):
                    ?>
                        <img class="image-bg-2 translateOnMouseMove wow zoomIn" data-wow-delay="0.6s" data-animatespeed="200" src="<?php echo esc_url($thumb3); ?>" alt="<?php echo esc_attr($alt3); ?>">
                    <?endif; ?>
                </div>

            </div>
        <? endif; ?>
        <? if (!empty($first_adv)): ?>
            <div class="tabs-block__around wow flipInX" data-wow-delay="1s">
                <div class="tabs-block">
                    <? foreach( $first_adv as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                        <? setup_postdata($post); ?>
                            <div class="tabs-block-item">
                                <span><?= $post['text']; ?></span>
                                <?
                                    $image = $post['icon'];
                                    $size = 'large';
                                    $alt = $image['alt'];
                                    $thumb = $image['sizes'][ $size ];

                                    if( $image ):
                                ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                <?endif; ?>
                            </div>
                        <? endforeach; ?>
                    <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                </div>
            </div>
        <? endif; ?>
    </div>
</div>

<? if (!empty($why_we)): ?>
    <div class="why-us-block">
        <div class="container">
            <h2 class="title wow fadeInDown" data-wow-delay="0s"><?= $why_we_title; ?></h2>
            <div class="why-us__in">
                <? foreach($why_we as $key=>$why_we_item): ?>
                    <div class="why-us__item wow fadeInUp" data-wow-delay="<?= $key/3 ?>s">
                        <?
                            $image = $why_we_item['icon'];
                            $size = 'large';
                            $alt = $image['alt'];
                            $thumb = $image['sizes'][ $size ];

                            if( $image ):
                        ?>
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                        <?endif; ?>
                        <h2><?= $why_we_item['title'] ?></h2>
                        <p><?= $why_we_item['text'] ?></p>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? endif; ?>

<div class="places-and-cases-block">
    <div class="places-and-cases-block__container">
        
        <div class="places-and-cases-block__background rotateOnMouseMove" data-animatespeed="1400"></div>
        <div class="places-and-cases-block__in container">
            <? if (!empty($ourl_places)): ?>
                <div class="places-and-cases-block__top places-block__top">
                    <h2 class="title wow fadeInDown" data-wow-delay="0s">Наши площадки</h2>
                    <div class="global__arrows places-block__top-arrows">
                        <div class="global__arrow global__arrow--prev"></div>
                        <div class="global__arrow global__arrow--next"></div>
                    </div>
                </div>
                <div class="places-block owl-carousel">
                    <? foreach($ourl_places as $post): ?>
                        <? setup_postdata($post); ?>
                        <?
                            $image = get_field('bg');
                            $size = 'large';
                            $alt = $image['alt'];
                            $thumb = $image['sizes'][ $size ];
                        ?>
                        <div class="places-block-item wow zoomIn" data-wow-delay="0s" style="--background: url('<?php echo esc_url($thumb); ?>');">
                            <?
                                $image = get_field('Icon');
                                $size = 'large';
                                $alt = $image['alt'];
                                $thumb = $image['sizes'][ $size ];
                                if ($thumb):
                            ?>
                                <div class="places-logo">
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                </div>
                            <? endif; ?>
                            <div class="places-test">
                                <h2><?= the_title(); ?></h2>
                                <p><?= get_field('text'); ?></p>
                            </div>
                        </div>
                    <? endforeach; ?>
                    <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?> 
                </div>
            <? endif; ?> 
            
            <? if (!empty($our_cases)): ?>
                <div class="places-and-cases-block__top cases-block__top">
                    <h2 class="title wow fadeInDown" data-wow-delay="0s">Наши кейсы</h2>
                    <div class="global__arrows cases-block__top-arrows wow fadeInDown" data-wow-delay="0.3s">
                        <div class="global__arrow global__arrow--prev"></div>
                        <div class="global__arrow global__arrow--next"></div>
                    </div>
                </div>
                <div class="cases-block owl-carousel">
                    <? foreach($our_cases as $key=>$post): ?>
                        <? setup_postdata($post); ?>
                        <div class="cases-block-item wow zoomIn" data-wow-delay="<?= $key / 3 ?>s">
                            <div class="cases-block-item-slider owl-carousel">

                                <? foreach(get_field('gallery') as $gallery_item): ?>
                                    <?
                                        $image = $gallery_item;
                                        $size = 'large';
                                        $alt = $image['alt'];
                                        $thumb = $image['sizes'][ $size ];
                                        if ($thumb):
                                    ?>
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                    <? endif; ?>
                                <? endforeach; ?>
                                
                            </div>
                            <div class="title-block-slider">
                                <h2><? the_title(); ?></h2>
                                <? if (get_field('video_link')): ?>
                                <a href="<?= get_field('video_link'); ?>" class="video">
                                    <span>Смотреть видео: <?= get_field('video_length') ?></span>
                                    <img src="<?= get_template_directory_uri();?>/src/dist/img/blue-youtube.svg" alt="icon">
                                </a>
                                <? endif; ?>
                            </div>
                            <p><?= get_field('description'); ?></p>
                            <div class="slider-icons">

                                <? foreach(get_field('params') as $params_item): ?>
                                    <?
                                        $image = $params_item['icon'];
                                        $size = 'large';
                                        $alt = $image['alt'];
                                        $thumb = $image['sizes'][ $size ];
                                        if ($thumb):
                                    ?>
                                    
                                    <div class="slider-icons-item">
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                        <span><?= $params_item['text'] ?></span>
                                     </div>
                                    <? endif; ?>
                                <? endforeach; ?>

                            </div>
                        </div>
                    <? endforeach; ?>
                    <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?> 
                            
                </div>
            <? endif; ?> 
            <? if (!empty($form)): ?>
            <div class="form-block-first wow zoomIn" data-wow-delay="0s">
                <div class="form-block-first__background rotateOnMouseMove" data-animatespeed="300"></div>
                <h2><?= $form['title']; ?></h2>
                <div class="form">
                    <?= do_shortcode("[contact-form-7 id='".$form['form_id']."' title='Без названия']"); ?>
                </div>
            </div>
            <? endif; ?>
        </div>
    </div>
</div>

<? if (!empty($services)): ?>
    <div class="services-block">
        <div class="decor decor__second">
            <img src="<?= get_template_directory_uri();?>/src/dist/img/decor.svg" width="100%" alt="">
        </div>
        <div class="decor decor__third">
            <img src="<?= get_template_directory_uri();?>/src/dist/img/decor.svg" width="100%" alt="">
        </div>
        <div class="container">
            <div class="services-block__in">
                <h2 class="wow fadeInDown" data-wow-delay="0s">Наши услуги</h2>
                <div class="services-block-flex">
                    <div class="services-block-left">

                        <? foreach($services as $key=>$post): ?>
                            <? setup_postdata($post); ?>
                            <div class="services-block-left-item<? if ($key == 0): ?> isActive<?endif;?> wow zoomIn" data-wow-delay="0s" data-opentab-id="0">
                                <?
                                    $preview = get_field('preview');
                                    $detail = get_field('detail');
                                    $image = $preview['icon'];
                                    $size = 'large';
                                    $alt = $image['alt'];
                                    $thumb = $image['sizes'][ $size ];
                                    if ($thumb):
                                ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                <? endif; ?>
                                <div class="services-block-left-item-price">
                                    <span><?= $preview['name']; ?></span>
                                    <div class="price"><?= $preview['price']; ?></div>
                                </div>
                            </div>
                            <div class="services-block-right<? if ($key == 0): ?> isActive<?endif;?> wow zoomIn" data-wow-delay="0s" data-tab-id="0">
                                <?
                                    $image = $detail['image'];
                                    $size = 'large';
                                    $alt = $image['alt'];
                                    $thumb = $image['sizes'][ $size ];
                                    if ($thumb):
                                ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                <? endif; ?>
                                <div class="services-block-right-form">
                                    <span><?= $detail['button_text']; ?></span>
                                    <button type="submit">Заказать расчёт</button>
                                </div>
                                <div class="services-block-right-text">
                                    <?= $detail['text']; ?>
                                </div>
                            </div>
                        <? endforeach; ?>
                        <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?> 
                        
                    </div>
                    <? foreach($services as $key=>$post): ?>
                        <? setup_postdata($post); ?>
                        <div class="services-block-right<? if ($key == 0): ?> isActive<?endif;?>" data-wow-delay="0s" data-tab-id="<?= $key; ?>">
                                <?
                                    $detail = get_field('detail');
                                    $image = $detail['image'];
                                    $size = 'large';
                                    $alt = $image['alt'];
                                    $thumb = $image['sizes'][ $size ];
                                    if ($thumb):
                                ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                <? endif; ?>
                                <div class="services-block-right-form">
                                    <span><?= $detail['button_text']; ?></span>
                                    <button type="submit">Заказать расчёт <?= $key; ?></button>
                                </div>
                                <div class="services-block-right-text">
                                    <?= $detail['text']; ?>
                                </div>
                        </div>
                    <? endforeach; ?>
                    <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?> 
                    
                </div>
            </div>
        </div>
    </div>
<? endif; ?>
<div class="company-block">
    <div class="company-block__container">
        <div class="company-block__background rotateOnMouseMove" data-animatespeed="600"></div>
        <div class="company-block__in">
            <div class="company-block__in container wow zoomInDown" data-wow-delay="0s">
                <?
                    the_title( '<h2>', '</h2>' );
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'mirage-event' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );
                ?>
            
            <? if (!empty($clients)):?>
                <div class="brands-block wow zoomInDown" data-wow-delay="0s">
                    <div class="brands-block__background rotateOnMouseMove" data-animatespeed="300"></div>
                    <div class="brands-block_in">
                    <h2>Нас выбирают</h2>
                    <div class="brands-slider owl-carousel">
                        <? foreach($clients as $key=>$post): ?>
                            <? setup_postdata($post); ?>
                            <div class="brands-slider-item">
                                <?
                                    $image = get_field('image');
                                    $size = 'large';
                                    $alt = $image['alt'];
                                    $thumb = $image['sizes'][ $size ];
                                    if ($thumb):
                                ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                <? endif; ?>
                            </div>
                        <? endforeach; ?>
                        <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?> 
                    </div>
                </div>
            <? endif; ?>
        </div>
    </div>
    <? if (!empty($reviews)):?>
        <div class="reviews-block wow zoomInDown" data-wow-delay="0.3s">
            
            <div class="reviews-block__background rotateOnMouseMove" data-animatespeed="400"></div>
            <div class="container">
                <div class="reviews-block__in owl-carousel">
                    <? foreach($reviews as $key=>$post): ?>
                        <? setup_postdata($post); ?>
                        <div class="reviews-block__item">
                            <div class="reviews-block-top">
                                <div class="reviews-name">
                                    <h2><?= the_title(); ?></h2>
                                    <span><?= get_field('position'); ?></span>
                                </div>
                                <div class="reviews-logo">
                                    <?
                                        $image = get_field('icon');
                                        $size = 'large';
                                        $alt = $image['alt'];
                                        $thumb = $image['sizes'][ $size ];
                                        if ($thumb):
                                    ?>
                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>">
                                    <? endif; ?>
                                </div>
                            </div>
                            <div class="reviews-block-bottom">
                                <p><?= get_field('text'); ?></p>
                            </div>
                        </div>
                    <? endforeach; ?>
                    <? wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?> 
                    
                </div>
            </div>
        </div>
    <? endif; ?>

        </div>
    </div>
    <div class="decor decor__fourth">
        <img src="<?= get_template_directory_uri();?>/src/dist/img/decor.svg" width="100%" alt="">
    </div>
</div>
<? if (!empty($questions)): ?>
    <div class="faq-block">
        <div class="container">
            <h2 class="wow fadeInDown" data-wow-delay="0s">Часто задаваемые вопросы</h2>
            <div class="faq-block__in">
                <? foreach ($questions as $key=>$question): ?>
                    <div class="faq-block__item wow zoomIn" data-wow-delay="<?= $key/3 ?>s">
                        <div class="faq-block__item-title">
                            <span>Название вопроса</span>
                            <div class="open">
                                <img src="<?= get_template_directory_uri();?>/src/dist/img/plus.svg" class="plus" alt="icon">
                                <img src="<?= get_template_directory_uri();?>/src/dist/img/minus.svg" class="minus" alt="icon">
                            </div>
                        </div>
                        <div class="answer">
                            Не следует, однако, забывать, что граница обучения кадров говорит о возможностях новых предложений. Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высокотехнологичная концепция общественного уклада предопределяет высокую востребованность поэтапного и последовательного развития общества.
                        </div>
                    </div>
                <? endforeach; ?>     
            </div>
        </div>
    </div>
<? endif; ?>
<div class="contacts-block">
    <div class="decor decor__last">
        <img src="<?= get_template_directory_uri();?>/src/dist/img/decor.svg" width="100%" alt="">
    </div>
    <div class="container">
        <div class="contacts-block__in">
            <div class="contacts-block-left wow fadeInLeft" data-wow-delay="0s">
                <h2>Контакты</h2>
                <div class="contacts-block-left-item">
                    <span class="contacts-block-left-item-name">Адрес:</span>
                    <span class="contacts-block-left-item-text">125319, г. Москва, Кочновский проезд, д.4, корп. 3</span>
                </div>
                <div class="contacts-block-left-item">
                    <span class="contacts-block-left-item-name">Телефон:</span>
                    <a href=""><span class="contacts-block-left-item-text">8 800 777-777-1</span></a>
                </div>
                <div class="contacts-block-left-item">
                    <span class="contacts-block-left-item-name">Электронная почта:</span>
                    <a href=""><span class="contacts-block-left-item-text">advertising@sportmaster.ru</span></a>
                </div>
                <div class="contacts-block-left-item">
                    <span class="contacts-block-left-item-name">Социальные сети:</span>
                    <div class="contacts-social">
                       <a href=""><img src="<?= get_template_directory_uri();?>/src/dist/img/inst-white.svg" alt="icon"></a> 
                       <a href=""><img src="<?= get_template_directory_uri();?>/src/dist/img/youtube-white.svg" alt="icon"></a> 
                    </div>
                </div>
                <div class="contacts-block-left-item">
                    <span class="contacts-block-left-item-name">Реквизиты:</span>
                    <div class="requisites">
                        <span class="contacts-block-left-item-text-req">ООО «ВАН»</span>
                        <span class="contacts-block-left-item-text-req">ИНН: 3812151224</span>
                        <span class="contacts-block-left-item-text-req">КПП: 381201001</span>
                    </div>
                </div>
            </div>
            <div class="contacts-block-right wow fadeInRight" data-wow-delay="0s">
                <div class="contacts-block-right__background rotateOnMouseMove" data-animatespeed="400"></div>
                <h2>Оставьте свою заявку </h2>
                <p>Не следует, однако, забывать, что граница обучения кадров говорит о возможностях новых предложений</p>
                <div class="contacts-form form"><?= do_shortcode("[contact-form-7 id='".$form['form_id']."' title='Без названия']"); ?></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();