<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseFrontController
 *
 * @author francesco
 */
class BaseFrontController extends Controller {
    public $bodyTitle="";
    public $bodyImage="";
    function getBodyTitle() {
        return $this->bodyTitle;
    }

    function getBodyImage() {
        return $this->bodyImage;
    }

    function setBodyTitle($bodyTitle) {
        $this->bodyTitle = $bodyTitle;
    }

    function setBodyImage($bodyImage) {
        $this->bodyImage = $bodyImage;
    }
    
    
    
}
