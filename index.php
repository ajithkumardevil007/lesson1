<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+1 Chemistry one mark test</title>
</head>
<body>
    <h1>Chemistry one mark Test</h1>

    <form action="process.php" method="post">
        <?php
        // Define the quiz questions
        $questions = [
            "40 ml of methane is completely burnt using 80 ml of oxygen at room temperature. The volume of gas left after cooling to room temperature is ?" => ["40 ml CO2 gas", "40 ml CO2 gas and 80 ml H2O gas", "60 ml CO2 gas and 60 ml H2O gas", "120 ml CO2 gas"],
            // Add more questions here...
        ];

        // Display questions
        foreach ($questions as $questionText => $options) {
            echo "<p>$questionText</p>";
            echo '<label for="' . str_replace(" ", "_", $questionText) . '">';
            echo '<select name="' . str_replace(" ", "_", $questionText) . '">';
            echo '<option value="0">Select an answer</option>';
            foreach ($options as $key => $option) {
                echo '<option value="' . ($key + 1) . '">' . $option . '</option>';
            }
            echo '</select>';
            echo '</label>';
        }
        ?>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
