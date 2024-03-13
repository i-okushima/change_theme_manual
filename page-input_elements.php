<?php

/**
 * Template Name: input要素
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
            <div class="content_wrapper_form_element">
                <div class="content_wrapper_inner">
                    <input type="text" class="textbox" placeholder="テキストボックスの例" />
                </div>
                <div class="content_wrapper_inner">
                    <input type="text" class="textbox" placeholder="テキストボックスの例" disabled />
                </div>
                <div class="content_wrapper_inner">
                    <label class="selectbox">
                        <select>
                            <option value="" selected class="default">
                                選択してください
                            </option>
                            <option>optionの例1</option>
                            <option>optionの例2</option>
                            <option>optionの例3</option>
                        </select>
                    </label>
                </div>
                <div class="content_wrapper_inner">
                    <label class="selectbox">
                        <select disabled>
                            <option value="" selected class="default">
                                選択してください
                            </option>
                            <option>optionの例1</option>
                            <option>optionの例2</option>
                            <option>optionの例3</option>
                        </select>
                    </label>
                </div>
                <div class="content_wrapper_inner">
                    <fieldset class="checkbox">
                        <label>
                            <input type="checkbox" name="checkbox-1" checked />
                            check1
                        </label>
                        <label>
                            <input type="checkbox" name="checkbox-1" />
                            check2
                        </label>
                        <label>
                            <input type="checkbox" name="checkbox-1" />
                            check3
                        </label>
                    </fieldset>
                </div>
                <div class="content_wrapper_inner">
                    <fieldset class="checkbox" disabled>
                        <label>
                            <input type="checkbox" name="checkbox-1" checked />
                            check1
                        </label>
                        <label>
                            <input type="checkbox" name="checkbox-1" />
                            check2
                        </label>
                        <label>
                            <input type="checkbox" name="checkbox-1" />
                            check3
                        </label>
                    </fieldset>
                </div>
                <div class="content_wrapper_inner">
                    <fieldset class="radio">
                        <label>
                            <input type="radio" name="radio-1" checked />
                            radio1
                        </label>
                        <label>
                            <input type="radio" name="radio-1" />
                            radio2
                        </label>
                        <label>
                            <input type="radio" name="radio-1" />
                            radio3
                        </label>
                    </fieldset>
                </div>
                <div class="content_wrapper_inner">
                    <fieldset class="radio" disabled>
                        <label>
                            <input type="radio" name="radio-2" checked />
                            radio1
                        </label>
                        <label>
                            <input type="radio" name="radio-2" />
                            radio2
                        </label>
                        <label>
                            <input type="radio" name="radio-2" />
                            radio3
                        </label>
                    </fieldset>
                </div>
                <div class="content_wrapper_inner">
                    <button class="button">ボタン</button>
                </div>
                <div class="content_wrapper_inner">
                    <button class="button" disabled>ボタン</button>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>