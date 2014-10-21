<?php

/**
 * $p jako referencja dziala szybciej niz $p przez wartość
 * natomiast przekazanie $i and $j jako referencje spowalnia
 * @param array $p
 * @param int $i
 * @param int $j
 */
function s(&$p, $i, $j)
{
    $_ = $p[$i];
    $p[$i] = $p[$j];
    $p[$j] = $_;
}

function reverse($m)
{
    global $p;

    $i = 1;
    $j = $m;

    while ($i < $j) {
        s($p, $i, $j);
        $i++;
        $j--;
    }
}

function antylex($m)
{
    global $p;
    if ($m == 1) {
        // zawiera nowa permutaccje
        //var_dump(join(',', $p));
    } else {
        for ($i = 1; $i <= $m; $i++) {
            antylex($m - 1);
            if ($i < $m) {
                s($p, $i, $m);
                reverse($m - 1);
            }
        }
    }
}

// global dużo lepiej wypada, niż przekazywanie tej tablicy przez referencje
$p = [];
$n = 11; // ile liczb
for ($i = 1; $i <= $n; $i++) {
    $p[$i] = $i;
}

//var_dump ($p );
//var_dump( $p );
antylex($n);
