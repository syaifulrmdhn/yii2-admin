<?php

namespace mdm\admin\items;

/**
 * DefaultController
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class DefaultController extends \yii\web\Controller
{

    /**
     *
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
