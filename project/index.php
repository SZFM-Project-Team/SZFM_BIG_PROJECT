<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/css-reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mytutorial.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&family=Philosopher:wght@700&display=swap" rel="stylesheet">   
    <script defer src="./js/tutorial.js"></script> 
    <title>Questionare</title>
</head>
<!-- Ha magyar lesz a kérőív akkor új fontot kell keresni a Philosopher helyett mert nem tudja lekezelni az összes ékezetes betűt. De mivel nem tudtam milyen nyelven lesz, így meghagytam így.  -->
<body>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    
    <div class="container">
        <header>
            <h1>Matematikai kompetencia felmérése</h1>
            <p>A kérdőív célja a 14-60 éves korosztály matematikai kompetenciáljának felmérése 15 kérdés segítségével. </p>
            <p>Az első öt kérdés célja, hogy felmérjük, hogy ki mennyire jártas a matematikában. Ezeknél a kérdéseknél a kitöltő visszajezést kap, hogy helyes választ adott e a kérdésre vagy sem.</p>
            <p>A következő tíz kérdésnél nem lesz megadva a helyes válasz, ezek a kérdések öszettesgében se lesznek olyan nehezek mint az első öt. </p>
            <p>A kérdőív teljesen anonim, a megadott válaszok csakis statisztikai célra lesznek felhasználva.</p>
            <p>A kérdőív kitöltése max 10 percet vesz igénybe. </p>
            <button class="tutorial pointer" id=modbutton data-modal-target="#modal">Jelmagyarázat</button>
            <div class="modal" id=modal>
                <div class="modal-header">
                    <div class="title">Jelmagyarázat</div>
                    <button data-close-button class="close-button">&times;</button>
                </div>
                <div class="modal-body">
                    <p> A *-al jelzett kérédések kitöltése kötelező!</p>
                    <p>(felfele mutató pingvin képe)-el jelzett kérdésre helyes választ adott </p> 
                    <p>(lefele mutató pingvin képe)-el jelzett kérdésre rossz választ adott </p> 
                </div>
            </div>
            <div id="overlay"></div>
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
                        <label>Igaz</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="q1" id="false">
                        <label>Hamis</label>
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
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                        <option value="47">47</option>
                        <option value="48">48</option>
                        <option value="49">49</option>
                        <option value="50">50</option>
                        <option value="51">51</option>
                        <option value="52">52</option>
                        <option value="53">53</option>
                        <option value="54">54</option>
                        <option value="55">55</option>
                        <option value="56">56</option>
                        <option value="57">57</option>
                        <option value="58">58</option>
                        <option value="59">59</option>
                        <option value="60">60</option>
                    </select>
            </div>

            <?php
                $addQA->oneChoiceOnly("Legmagasabb iskolai végzettsége:", array("kevesebb mint 8 osztály", "általános iskola", "gimnázium", "szakközépiskola", "egyetem", "főiskola"));
                $addQA->addTrueOrFalse("1. Döntse el, hogy igaz vagy hamis: 
                Ha egy szám osztható 9-cel, akkor osztható 3-mal is.");
                $addQA->oneChoiceOnly("2. Mit mondd ki a Pitagorasz-tétel?", array("Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) négyzetösszegével.", "Bármely háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) négyzetösszegével.", "Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) összegével.", "Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) köbe megegyezik a másik két oldal (a befogók) négyzetösszegével.", "Bármely derékszögű háromszög leghosszabb oldalának (átfogójának) négyzete megegyezik a másik két oldal (a befogók) négyzetkülönbségével."));
                
                $addQA->addTrueOrFalse("3. Döntse el, hogy igaz e a következő állítás: Azokat a természetes számokat, amelyeknek pontosan két osztójuk van, prímszámoknak nevezzük.
                ");
                $addQA->multipleChoice("4. Jelölje be az összes igaz állítást!", array("Minden kocka téglatest.", "Minden téglatest kocka.", "Van olyan téglatest amely nem kocka.", "Van olyan kocka, amely nem téglatest.", "Ha egy testet ha egybevágó téglalap határól, akkor az kocka.", "Ha egy téglatestnek van három egybevágó lapja, akkor legalább négy lapja egybevágó.", "A fentiek közül az összes állítás hamis."));
                $addQA->customAnswer("5. Írjon legalább 2  számpárt, amelynek a legnagyobb közös oszója 6! (pl:54-24)");


            ?>

            <div class="submit pointer">
                <input type="submit" value="Send" class="button pointer">
            </div>
        </form>
    </div>
</body>
</html>