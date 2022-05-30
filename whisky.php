<?php
?>

<div class="entry-content-wrap">
    <div class="entry-content single-content">
        <div class="wp-block-kadence-rowlayout alignnone">
            <div id="kt-layout-id_ac1036-19" class="kt-row-layout-inner kt-row-has-bg kt-layout-id_ac1036-19">
                <div class="kt-row-column-wrap kt-has-2-columns kt-gutter-none kt-v-gutter-default kt-row-valign-top kt-row-layout-equal kt-tab-layout-inherit kt-m-colapse-left-to-right kt-mobile-layout-row kt-inner-column-height-full">

                    <div class="wp-block-kadence-column inner-column-1 kadence-column_eb3fa1-6b">
                        <div class="kt-inside-inner-col">
                            <div class="wp-block-kadence-rowlayout alignnone">
                                <div id="kt-layout-id_a478a4-38" class="kt-row-layout-inner kt-layout-id_a478a4-38">
                                    <div class="kt-row-column-wrap kt-has-2-columns kt-gutter-none kt-v-gutter-default kt-row-valign-top kt-row-layout-equal kt-tab-layout-inherit kt-m-colapse-left-to-right kt-mobile-layout-row">
                                        
                                        <div class="wp-block-kadence-column inner-column-1 kadence-column_d18ec8-ca">
                                            <div class="kt-inside-inner-col">
                                                <span class="kt-adv-heading_adc189-29 wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_adc189-29">AHUMADO</span>

                                                <h2 class="kt-adv-heading_6fe7ad-dd wp-block-kadence-advancedheading" data-kb-block="kb-adv-heading_6fe7ad-dd">
                                                    <?php the_title(); ?>
                                                </h2>

                                                <p class="kt-adv-heading_cd9a9f-63 wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_cd9a9f-63">
                                                    content test
                                                </p>

                                                <div class="wp-block-kadence-advancedbtn kt-btn-align-left kt-btn-tablet-align-inherit kt-btn-mobile-align-inherit kt-btns-wrap kt-btns_75303a-ec kt-btn-align-undefined">
                                                    <div class="kt-btn-wrap kt-btn-wrap-0">
                                                        <a class="kt-button button kt-btn-0-action kt-btn-size-small kt-btn-style-basic kt-btn-svg-show-always kt-btn-has-text-true kt-btn-has-svg-false" href="#" style="border-radius:0px;border-width:2px">
                                                            <span class="kt-btn-inner-text">COMPRA AHORA</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wp-block-kadence-column inner-column-2 kadence-column_fa7223-31">
                                            <div class="kt-inside-inner-col">
                                                <!-- <figure class="wp-block-kadence-image kb-image_76296b-99 size-full">
                                                    <img loading="lazy" width="1000" height="1000" src="/wp-content/uploads/whisky-johnnie-walker-black-label-1l.jpg" alt="" class="kb-img wp-image-1894" srcset="/wp-content/uploads/whisky-johnnie-walker-black-label-1l.jpg 1000w, /wp-content/uploads/whisky-johnnie-walker-black-label-1l-300x300.jpg 300w, /wp-content/uploads/whisky-johnnie-walker-black-label-1l-150x150.jpg 150w, /wp-content/uploads/whisky-johnnie-walker-black-label-1l-768x768.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px">
                                                </figure> -->
                                                <?php
                                                    /**
                                                     * Hook for entry thumbnail.
                                                     *
                                                     * @hooked Kadence\loop_entry_thumbnail
                                                     */
                                                    do_action( 'kadence_loop_entry_thumbnail' );
                                                ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wp-block-kadence-column inner-column-2 kadence-column_610106-83">
                        <div class="kt-inside-inner-col">
                            <div class="wp-block-kadence-rowlayout alignnone">
                                <div id="kt-layout-id_6192e8-2c" class="kt-row-layout-inner kt-layout-id_6192e8-2c">
                                    <div class="kt-row-column-wrap kt-has-3-columns kt-gutter-default kt-v-gutter-default kt-row-valign-top kt-row-layout-equal kt-tab-layout-inherit kt-m-colapse-left-to-right kt-mobile-layout-row">
                                    
                                        <div class="wp-block-kadence-column inner-column-1 kadence-column_9d1d0a-4f">
                                            <div class="kt-inside-inner-col">
                                                <span class="kt-adv-heading_03b48b-16 wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_03b48b-16">
                                                    <strong>AROMA</strong>
                                                </span>
                                                <p class="kt-adv-heading_abf98b-de wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_abf98b-de">
                                                    Ricos frutos secos de las barricas de roble europeo y jerez.
                                                    <?php

                                                    if(get_field('aroma-whisky'))
                                                    {
                                                        echo '<p>' . get_field('aroma-whisky') . '</p>';
                                                    }

                                                    ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wp-block-kadence-column inner-column-2 kadence-column_80396f-7c">
                                            <div class="kt-inside-inner-col">
                                                <span class="kt-adv-heading_88ed82-d3 wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_88ed82-d3">
                                                    <strong>SABOR</strong>
                                                </span>
                                                <p class="kt-adv-heading_9760ee-2e wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_9760ee-2e">
                                                    En la punta de la lengua persisten toques de caramelo cremoso y suave.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="wp-block-kadence-column inner-column-3 kadence-column_46326a-b5">
                                            <div class="kt-inside-inner-col">
                                                <span class="kt-adv-heading_6cae69-4a wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_6cae69-4a">
                                                    <strong>TERMINACIÓN</strong>
                                                </span>
                                                <p class="kt-adv-heading_3ab65d-d9 wp-block-kadence-advancedheading has-theme-palette-3-color has-text-color" data-kb-block="kb-adv-heading_3ab65d-d9">
                                                    Un acabado ahumado sofisticado: la firma de todas las mezclas de Johnnie Walker.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php
?>