
<?php require 'header.php' ?>

    <div class="wrapper">

        <?php
        $d1=strtotime("December 17, 2016");
        $d2=ceil(($d1-time())/60/60/24);
        ?>

        <p>Days 'til graduation:</p>
        <h1 class="countdown"><?php echo $d2; ?></h1>

    </div>

<?php require 'footer.php' ?>
