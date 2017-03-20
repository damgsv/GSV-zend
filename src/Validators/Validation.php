<?php

namespace Galicher\GSV\Validation;
/**
 * Created by PhpStorm.
 * User: galicher
 * Date: 20/03/17
 * Time: 20:38
 */
class Validation
{

    /**
     * @var
     */
    private $errors;

    /**
     * @param $fields
     * @return bool
     */
    public function isMandatory($fields)
    {
        $return = false;

        foreach ($fields as $key => $value) {

            if(null == $value) {

                $this->errors[$key] = 'Le champ "' . $key . '" est obligatoire.';
                $return = true;
            }
        }

        return $return;
    }


    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

}