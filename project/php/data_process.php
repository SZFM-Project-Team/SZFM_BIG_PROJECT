<?php

    function getLastNumberCSV()
    {
        $myfile = fopen("../datas/questions.csv", "r") or die("A kérdéseket nem sikerült betölteni!");

        $dump = fgets($myfile);

        $questions = [];

        while (!feof($myfile))
        {
            array_push($questions, fgets($myfile));
        }

        $dq = $questions[sizeof($questions)-1];
    
        $pn = explode(";", $dq);

        $number = $pn[0];

        fclose($myfile);

        return $number;
    }

    function loadIntoCSV($tomb, $number)
    {
        $myfile = fopen('../datas/questions.csv', 'a') or die("A kérdéseket nem sikerült betölteni!");

        var_dump($tomb);

        $stringCSV = "";
        $stringCSV .= $number.';'; //Kérdés száma
        $stringCSV .= $tomb["RD"].';'; //Kérdés típusa
        $stringCSV .= ($number-1).'. '.$tomb["q_title"].';'; //Kérdés címe
        $stringCSV .= $tomb["q_id"].';'; //Kérdés ID
        if (strlen($tomb["q_answers"]) > 0) 
        {
            $answers = explode("\n", $tomb["q_answers"]);

            for ($i = 0; $i < sizeof($answers)-1; $i++)
            {
                $answers[$i] = rtrim($answers[$i]);
            }

            for ($i = 0; $i < sizeof($answers) - 1; $i++)
            {
                $stringCSV .= $answers[$i].'.,'; // Kérdésekre a válasz
            }
            
            $stringCSV .= $answers[sizeof($answers) - 1].';';
        }
        else
        {
            $stringCSV .= ';';
        }

        switch ($tomb["RD"])
        {
            case "CO":
                $stringCSV .= '$egyvalasz++;';
                break;
            case "MC":
                $stringCSV .= '$tobbvalasz++;';
                break;
            case "TF":
                $stringCSV .= '$igazhamis++;';
                break;
            case "CA":
                $stringCSV .= '$sajatvalasz++;';
                break;
        }

        $stringCSV .= $tomb["RQ"];

        fwrite($myfile, "\n");
        fwrite($myfile, $stringCSV);

        fclose($myfile);

        return 0;
    }

?>