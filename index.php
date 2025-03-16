<?php
include 'assets/int/top.php';
?>


    <main id="accueil">
        <h1>Mon portfolio</h1>
      
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quaerat perspiciatis illo itaque laudantium. Cupiditate, mollitia aut. Corrupti est delectus hic inventore recusandae, cum quas ut totam non accusamus placeat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit repellendus ab sunt amet distinctio odio blanditiis quibusdam optio earum harum, magnam modi voluptates fuga minus facilis consequatur. Dolores, rem nobis!</p>
        </section>
        
            <article>
                <h2>Dernières compétences acquises</h2>
                <ul>
                    <li>Compétence 1</li>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dolorum dolores et aspernatur, repudiandae quo corporis delectus doloremque praesentium, dolorem nobis unde minus. Quaerat velit minus sunt fugiat? Nulla, veritatis!</p>
                    <li>Compétence 2</li>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, necessitatibus dignissimos? Odit cupiditate earum possimus nemo alias officia et repellendus illum commodi dignissimos maiores modi, enim in sunt voluptatibus? Quam.</p>
                    <li>Compétence 3</li>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat animi assumenda non inventore dolor doloribus! Eligendi, nostrum excepturi? Placeat odio harum minus? Omnis quis ullam dignissimos corporis reiciendis cum error!</p>
                </ul>
                <a href="lien">Voir plus</a>
            </article>
      
            <article>
                <h2 id="projets">Mes derniers projets</h2>
                <h3>Création d'un portfolio</h3>
                <p>Depuis octobre 2024, je me suis lancé dans la création de cette page web, qui aura pour but de résumer mes récents savoirs et savoir-faire à travers la présentation de mes expériences, ainsi que différents projets que j'entreprendrai au cours des années à venir.</p>
                <br>
                <p id="comp">Languages utilisés :</p>
                <img src="<?php ROOT; ?>assets/images/html5-logo-modern.png">
                <ul>
                    <li>Compétence 1</li>
                    <li>Compétence 2</li>
                </ul>
                <a href="lien">Voir plus</a>
            </article>
            <form action="<?php ROOT; ?>assets/pages/contact.php" method="post" enctype="multipart/form-data">
                <label for="email">On échange ?</label>
                <input type="email" id="email" name="email" placeholder="email" maxlength="100">
                <div class="br">
                <input type="submit">
                </div>
            </form>    
    </main>


<?php
include 'assets/int/bottom.php';
