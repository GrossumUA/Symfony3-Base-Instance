<?php

namespace Application\UserBundle\Helper;

/**
 * Class EmailHelper
 */
class EmailHelper
{
    /**
     * @param $email
     * @return bool|string
     */
    public static function validateEmail($email)
    {
        $email = strtolower($email);
        $pattern = '/^[a-z0-9-_]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z0-9]{2,})$/';

        if (preg_match($pattern, $email)) {
            return $email;
        }

        return false;
    }
}
