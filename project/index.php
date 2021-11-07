<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css-reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Philosopher:wght@700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Questionare</title>
</head>
<!-- Ha magyar lesz a kérőív akkor új fontot kell keresni a Philosopher helyett mert nem tudja lekezelni az összes ékezetes betűt. De mivel nem tudtam milyen nyelven lesz, így meghagytam így.  -->
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
        <header>
            <h1>Title of the questionare</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum earum distinctio corrupti nesciunt! Ea
                expedita, aspernatur sunt rem repellat falsen dolorum omnis! Voluptates ut rerum porro vitae dolor est quod
                vero quos necessitatibus ipsam! Nemo illo quae consequatur error voluptatum.</p>
        </header>

        <?php

            class NewQuestion 
            {

                function addTrueOrFalse($block_name) 
                {
                    echo '<div class="input-wrapper ">
                    <h1>'.$block_name.'</h1>
                    <div class="radio">
                        <input type="radio" name="q1" id="true">
                        <label>True</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="q1" id="false">
                        <label>False</label>
                    </div>
                </div>';
                }

                function oneChoiceOnly($block_name, $block_values = array()) 
                {
                    echo '<div class="input-wrapper">
                        <h1>'.$block_name.'</h1>';
                        $i = 1;
                        foreach ($block_values as $bv)
                        {
                            echo    '<div class="radio">
                                        <input type="radio" name="q2" id="'.$i.'st-one-chose-only">
                                        <label for="'.$i.'st-one-chose-only">'.$bv.'</label>
                                    </div>';
                            $i++;
                        }
                    echo '</div>';
                }

                function multipleChoice($block_name, $block_values = array())
                {
                    echo    '<div class="input-wrapper">
                                <h1>'.$block_name.'</h1>';
                    $i = 1;
                    foreach ($block_values as $bv)
                    {
                        echo    '<div class="checkbox">
                                    <input type="checkbox" name="cb" id="cb'.$i.'">
                                    <label for="cb'.$i.'">'.$bv.'</label>
                                </div>';
                        $i++;
                    }

                    echo '</div>';
                }

                function customAnswer($block_name, $customPlaceholder = "Válasz helye...")
                {
                    echo    '<div class="input-wrapper">
                                <h1>'.$block_name.'</h1>
                                <div class="own-answear">
                                    <textarea name="" id="" cols="50" rows="5" placeholder="'.$customPlaceholder.'"></textarea>
                                </div>
                            </div>';
                }
            }

            $addQA = new NewQuestion;

        ?>

        <!-- trueorfalse radio
                onechoseonly radio
                morethafalsenechose checkbox
                ownanswer textbox -->

        <form action="" method="post">
        
            <div class="input-wrapper ">
                <h1>True or False</h1>
                <div class="radio">
                    <input type="radio" name="q1" id="true">
                    <label for="true">True</label>
                </div>
                <div class="radio">
                    <input type="radio" name="q1" id="false">
                    <label for="false">False</label>
                </div>
            </div>
        
            <div class="input-wrapper">
                <h1>One choice only</h1>
                <div class="radio">
                    <input type="radio" name="q2" id="1st-one-chose-only">
                    <label for="1st-one-chose-only">First option</label>
                </div>
                <div class="radio">
                    <input type="radio" name="q2" id="2st-one-chose-only">
                    <label for="2st-one-chose-only">Second option</label>
                </div>
                <div class="radio">
                    <input type="radio" name="q2" id="3st-one-chose-only">
                    <label for="3st-one-chose-only">Third option</label>
                </div>
            </div>
        
            <div class="input-wrapper">
                <h1>More than one choice</h1>
                <div class="checkbox">
                    <input type="checkbox" name="cb" id="cb1">
                    <label for="cb1">First option</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="cb" id="cb2">
                    <label for="cb2">Second option</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="cb" id="cb3">
                    <label for="cb3">Third option</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="cb" id="cb4">
                    <label for="cb4">Fourth option</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="cb" id="cb5">
                    <label for="cb5">Fifth option</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" name="cb" id="cb6">
                    <label for="cb6">Sixth option</label>
                </div>
            </div>
        
            <div class="input-wrapper">
                <h1>It's a question which you can give own answear.</h1>
                <div class="own-answear">
                    <textarea name="" id="" cols="50" rows="5" placeholder="Your answear"></textarea>
                </div>
            </div>

            
            <?php
            
                $addQA->addTrueOrFalse("Igaz vagy Hamis");
                $addQA->addTrueOrFalse("Almafa");
                $addQA->oneChoiceOnly("Válassz egyet!", array("Almafa", "Kecske", "Répa", "Retek", "Mogyoró"));
                $addQA->multipleChoice("Válassz többet!", array("Almafa", "Kecske", "Répa", "Retek", "Mogyoró"));
                $addQA->customAnswer("Mit gondolsz...");


            ?>
        
        
            <div class="submit pointer">
                <input type="submit" value="Send" class="button pointer">
            </div>
        </form>
    </div>
</body>
</html>