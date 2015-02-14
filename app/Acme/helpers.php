<?php
function errors_for($attribute, $errors)
{
    return $errors->first($attribute, '<span class="error">:message</span>');
}

function gravatar_link($email)
{
    $email = md5($email);
    return "//www.gravatar.com/avatar/{$email}?s=30";
}
