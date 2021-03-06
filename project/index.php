<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foci kérdőív</title>
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
    <?php include("php/file_controller.php"); ?>
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
            <h1>Football kérőív</h1>
            <p>A kérdőív célja a 14-60 éves korosztály football kompetenciáljának felmérése 13 kérdés segítségével. </p>
            <p>Az első tíz kérdés célja, hogy felmérjük, hogy ki mennyire jártas a fociban.</p>
            <p>A következő három kérdés, célja pedig, prediktálás a foci témakörében.</p>
            <p>A kérdőív teljesen anonim, a megadott válaszok csakis statisztikai célra lesznek felhasználva.</p>
            <p>A kérdőív kitöltése max 5 percet vesz igénybe.</p>
            
            <!-- Button trigger modal -->
            <button type="button" class="tutorial btn-outline-*" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Jelmagyarázat
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">    
                            <div class="col text-center">
                                <h5 class="modal-title"
                                id="exampleModalLabel">Jelmagyarázat</h5>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <p><img src="./srcimg/ball.png" alt="Focilabda képe">
                         - ha ezt látja megjelenni a kérdés mellett, akkor az adott kérdés megválaszolása nem kötelező!</p> 
                         <p><img src="./srcimg/redcard.png" alt="Piros lap"> - ha ezt látja megjelenni a kérdés mellett, akkor az adott kérdés megválaszolása kötelező!</p> 
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
                        <h1>'.$block_name.'<img src="./srcimg/redcard.png" alt="Piroslap képe"></h1>
                        
                        <div class="radios">
                        <div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `'.$name.'`, `true`);" name="'.$name.'['.strval($szamlalo).']" id="?t'.$name.'" value="true" required>
                            <label for="?t'.$name.'">Igaz</label>
                        </div>
                        <div class="radio">
                            <input type="radio" onchange="putIntoLocalStorage(storage, `'.$name.'`, `false`);" name="'.$name.'['.strval($szamlalo).']" id="?f'.$name.'" value="false" required>
                            <label for="?f'.$name.'">Hamis</label>
                        </div>
                        </div>
                        </div>';
                    }
                    else
                    {
                        echo '<div class="input-wrapper ">
                        <h1>'.$block_name.'<img src="./srcimg/ball.png" alt="Focilabda képe"></h1>
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
                        <h1>'.$block_name.'<img src="./srcimg/ball.png" alt="Focilabda képe"></h1>'; 
                        $i = 1;
                        echo '<div class="radios">';
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
                            <input type="radio" onchange="putIntoLocalStorage(storage, `one_'.$name.'!`, `'.$i.'_'.$s.'?`);" name="one_'.$name.'['.strval($szamlalo).']" id="'.$i.'_'.$s.'?" value="'.$bv.' class="radio">
                                        <label for="'.$i.'_'.$s.'?">'.$bv.'</label>
                                    </div>'
                                    ;
                            $i++;
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    else
                    {
                        echo '<div class="input-wrapper">
                        <h1>'.$block_name.'<img src="./srcimg/redcard.png" alt="Piroslap képe"></h1>';
                        $i = 1;
                        echo '<div class="radios">';
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
                        echo '</div>';
                    }
                    
                }

                function multipleChoice($block_name, $name, $block_values = array(), $szamlalo, $rq = false)
                {
                    if ($rq == false)
                    {
                        echo    '<div class="input-wrapper checkbox-group">
                                <h1>'.$block_name.'<img src="./srcimg/ball.png" alt="Focilabda képe"></h1>
                                <div class="block">';
                                
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
                        echo '</div>';
                    }
                    else
                    {
                        echo    '<div class="input-wrapper checkbox-group required">
                                <h1>'.$block_name.'<img src="./srcimg/redcard.png" alt="Piroslap képe"></h1>  
                                <div class="block">';
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
                                        <input type="checkbox" onchange="putIntoLocalStorage(storage, `'.$i.'multi_'.$name.'?!`, document.getElementById(`cb'.$i.'-'.$name.'`).checked);" name="multi_'.$name.'[]" id="cb'.$i.'-'.$name.'" value="'.$bv.'">
                                        <label for="cb'.$i.'-'.$name.'">'.$bv.'</label>
                                    </div>';
                            $i++;
                        }

                        echo '</div>';
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
                                    <div class="question">
                                        <h1>'.$block_name.'<img src="./srcimg/ball.png" alt="Focilabda képe"><h1>        
                                    </div>
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
                                    <div class="question">
                                        <h1>'.$block_name.'<img src="./srcimg/redcard.png" alt="Piroslap képe"></h1>  
                                    </div>
                                    <div class="own-answear">
                                        <textarea name="'.$name.'['.strval($szamlalo).']" id="'.$id.'" cols="50" rows="5" placeholder="'.$customPlaceholder.'" required></textarea>
                                    </div>
                                </div>';
                    }
                }
            }

            $addQA = new NewQuestion;

        ?>

        <form method="post">

            <div class="input-wrapper">
                <h1>Neme:<img src="./srcimg/ball.png" alt="Focilabda képe"></h1> 
                <div class="block">
                    <select name="gender" id="gender">
                        <option value="Not-chosen">Válassz nemet </option>
                        <option value="Male">Férfi</option>
                        <option value="Female">Nő</option>
                        <option value="Other">Egyéb</option>
                    </select>
                </div>
            </div>
            <div class="input-wrapper">
            <h1>Életkora:<img src="./srcimg/ball.png" alt="Focilabda képe"></h1>
                <div class="block">
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
            </div>
        
            <?php
                //addTrueOrFalse([A KÉRDÉS NEVE], [AZ EGYÉNI NÉV, EZ KÖTELEZŐ!], [SZÁMLÁLÓ, ANNAK A NEVE AMILYEN A KÉRDÉSTÍPUS], [KÖTELEZŐ-E -> FALSE VAGY TRUE])
                //oneChoiceOnly([A KÉRDÉS NEVE], [AZ EGYÉNI NÉV, EZ KÖTELEZŐ!], [VÁLASZOK MEGADÁSA TÖMBKÉNT], [KÖTELEZŐ-E -> TRUE VAGY TRUE])
                //multipleChoice([A KÉRDÉS NEVE], [AZ EGYÉNI NÉV, EZ KÖTELEZŐ!], [VÁLASZOK MEGADÁSA TÖMBKÉNT], [KÖTELEZŐ-E -> TRUE VAGY TRUE])
                //customAnswer([A KÉRDÉS NEVE], [A VÁLASZMEZŐ AZONOSÍTÓJA], [KÖTELEZŐ-E -> TRUE VAGY TRUE])

                $questions = loadQuestions();
                
                for ($i = 0; $i < sizeof($questions); $i++)
                {
                    $question = explode(";", $questions[$i]);

                    $answers = explode(".,", $question[4]);

                    switch ($question[1])
                    {
                        case "CO":

                            if (rtrim($question[6]) == "true")
                            {
                                $addQA->oneChoiceOnly($question[2], $question[3], $answers, $egyvalasz++, true);
                            }
                            else
                            {
                                $addQA->oneChoiceOnly($question[2], $question[3], $answers, $egyvalasz++, false);
                            }
                            break;

                        case "TF":

                            if (rtrim($question[6]) == "true")
                            {
                                $addQA->addTrueOrFalse($question[2], $question[3], $igazhamis++, true);
                            }
                            else
                            {
                                $addQA->addTrueOrFalse($question[2], $question[3], $igazhamis++, false);
                            }
                            break;

                        case "MC":

                            if (rtrim($question[6]) == "true")
                            {
                                $addQA->multipleChoice($question[2], $question[3], $answers, $tobbvalasz++, true);
                            }
                            else
                            {
                                $addQA->multipleChoice($question[2], $question[3], $answers, $tobbvalasz++, false);
                            }

                            break;

                        case "CA":

                            if (rtrim($question[6]) == "true")
                            {
                                $addQA->customAnswer($question[2], $question[3], $sajatvalasz++, true);
                            }
                            else
                            {
                                $addQA->customAnswer($question[2], $question[3], $sajatvalasz++, false);
                            }

                            break;
                    }

                }
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
            <div class="submit pointer" onclick="">
                <input type="submit" name="store" value="Küldés" class="button pointer">
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
