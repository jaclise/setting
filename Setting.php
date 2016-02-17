<?php

namespace jaclise\setting;
use Yii;

class Setting extends \yii\base\Component
{
    public function get($code)
    {
        if(!$code) return ;

        $setting = \jaclise\setting\models\Setting::find()->where(['code' => $code])->one();

        if($setting)
            return $setting->value;
        else
            return ;
    }

}
