<?php

namespace backend\models;

use common\components\Debugger as d;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "s_debug".
 *
 * @property integer $id
 * @property string $s_name
 * @property string $s_group
 * @property string $s_key
 * @property string $s_value
 */

class Debug extends ActiveRecord
{

    public static function createInit()
    {
        $object = new Debug();
        return $object;
    }

    public static function debugFrontend()
    {
        $result = 1;
        return $result;
    }

    public static function debugBackend()
    {
        $result = false;
        return $result;
    }

}//Class
