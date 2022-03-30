<?php
include "./LikeAPI/LikeAPI-contr.classes.php";

    $report = new LikeApiContr(1, NULL, NULL);

    $rep = $report->reportNoticeC();

    $report2 = new LikeApiContr(NULL, NULL, NULL);

    $reps = $report2->reportCategoryC();

?>