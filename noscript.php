<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

require_once('Application/View/header.php');
?>

    <div class="cover-container cover-index">
        <div class="inner cover">
            <br><br><br>
            <h1 class="cover-heading">Oops !</h1>
            <p class="lead">Javascript isn't activated.</p>
            <br><br><br>
        </div>
    </div>

    <div class="container">
    <h3>Here is how to activate it :</h3>
    <br><br>
    <p>(Some explainations here)<br><br>
        Enjoy !<br></p>

    <a href="accueil"><input type="button" class="btn btn-primary btn-group-sm" value="Retry"></a>

<?php
require_once('Application/View/footer.php');
?>