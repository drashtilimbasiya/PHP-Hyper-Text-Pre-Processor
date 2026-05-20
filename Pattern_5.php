<?php
echo "Pattern of 1 to 5 numbers start from reverse from 5 after 5,4 after 5,4,3 tec.... \n";
for($i=5; $i>=1; $i--)
{
    for($j=5; $j>=$i; $j--)
    {
        echo $j;
    }
    echo "\n";
}
?>