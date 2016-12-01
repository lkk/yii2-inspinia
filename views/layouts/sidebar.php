<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">

        <?php
            $menu=[];
            if(isset($this->context->menu))
                $menu = array_merge([['label' => \Yii::$app->name, 'options' => ['class' => 'nav-header']]], $this->context->menu);

        ?>
        <?= lkk\inspinia\widgets\Menu::widget(
            [
                'options' => ['class' => 'nav metismenu', 'id'=>'side-menu'],
                'submenuTemplate' => "\n<ul class='nav nav-second-level collapse' {show}>\n{items}\n</ul>\n",
                'items' => $menu,
            ]
        ) ?>
    </div>
</nav>