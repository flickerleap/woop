<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Woop\Display\Input;

use Woop\Core\Display\Input;

/**
 * Description of Number
 *
 * @author Flicker
 */
class Number extends Input
{

    public function __construct()
    {
        parent::__construct("number");
    }

    public function render($id, $value, $params = array())
    {
        return "<input name='{$id}' id='{$id}' type='{$this->type}' value='{$value}' {$this->getEditable($params)}/>";
    }

}