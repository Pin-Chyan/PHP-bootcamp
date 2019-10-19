<?php
    if (!file_exists("../private") || !file_exists("../private/passwd") || $_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "" || $_POST["submit"] !== "OK")
    {
    	echo "ERROR\n";
    	return ;
    }
    $arr_content = unserialize(file_get_contents("../private/passwd"));
    $login = $_POST["login"];
    $oldpw = hash(whirlpool, $_POST["oldpw"]);
    $newpw = hash(whirlpool, $_POST["newpw"]);
    foreach ($arr_content as &$user)
    {
        if ($user["login"] === $login && $user["passwd"] === $oldpw && $oldpw !== $newpw)
        {
            $user["passwd"] = $newpw;
            file_put_contents("../private/passwd", serialize($arr_content));
            echo "OK\n";
            return ;
        }
    }
    echo "ERROR\n";
    return ;
?>