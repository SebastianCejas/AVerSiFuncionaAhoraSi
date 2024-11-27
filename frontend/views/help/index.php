<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="help-index">

    <h1><?= Html::encode($this->title);?></h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eaque repellendus aperiam, eius ipsam nam harum laborum voluptatum dolorum porro veritatis neque! Non voluptates repellendus odit autem. Officiis, non possimus?
    </p>
<div>
    <?= Html::a('Account Settings', ['help/account-settings']) ?>

</div>

<div>    
    <?= Html::a('Login and Security', ['help/login-and-security']) ?>
</div>

<div>
    <?= Html::a('Privacy', ['help/privacy']) ?>    
</div>


</div>
