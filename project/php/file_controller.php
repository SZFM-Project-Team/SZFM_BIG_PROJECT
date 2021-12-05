<?php

    function loadQuestions()
    {
        $myfile = fopen("datas/questions.csv", "r") or die("A kérdéseket nem sikerült betölteni!");

            $dump = fgets($myfile);

            $questions = [];

            while (!feof($myfile))
            {
                array_push($questions, fgets($myfile));
            }

        fclose($myfile);

        return $questions;
    }

?>