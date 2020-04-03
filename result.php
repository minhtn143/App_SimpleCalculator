<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>App Simple Calculator</title>
</head>
<body>
<h2>App Simple Calculator</h2>
<form method="post" id="formGet" action="">
    <fieldset>
        <legend>Calculator</legend>
        <table>
            <tr>
                <td>
                    <label for="firstOperand">First operand: </label>
                </td>
                <td>
                    <label>
                        <input type="text" name="firstOperand" value="">
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="operator"> Operator</label>
                </td>
                <td>
                    <label>
                        <select name="operator">
                            <option value="+"> +</option>
                            <option value="-"> -</option>
                            <option value="*"> *</option>
                            <option value="/"> /</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="secondOperand">Second operand:</label>
                </td>
                <td>
                    <label>
                        <input type="text" name="secondOperand" value="">
                    </label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Calculate</button>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<h3> RESULTS: </h3>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNumber = $_REQUEST["firstOperand"];
    $secondNumber = $_REQUEST["secondOperand"];
    $operator = $_REQUEST["operator"];

    define("ADDITION", "+");
    define("SUBTRACTION", "-");
    define("MULTIPLICATION", "*");
    define("DIVISION", "/");

    function sum($number1, $number2)
    {
        return $number1 + $number2;
    }

    function sub($number1, $number2)
    {
        return $number1 - $number2;
    }

    function multi($number1, $number2)
    {
        return $number1 * $number2;
    }

    function div($number1, $number2)
    {
        return $number1 / $number2;
    }

    switch ($operator) {
        case ADDITION:
            $result = sum($firstNumber, $secondNumber);
            break;
        case SUBTRACTION:
            $result = sub($firstNumber, $secondNumber);
            break;
        case MULTIPLICATION:
            $result = multi($firstNumber, $secondNumber);
            break;
        case DIVISION:
            if ($secondNumber==0){
                echo "Can't not division 0";
                return;
            }
            $result = div($firstNumber, $secondNumber);
            break;
    }
    echo $firstNumber." ".$operator." ".$secondNumber." = ".$result;
}
?>

</body>
</html>
