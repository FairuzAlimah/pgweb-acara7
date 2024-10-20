<!DOCTYPE html>
<html> <body>

<?php
    $cats = array("Biti", "Ngoko", "Tata", "Krama", "Urap");
    $flowers = array("Matahari", "Tulip", "Mawar", "Edelweis", "Lavender");
    $foods = array("Donat", "Pizza", "Bilung", "Kebab", "Bakso");
    $negara = array("Indonesia", "Swiss", "Kenya", "Spanyol", "Australia");

    echo "<table border='1'>";
    // Menambahkan baris judul
    echo "<tr><th>Cats</th><th>Flowers</th><th>Foods</th><th>Negara</th></tr>";
    
    for ($i = 0; $i < 5; $i++) {
        echo "<tr><td>$cats[$i]</td> <td>$flowers[$i]</td> <td>$foods[$i]</td> <td>$negara[$i]</td></tr>";
    }
    echo "</table>";
    ?>
</body> </html>




