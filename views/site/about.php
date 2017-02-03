<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. This number <span style="color:red; font-size:3rem"><?= mt_rand() ?></span> should not be reloaded when the grid is sorted.
    </p>

    <?= $this->render('about-grid') ?>

    <code><?= __FILE__ ?></code>
</div>
