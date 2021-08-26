<?php $title = 'S&J | Tepih Servis & Dubinsko Pranje'; ?>
<?php include('components/header.php') ?>
<?php include('components/body-before.php') ?>

<script>
    $(document).ready(function(e) {
        $("#contactForm").on('submit', (function(e) {
            e.preventDefault();
            $("#mail-status").hide();
            $('#send-message').hide();
            $('#loader-icon').show();
            $.ajax({
                url: "contact.php",
                type: "POST",
                dataType: 'json',
                data: {
                    "name": $('input[name="name"]').val(),
                    "email": $('input[name="email"]').val(),
                    "phone": $('input[name="phone"]').val(),
                    "message": $('textarea[name="message"]').val(),
                    "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                },
                success: function(response) {
                    $("#mail-status").show();
                    $('#loader-icon').hide();
                    if (response.type == "error") {
                        $('#send-message').show();
                        $("#mail-status").attr("class", "error");
                    } else if (response.type == "message") {
                        $('#send-message').hide();
                        $("#mail-status").attr("class", "success");
                    }
                    $("#mail-status").html(response.text);
                },
                error: function() {}
            });
        }));
    });
</script>
<!-- Page Content -->

<!-- Hero -->
<section id="hero">
    <div class="hero-slider">
        <div class="hero-slider-item">
            <img src="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-1.jpg" alt="Tepih servis i dubinsko pranje | Vrhunsko pranje">
            <div class="hero-slider-item-inner">
                <div class="wrapper">
                    <div class="text-block">
                        <h3>Potrebno vam je vrhunsko dubinsko pranje tepiha?</h3>
                        <a class="default-btn" href="#contact">Kontaktirajte nas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item">
            <img src="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-2.jpg" alt="Tepih servis i dubinsko pranje | Nameštaj">
            <div class="hero-slider-item-inner">
                <div class="wrapper">
                    <div class="text-block">
                        <h3>Želite da vaš nameštaj ponovo miriše na novo?</h3>
                        <a class="default-btn" href="">Pozovite nas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider-item">
            <img src="assets/img/slider/tepih-servis-i-dubinsko-pranje-slider-3.jpg" alt="Tepih servis i dubinsko pranje | Cenovnik">
            <div class="hero-slider-item-inner">
                <div class="wrapper">
                    <div class="text-block">
                        <h3>Dosta vam je preskupih hemikalija za čišćenje koje ne daju prave rezultate?</h3>
                        <a class="default-btn" href="#prices">Pogledajte naš cenovnik</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About us -->
<section id="about-us">
    <div class="wrapper">
        <div class="about-us-text" data-aos="flip-left">
            <p class="display-4">Ko smo mi?</p>
            <h3>S&J je kompanija koja se dugi niz godina uspešno bavi dubinskim čišćenjem i pranjem mebliranog nameštaja, tepiha
                i itisona, staza, uz veoma povoljne cene, najmodernijim i najkvalitetnijim mašinama i hemikalijama na tržištu, koje veoma efikasno uklanjaju:</h3>
            <ul>
                <li>- Grinje</li>
                <li>- Tvrdokorne fleke</li>
                <li>- Neprijatne mirise</li>
                <li>- Mirise i dlake kućnih ljubimaca</li>
            </ul>
        </div>
    </div>
</section>
<section id="user-counter" class="text-white">
    <div class="wrapper">
        <div class="w-100 d-flex d-lg-none justify-content-center" id="counter-slider-control">
            <button id="counter-prev" class="btn text-white">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="counter-next" class="btn text-white">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        <div id="counter" class="users-counter-slider ">
            <div class="users-counter-slider-item" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                <div class="counter-icon-holder"><img src="assets/img/slider/korisnici.svg" alt="Tepih servis i dubinsko pranje | Korisnici"></div>
                <p class="counter-number"><span class="counter-value" data-count="500">0</span>+ </p>
                <p>zadovoljnih klijenata</p>
            </div>
            <div class="users-counter-slider-item" data-aos="fade-up">
                <div class="counter-icon-holder"><img src="assets/img/slider/tepih-servis.svg" alt="Tepih servis i dubinsko pranje | Tepisi"></div>
                <p class="counter-number"><span class="counter-value" data-count="5000">0</span>+ m<sup>2</sup> </p>
                <p>opranog tepiha</p>
            </div>
            <div class="users-counter-slider-item" data-aos="fade-left" data-aos-offset="400" data-aos-easing="ease-in-sine">
                <div class="counter-icon-holder"><img src="assets/img/slider/dubinsko-pranje.svg" alt="Tepih servis i dubinsko pranje | Nameštaj"></div>
                <p class="counter-number"><span class="counter-value" data-count="2500">0</span>+ </p>
                <p>opranih komada nameštaja</p>
            </div>
        </div>
    </div>
</section>
<!-- Transport -->
<section id="transport" class="position position-relative">
    <img src="assets/img/tepih-servis-i-dubinsko-pranje-transport.jpg" alt="Prevoz i dostava tepih i staza" class="transport-img">
    <div class="transport-content d-flex align-items-center">
        <div class="wrapper ">
            <div class="transport-content-inner" data-aos="fade-right">
                <h2>Transport i dolazak</h2>
                <p><i class="fas fa-check-circle text-success"></i> Dolazimo po tepihe kojima je potrebna nega i vraćamo ih u najboljem mogućem stanju na vašu kućnu adresu.</p>
                <p><i class="fas fa-check-circle text-success"></i> Ako se nalazite u Beogradu i imate više od 20 kvadratnih metara tepiha za pranje, transport vam nećemo naplatiti!</p>
                <p><i class="fas fa-check-circle text-success"></i> Dolazimo na vašu adresu u slučaju da vam je potrebno pranje nameštaja!</p>
                <p><i class="fas fa-check-circle text-success"></i> Za više od 4 komada nameštaja, dolazimo na vašu adresu besplatno!</p>
                <p><i class="fas fa-check-circle text-success"></i> Zakazivanje se vrši danas za sutra (Danas za naredni radni dan) ali i danas za danas u pojedinim slučajevima!</p>
            </div>
        </div>
    </div>
</section>


<!-- Prices -->
<section id="prices">
    <div class="wrapper">
        <div class="w-100">
            <div class="text-center">
                <h2 class="display-4">Cenovnik</h2>
                <p>Poštovani korisnici, pred vama je kompletan cenovnik naših usluga:</p>
            </div>
            <div class="prices-block">

                <h2 class="prices-title">Pranje tepiha</h2>
                <table>
                    <tr>
                        <th class="price-details-title">Usluga:</th>
                        <th class="money-price-title">Cena:</th>
                    </tr>
                    <tr>
                        <td class="price-details">Mašinsko dubinsko pranje tepiha sa ispiranjem</td>
                        <td class="money-price">od 160 RSD / m<sup>2</sup></td>
                    </tr>
                </table>
                <p class="small text-danger">*Za pranje tepiha u zbiru većih od 20 m<sup>2</sup>, dobijate besplatan prevoz! <span>(Važi samo za područje Beograda)</span></p>
                <h2 class="prices-title">Čišćenje i pranje nameštaja</h2>
                <table>
                    <tr>
                        <th class="price-details-title">Usluga:</th>
                        <th class="money-price-title">Cena:</th>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje stolice</td>
                        <td class="money-price">200 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje taburea</td>
                        <td class="money-price">300 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje i vakumiranje jastuka</td>
                        <td class="money-price">300 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje fotelje</td>
                        <td class="money-price">1000 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje dvoseda</td>
                        <td class="money-price">1500 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Čišćenje troseda</td>
                        <td class="money-price">2000 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Ugaone garniture</td>
                        <td class="money-price">700 RSD / po sedalnom delu</td>
                    </tr>
                </table>
                <h2 class="prices-title">Čišćenje dušeka</h2>
                <table>
                    <tr>
                        <th class="price-details-title">Usluga:</th>
                        <th class="money-price-title">Cena:</th>
                    </tr>
                    <tr>
                        <td class="price-details">Single</td>
                        <td class="money-price">1500 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Bračni</td>
                        <td class="money-price">2000 RSD / kom</td>
                    </tr>
                    <tr>
                        <td class="price-details">Dečji</td>
                        <td class="money-price">1000 RSD / kom</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<?php
require('constant.php');
?>
<section id="contact" class="bg-dark">
    <div class="wrapper">
        <div class="row">
            <div class="col-12 text-center pt-5 text-white">
                <h2 class="display-4">Kontakt</h2>
            </div>
            <div class="col-12 col-md-6 px-4 contact-left" data-aos="fade-right" data-aos-offset="200">
                <form id="contactForm" class="row py-5" action="" method="POST" novalidate="novalidate">
                    <div class="col-12 mb-3 col-md-6">
                        <input class="w-100 form-control required" id="user-name" name="name" type="text" placeholder="Vaše ime *" class="" aria-required="true" required>
                    </div>
                    <div class="col-12 mb-3 col-md-6">
                        <input class="w-100 form-control required phone" id="user-phone" name="phone" type="text" placeholder="Vaš broj telefona *" aria-required="true" required>
                    </div>
                    <div class="col-12 mb-3">
                        <input class="w-100 form-control mail" id="user-mail" type="email" name="email" placeholder="Vaša E-mail adresa">
                    </div>
                    <div class="col-12 mb-3">
                        <textarea class="w-100 form-control required " id="user-msg" name="message" id="message" placeholder="Vaša poruka *" aria-required="true" required></textarea>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="w-100" id="mail-status"></div>
                    </div>
                    <div class="col-12 d-flex justify-content-between button-and-recaptcha">
                        <div class="recaptcha-holder">
                            <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>
                        </div>
                        <div class="button-or-loader d-flex justify-content-center">
                            <button id="send-message" type="submit" class="btn btn-primary">Pošaljite</button>
                            <div id="loader-icon">
                                <img src="assets/img/loading.gif" alt="Tepih servis i dubinsko S&J | Loading"/>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-12 col-md-6 px-4 d-flex align-items-center position-relative contact-right" data-aos="fade-left" data-aos-offset="200">
                <ul id="contact-info" class="text-white">
                    <li>
                        <h3 class="h1 mb-3 font-weight-light">S&J Cleaning Company</h3>
                    </li>
                    <li>
                        <p class="h4"><i class="fas fa-phone"></i> 065 87 000 38</p>
                    </li>
                    <li>
                        <p class="h4"><i class="fas fa-phone"></i> 064 939 98 43</p>
                    </li>
                    <li>
                        <p class="h4"><i class="fas fa-map-marker-alt"></i> 1: Beograd, Radnička 3</p>
                    </li>
                    <li>
                        <p class="h4"><i class="fas fa-map-marker-alt"></i> 2: Barič, Obrenovac, Baričkih Boraca 10b</p>
                    </li>
                    <li><a href="mailto:office@tepihservisidubinsko.rs" class="h4 text-white font-weight-light contact-mail"><i class="fas fa-at"></i> <span>office@tepihservisidubinsko.rs</span></a></li>
                </ul>
                <span class="vertical-line"></span>
            </div>
        </div>
    </div>
</section>


<?php include('components/body-after.php') ?>
<?php include('components/footer.php') ?>