<?php

namespace lkk\inspinia\widgets;

/**
 * Class Panel
 *
 * @package lkk\inspinia\widgets
 */
class Panel extends \yii\base\Widget
{
    public $title = '';
    public $description = '';
    public $footer = '';
    public $image = '';

    public $toolbar = [];

    public $collapse_button = false;
    public $close_button = false;

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render('panel', [
            'content' => $content,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'toolbar' => $this->toolbar,
            'footer' => $this->footer,
            'collapse_button' => $this->collapse_button,
            'close_button' => $this->close_button,
        ]);
    }
}
