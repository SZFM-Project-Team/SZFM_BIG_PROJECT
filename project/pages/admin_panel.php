<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_panel.css">
    <title>Admin Panel</title>
</head>
<body>

    <?php include("../php/data_process.php"); ?>
    
    <div class="wholepage">

        <div class="divider">
        </div>

        <div id="container">
            
            <div class="q_title_l">
                <h1>Admin Panel - Kérdés feltöltése</h1>
            </div>

            <form method="post">

                <div class="radios question-type-checkbox">
                    <div>
                        <input type="radio" name="RD" id="CO" value="CO" required>
                        <label for="CO">One Choice Only</label>
                    </div>

                    <div>
                        <input type="radio" name="RD" id="MC" value="MC" required>
                        <label for="MC">Multiple Choice</label>
                    </div>

                    <div>
                        <input type="radio" name="RD" id="TF" value="TF" required>
                        <label for="TF">True of False</label>
                    </div> 

                    <div>
                        <input type="radio" name="RD" id="CA" value="CA" required>
                        <label for="CA">Custom Answer</label>
                    </div>
                </div>

                <div id="Question_title" class="Question_title">
                    <label for="q_title">Kérdés címe</label><br/>
                    <input type="text" name="q_title" id="q_title" required>
                </div>

                <div id="Question_id" class="Question_id">
                    <label for="q_id">Kérdés azonosító</label><br/>
                    <input type="text" name="q_id" id="q_id" required>
                </div>

                <div id="Question_answers" class="Question_answers">
                    <label for="q_answers">Válaszok (Egymás alá egy sorba egy válasz)</label><br/>
                    <textarea type="text" name="q_answers" id="q_answers"></textarea>
                </div>

                <div class="q_rq_t">
                    <h3>Kötelező a mező?</h3>
                </div>
                
                <div id="Question_required" class="Question_required">
                    <div>
                        <input type="radio" name="RQ" id="rq_true" value="false" required>
                        <label for="rq_true">True</label>
                    </div>

                    <div>
                        <input type="radio" name="RQ" id="rq_false" value="false" required>
                        <label for="rq_false">False</label>
                    </div>
                </div>

                <div class="submit pointer" onclick="">
                    <input type="submit" name="store" value="Kérdés feltöltése" class="button pointer">
                </div>

            </form>
        </div>

        <div class="divider">
        </div>

    </div>

    <?php

        if (isset($_POST['store']))
        {
            loadIntoCSV($_POST, getLastNumberCSV()+1);
            $_POST = array();
            echo "<meta http-equiv='refresh' content='0'>";
        }
    
    ?>

</body>
</html>