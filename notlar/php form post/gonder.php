<?php

    function form_filtrele($post)
    {
        return is_array($post) ? array_map('form_filtrele', $post) : htmlspecialchars(trim($post));
    }

    $_POST = array_map('form_filtrele', $_POST);

    function post($name)
    {
        if (isset($_POST[$name]))
            return $_POST[$name];
    }

    echo post('hakkımda');

?>