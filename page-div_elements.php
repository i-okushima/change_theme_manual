<?php

/**
 * Template Name: div要素
 */
?>
<?php get_header(); ?>

<div class="container">
    <div class="title_area" id="bgchange">
        <div class="content_inner"><?php echo get_the_title(); ?></div>
    </div>
    <main>
        <section>
            <div class="btn_wrapper">
                <ul>
                    <li>
                        <span>ダークテーマ</span>
                        <label class="toggle-button" id="theme-toggle-label">
                            <input type="checkbox" id="theme-toggle" />
                        </label>
                    </li>
                    <li>
                        <span>明朝体</span>
                        <label class="toggle-button" id="font-toggle-label">
                            <input type="checkbox" id="font-toggle" />
                        </label>
                    </li>
                </ul>
            </div>
        </section>
        <section>
            <div class="SurfaceContainer">
                <div class="SurfaceContainer">
                    <div class="SurfaceContainer">
                        <div class="SurfaceContainer">
                            <div class="SurfaceContainer">
                                <span>div要素の重なり</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="text_wrapper_inner">
                <img src="https://www.hitachi-solutions-create.co.jp/column/img/image-generation-ai.jpg" width="100%" />
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>