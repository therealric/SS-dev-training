
<?php

require __DIR__ . "/index.view.php";

$post = ($_POST['body']);

// As a loop
function fibonacci($post)
{
    $number1 = 0;
    $number2 = 1;
    $result = 0;

    echo $number1 . ", ";
    echo $number2;

    while ($result < $post) {
        $result = $number1 + $number2;

        $number1 = $number2;
        $number2 = $result;

        if ($result <= $post) {
            echo  ", " . $result;
        }
    }
}

fibonacci($post);

/* - Create a new HTML file that will have an input box where the user can specify the maximum number for the Fibonacci sequence. */
/**/
/* - Add a button to the HTML file that will, when clicked, take the user input and post it (using JavaScript) to the PHP script and then output the result on the screen */
