<?php
session_start();

function calculate_term($principal, $interest, $withdrawal) {
    $term = 0;

    while ($principal > 0) {
        $term++;
        $interest_amount = $principal * $interest / 100;
        $principal += $interest_amount;
        $principal -= $withdrawal;

        if ($term > 100) {
            return "Je kunt het bedrag je hele leven opnemen.";
        }
    }

    return $term;
}

if (isset($_POST['submit'])) {
    $principal = $_POST['principal'];
    $interest = $_POST['interest'];
    $withdrawal = $_POST['withdrawal'];

    if (is_numeric($principal) && is_numeric($interest) && is_numeric($withdrawal)) {
        $term = calculate_term($principal, $interest, $withdrawal);
        echo "<p>De looptijd is: $term jaar.</p>";
    } else {
        echo "<p>Ongeldige invoer. Voer geldige getallen in.</p>";
    }
}

echo '<form method="post" action="">';
echo '<label for="principal">Hoofdsom:</label>';
echo '<input type="text" name="principal" id="principal">';
echo '<label for="interest">Rentepercentage:</label>';
echo '<input type="text" name="interest" id="interest">';
echo '<label for="withdrawal">Jaarlijkse opname:</label>';
echo '<input type="text" name="withdrawal" id="withdrawal">';
echo '<input type="submit" name="submit" value="Bereken de looptijd">';
echo '</form>';
?>