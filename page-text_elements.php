<?php

/**
 * Template Name: テキスト要素
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
            <div class="content_wrapper_text">
                <ul>
                    <li>
                        <span>標準テキストカラー</span>
                    </li>
                    <li>
                        <span class="Annotation">注釈テキストカラー</span>
                    </li>
                    <li>
                        <a href="#">テキストリンク</a>
                    </li>
                    <li>
                        <span class="Primary">プライマリカラー（固定）</span>
                    </li>
                    <li>
                        <span class="Secondary">セカンダリカラー（固定）</span>
                    </li>
                    <li>
                        <span class="Error">エラーカラー（固定）</span>
                    </li>
                    <li>
                        <span class="Black">ブラック（固定）</span>
                    </li>
                    <li>
                        <span class="Gray">グレー（固定）</span>
                    </li>
                    <li>
                        <span class="White">ホワイト（固定）</span>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>