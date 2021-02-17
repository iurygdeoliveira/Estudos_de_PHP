<?php

/**
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $password
 * @return bool
 */
function is_passwd(string $password): bool
{
    if (password_get_info($password)['algo']) {
        return true;
    }

    return (mb_strlen($password) >= CONF_PASSWD_MIN_LEN && mb_strlen($password) <= CONF_PASSWD_MAX_LEN ? true : false);
}

/**
 * @param array $fields
 * @return bool
 */
function required(array $fields): bool
{
    $error = false;
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            $error = true;
            break;
        }
    }

    return $error;
}


function filterInput($field)
{
    var_dump($field);
    return filter_var($field, FILTER_SANITIZE_STRING);
}