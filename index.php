<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main class="index" role="main">
            <section class="MainVisual">
                <div class="slogon">
                    <h2>Lorem ipsum dolor sit.</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora, quasi?
                    </p>
                </div>
            </section>
        </main>

<?php
include_once(G5_THEME_PATH.'/tail.php');