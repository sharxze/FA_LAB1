<?php
    $grade = 72;
    
    echo "<br>Student's Grade: <br>";
    echo "Grade: {$grade} <br>";

    //If grade is greater than or equal to 90, it prints 'With Honors'.
    if ($grade >= 90) {
        echo "With Honors";
    } 

    //If grade is greater than or equal to 75, it prints 'Passed!'.
    else if ($grade >= 75) {
        echo "Passed!";
    }

    //If grade is less than 75, it prints 'Failed!'.
    else if ($grade < 75) {
        echo "Failed!";
    }
?>