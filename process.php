<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Result</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize the correct answer count
        $correctAnswers = 0;

        // Define the correct answers
        $correctAnswersArray = [
            "40 ml of methane is completely burnt using 80 ml of oxygen at room temperature. The volume of gas left after cooling to room 		temperature is ?" => 1, // Correct answer for Question 1
            // Add more correct answers here...
        ];

        // Check answers for each question
        foreach ($correctAnswersArray as $questionText => $correctAnswer) {
            $answerKey = str_replace(" ", "_", $questionText);

            if (isset($_POST[$answerKey]) && $_POST[$answerKey] != '0') {
                $selectedAnswer = $_POST[$answerKey];

                // Check if the selected answer is correct
                if ($selectedAnswer == $correctAnswer) {
                    $correctAnswers++;
                    $resultMessage = "Correct!";
                } else {
                    $resultMessage = "Incorrect. The correct answer is " . $correctAnswer;
                }

                // Display the result for each question
                echo "<p>$questionText: $resultMessage</p>";
            } else {
                // No answer selected for a question
                $resultMessage = "Please select an answer for $questionText";
                echo "<p>$resultMessage</p>";
            }
        }

        // Display the total correct answers
        echo "<p>Total Correct Answers: $correctAnswers</p>";
    } else {
        // Invalid request method
        $resultMessage = "Invalid request method.";
        echo "<p>$resultMessage</p>";
    }
    ?>
    <p><a href="index.php">Back to Quiz</a></p>
</body>
</html>
