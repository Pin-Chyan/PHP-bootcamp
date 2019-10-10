#!/usr/bin/php
<?PHP
$pattern = "/[^w]\"([\w\s]+)\"/";
$pattern2 = "/<a.+>([a-zA-Z ]+)</";
$i = 0;
$temp = file_get_contents("page.html");
$arr = explode("\n", $temp);
$search = $arr[2];
foreach ($arr as $line)
{
    $line = preg_replace_callback($pattern,
                function ($matches){
                    return (strtoupper($matches[0]));
                },
                $line
            );
    $line = preg_replace_callback($pattern2,
                function ($matches){
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                },
                $line
            );
    echo "$line\n";
}
?>