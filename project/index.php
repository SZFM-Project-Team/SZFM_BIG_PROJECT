<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematikai kérdőív</title>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Philosopher:wght@700&display=swap" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/"></script>
    <script type="text/javascript" src="./js/localstorage_controller.js"></script>
    <link rel="stylesheet" href="./css/css-reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body onload="">
    <?php include("php/database_controller.php"); ?>
    <div class="container">
        <script type="text/javascript">

            var storage;
            var ih_items = [];
            var oc_items = [];
            var oc_ids = [];
            var multi_itemids = [];
            var multi_ids = [];

            if (typeof Storage !== 'undefined')
            {
                storage = window.localStorage;
            }
            else
            {
                alert("A böngésző nem támogatja a válaszok betöltését kilépés után!");
            }

        </script>

  
        <header>
            <h1>Matematikai kompetencia felmérése</h1>
            <p>A kérdőív célja a 14-60 éves korosztály matematikai kompetenciáljának felmérése 15 kérdés segítségével. </p>
            <p>Az első öt kérdés célja, hogy felmérjük, hogy ki mennyire jártas a matematikában. Ezeknél a kérdéseknél a kitöltő visszajezést kap, hogy helyes választ adott e a kérdésre vagy sem.</p>
            <p>A következő tíz kérdésnél nem lesz megadva a helyes válasz, ezek a kérdések öszettesgében se lesznek olyan nehezek mint az első öt. </p>
            <p>A kérdőív teljesen anonim, a megadott válaszok csakis statisztikai célra lesznek felhasználva.</p>
            <p>A kérdőív kitöltése max 10 percet vesz igénybe. </p>
            
            <!-- Button trigger modal -->
            <button type="button" class="tutorial btn-outline-*" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Jelmagyarázat
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header text-center">    
                            <h5 class="modal-title text-center"
                            id="exampleModalLabel">Jelmagyarázat</h5>  
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>A *-al jelzett kérédések kitöltése kötelező!</p>
                            <p>(felfele mutató pingvin képe) - ha ezt látja megjelenni a kérdés mellett a küldés gombra kiattintás után, akkor az adott kérdést megfelelően töltötte ki, de van olyan amit nem töltött ki és kötelező volt!</p> 
                            <p>(lefele mutató pingvin képe) - ha ezt látja megjelenni a kérdés mellett a küldés gombra kiattintás után, akkor az adott kérdést nem válaszolta meg, pedig kötelező volt!</p> 
                        </div>
                    </div>
                </div>
            </div>
        </header>
       











        <?php
        $igazhamis = 0;
        $egyvalasz = 0;
        $tobbvalasz = 0;
        $sajatvalasz = 0;

            class NewQuestion 
            {
                function addTrueOrFalse($block_name, $name, $szamlalo, $rq = false) 
                {
                    echo '<script>ih_items.push(`'.$name.'`);</script>';
                    if ($rq == true)
                    {
                        echo '<div class="input-wrapper ">
                        <h1>'.$block_name.'</h1>
                        <div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `'.$name.'`, `true`);" name="'.$name.'['.strval($szamlalo).']" id="?t'.$name.'" value="true" required>
                            <label for="?t'.$name.'">Igaz</label>
                        </div>
                        <div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `'.$name.'`, `false`);" name="'.$name.'['.strval($szamlalo).']" id="?f'.$name.'" value="false" required>
                            <label for="?f'.$name.'">Hamis</label>
                        </div>
                        </div>';
                    }
                    else
                    {
                        echo '<div class="input-wrapper ">
                        <h1>'.$block_name.'</h1>
                        <div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `'.$name.'`, `true`);" name="'.$name.'['.strval($szamlalo).']" id="?t'.$name.'" value="true">
                            <label for="?t'.$name.'">Igaz</label>
                        </div>
                        <div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `'.$name.'`, `false`);" name="'.$name.'['.strval($szamlalo).']" id="?f'.$name.'" value="false">
                            <label for="?f'.$name.'">Hamis</label>
                        </div>
                        </div>';
                    }
                
                }

                function oneChoiceOnly($block_name, $name, $block_values = array(), $szamlalo, $rq = false) 
                {
                    echo '<script>oc_items.push(`one_'.$name.'!`);</script>';
                    if ($rq == false)
                    {
                        echo '<div class="input-wrapper">
                        <h1>'.$block_name.'</h1>';
                        $i = 1;
                        foreach ($block_values as $bv)
                        {
                            $s = '';
                            $s .= $bv[0];
                            $s .= $bv[intdiv(strlen($bv),2)];
                            $s .= $bv[strlen($bv)-1];
                            $s .= $name[0];
                            $s .= $name[strlen($name)-1];
                            $s .= $block_name[0];
                            $s .= $block_name[strlen($block_name)-1];
                            echo '<script>oc_ids.push(`'.$i.'_'.$s.'?`);</script>';
                            echo    '<div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `one_'.$name.'!`, `'.$i.'_'.$s.'?`);" name="one_'.$name.'['.strval($szamlalo).']" id="'.$i.'_'.$s.'?" value="'.$bv.'">
                                        <label for="'.$i.'_'.$s.'?">'.$bv.'</label>
                                    </div>';
                            $i++;
                        }
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div class="input-wrapper">
                        <h1>'.$block_name.'</h1>';
                        $i = 1;
                        foreach ($block_values as $bv)
                        {
                            $s = '';
                            $s .= $bv[0];
                            $s .= $bv[intdiv(strlen($bv),2)];
                            $s .= $bv[strlen($bv)-1];
                            $s .= $name[0];
                            $s .= $name[strlen($name)-1];
                            $s .= $block_name[0];
                            $s .= $block_name[strlen($block_name)-1];
                            echo '<script>oc_ids.push(`'.$i.'_'.$s.'?`);</script>';
                            echo    '<div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `one_'.$name.'!`, `'.$i.'_'.$s.'?`);" name="one_'.$name.'['.strval($szamlalo).']" id="'.$i.'_'.$s.'?" value="'.$bv.'" required>
                                        <label for="'.$i.'_'.$s.'?">'.$bv.'</label>
                                    </div>';
                            $i++;
                        }
                        echo '</div>';
                    }
                    
                }

                function multipleChoice($block_name, $name, $block_values = array(), $szamlalo, $rq = false)
                {
                    if ($rq == false)
                    {
                        echo    '<div class="input-wrapper checkbox-group">
                                <h1>'.$block_name.'</h1>';
                        $i = 1;
                        foreach ($block_values as $bv)
                        {
                            $s = '';
                            $s .= $bv[0];
                            $s .= $block_name[0];
                            $s .= $block_name[strlen($block_name)-1];
                            $s .= $bv[intdiv(strlen($bv),2)];
                            $s .= $bv[strlen($bv)-1];
                            $s .= $name[0];
                            $s .= $name[strlen($name)-1];
                            echo '<script>multi_ids.push(`'.$i.'multi_'.$name.'?!`);</script>';
                            echo '<script>multi_itemids.push(`cb'.$i.'-'.$name.'`);</script>';
                            echo    '<div class="checkbox">
                            <input type="checkbox" onchange="putIntoLocalStorage(storage, `'.$i.'multi_'.$name.'?!`, document.getElementById(`cb'.$i.'-'.$name.'`).checked);" name="multi_'.$name.'['.strval($szamlalo).'][]" id="cb'.$i.'-'.$name.'" value="'.$bv.'">
                                        <label for="cb'.$i.'-'.$name.'">'.$bv.'</label>
                                    </div>';
                            $i++;
                        }

                        echo '</div>';
                    }
                    else
                    {
                        echo    '<div class="input-wrapper checkbox-group required">
                                <h1>'.$block_name.'</h1>';
                        $i = 1;
                        foreach ($block_values as $bv)
                        {
                            $s = '';
                            $s .= $bv[0];
                            $s .= $block_name[0];
                            $s .= $block_name[strlen($block_name)-1];
                            $s .= $bv[intdiv(strlen($bv),2)];
                            $s .= $bv[strlen($bv)-1];
                            $s .= $name[0];
                            $s .= $name[strlen($name)-1];
                            echo '<script>multi_ids.push(`'.$i.'multi_'.$name.'?!`);</script>';
                            echo '<script>multi_itemids.push(`cb'.$i.'-'.$name.'`);</script>';
                            echo    '<div class="checkbox">
                                        <input type="checkbox" onchange="putIntoLocalStorage(storage, `'.$i.'multi_'.$name.'?!`, document.getElementById(`cb'.$i.'-'.$name.'`).checked);" name="multi_'.$name.'['.strval($szamlalo).'][]" id="cb'.$i.'-'.$name.'" value="'.$bv.'">
                                        <label for="cb'.$i.'-'.$name.'">'.$bv.'</label>
                                    </div>';
                            $i++;
                        }

                        echo '</div>';
                    }
                }

                function customAnswer($block_name, $name, $szamlalo, $rq = false, $customPlaceholder = "Válasz helye...")
                {
                    if ($rq == false)
                    {
                        $id = '';
                        $id .= $name[0].'-!'.$name[strlen($name)-1];
                        $id .= $block_name[0].'?_'.$block_name[strlen($block_name)-1];
                        echo    '<div class="input-wrapper">
                                    <h1>'.$block_name.'</h1>
                                    <div class="own-answear">
                                        <textarea name="'.$name.'['.strval($szamlalo).']" id="'.$id.'" cols="50" rows="5" placeholder="'.$customPlaceholder.'"></textarea>
                                    </div>
                                </div>';
                    }
                    else
                    {
                        $id = '';
                        $id .= $name[0].'-!'.$name[strlen($name)-1];
                        $id .= $block_name[0].'?_'.$block_name[strlen($block_name)-1];
                        echo    '<div class="input-wrapper">
                                    <h1>'.$block_name.'</h1>
                                    <div class="own-answear">
                                        <textarea name="'.$name.'['.strval($szamlalo).']" id="'.$id.'" cols="50" rows="5" placeholder="'.$customPlaceholder.'" required></textarea>
                                    </div>
                                </div>';
                    }
                }
            }

            $addQA = new NewQuestion;

        ?>

        <form action="" method="post">

            <div class="input-wrapper">
                <h1>Neme:</h1>
                    <select name="gender" id="gender">
                        <option value="Not-chosen">Válassz nemet </option>
                        <option value="Male">Férfi</option>
                        <option value="Female">Nő</option>
                        <option value="Other">Egyéb</option>
                    </select>
            </div>
            <div class="input-wrapper">
            <h1>Életkora:</h1>
                <select name="gender" id="gender">
                    <option value="Not-chosen">Válassza ki hány éves </option>
                    <?php
                        for ($i = 14; $i <= 60; $i++)
                        {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        }
                    ?>
                </select>
            </div>
        
            <?php
                //addTrueOrFalse([A KÉRDÉS NEVE], [AZ EGYÉNI NÉV, EZ KÖTELEZŐ!], [SZÁMLÁLÓ, ANNAK A NEVE AMILYEN A KÉRDÉSTÍPUS], [KÖTELEZŐ-E -> FALSE VAGY TRUE])
                //oneChoiceOnly([A KÉRDÉS NEVE], [AZ EGYÉNI NÉV, EZ KÖTELEZŐ!], [VÁLASZOK MEGADÁSA TÖMBKÉNT], [KÖTELEZŐ-E -> TRUE VAGY TRUE])
                //multipleChoice([A KÉRDÉS NEVE], [AZ EGYÉNI NÉV, EZ KÖTELEZŐ!], [VÁLASZOK MEGADÁSA TÖMBKÉNT], [KÖTELEZŐ-E -> TRUE VAGY TRUE])
                //customAnswer([A KÉRDÉS NEVE], [A VÁLASZMEZŐ AZONOSÍTÓJA], [KÖTELEZŐ-E -> TRUE VAGY TRUE])

                $addQA->oneChoiceOnly("Legmagasabb iskolai végzettsége:", "highest_education", array("kevesebb mint 8 osztály", "általános iskola", "gimnázium", "szakközépiskola", "egyetem", "főiskola"), $egyvalasz++, true);
                $addQA->addTrueOrFalse("1. Döntse el, hogy igaz vagy hamis: Ha egy szám osztható 9-cel, akkor osztható 3-mal is.", "division_by_three", $igazhamis++, true);
                $addQA->oneChoiceOnly("2. Mit mondd ki a Pitagorasz-tétel?", "pythagoras_theorem", array("Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) négyzetösszegével.", "Bármely háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) négyzetösszegével.", "Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) összegével.", "Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) köbe megegyezik a másik két oldal (a befogók) négyzetösszegével.", "Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) négyzetkülönbségével."), $egyvalasz++, true);
                $addQA->addTrueOrFalse("3. Döntse el, hogy igaz e a következő állítás: Azokat a természetes számokat, amelyeknek pontosan két osztójuk van, prímszámoknak nevezzük.", "prime_has_two_divider", $igazhamis++, true);
                $addQA->multipleChoice("4. Jelölje be az összes igaz állítást!", "select_true_answers1", array("Minden kocka téglatest.", "Minden téglatest kocka.", "Van olyan téglatest amely nem kocka.", "Van olyan kocka, amely nem téglatest.", "Ha egy testet ha egybevágó téglalap határól, akkor az kocka.", "Ha egy téglatestnek van három egybevágó lapja, akkor legalább négy lapja egybevágó.", "A fentiek közül az összes állítás hamis."), $tobbvalasz++, true);
                $addQA->customAnswer("5. Írjon legalább 2  számpárt, amelynek a legnagyobb közös oszója 6! (pl:54-24)", "division_pair_divider_six", $sajatvalasz++, true);

                //$addQA->addTrueOrFalse("Legmagasabb iskolai végzettsége:", $igazhamis++, true);
                //$addQA->addTrueOrFalse("Almafa", "masodik_tf", $igazhamis++, false);
                //$addQA->oneChoiceOnly("Válassz egyet!", "repa_retek_mogyoro", array("Almafa", "Kecske", "Répa", "Retek", "Mogyoró"), $egyvalasz++, true);
                //$addQA->multipleChoice("Válassz többet!", "repa_retek_mogyoro", array("Almafa", "Kecske", "Répa", "Retek", "Mogyoró"), $tobbvalasz++, true);
                //$addQA->customAnswer("Mit gondolsz...", "custom_answer_block", $sajatvalasz++, false);
            ?>

            

            <script>
                try
                {
                    autoLoadTrueFalse(ih_items);
                } catch (e)
                {
                    console.log(e);
                }
                
                try
                {
                    autoLoadOneChoice(oc_ids, oc_items);
                } catch (e)
                {
                    console.log(e);
                }
                
                try
                {
                    autoLoadMultiChoice(multi_ids, multi_itemids);
                } catch (e)
                {
                    console.log(e);
                }
            </script>
        
        
            <div class="submit pointer">
                <input type="submit" name="store" value="Send" class="button pointer">
            </div>
        </form>

        <?php

            if (isset($_POST['store'])) 
            {

                echo '<script>storage.clear();</script>';
                databasePush(serialize($_POST));

            }

        ?>
    </div>
</body>
</html>