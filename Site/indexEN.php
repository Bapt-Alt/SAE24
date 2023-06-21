<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS for the page-->
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="icon" href="./Image/PetitLogo-removebg.png" type="image/gif">
    <title>BHGBY-en</title>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('js-message').style.display = 'none';
        });
        </script>

        <div id="js-message" style="display: block;">
            <center> <h1> Please enable JavaScript to allow the site to function properly. </h1> </center>
        </div>
    </script>
    <header class="scroll-shadow">
        <nav>
            <img class="logo" src="./Image/LogoVert.png" alt="Logo">
            <ul>
                <li><a class="swipe" href="#Accueil">Home</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Cabinet">Office</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Equipe">Our team</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#Trouver">How to find us</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <li><a class="swipe" href="#RDV">Appointments</a></li>
                <li class="responsive bull"><p>&bull;</p></li>
                <?php 
                    session_start();
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] === 'on') {
                        echo'<a class="connexion_btn responsive" href="./connexion.php">Connecté</a>
                            </ul>
                            <a class="connexion_btn" href="./connexion.php">Connected</a>';
                    }
                    else {
                        echo'<a class="connexion_btn responsive" href="./connexion.php">Connexion</a>
                            </ul>
                            <a class="connexion_btn" href="./connexion.php">Connection</a>';
                    }
                ?>
            <input type="checkbox" id="menu-toggle" class="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
        </nav> 
    </header>
    <section id="Langues">
        <ul>
            <li>
                <label>
                    <input type="radio" name="langue" value="fr" onclick="toggleCheckbox(this)">
                    <img src="./Image/icons8france-removebg.png" alt="drapeau francais">
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="langue" value="en" onclick="toggleCheckbox(this)" checked>
                    <img src="./Image/icons8usa-removebg.png" alt="drapeau usa" class="selected">
                </label>
            </li>
        </ul>
    </section>
    <section id="Accueil">
        <ul>
            <li>
                <h1><span>Best</span> treatments, <br>
                    <span>Best</span> doctors</h1>
                <h2>Your health and well-being are our priority</h2>
            </li>
            <li><img src="./Image/accueil-removebg.png" alt="Un docteur qui soigne un patient"></li>
        </ul>
    </section>
    <section id="Cabinet">
        <ul>
            <li><img src="./Image/cabinet-removebg.png" alt="Un cabinet"></li>
            <li>
                <h1>Our <span>office</span>,</h1>
                <p><span>&bull;</span> Our medical experts do everything they can <br> to provide you with the best care in the shortest possible time. </p>
                <p><span>&bull;</span> We're equipped with state-of-the-art technology <br> enabling us to practise prescient and effective medicine. </p>
            </li>
        </ul>
    </section>
    <section id="Slogan">
        <h1>"Benevolus Hominibus, Genium Bonitate Yuvat"</h1>
        <h2>"Benevolence towards men nourishes the spirit through kindness"</h2>
    </section>
    <section id="Equipe">
        <ul class="column">
            <li>
                <ul class="line">
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/secretaire.jpeg" alt="@MadelineCline"></li>
                            <li><h1>Madelyn Cline</h1></li>
                            <li><p>Secretary</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/H-generaliste.png" alt=""></li>
                            <li><h1>Hugo Calmels</h1></li>
                            <li><p>Generalist</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/G-dentiste.png" alt=""></li>
                            <li><h1>Gabin Lopez</h1></li>
                            <li><p>Dentist</p></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <ul class="line">
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Y-kine.png" alt=""></li>
                            <li><h1>Yassir Boulouiha</h1></li>
                            <li><p>Kinesitherapist</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/B-kine.png" alt=""></li>
                            <li><h1>Alteirac Baptiste</h1></li>
                            <li><p>Kinesitherapist</p></li>
                        </ul>
                    </li>
                    <li>
                        <ul class="column portrait">
                            <li><img src="./Image/Benj-kine.png" alt=""></li>
                            <li><h1>Benjamin Sarrat</h1></li>
                            <li><p>Kinesitherapist</p></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <section id="Trouver">
        <ul>
            <li>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.94511813648!2d1.3720083763416693!3d43.649310171102194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea567f203159f%3A0xeff70715d0352e33!2sIUT%20Blagnac!5e0!3m2!1sfr!2sfr!4v1686929738952!5m2!1sfr!2sfr" width="600" height="400" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </li>
            <li>
                <h1> <span>Where</span> can you find us?</h1>
                <p>Our office is located in <a href="https://goo.gl/maps/h3ckPyDo4uXa4Z9K9" target="_blank">1 place George Brassens</a>.</p>
                <p>It is accessible by car via our parking, <br>
                but also via public transport with the <br><a href="https://www.tisseo.fr/home" target="_blank">T1</a> et <a href="https://www.tisseo.fr/home" target="_blank">70</a>.</p>
            </li>
        </ul>
    </section>
    <section id="Avis">
        <ul class="column" data-id="1">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>I really enjoyed my visit to this medical practice. The staff were extremely welcoming and professional. The doctor took the time to listen carefully and answer all my questions. I was impressed by their empathetic approach and medical expertise. I feel confident and in good hands here. I highly recommend this practice to anyone looking for quality medical care.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/client2.png" alt="Photo avis 1"></li>
                            <li><p>Carla Rosón Caleruega</p></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#10025;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&#10687; &bull; &bull;</p>
            </li>
        </ul>
        <ul class="column" data-id="2">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>I am very satisfied with my experience at this medical practice. I was able to get an appointment quickly and the check-in process was efficient. The staff was friendly and knowledgeable. The doctor was very attentive to my symptoms and offered a clear and detailed treatment plan. I felt listened to and respected throughout the consultation. I am grateful to have found such a professional and caring medical practice.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/client3.png" alt="Photo avis 1"></li>
                            <li><p>Yassir Boulouiha</p></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#11089;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&bull; &#10687; &bull;</p>
            </li>
        </ul>
        <ul class="column" data-id="3">
            <li>
                <ul class="column cadre">
                    <li>
                        <p class="texte"><span>&quot;</span>I was pleasantly surprised by the quality of care I received at this medical practice. The team was friendly and well organized, which made my visit smooth and pleasant. The doctor demonstrated great expertise and took the time to explain my diagnosis and available treatment options in detail. I was impressed by their holistic approach to health, seeking to understand the root causes of my symptoms rather than simply treating the symptoms themselves. I am extremely satisfied with my visit and highly recommend this medical practice.<span>&quot;</span></p>
                    </li>
                    <li class="separateur">--------------------------------</li>
                    <li>
                        <ul class="line">
                            <li><img src="./Image/client1.png" alt="Photo avis 1"></li>
                            <li><p>Ilias Alami chentoufi</p></li>
                            <li><p class="etoile"><span>&#11089; &#11089; &#11089; &#11089; &#11089;</span></p></li>
                        </ul>
                    </li>
                 </ul>
            </li>   
            <li>
                <p>&bull; &bull; &#10687;</p>
            </li>
        </ul>
    </section>
    <section id="RDV">
        <ul>
            <li>
                <h2>Appointment Form</h2>
            </li>
            <li>
                <form action="mail.php" method="post">
                    <label for="nom">Full name :</label>
                    <input type="text" id="nom" name="nom" required><br><br>

                    <label for="email">E-mail address :</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="telephone">Phone number :</label>
                    <input type="tel" id="telephone" name="telephone" required><br><br>

                    <label for="date">Preferred appointment date :</label>
                    <input type="date" id="date" name="date" required><br><br>

                    <label for="heure">Preferred appointment time :</label>
                    <input type="time" id="heure" name="heure" required><br><br>

                    <label for="medecin">Choose your doctor :</label>
                    <select id="medecin" name="medecin" required>
                        <option value="Hugo Calmels (Généraliste)">Hugo Calmels (Généraliste)</option>
                        <option value="Gabin Lopez (Dentiste)">Gabin Lopez (Dentiste)</option>
                        <option value="Baptiste Alteirac (Kiné)">Baptiste Alteirac (Kinésithérapeute)</option>
                        <option value="Benjamin Sarrat (Kiné)">Benjamin Sarrat (Kinésithérapeute)</option>
                        <option value="Yassir Boulouiha (Kiné)">Yassir Boulouiha (Kinésithérapeute)</option>
                    </select><br><br>

                    <label for="informations">Informations supplémentaires :</label><br>
                    <textarea id="informations" name="informations" rows="4" cols="50"></textarea><br><br>

                    <input type="submit" value="Envoyer">
                </form>
            </li>
        </ul>
    </section>
    <footer>
        <ul class="line">
            <li>
                <ul class="column">
                    <li><img class="logo" src="./Image/LogoNoir-removebg.png" alt="Logo"></li>
                    <li><h2>"Benevolus Hominibus, Genium Bonitate Yuvat"</h2></li>
                </ul>
            </li>
            <li>
                <ul class="column">
                    <li><h1>NavBar</h1></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Accueil">Accueil</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Cabinet">Cabinet</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Equipe">Notre équipe</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="">Prise de RDV</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a class="swipe" href="#Trouver">Où nous trouver</a></li>
                </ul>
            </li>
            <li>
                <ul class="column">
                    <li><a href="./mentions-legales.php"><h1>&copy; All rights reserved</h1></a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/baptiste-alteirac" target="_blank">Alteirac</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/yassir-boulouiha-gnaoui-9b226027b/" target="_blank">Boulouiha</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/hugo-calmels-50a51727b" target="_blank">Calmels</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/gabin-lopez-168bb525b" target="_blank">Lopez</a></li>
                    <li class="bull"><p>&bull;</p></li>
                    <li><a href="https://www.linkedin.com/in/benjamin-sarrat-990888269" target="_blank">Sarrat</a></li>
                </ul>
            </li>
            <li>
                <ul class="column">
                    <li><h1>Validators</h1></li>
                    <li><a class="validateurs" href=""><img src="./Image/HTML5.png" alt="Validateurs HTML"></a></li>
                    <li><a class="validateurs" href=""><img src="./Image/CSS3.png" alt="Validateurs CSS"></a></li>
                </ul>
            </li>
        </ul>
    </footer>
    <script src="./script.js"></script>
</body>
</html>