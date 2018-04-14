
<?php require 'header.php' ?>

    <main class="wrapper">

        <?php
        $d1=strtotime("December 17, 2016");
        $d2=ceil(($d1-time())/60/60/24);
        ?>

        <section>
            <p>Days til graduation:</p>
            <h1 class="countdown"><?php echo $d2; ?></h1>
        </section>

    </main>

<?php require 'footer.php' ?>
