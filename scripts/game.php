<?php

// set current question values
$current_question = $_SESSION['game']['current_question'];
$total_questions = $_SESSION['game']['total_questions'];

$correct_answers = $_SESSION['game']['correct_answers'];
$incorrect_answers = $_SESSION['game']['incorrect_answers'];

$country = $_SESSION['questions'][$current_question]['question'];
$answers = $_SESSION['questions'][$current_question]['answers'];

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card p-5">

                <h3 class="text-center">Jogo das Capitais</h3>

                <div class="row">
                    <div class="col">
                        <h5 class="text-success">Questão n.º <strong><?= $current_question + 1 . ' / ' . $total_questions ?></strong></h5>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <h4>Corretas: <strong class="text-success"><?= $correct_answers ?></strong></h4>
                        <span class="mx-3">|</span>
                        <h4>Erradas: <strong class="text-danger"><?= $incorrect_answers ?></strong></h4>
                    </div>
                </div>
                
                <hr>
                <h4>Qual é a capital do seguinte país: <strong class="text-primary"><?= $country ?></strong></h4>
                <hr>

                <div class="px-5 mt-5">
                    <h3 class="mb-5" style="cursor: pointer"><?= $capitals[$answers[0]][1] ?></h3>
                    <h3 class="mb-5" style="cursor: pointer"><?= $capitals[$answers[1]][1] ?></h3>
                    <h3 class="mb-5" style="cursor: pointer"><?= $capitals[$answers[2]][1] ?></h3>
                </div>

            </div>
        </div>
    </div>
</div>