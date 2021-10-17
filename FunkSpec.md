# Funkcionális Specifikáció
>Áttekintés
---
Egy olyan rendszert fejlesztünk, amely egy kérdőív formájában különböző adatokat gyűjt.
A rendszer képes arra, hogy ha egy felhasználó elkezdte kitölteni a kérdőívet, majd abbahagyta, akkor később onnan tudja folytatni a kérdések megválaszolását, ahol abbahagyta.
Azoknak a kérdéseknek a megválaszolása előtt amelyekre ténylegesen kíváncsiak vagyunk, a rendszer olyan kérdéseket tesz fel amelyeknek megválaszolásával képet kapunk a felhasználó az aktuális témában való jártasságáról. Ezek a kérdések lehetnek olyanok melyről a felhasználó tudja hogy a tudását mérik fel, vagy lehetnek olyanok melyekről a felhasználó ezt nem tudja így semmilyen formában nem lesznek befolyásolva.
A felmérés után következnek azok a kérdések, amelyekre szeretnénk az adatokat gyűjteni. Ezek lehetnek kölönböző formájúak pl.: igaz-hamis, felelet választás...
Az adatokat eltároljuk egy adatbázisban.
Az adatokat nem kell feldolgozni, a program célja az adatok gyűjtése.

>Jelenlegi helyzet
---
A megrendelő egy olyan kérdőívet szeretne kapni, amivel objektív képet alkothat egy-egy témában. Ezt úgy szeretné elérni, hogy egy olyan webes kérdőívet kér, amit az egész világról elérnek. Mivel a cégük főleg az élővilággal foglalkozik, és jelenleg a pingvineken végez kutatást, így egy olyan kérdőívet kell létrehozni ami jól passzol az élővilággal kapcsolatos témákhoz.
Egy olyan kérdőívet szükséges látrehoznunk ami jól átlátható, van valami díszítés rajta, hogy megfogja az emberek figyelmét, és emellett makulátlanul működik is.

>Követelménylista
---


>Jelenlegi üzleti folyamatok modellje
---


>Igényelt üzleti folyamatok modellje
---


>Használati esetek
---
Ez a kérdőív bárki számára elérhető lesz, és a következő esetekben használható:
1. egyszerű adatgyűjtés:
 + igaz-hamis kérdés
 + felelet választós kérdés
 + kitöltendő kérdés
2. tematizált adatgyűjtés:
 + igaz-hamis kérdés
 + felelet választós kérdés
 + kitöltendő kérdés

>Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
---


>Képernyő tervek
---


>Forgatókönyv
---

A felhasználó ellátogat az oldalra. Itt vagy bejelentkezhet, vagy sütik segítségével megjegyezzük a felhassználó előre haladását.
Ezután jöhetnek a kérdőív kérdései. Először felmérjük a felhasználó jártasságát az adott témában, vagy esetleg ha több témában is fel akarunk tenni kérdéseket, akkor megkérdezzük a felhasználót hogy melyik témát szeretné választani. Ha ő választ témát abban az esetben is fel kell mérnünk a tudását, hiszen lehet olyan a téma, hogy egy hozzá nem értő nem igazán tud olyan válaszokat adni amelyek hasznosnak bizonyulnának.
A felmérés után jöhetnek a "valódi" számunkra fontos kérdések. Ezek több féle formában is megjelenhetnek, lehetnek pl.:
- kettőből egy kiválasztás
- Több lehetőség közül egy kiválasztás
- Több lehetőség közül több kiválasztás

Az adatokat egy adatbázisban eltároljuk.


>Funkció - követelmény megfeleltetés
---


>Fogalomszótár
---
