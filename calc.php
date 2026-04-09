<hr>
<h2>Калькулятор</h2>
<form action="calc_action.php" method="POST"> <!-- Лучше создать отдельный action для калькулятора -->
    <input type="number" name="num1" required>
    <button type="submit" name="op" value="+">+</button>
    <button type="submit" name="op" value="-">-</button>
    <button type="submit" name="op" value="*">*</button>
    <button type="submit" name="op" value="/">/</button>
    <input type="number" name="num2" required>
    <button type="submit">=</button>
</form>
