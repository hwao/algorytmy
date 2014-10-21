generowanie wszystkich permutacji dla tablicy
[1,2,3...10]

PHP 5.5.9-1ubuntu4 (z xdebug)
real    0m21.895s

PHP 5.5.9 (bez xdebug)
real    0m6.674s

HipHop VM 3.3.0 (rel)
real    0m0.770s

11! (dla 11 elementow)
PHP (z xdebug): po 2min przestalem czekac
PHP (bez xdebug) real    1m4.478s
HHVM: real    0m7.480s

12!
PHP ---
HHVM real    1m24.364s

9! = 362 880
10! = 3 628 800
11! = 39 916 800
12! = 479 001 600

idzie w miare rowno, czyli jak liczy sie czas dla 9! to dla 10! bedzie 10x dluzej (od 9!), dla 11! 11x dluzej niz 10! wiec dla 12! nie puszczam

dla golang
10! real    0m0.215s
11! real    0m0.822s
12! real    0m8.464s
13! real    1m52.228s

o ile optymalnie kod w go napisalem (i podejrzewam ze powinien latac tam struct zamiast p[]int bo wszedzie idzie przekazywane przez wartosc)


Odpalenie:
PHP (CLI z xdebug)
time php permutacja_antyleksykograficzna.php
PHP (CLI bez xdebug)
time php -n permutacja_antyleksykograficzna.php
HHVM 3.3.0
time hhvm permutacja_antyleksykograficzna.php
Go 1.2.1 linux/amd64
time go run permutacja.go
