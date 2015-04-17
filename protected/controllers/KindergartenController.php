<?php

class KindergartenController extends BaseFrontController
{
    public function actionIndex()
       {
            $this->layout="private";
            $this->render('index');
	}
}
