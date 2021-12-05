<?php
    function databasePush($valaszok)
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "szfm_big";

        $conn = new mysqli($hostname, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Nem sikerült csatlakozni az adatbázishoz! Hiba oka: " . $conn->connect_error);
        }

        $todayDate = date('Y-m-d');

        $sql = "INSERT INTO `kerdesek`(`Valaszok`, `Kitoltes_ideje`) VALUES ('$valaszok','$todayDate')";

        try
        {
            $conn->query($sql);
        }
        catch (Exception $e)
        {
            echo $e;
        }

        mysqli_close($conn);
    }

    function dbGetItem()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "szfm_big";

        $conn = new mysqli($hostname, $username, $password, $dbname);

        if ($conn->connect_error)
        {
            die("Nem sikerült csatlakozni az adatbázishoz! Hiba oka: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM kerdesek";

        try
        {
            $result = $conn->query($sql);

            $datas = $result->fetch_all(MYSQLI_ASSOC);
        }
        catch (Exception $e)
        {
            echo $e;
        }

        mysqli_close($conn);

        return $datas;
    }
?>