# Üzemeltetés:
## Alkalmazáshoz szükséges szoftver:

XAMPP nevű szoftver, ahol a Apache és MySQL port meg van nyitva. Ez fogja létrehozni az adatbázis kapcsolatot.  
A webszerver indításához egy parancssor szükséges, amibe a következőt írjuk:
* c:\xampp\php\php.exe -S localhost:8000 

## A webhez szükséges:
Egy olyan böngésző ami támogatja a localstorage tárolásra alkalmas funkciót.

## Adatbázishoz szükséges: 
A XAMPP-ot elindítva (lásd első pont) a böngészőve beírva a következő url-lt: 
* localhost/PHPMyadmin

Létrehozunk egy új adatbázist **szfm_big** néven majd azon belül egy **kerdesek** nevű táblát, ami három oszlopot tartalmaz. A tábla létrejötte után megadjuk a szerkezetét ahol az első oszlop neve **Kerdoiv_ID**, a másodiké **Valaszok**, és a harmadiké **Kitoltes_ideje**.