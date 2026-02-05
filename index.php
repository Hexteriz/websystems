<!DOCTYPE html>
<html lang="en">
<!--- Removed HTML Nav and changed to PHP --->
<?php
    include "inc/head.inc.php";
?>
<body> 
    <!--- Removed HTML Nav and changed to PHP --->
    <?php
        include "inc/nav.inc.php";
    ?>
    <!--- Removed HTML header and changed to PHP --->
    <?php
        include "inc/header.inc.php";
    ?>
    <main class="container">
        <section id="dogs">
            <h2>All About Dogs!</h2>
            <div class="row">
                <article class="col-sm">
                    <h3>Poodles</h3>
                    <figure>
                            <img src="images/poodle_small.jpg" alt="Poodle"
                                 title="View larger image..." class="img-thumbnail">
                        <figcaption>Standard Poodle</figcaption>
                    </figure>
                    <p>
                        Poodles are a group of formal dog breeds, the Standard 
                        Poodle, Miniature Poodle and Toy Poodle...
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Chihuahua</h3>
                    <figure>
                            <img src="images/chihuahua_small.jpg" alt="Chihuahua"
                                 title="View larger image..." class="img-thumbnail">
                        <figcaption>Chihuahua</figcaption>
                    </figure>
                    <p>
                        The Chihuahua is the smallest breed of dog, and is named 
                        after the Mexican state of Chihuahua...
                    </p>
                </article>
            </div>
        </section>

        <section id="cats">
            <h2>All about Cats!</h2>
            <div class="row">
                <article class="col-sm">
                    <h3>Tabby</h3>
                    <figure>
                            <img src="images/tabby_small.jpg" alt="Tabby"
                                 title="View larger image..." class="img-thumbnail">
                        <figcaption>Tabby Cat</figcaption>
                    </figure>
                    <p>
                        A tabby cat, or simply tabby, describes any domestic 
                        cat (Felis catus) with a coat pattern distinguished...
                    </p>
                </article>
                <article class="col-sm">
                    <h3>Calico</h3>
                    <figure>
                            <img src="images/calico_small.jpg" alt="Calico"
                                 title="View larger image..." class="img-thumbnail">
                        <figcaption>Calico Cat</figcaption>
                    </figure>
                    <p>
                        A calico cat is a domestic cat of any breed with a 
                        tri-color coat of black, white, and orange...
                    </p>
                </article>
            </div>
        </section>
    </main>
    <!--- Removed HTML footer and changed to PHP --->
    <?php
        include "inc/footer.inc.php";
    ?>
</body> 
</html>
