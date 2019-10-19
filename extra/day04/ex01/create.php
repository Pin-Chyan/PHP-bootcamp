<?php
    if (!$_POST["login"] === "" || $_POST["passwd"] === "" || $_POST["submit"] !== "OK")
    {
        echo "ERROR\n";
        return ;
    }
    if (!file_exists("../private") || !file_exists("../private/passwd"))
       mkdir ("../private");
    if (file_exists("../private/passwd"))
    {
        $arr_content = unserialize(file_get_contents("../private/passwd"));
        foreach ($arr_content as $user)
        {
            if ($user["login"] === $_POST["login"])
            {
                echo "ERROR\n";
                return ;
            }
        }
    }
    $tab["login"] = $_POST["login"];
    $tab["passwd"] = hash('whirlpool', $_POST["passwd"]);
    $arr_content[] = $tab;
    file_put_contents("../private/passwd", serialize($arr_content));
    echo "OK\n";
?>