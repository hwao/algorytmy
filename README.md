# Info

generowanie wszystkich permutacji dla tablicy (w porzadku antyleksykograficznym)

`[1,2,3...10]`


## Czas

**PHP 5.5.9-1ubuntu4 (z xdebug)**

`real    0m21.895s`

**PHP 5.5.9 (bez xdebug)**

`real    0m6.674s`

**HipHop VM 3.3.0 (rel)**

`real    0m0.770s`

11! (dla 11 elementow)

**PHP (z xdebug)**

po 2min przestalem czekac

**PHP (bez xdebug)**

`real    1m4.478s`

**HHVM**

`real    0m7.480s`


12!

**PHP (bez xdebug)**

`--- - powinno wyjsc w okolicach 12-13min`

**HHVM**

`real    1m24.364s`


9! = 362 880

10! = 3 628 800

11! = 39 916 800

12! = 479 001 600


Na podstawie zebrancyh danych da się zauważyć że czas z N! dla (N+1)! wyniesie około ( <czas z N!> * (N+1) )

Czyli jeżeli zmierzyliśmy czas dla 9! to dla 10! bedzie 10x dluzej (od 9!), dla 11! 11x dluzej niz 10! wiec dla 12! nie puszczam


**golang**

10! `real    0m0.215s`

11! `real    0m0.822s`

12! `real    0m8.464s`

13! `real    1m52.228s`


Podejrzewam że da się poprawić kod w GO (prawdopodobnie powinien latac tam struct zamiast p[]int, bo inaczej tablica jest ciągle przekazywana przez wartość)


## Odpalenie

**PHP (CLI z xdebug)**

`time php permutacja_antyleksykograficzna.php`

**PHP (CLI bez xdebug)**

`time php -n permutacja_antyleksykograficzna.php`

**HHVM 3.3.0**

`time hhvm permutacja_antyleksykograficzna.php`

**Go 1.2.1 linux/amd64**

`time go run permutacja.go`

**java 1.7 (OpenJDK 2.5.2)**

`javac Permutacja.java`

`time java Permutacja 5`

**C**

`gcc permutacja.c -o perC`

`time ./perC`


## Podsumowanie

### 11!

PHP (z xdebug) `~ 4min`

PHP (bez xdebug) `real 1m4.478s`

HHVM `real 0m7.480s`

Python 2.7.6 `real 0m54.487s`

Python 3.4.0 `real 0m57.880s`

PyPy 2.2.1 (Python 2.7.3) `real 0m8.618s`

Go `real    0m0.822s`

java 1.7 (OpenJDK 2.5.2) `real 0m0.418s`

### 12!

C `real    0m12.014s`

Go `real    0m7.400s`

java 1.7 (OpenJDK 2.5.2) `real 0m4.259s`

### 13!

Go `real	1m24.301s`

java 1.7 (OpenJDK 2.5.2) `real 0m45.097s`

---

PyPy 2.2.1 (Python 2.7.3) (11! recu-yeld) `real 1m48.563s`



