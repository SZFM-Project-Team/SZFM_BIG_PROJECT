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
## Projektszerepkörök, felelőségek:

Projekt menedzser: Fiedler Norbert Béla  
  
Projektmunkások és felelőségek:  
  
**Backend** munkálatok:
  
- Fiedler Norbert Béla  
  
- Tari Levente  
  
- Horváth István  
  
- Naghi Patrick Mark  

Feladatuk a kérdőív által nyert adatok tárolása, szükséges adatbázis(ok) létrehozása.  
  
**Frontend** munkálatok:  
  
- Fiedler Norbert Béla  
  
- Szakács Ágnes  
  
Feladatuk a kérdőív kinézetének minél stílusosabb és egyszerűbb kivitelezése CSS és HTML segítségével.  
  
# Ütemterv:
| Funkció | Feladat | Prioritás | Becslés | Akt. becslés | Eltelt | Hátralévő
| ------ | :------: | :------: | :------: | :------: | :------: | :------: |
| Követelmény specifikáció |  | 0 | 12 | 12 | 12 | 0 |
| Funkcionális specifikáció |  | 0 | 12 | 12 | 12 | 0 |
| Rendszerterv |  | 0 | 18 | 18 | 18 | 0 |
| Adatbázis létrehozása |  | 1 | 5 | 5 | 0 | 5 |
| Válaszok lementése adatbázisba| | 1 | 5 | 5 | 0 | 5 |
| Weboldal grafikus megjelenítése| HTML | 1 | 3 | 3 | 0 | 3 |
|  | CSS | 1 | 10 | 10 | 0 | 10 |
| Teszt |  | 1 | 30 | 30 | 0 | 30 |
| Projektvezetés |  | 2 | 30 | 30 | 0 | 30 |
|  |  | Órák: | 125 | 125 | 42 | 83 |
|  |  | Embernap: | 15.625 | 15.625 | 5.25 | 10.375 |
| |  |  |  |  |  |  |
| Napidíj: |  | 28 000 Ft |  |  |  |  |
| Árajánlat: |  | 448 000 Ft |  |  |  |  |

  
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
A szoftver maga weboldalon fog megjelenni, így ebben az esetben az architektúráját két külön részre bontjuk szét.
  
Az egyik része a **Bakckend** a másik pedig a **Frontend** lesz.
  
A felhasználó kliens ezek közül csak a **Frontend** részével fog találkozni, míg a **Backend** része a webszerver adatbázisán fogja a vizsgálatokat végrehajtani.
  
A **Backend** részhez szükséges:
  
+ Adatbázis szerver, a szoftver ehhez a MySQL adatbázist fogja használni.
  
+ Adatbázis szerverhez csatlakozó REST api, ami PHP alapú lesz.  
  
+ Kliensekkel kommunikáló szövegek.  
  
+ Keretrendszer PHP-hoz (pl.: Laravel)
  
A **Frontend** részéhez:  
  
+ A kérdőív felépítésének ábrázolása ***HTML*** és ***CSS*** kóddal.  

+ Bootstrap alkalmazása
  
+ Kliens elérése a webszerverhez.  
  
+ PHP funkciók hozzáadása és JavaScript funkciók.  

  
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
A webes felület php, javascript, jQuery és HTML  nyelven fog készülni.

A különböző valós idejű változásokat AJAX-al fogja végrehajtani a szoftver.

A weboldal designolása CSS ben lesz végrehajtva és a Bootstrap előre megírt osztályaival lesz elrendezve.
  
Az adatbázist a PHP által nyújtott MySQL adatbázis elérés eszközeivel fogjuk elérni (mint pl.: PDO vagy MySQLi).

Maguk a kérdések egy form alapján lesznek megalkotva és a bennük lévő adatokat a PHP Post metódussal fogjuk a webszerver számára, onnan pedig az adatbázisba betölteni.
  
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
1. **Reszponzív felület** - Mobilon, Tableten, *PC*-n igazodik a képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül üzemelhet.”
2. **Webszerver** - egy kiszolgáló, mely elérhetővé teszi a helyileg (esetleg más kiszolgálón) tárolt weblapokat a *HTTP* protokollon keresztül.
3. **HTML** - angolul: *HyperText Markup Language*=hiperszöveges jelölőnyelv, egy leíró nyelv, melyet weboldalak készítéséhez fejlesztettek ki, és mára már internetes szabvánnyá vált a *W3C* (World Wide Web Consortium) támogatásával.
4. **CSS** - Cascading Style Sheets, magyarul: lépcsőzetes stíluslapok, a számítástechnikában egy stílusleíró nyelv, mely a *HTML* vagy *XHTML* típusú strukturált dokumentumok megjelenését írja le.
5. **JavaScript** - programozási nyelv egy objektumorientált, prototípus-alapú szkriptnyelv, amelyet weboldalakon elterjedten használnak.
6. **PHP** - egy általános szerveroldali szkriptnyelv dinamikus weblapok készítésére.
7. **PNG** - *Portable Network Graphics* képek tárolására, veszteségmentes tömörítésére alkalmas fájlformátum.
8. **JPEG** - *Joint Photographic Experts Group* képek tárolására alkalmas fájlformátum.
9. **HTTPS** - *HyperText Transfer Protocol Safe* egy URI-séma, amely biztonságos http kapcsolatot jelöl.
10. **Kliens** - olyan számítógép vagy azon futó program, amelyik hozzáfér egy *(távoli)* szolgáltatáshoz, amelyet egy számítógép hálózathoz tartozó másik számítógép *(a szerver)* nyújt.
11. **Adatbázis** - Az *adatbázis* azonos minőségű (jellemzőjű), többnyire strukturált adatok összessége, amelyet egy azok tárolására, lekérdezésére és szerkesztésére alkalmas szoftvereszköz kezel.
12. **Sütik** - A *HTTP-süti* (általában egyszerűen süti, illetve angolul cookie) egy információcsomag, amelyet a szerver küld a webböngészőnek, majd a böngésző visszaküld a szervernek minden, a szerver felé irányított kérés alkalmával.
13. **Keretrendszer** - A számítógép-programozásban a szoftverkörnyezet egy absztrakció, ami a szoftver által nyújtott általános funkcionalitást képes szelektíven megváltoztatni a felhasználói kód alapján, így alkalmazásspecifikus szoftvert biztosítanak.