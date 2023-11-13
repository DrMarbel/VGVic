<form action="View/ordered.php" method="post">
    <input type="number" name="qty" placeholder="Qty">
    <select name="select">
        <option value="null">Select a Game</option>
        <?php
            $games = getGames();

            foreach($games as $game){
                echo("<option value='" . $game->getID() . "'>" . $game->getTitle() . "</option>");
            }
        ?>
    </select>
    <input type="submit" value="Order">
</form>