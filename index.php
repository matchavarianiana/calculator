<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="calculator">
<form class="form" action="./form.php" method="POST">
        <input type="text" name="num1" placeholder="Enter number 1" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter number 2" required>
        <button type="submit" name="submit">Calculate</button>
    </form>


</body>
</html>