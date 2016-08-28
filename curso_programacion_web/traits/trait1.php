<?php require '../inc/header.inc'; ?>
<?php
echo '<h1>Traits</h1>';
echo str_repeat('--',39)."<br>";
//-----------------------------
class Test {
    public function decirHola() {
        echo "Hola";
    }
}
?>
<?php require '../inc/footer.inc'; ?>