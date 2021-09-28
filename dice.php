

<head>

</head>
<body>
    <form method="post">
        <p>
        <input name="diceCount" placeholder="how many dices?" require>
        </p>
        <select name="diceSides">
            <option name="d1" value="1">d1</option>
            <option name="d2" value="2">d2</option>
            <option name="d3" value="3">d3</option>
            <option name="d4" value="4">d4</option>
            <option name="d5" value="5">d5</option>
            <option name="d6" value="6">d6</option>
        </select>
        <button type="submit">roll</button>
<?php
//-----------------------------------------

rollDice();

//-----------------------------------------
?>
    </form>
</body>
