# Rendszerterv
> A rendszer célja
---
A Rendszer célja, hogy adatok gyűjtsön bizonyos témákkal kapcsolatban.
A kész projektnek elérhetőnek kell lennie :
+ asztali számítógépről(PC)
+ laptopról
+ okostelefonról
+ tablettről
Ezen eszközök MINDEN böngészójéről
A kérdőív legyen képes több féle válaszadó lehetőséget feltűntetni.
A rendszernek képesnek kell lennie bizonyos esetekben "szűrni" a felhasználókat.
A felhasználó legyen képes a válaszok rögzítésére/leadására/törlésére.
A Felhasználónak képesnek kell lennie folytatni egy elkezdett de még nem befejezett kérdőív kitöltését.
A rendszer legyen képes egy adatbázisban tárolni a begyűjtött adatokat.

> Projektterv
---


  
> Üzleti folyamatok modellje
---
1. Online megjelenés.
2. Válaszok elmentése adatbázisba.
    2.1. megválaszolt kérdés => válasz mentése adatbázisba
    2.2  nem megválaszolt kérdés => a válasz helyett NULL érték felvétele az adott kérdéshez
3. Az egyéb válaszmegjelölés átnézése, és csak az értelmes válaszok elmentése adatbázisba.
4. A kérdőív folytatásának garantalásása, nem várt kilépés esetén.  
   4.1. regisztráláshoz kötött kérdőívitöltés:  
   4.1.1 email megadása és helyességének (@ jel) vizsgálata  
   4.1.2 helyes email cím és kitöltött jelszó => felhasználó létrehozása  
   4.1.3 regisztrált email cím és helyes jelszó => bejelentkezés
   4.1.4 regisztrált email cím és helytelen jelszó => hibás felhasználónév vagy jelszó
5. Kötelező adatok megadásának ellenörzése  
   5.1. nem, életkor és az egyéb kötelező adatok megadásának hiányossága => felszólítás az adatok pótlására, nem küldhető el enélkül a kérdőív  
   5.2  nem, életkor és az egyéb kötelező adatok kitöltése => küldhető kérdőív
6. A teszt kérdések megválaszolása esetén a helyesség ellenőrzése 
   6.1 helyes választ adott => jártas a kitöltő a témában
   6.2 nem helyes a válasza => nem annyira jártas a kitöltő a témában
  
> Követelmények
---
Funkcionális követelmények:
+ A rendszernek egy bárhonnan elérhető kérdőívet, és annak kitöltéséhez megfelelő körülményeket kell biztosítania.
+ A rendszernek képesnek kell lennie a felhasználók "szűrésére".
+ A rendszernek képesnek kell lennie a felhasználó számára lehetővé tenni egy megkezdett de be nem fejezett kérdőív befejezését.
+ A rendszernek képesnek kell lennie egy adatbázisban tárolni az adatokat.
Nem funkcionális követelmények:
+ A felhasználók nem juthatnak hozzá más felhasználók személyes adataihoz.
Törvényi előírások, szabványok:
+ GDPR-nek való megfelelés.
  
> Funkcionális terv
---
Rendszerszereplők:
+ Rendszergazda (ADMIN)
+ Felhasználó
Rendszerhasználati esetek és lefutásaik:
+ Rendszergazda:
- + Beléphet bármilyen szereplőként teljes hozzáférése van a rendszerhez
+ Felhasználó:
- + Képes regisztrálni magát a weboldalon
- + Képes bejelentkezni a weboldalon a saját adataival(ID, felhasználónév, email cím, jelszó).
- + Használhatja a webes alkalmazást, és annak minden funkcióját, azaz:
- - + válasz rögzítés;
- - + válasz törlés;
- - + kérdőív befejezése/véglegesítése majd adatok továbbítása.
- + Képes User-reportot küldeni amiben jelent bármilyen hibát/bugot az alkalmazással kapcsolatban.

> Fizikai környezet
---

  
> Architekturális terv
---
 
  
> Adatbázis terv
---
A kérdőív webes része php-ban lesz megcsinálva, ezért egy MySQL kapcsolatot létre kell hoznunk, ami a REST api-t fogja használni majd.

A kitöltött kérdőíveket fogjuk itt tárolni majd.

Ezt a kapcsolatot a php kódban fogjuk létrehozni, és alkalmazni.

Mivel előzetes regisztrációt nem igényel az oldal, ezért további adatbázisra jelen állás szerint nincsen szükség.

Viszont esetleges továbbfejlesztés esetén elképzelhető, hogy kelleni fog egy fejlesztés az adatbázisra, itt a felhasználókat kell majd eltárolni.

A tábla amit készíteni fogunk tartalmazni fogja oszlopszinten a kérdés sorszámát, sorszinten pedig a kitöltött kérdőíveket.

Egy-egy sorban minden elemhez lesz érték, ami a sorszámhoz tarzozó kérdésre fogja a választ tartalmazni.

Csak teljes kitöltés fog belekerülni az adatbázisba.

Valahogy így fog kinézni:

| 1. kérdés | 2. kérdés | ... | 10. kérdés |
| :---  | :--:| :----: |  -----:   |
| 1. válasz | 2. Válasz | ... | 10. Válasz |
| 1. válasz | 2. Válasz | ... | 10. Válasz |
| 1. válasz | 2. Válasz | ... | 10. Válasz |

  
> Implementációs terv
---

  
> Tesztterv
---
Több dolgot is szükséges letesztelni egy ilyen alkalmazásnál.
Főbb tesztelési lépéseink:
1. Megjelenés és kezelhetőség
2. Kérdések helyes sorrendben jelennek meg
3. Minden kérdésre lehet választ adni
4. Az adatbázis megfelelően tárolja az adatokat
5. A weboldal megnyitható az interneten
6. A félbehagyott kérdőívet hibamentesen lehet folytatni
7. A felhasználó szűrés hatékonyan működik
  
> Telepítési terv
---
A kérdőív egy webes alkalmazásként kerül megalkotásra így nem szükséges telepíteni semmilyen alkalmazást.

Maga a kérdőív egy webszerveren lesz elérhető, így a kliens oldalon mindössze ennyinek kell szerepelnie:
- Egy böngésző amiben támogatott az adott weboldal elérése. (Google Chrome, Mozilla Firefox, Opera, stb.)
- Webszerver eléréséhez internetkapcsolat szükségeltetik.
- Elsősorban számítógépes környezet preferált, de reszponzív megoldás, telefonos megoldás működik.
  
> Karbantartási terv
---

  
> Fogalomtár
---
