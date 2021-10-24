# Követelmény Specifikáció

>Áttekintés
---
Egy olyan rendszert szeretnénk, amely egy kérdőív formájában adatokat gyűjt emberektől.
Legyen benne olyan funkció, hogy lehessen folytatni az elkezdett kérdőívet. Ez olyan esetekre hasznos, ha valakinek elmegy az internete például.
A fő kérdések előtt legyen valamilyen féle felmérés, amivel leteszteljük a felhasználókat akik kitöltik a kérdőívet. Ez azért szüksges, mert szeretnénk minél jobb képet kapni az adott témákban amikre ténylegesen kíváncsiak vagyunk.
Miután a felmérés megtörtént szeretnénk ha megkapná a felhasználó a rendes kérdéseket, ezek lehetnek igaz-hamis, felelet választós és a többi megszokott forma.
Az adatokat nem kell feldolgozni, csak egy olyan program szükséges ami begyűjti az adatokat és eltárolja azokat egy adatbázisban.
A legfontosabb az egészben, hogy nem szabad visszaélni ezekkel az adatokkal, minden adatot titkosan kell kezelni, ne lehessen hozzáférni illetéktelen személyeknek, mindenki csak a saját válaszaival kell hogy törődjön.
>Jelenlegi helyzet
---
A cégünk szeretne egy webes kérdőívet készíttetni adatgyűjtés céljából. A klubbunkról több helyen lehet hallani, hogy oda vannak az internetes kérdőívekért, mivel megrögzött adatgyűjtők alapították. Szeretnénk mindenféle adatot begyűjteni a világ minden részéről, erre azért van szükség,hogy egy-egy témáról ne szubjektív véleményt kapjunk. Ahogy a mondás is tartja, "Több szem többet lát!". Elsősorban olyan emberek véleményére vagyunk kíváncsiak akik valamennyire jól informáltak a világ történéseiről, nincsenek bezárkózva a külvilágtól, mivel főleg állatokról és a környezetükről szeretnénk kérdezni.
Cégünk jelenleg kutatást végez a pingvineken, így nem kizárt, hogy róluk lesz majd az első kérdőívünk.

>Vágyálom rendszer
---
A projekt célja az hogy létrehozzunk egy olyan rendszert, ami különböző adatok, predikciók, vélemények megkérdezésére szolgál.
A rendszert szeretnénk úgy létrehozni, hogy ez minél több ember számára elérhető legyen. Erre legalkalmasabb felületnek egy weboldalt gondolunk, hiszen az bármilyen eszközről elérhető, feltéve ha van internet kapcsolatunk.
A rendszernek olyannak kell lennie, hogy az a különböző felhasználók által szolgált adatokat el tudja tárolni. Emellett ha egy felhasználó válaszol néhany kérdésre, majd abbahagyja a kérdőív kitöltését, akkor később azt tudja folytatni.
Ahhoz hogy felmérjük a felhasználó témához értését tegyünk fel kalibráló kérdéseket, hiszen nem mindegy hogy egy témában jártas személy válaszol a kérdésekre, vagy egy olyan ember akinek az adott téma nem az erőssége.

>Funkcionális követelmények
---
Követelményeink:
- A kerdőiv kezelésével kapcsolatban:
- - A kérdőívben a kérdesek legyenek világosan és érthetően megfogalmazva.
- - Ezen felül a kérdőív legyen könnyen kezelhető valamint egyszerűen megérthető/átlátható.
- A vizuális felülettel kapcsolatban:
- - A vizualis felület legyen tetszetős/kidolgozott, még sem túl komplikált.
- - Szeretnénk, hogy a felület is átlátható legyen(látni lehet, hogy mely funkciók hol találhatók, és nem kell kutatni utánuk).
- A kerdőiv funkcióival kapcsolatban:
- - A weboldalnak képesnek kell lennie elmenteni a kérdoivek jelenlegi státuszát/állaspotját.
- - Ez azért fontos, ugyanis ha bármi törtenik a kérdoiv kitöltése során a kitöltőnek tudnia kell folytatnia a már meg kezdett,de még be nem fejezett kerdőivet. 

>Rendszerre vonatkozó törvények, szabályok ajánlások
---
A web felület szabványos eszközökkel készüljüön, html/css/javascript/php.  
A képek jpeg vagy png formátumúak lehetnek.  
A felhasznlókat azonosító  web oldalak esetében szükséges jogszabályokat be kell tartani: GDPR  
A rendszer bíztosítsa a kérdőívet kitöltő személy teljes anonimítást.  
Mindenképp biztosítsa a rendszer az elkezdett, de valamilyen okból félbeszakadt kérdőív kitöltésének folytatását.


>Jelenlegi üzleti folyamatok modellje
---


>Igényelt üzleti folyamatok
---


>Követelménylista
---


>Riportok
---
Hogyan működjön a rendszer?  
Amikor a felhasználó a weboldalra lép, akkor a rendszer legyen képes identifikálni azt, hogy ki az aki meglátogatta az oldalt ez történhet sütik felhasználásával (ebben az esetben a felhasználó csak azon az eszközön tudja folytatni a kérdesek megválaszolását, amelyet legelőször használt) vagy történhet bejelentkezéssel (ebben az esetben a felhasználó más eszközökön is folytathatja az eddigi előrehaladását a kérdőív kérdéseinek megválaszolásában).  
A kezdő kérdések legyenek olyanok amikkel felmérhetjük a felhasználó tudását az aktuális témával kapcsolatban. Ez történhet a felhasználó számára láthatatlan, vagy látható módon is, mindkettőnek megvannak a saját előnyei és hátrányai.  
A kérdésekre a válaszokat el kell tárolni egy adatbázisban. Ez lehet pl.:MySQL.  
Az összegyűjtött adatokat nem szükséges azonnal feldolgozni, a program célja az adatok gyűjtése. Ebből adódóan nem szükséges összefoglalót adnunk a felhsználónak a válaszai helyességéről, hiszen sok esetben pl.: predikciók kérése során nem is tudunk erre válaszolni.  
A kérdőív legyen képes különböző válaszok bekérésére pl.:  
- kettőből egy kiválasztás 
- Több lehetőség közül egy kiválasztás
- Több lehetőség közül több kiválasztás

>Fogalomtár
---
