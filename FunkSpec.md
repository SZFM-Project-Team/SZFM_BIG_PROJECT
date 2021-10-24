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
- Biztonság https protocol amellyel biztosítjuk a felhasználó védettségét a weben.
- Egy választási lehetőséggel rendelkező kérdés és annak a választófelülete, vizsgálás, hogy kizárólag egy opció van bejelölve egyszerre
- Több választási lehetőséggel rendelkező kérdés és annak a választófelülete, vizsgálása annak az esetnek, hogy ha egy opció sincsen bejelölve, vagyis legalább egy jelölés van
- Saját válasz beírása lehetőséggel rendelkező kérdés és annak a beírósáv felülete, nem üres a mező, illetve ahol számot kér, oda szám érték kerüljön
- Legördülő menü hozzáadása és annak a felülelte
- Egy validációs ikon beimplementálása a helyesen beírt adat visszacsatolásához, az érvényes válasz esetén megjelenjen az elfogadó pingvin ikon
- Egy validációs ikon beimplementálása a helytelenül beírt adat visszacsatolásához, érvénytelen válasz esetén vizsgáljon és jelenítse meg az elutasító pingvin ikont
- Dinamikusan változó kérdés implementlása egy kapcsoló bekapcsolásával, például ha valamilyen kérdés igényli, akkor bővítheti az adott kérdésre adott válaszokat vagy ha kikapcsolja azt a felhasználó, akkor visszatérjen az eredeti státuszába.
- Adatbázis kommunikáció a weboldal és egy webszerver adatbázisával, a felhasználó által írt válaszok felküldése egy adatbázisba a későbbi adatok kinyerése érdekében
- Díszítés megalkotása a felülethez, hozzá kattintható funkciók, mint gombok vagy oldal díszek
- UI megalkotása a felülethez

>Jelenlegi üzleti folyamatok modellje
---
Létrehoztunk egy olyan online kérdőívet mely képes úgy nevezett szűrésre a felhasználók között.
Ez azért fontos, mert vannak olyan esetek amikor szeretnénk több kreditet adni azon felhasználók válaszára akiknek van tapasztalatuk az adott témában.
Ezért a kérdőív tényleges kitöltése előtt egy kisebb "tesztet" íratunk velük amiből kiderül, hogy mennyit számít a rálátásuk egy adott témakörben.
A felhasználók a kérdőív kitöltése során számos válaszlehetőséggel találhatják magukat szemben:
+ igaz-hamis választós;
+ egy feleltet választós
+ több feletet választós
+ illetve saját válasz megadós 
E mellett a kérdőív során rögzített adatok a háttérben tárolásra kerülnek. Természetesen ezen adatok titkosítva vannak, és nem megengedett a velük való visszaélés.

>Igényelt üzleti folyamatok modellje
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
A tervezete a felületnek (EZ JELENLEG CSAK EGY KEZDETI ÁLLAPOT, A VÉGEREDMÉNY ELTÉRŐ LESZ):
![Questionnarie Plan Preview](/plan.png) <br>


A felhasznált ikonok:
=====================

Ezzel az ikonnal jelezzük, ha a kitöltés érvényessége megfelelő:

![Penguin Accepted](/penguin_accepted.png) <br>

Ezzel az ikonnal jelezzük, ha a kitöltés érvényessége nem megfelelő:

![Penguin Accepted](/penguin_declined.png) <br>

- A webalkalmazás tetején helyezkedik el a projekt címe
- Az egy válaszos választó felület 5 válasz opcióval fog megjelenni, de csak az egyik lesz jó közülük
- Egy táblázatos elrendezésben fognak megjelenni a kérdések, a sorszámuk és a válaszok
- A kérdések egymás alatti elhelyezkedése

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
Ennek a kérdőívnek, mint bármely másiknak az alapkövetelménye, hogy bizonyos kérdésekre választ lehessen adni.
A gyűjtött adatok tárolása szintén fontos, hisz szeretnénk majd látni őket.
Az adatok rögzítését/feleletadást a követző képpen oldanánk meg:
- A grafikus felületen a válaszadáshoz megfelelő válaszadóopciók jelennek meg:
- + Igaz hamis esetén:
- - + A felhasználó két válaszlehetőség közül választhat majd, ezek "igaz"/"hamis"vagy "igen"/"nem". 
- - + Ezek mellett az opciók mellett egy-egy rádiógomb fog megjelenni, ezekből egyet kiválasztva rögzítheti a felhasználó a válaszát.
- + Egy felelet választós esetén:
- - + Több válaszlehetőseg szerepel majd a képernyőn, ezek mellett egy-egy rádiógomb fog megjelenni.
- - + A felhasználó több válaszlehetőseg közül szigorúan csak egy kiválasztására lesz képes.
- + Több felelet választós esetén:
- - + Több válaszlehetőseg szerepel majd a képernyőn, ezek mellett egy-egy checkbox fog megjelenni.
- - + A felhasználó itt egy vagy akár több válasz kiválasztására is képes lesz.
- + Saját válasz megadós esetén:
- - + Egy szövegsáv fog megjelenni a grafikus felületen.
- - + Itt a felhasználó egy saját maga által megfogalmazott választ képes majd rögzíteni.
- - + Ez a szövegsáv meg fog jelenni néhány egy felelet választós, illetve több felelet választós modulnál is.
- - + Ezáltal nem limitáljuk le a felhasználók válaszlehetősegeit a mi általunk kigondolt válaszlehetősegekre;
- - + Hiszen nyitottak vagyunk több nézőpontra is,
- - + Illetve ezáltal fejleszthetjük a későbbiekben a kérdőív válaszlehetősegeit.
A kérdőív állapotmentését a böngészők tárolójával oldjuk meg, így esetleges megszakítások esetén majd lehet folytatni a megkezdett kérdőíveket.
A kérdőív befejezéséhez elhelyezünk a képernyőn egy "SUBMIT" típusú gombot mellyel a rögzített válaszokat eltároljuk egy adatbázisban.

>Fogalomszótár
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