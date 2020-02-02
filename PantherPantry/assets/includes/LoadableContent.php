<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

class LoadableContent
{
    public $js = '';
    public $html = '';
    public $css = '';

    public function __construct($js, $html, $css)
    {
        $this->js = $js;
        $this->html = $html;
        $this->css = $css;
    }

    public function load()
    {
        header('Content-Type: application/json');

        echo json_encode($this);
    }
}
