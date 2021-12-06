| Dátum | Név | Tesztelt rész | Sikeres volt-e | Bemenet | Várt kimenet | Tényleges kimenet |
| :---  | :--:| :----:        |  :-----:        | :------: | :------: | :----: |
| 2021.12.05 21:29 | Horváth István | jelmagyarázat gomb popup megjelenése | Sikeres | gomb megnyomása | popup megjelenése | popup megjelent |
| 2021.12.05 21:30 | Horváth István | popup animációja | Sikeres | jelmagyarázat gomb megnyomása | becsúszással megjelenik a popup | becsúszással megjelent a popup |
| 2021.12.05 21:32 | Horváth István | popup bezárása X gombbal | Sikeres | X gomb megnyomása | eltűnik a popup | eltűnt a popup |
| 2021.12.05 21:32 | Horváth István | popup bezárása mellékattintással | Sikeres | popup mellé kattintás | bezáródik a popup | bezáródott a popup |
| 2021.12.05 21:35 | Horváth István | popup eltüntetése az oldal újratöltésével | Sikeres | jelmagyarázat gomb megnyomása után oldal újratöltése | eltűnik a popup | eltűnt a popup |
| 2021.12.05 21:36 | Horváth István | legördülő lista használata | Sikeres | legördülő lista használata | működik | működött |
| 2021.12.05 21:37 | Horváth István | adatok kitörlése a szabadon választható kérdésekből újratöltés után legördülő listánál | Sikeres | szabadon választható kérdés megválaszolása és oldal újratöltése | eltűnik az adat | eltűnt az adat |
| 2021.12.05 21:39 | Horváth István | adatok elmentése a kötelező kérdéseknél igaz hamis esetén | Sikeres | igaz hamis megválaszolása és oldal újratöltése | megmarad a beírt adat | megmaradt a beírt adat |
| 2021.12.05 21:42 | Horváth István | adatok elmentése a kötelező kérdéseknél több elemből egy kiválasztása esetén | Sikeres | kérdés megválaszolása és oldal újratöltése | megmarad a beírt adat | megmaradt a beírt adat |
| 2021.12.05 21:44 | Horváth István | adatok elmentése a kötelező kérdéseknél több elemből több kiválasztása esetén  | Sikeres | kérdés megválaszolása és oldal újratöltése | megmarad a beírt adat | megmaradt a beírt adat |
| 2021.12.05 21:45 | Horváth István | adatok elmentése a kötelező kérdéseknél saját válasz megadása esetén betűkkel | Sikertelen | kérdés megválaszolása és oldal újratöltése | megmarad a beírt adat | nem maradt meg a beírt adat |
| 2021.12.05 21:51 | Horváth István | adatok elmentése a kötelező kérdéseknél saját válasz megadása esetén számokkal | Sikertelen | kérdés megválaszolása és oldal újratöltése | megmarad a beírt adat | nem maradt meg a beírt adat |
| 2021.12.05 21:52 | Horváth István | küldés gomb megnyomása esetén megjelenik a köszönjük felirat | Sikeres | küldés gomb megnyomása | megjelenik a köszönjük felirat | megjelent a köszönjük felirat |
| 2021.12.05 23:08 | Tari Levente | Admin panel megynitása | Sikeres | - | Admin panel megjelenik | Admin panel megjelenik |
| 2021.12.05 23:10 | Tari Levente | Jelmagyarázat gomb működése | Sikeres | Jelmagyarázat gomb megnyomása | Felugrik a jelmagyarázat | Felugrik a jelmagyarázat |
| 2021.12.05 23:12 | Tari Levente | Többválaszos kérdés listájának lenyitása | Sikeres | Rákattintás a válaszra | Megjelennek a válaszlehetőségek | Megjelennek a válaszlehetőségek |
| 2021.12.05 23:14 | Tari Levente | Igaz-hamis kérdésnél a válasz megmarad újratöltéskor | Sikeres | Újratöltés gomb | Megmarad a válasz | Megmarad a válasz |
| 2021.12.05 23:16 | Tari Levente | Feleletválasztós kérdésnél a válasz megmarad újratöltéskor | Sikeres | Újratöltés gomb | Megmarad a válasz | Megmarad a válasz |
| 2021.12.05 23:18 | Tari Levente | Több lehetőséges kérdésnél a válasz megmarad újratöltéskor | Sikeres | Újratöltés gomb | Megmarad a válasz | Megmarad a válasz |
| 2021.12.05 23:20 | Tari Levente | Egyéni válaszos kérdésnél a válasz megmarad újratöltéskor | Sikeres | Újratöltés gomb | Megmarad a válasz | Megmarad a válasz |
| 2021.12.05 23:21 | Tari Levente | Küldés gombra kattintás kitöltés előtt | Sikeres | Küldés gomb | Visszadob egy kötelező kérdésre | Visszadob egy kötelező kérdésre |
| 2021.12.05 23:22 | Tari Levente | Küldés gombra kattintás kitöltés után | Sikeres | Küldés gomb | Megjelenik a sikeres kitöltés | Megjelenik a sikeres kitöltés |
| 2021.12.05 23:22 | Fiedler Norbert Béla | Admin panelről adat betöltése CSV állományba | Sikeres | Adatok helyes megadása | jól generált CSV string | jól generált CSV string |
| 2021.12.05 23:23 | Fiedler Norbert Béla | CSV-ből kérdés generálása a főoldalra | Sikeres | Új kérdés megjelenik | CSV string olvasható a process php-nak | CSV string olvasható a process php-nak |
| 2021.12.05 23:24 | Fiedler Norbert Béla | Admin panelen a gombok kötelezően kitöltendőnek kell lenni | Sikeres | Megjelenik hibaüzenet | Required mezőként megjelenítve | Required mezőként megjelenítve |
| 2021.12.05 23:26 | Fiedler Norbert Béla | Adatbázisból jól nyeri ki az adatokat | Sikeres | A datas.php oldalon jól jelennek meg | Jó SQL Query | Jó SQL Query |
| 2021.12.05 23:27 | Fiedler Norbert Béla | Adatok visszatöltése kilépés után | Sikertelen | Frissítés gomb többszöri megnyomása | Minden frissítés alkalmával betölti | Nem minden frissítéssel tölti vissza | 
| 2021.12.05 23:28 | Fiedler Norbert Béla | Ikonok jól jelennek meg | Sikeres | Kötelező és nem kötelező mező esetén jól megjelenő ikonok | jól hivatkozott img tagek | jól hivatkozott img tagek |
| 2021.12.05 23:32 | Fiedler Norbert Béla | Jelmagyarázat gomb működik | Sikeres | Gomb megnyomása esetén elsötétül a háttér és megjelenik a modal box | összhang css és js fájlok | összhang css és js fájlok |
| 2021.12.05 23:33 | Fiedler Norbert Béla | Automatikus id generálás kérdésnél | Sikeres | Egyedi ID-k generálódnak le | PHP kód a index.php-ban | PHP kód a index.php-ban |
| 2021.12.05 23:42 | Naghi Patrick-Mark | Rádiógombos listán való elemek kiválasztása | Sikeres | Rádiógomb kiválasztása | Az elemeket a listában ki lehet választani | Az elemeket a listában ki lehet választani |
| 2021.12.05 23:45 | Naghi Patrick-Mark | Checkboxos listán való elemek kiválasztása | SIkeres | Checkbox(ok) kiválasztása | Az elemeket a listában ki lehet választani | Az elemeket a listában ki lehet választani |
| 2021.12.05 23:48 | Naghi Patrick-Mark | Küldés gombra kattintás kitöltés után | Sikertelen | Küldés gomb | A válasz(ok) elküldése sikeres | Az elküldés sikertelen |
| 2021.12.05 23:50 | Naghi Patrick-Mark | Jelmagyarázat pop-up bezárása azon kívüli(nem X re való kattintással) | Sikeres | Popup mellé kattintás | A popup ablak eltűnik |  A popup ablak eltűnik |
| 2021.12.05 23:52 | Naghi Patrick-Mark | CSS design működése | Sikeres | - | Minden a várt módon jelenik meg | Minden a várt módon jelenik meg |
| 2021.12.05 23:55 | Naghi Patrick-Mark | Küldés gombra kattintás kötelező mezők kitöltése előtt | Sikeres | Küldés gomb | Felvisz a kitöltetlen kötelező válasz(ok)hoz | Felvisz a kitöltetlen kötelező válasz(ok)hoz |
| 2021.12.05 23:58 | Naghi Patrick-Mark | Küldés gombra kattintás rossz szintaktikával kitöltött saját válasz megadásnál | Sikertelen | saját válasz megadás panel | Felszólítja a felhasználót a helyes szintaktika betartására | Nem szólítja fel a felhasználót a helyes szintaktika betartására |
| 2021.12.05 00:01 | Naghi Patrick-Mark | Admin panel kérdés feltöltés | Sikeres | Admin panel | A kívánt kérdés létrejön | A kívánt kérdés létrejön |
| 2021.12.05 00:10 | Naghi Patrick-Mark | Kiválasztott válasz megtartása checkboxos kérdésnél oldal újratöltés esetén | Sikeres | Checkbox kijelölés, oldal újratöltése | Kiválasztva marad a checkbox | Kiválasztva marad a checkbox | 
| 2021.12.06 00:15 | Naghi Patrick-Mark | Beírt válasz elmentése saját felelet megadásnál oldal újratöltés esetén | Sikertelen | Kérdés megválaszolása, oldal újratöltése | A beírt válasz megmarad | A beírt válasz nem marad meg |
| 2021.12.06 01:20 | Szakács Ágnes | Reszponzivítás | Sikeres | index.html megjelenítése mobilon | index.html esztétikus megjelenése | index.html esztétikus megjelenítése |
| 2021.12.06 01:22 | Szakács Ágnes | Reszponzivítás | Sikeres | index.html megjelenítése tableten | index.html esztétikus megjelenése | index.html esztétikus megjelenítése |
| 2021.12.06 01:24 | Szakács Ágnes | Reszponzivítás | Sikeres | index.html megjelenítése nagy képernyőn | index.html esztétikus megjelenése | index.html esztétikus megjelenítése |
| 2021.12.06 01:26 | Szakács Ágnes | Reszponzivítás | Sikeres | thank_you.html megjelenítése mobilon | thank_you.html esztétikus megjelenése | thank_you.html esztétikus megjelenítése |
| 2021.12.06 01:27 | Szakács Ágnes | Reszponzivítás | Sikeres | thank_you.html megjelenítése tableten | thank_you.html esztétikus megjelenése | thank_you.html esztétikus megjelenítése |
| 2021.12.06 01:28 | Szakács Ágnes | Reszponzivítás | Sikeres | thank_you.html megjelenítése nagy képernyőn | thank_you.html esztétikus megjelenése | thank_you.html esztétikus megjelenítése |