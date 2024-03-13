<?php

/**
 * Template Name: ユーザーの環境設定に依存するパターン
 */
?>
<?php get_header(); ?>

<div class="container">
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
            <div class="text_wrapper">
                <div class="text_wrapper_inner">
                    <h2>テーマごとに変化するカラー</h2>
                </div>
                <div class="text_wrapper_inner">
                    <p>テキストカラー</p>
                </div>
                <div class="text_wrapper_inner">
                    <p><a href="#">テキストリンク</a></p>
                </div>
                <div class="text_wrapper_inner">
                    <h2>固定カラー</h2>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Primary">プライマリカラー</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Secondary">セカンダリカラー</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Accent">アクセントカラー</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Caution">注意カラー</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="White">ホワイト</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Gray_Lighter">グレー1</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Gray_Light">グレー2</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Gray_Mideum">グレー3</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Gray_Dark">グレー4</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Gray_Darker">グレー5</p>
                </div>
                <div class="text_wrapper_inner">
                    <p class="Black">ブラック</p>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>