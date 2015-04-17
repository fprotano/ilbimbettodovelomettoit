<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BabysitterController
 *
 * @author francesco
 */
class BabysitterController extends BaseFrontController {
     public function actionIndex()
      {
            $this->layout="private";
            $this->render('index');
	}
}
