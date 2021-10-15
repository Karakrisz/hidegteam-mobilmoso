    <!-- START BANNER -->
    <section class="p-0" id="home-banner">
        <div class="slider-area" id="slider-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h1 class="main-font font-weight-bold text-white">HidegTeam <span class="d-block text-blue">
                                Mobilmosó </span></h1>
                        <?php foreach ($getBekoszonoSzoveg as $bekoszonoSzoveg) : ?>
                            <p class="alt-font text-white my-3"><?php esc($bekoszonoSzoveg["bekoszono_szoveg"]) ?></p>
                        <?php endforeach; ?>
                        <?php foreach ($getTelefonszam as $telefonszam) : ?>
                            <a href="tel:+<?php esc($telefonszam["telefonszam"]) ?>" class="btn btn-medium btn-rounded btn-red text-capitalize mt-3 mb-5 mb-md-0">Hívás most</a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="banner-image" data-depth="0.07">
                            <img src="karaKrisz/img/slider-img.jpg" alt="Hidegteam Mobilmoso">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Circle-One -->
            <div class="circle-one">
                <span data-tootik="Tisztít" data-tootik-conf="top invert square shadow">
                    <a href="javascript:void(0);">
                        <span class="animated-circle position-relative"></span>
                    </a>
                </span>
            </div>
            <!-- Circle-Two -->
            <div class="circle-two">
                <span data-tootik="Ápol" data-tootik-conf="bottom invert square shadow">
                    <a href="javascript:void(0);">
                        <span class="animated-circle position-relative"></span>
                    </a>
                </span>
            </div>
            <!-- Circle-Three -->
            <div class="circle-three">
                <span data-tootik="Konzervál" data-tootik-conf="top invert square shadow">
                    <a href="javascript:void(0);">
                        <span class="animated-circle position-relative"></span>
                    </a>
                </span>
            </div>
        </div>
    </section>
    <!-- END BANNER -->

    <!-- START ABOUT -->
    <section class="about-bg" id="about">
        <div class="container">
            <div class="row section-heading">
                <div class="col-12 main-heading text-center">
                    <h2 class="main-font">Hogyan működik?
                        <span class="d-block text-blue">A víz nélküli autómosás folyamata</span>
                    </h2>
                    <p class="alt-font mt-4">Tisztítás - Ápolás - Konzerválás egy lépésben!
                        <span class="d-block">Fontos, hogy speciálisan erre a célra fejlesztett tisztítókendővel lehet eltávolítani a szennyeződést. A magas műszál tartalmú kendő anélkül tisztítja meg az autót, hogy a karosszériát megsértené.</span>
                    </p>
                </div>
            </div>
            <!--Row-->
            <div class="row row-padding">
                <!--News Item-->
                <div class="col-12 col-md-4">
                    <div class="news-item">
                        <div class="image-holder-gallery">
                            <img alt="image" src="karaKrisz/img/about-us/tisztitas.jpg">
                        </div>
                        <div class="news-text-box">
                            <a href="#">
                                <h4 class="news-title main-font">Tisztítás</h4>
                            </a>
                            <p class="para alt-font">A speciális készítmény a felületre való permetezést követően azonnal elkezdi kifejteni hatását, a nano részecskéinek köszönhetően a szennyeződést “bekebelezve” egy biztonsági réteget képez a tisztítandó felület, és az eltávolítandó koszréteg között. A nagyjából 1000x kisebb nanorészecskéknek köszönhetően a szennyeződés eltávolítása biztonságos. </p>
                            <!-- <a href="cars-automobile/standalone.html" class="text-capitalize btn-red">Bővebben</a> -->
                        </div>
                    </div>
                </div>
                <!--News Item-->
                <div class="col-12 col-md-4">
                    <div class="news-item">
                        <div class="image-holder-gallery">
                            <img alt="image" src="karaKrisz/img/about-us/apolas.jpg">
                        </div>
                        <div class="news-text-box">
                            <a href="#">
                                <h4 class="news-title main-font">Ápolás</h4>
                            </a>
                            <p class="para alt-font">A mosószer alapanyaga jó minőségű carnauba viaszt tartalmaz, mely kitölti a fényezésen lévő, szemmel alig, vagy egyáltalán nem látható mikro karcokat. Ennek és a jó minőségű, magas szálsűrűségű speciális törlőkendőnek köszönhetően a szennyeződés könnyen eltávolítható a felületről karcolás nélkül.</p>
                            <!-- <a href="cars-automobile/standalone.html" class="text-capitalize btn-red">Bővebben</a> -->
                        </div>
                    </div>
                </div>
                <!--News Item-->
                <div class="col-12 col-md-4">
                    <div class="news-item">
                        <div class="image-holder-gallery">
                            <img alt="image" src="karaKrisz/img/about-us/konverzal.jpg">
                        </div>
                        <div class="news-text-box">
                            <a href="#">
                                <h4 class="news-title main-font">Konzerválás</h4>
                            </a>
                            <p class="para alt-font">A carnauba viasz 48 órán keresztül fejti ki aktív szennyeződés, por, és víztaszító hatását. A “mosás” után az autó felületére kerülő anyagok kevésbé tapadnak meg, így az hosszabb ideig marad tiszta, valamint tartós, magas fényű csillogást kölcsönöz a felületnek</p>
                            <!-- <a href="cars-automobile/standalone.html" class="text-capitalize btn-red">Bővebben</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

    <!-- START PRODUCTS -->
    <section class="section slide2 all-products" id="all-products">
        <div class="container position-relative">
            <div class="row main-heading">
                <div class="col-12 main-heading text-center">
                    <h2 class="main-font">HidegTeam
                        <span class="d-block text-blue">Referenciák</span>
                    </h2>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div id="slider1" class="beer-slider" data-beer-label="after" data-start="25">
                        <img class="slider1__img" src="karaKrisz/img/referencia/referencia.jpg" alt="Dogs - before, unprocessed image">
                        <div class="beer-reveal" data-beer-label="before">
                            <img class="slider1__img" src="karaKrisz/img/referencia/referencia-2.jpg" alt="Dogs - after, processed photo">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div id="slider2" class="beer-slider beer-slider-wlabels" data-beer-label="after" data-start="75">
                        <img class="slider1__img" src="karaKrisz/img/referencia/referencia-3.jpg" alt="Original baltic seashore">
                        <div class="beer-reveal" data-beer-label="before">
                            <img class="slider1__img" src="karaKrisz/img/referencia/referencia-4.jpg" alt="Baltic seashore - processed image Warmsphere preset">
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div id="slider3" class="beer-slider beer-slider-wlabels" data-start="75">
                        <img class="slider1__img" src="karaKrisz/img/referencia/referencia-5.jpg" alt="Original baltic seashore">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div id="slider3" class="beer-slider beer-slider-wlabels" data-start="75">
                        <img class="slider1__img" src="karaKrisz/img/referencia/referencia-6.jpg" alt="Original baltic seashore">
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                    <div id="slider3" class="beer-slider beer-slider-wlabels" data-start="75">
                        <img class="slider1__img" src="karaKrisz/img/referencia/referencia-7.jpg" alt="Original baltic seashore">
                    </div>
                </div>

            </div>

            <h6 class="all-products__h6">
                <a target="_blank" href="https://www.facebook.com/profile.php?id=100023989812801" class="all-products__h6__link text-capitalize btn-red">További referenciaképek</a>
            </h6>

        </div>
    </section>
    <!-- END PRODUCTS -->

    <!-- START COUNTER -->
    <section class="counter-bg" id="reviews">
        <div class="container counter-container position-relative">
            <h2 class="main-font counter-container__h2">Szolgáltatásaink
                <span class="d-block text-blue">és áraink</span>
            </h2>
            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">Kis autó (3,8m)</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">Kis autó (3,8m)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getKisAuto as $kisAuto) : ?>
                        <tr>
                            <td data-label="Alap"><?php esc($kisAuto["alap"]) ?></td>
                            <td data-label="Prémium / Kozmikus"><?php esc($kisAuto["premium_kozmikus"]) ?></td>
                            <td data-label="Professzionális / Galaktikus"><?php esc($kisAuto["professzionalis_galaktikus"]) ?></td>
                            <td data-label="-"><?php esc($kisAuto["megjegyzes"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">Városi autó (4.6m)</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">Városi autó (4.6m)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getVarosiAuto as $varosiAuto) : ?>
                        <tr>
                            <td data-label="Alap"><?php esc($varosiAuto["alap"]) ?></td>
                            <td data-label="Prémium / Kozmikus"><?php esc($varosiAuto["premium_kozmikus"]) ?></td>
                            <td data-label="Professzionális / Galaktikus"><?php esc($varosiAuto["professzionalis_galaktikus"]) ?></td>
                            <td data-label="-"><?php esc($varosiAuto["megjegyzes"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">Családi autó (4.6m)</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">Családi autó (4.6m)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getCsaladiAuto as $csaladiAuto) : ?>
                        <tr>
                            <td data-label="Alap"><?php esc($csaladiAuto["alap"]) ?></td>
                            <td data-label="Prémium / Kozmikus"><?php esc($csaladiAuto["premium_kozmikus"]) ?></td>
                            <td data-label="Professzionális / Galaktikus"><?php esc($csaladiAuto["professzionalis_galaktikus"]) ?></td>
                            <td data-label="-"><?php esc($csaladiAuto["megjegyzes"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">SUV, terepjár</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">SUV, terepjáró</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getSuvTerepjaro as $suvTerepjaro) : ?>
                        <tr>
                            <td data-label="Alap"><?php esc($suvTerepjaro["alap"]) ?></td>
                            <td data-label="Prémium / Kozmikus"><?php esc($suvTerepjaro["premium_kozmikus"]) ?></td>
                            <td data-label="Professzionális / Galaktikus"><?php esc($suvTerepjaro["professzionalis_galaktikus"]) ?></td>
                            <td data-label="-"><?php esc($suvTerepjaro["megjegyzes"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">Kishaszonjármű</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">Kishaszonjármű</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getKishaszonjarmu as $kishaszonjarmu) : ?>
                        <tr>
                            <td data-label="Alap"><?php esc($kishaszonjarmu["alap"]) ?></td>
                            <td data-label="Prémium / Kozmikus"><?php esc($kishaszonjarmu["premium_kozmikus"]) ?></td>
                            <td data-label="Professzionális / Galaktikus"><?php esc($kishaszonjarmu["professzionalis_galaktikus"]) ?></td>
                            <td data-label="-"><?php esc($kishaszonjarmu["megjegyzes"]) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">Külső - víz nélküli NANO - tisztítás</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">Külső - víz nélküli NANO - tisztítás</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Alap">Külső tisztítás</td>
                        <td data-label="Prémium / Kozmikus">Külső tisztítás</td>
                        <td data-label="Professzionális / Galaktikus">Külső tisztítás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">Ablak tisztítás</td>
                        <td data-label="Prémium / Kozmikus">Ablak tisztítás</td>
                        <td data-label="Professzionális / Galaktikus">Ablak tisztítás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">Nano wax</td>
                        <td data-label="Prémium / Kozmikus">Nano wax</td>
                        <td data-label="Professzionális / Galaktikus">Prémium wax</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">Felni és gumi tisztítás</td>
                        <td data-label="Prémium / Kozmikus">Felni és gumi tisztítás</td>
                        <td data-label="Professzionális / Galaktikus">Felni és gumi tisztítás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">-</td>
                        <td data-label="Prémium / Kozmikus">Felni és gumi ápolás</td>
                        <td data-label="Professzionális / Galaktikus">Felni és gumi ápolás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">-</td>
                        <td data-label="Prémium / Kozmikus">-</td>
                        <td data-label="Professzionális / Galaktikus">Külső műanyag ápolás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">-</td>
                        <td data-label="Prémium / Kozmikus">-</td>
                        <td data-label="Professzionális / Galaktikus">Bogároldás</td>
                    </tr>
                </tbody>
            </table>

            <table>
                <thead>
                    <h3 class="counter-container__table__thead__h3 strong-font">Belső tisztítás</h3>
                    <tr>
                        <th scope="col">Alap</th>
                        <th scope="col">Prémium / Kozmikus</th>
                        <th scope="col">Professzionális / Galaktikus</th>
                        <th class="strong-font" scope="col">Belső tisztítás</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="Alap">Porszívózás</td>
                        <td data-label="Prémium / Kozmikus">Porszívózás</td>
                        <td data-label="Professzionális / Galaktikus">Porszívózás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">Portalanítás</td>
                        <td data-label="Prémium / Kozmikus">Portalanítás</td>
                        <td data-label="Professzionális / Galaktikus">Portalanítás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">Ablakok tisztítása</td>
                        <td data-label="Prémium / Kozmikus">Ablakok tisztítása</td>
                        <td data-label="Professzionális / Galaktikus">Ablakok tisztítása</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">-</td>
                        <td data-label="Prémium / Kozmikus">Belső műanyag ápolás</td>
                        <td data-label="Professzionális / Galaktikus">Belső műanyag ápolás</td>
                    </tr>
                    <tr>
                        <td scope="row" data-label="Alap">-</td>
                        <td data-label="Prémium / Kozmikus">-</td>
                        <td data-label="Professzionális / Galaktikus">Szőnyegtisztítás</td>
                    </tr>
                </tbody>
            </table>

            <div class="row align-items-center">
                <div class="counter-content counter-content--formating">
                    <h3 class="my-3">Kiszállítási díj Pécsen és Kaposváron kívülre: 50 Ft/Km</h3>
                    <p class="alt-font">Extra szennyeződés esetén +10% kerül felszámításra. Az árak bruttó árak és forintban értendők. A kiszállás díját Pécs, valamint Kaposvár területén belül tartalmazzák.</p>
                </div>
                <div class="col-12 col-md-12">
                    <span class="strong-font strong-font--formating">Külső extrák</span>
                    <div class="row mt-5 mt-md-0">
                        <div class="col-12 col-md-6">
                            <div class="parallax-box">
                                <!-- <h2 class="count text-red">599</h2> -->
                                <h4 class="parallax-box__h4">Bogároldás</h4>
                                <h5 class="parallax-box__h5">1.990 Ft-tól</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="parallax-box">
                                <h4 class="parallax-box__h4">Kátrány, viasz, vízkő eltávolítás</h4>
                                <h5 class="parallax-box__h5">1.790 Ft-tól</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <span class="strong-font strong-font--formating">Belső Extrák</span>
                    <div class="row mt-5 mt-md-0">
                        <div class="col-12 col-md-6">
                            <div class="parallax-box">
                                <?php foreach ($getBelsoExtrak as $belsoExtrak) : ?>
                                    <h4 class="parallax-box__h4"><?php esc($belsoExtrak["belso_extrak_megnevezes"]) ?></h4>
                                    <h5 class="parallax-box__h5"><?php esc($belsoExtrak["belso_extrak_ar"]) ?></h5>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="parallax-box">
                            <h4 class="parallax-box__h4 strong-font">Kedvezmények</h4>
                            <h5 class="parallax-box__h5">Flotta kedvezmény (5, vagy e feletti számú autó esetén)</h5>
                            <!-- <h5 class="parallax-box__h5">5, vagy több jármű egyidejű takarítása XXX % kedvezmény</h5> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="container">
                <div class="col-12 col-md-12">
                    <!-- <div class="counter-content">
                        <h3 class="my-3">Online foglalás</h3>
                        <p class="alt-font">Ide kellene valami gomb, ami a beágyazott (gmail-es naptárunkkal összekötött pl. youcanbookme) naptárra irányít.</p>
                    </div> -->

                    <div class="counter-content">
                        <h3 class="counter-content__h3" class="my-3">Gyakran Ismételt Kérdések</h3>
                        <h5 class="counter-content__h5">Bankkártyával tudok fizetni?</h5>
                        <p class="alt-font">Jelenleg a kártyás fizetés nem megoldható. A helyszínen készpénzzel lehet fizetni.</p>
                        <!-- <h5 class="counter-content__h5">Hova tudok rendelni?</h5>
                        <p class="alt-font">Mosóink csak a térképen jelölt xxx Zónába tudnak jelenleg kimenni. Ezt a területet folyamatosan bővítjük: (Kattints a képre.)</p>  -->
                        <h5 class="counter-content__h5">Mennyi időt vesz igénybe a mosás?</h5>
                        <p class="alt-font">Ez attól függ milyen szolgáltatást, mekkora autóra kérsz. Telefonos megrendeléskor a kollégánk kiszámolja neked. De mindenképpen másfél órán belül elkészülünk, ha SOS rendelést adsz le. Ha pedig előrendelnél, akkor biztosan nem kell várakoznod.</p>
                        <h5 class="counter-content__h5">Nem karcol?</h5>
                        <p class="alt-font">Nem. A nanotechnológiának, eszközeinknek és munkatársunk elkötelezettségének köszönhetően semmilyen kárt nem ejtünk a fényezésen.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER -->

    <!-- START TESTIMONIALS -->
    <!-- <section class="section slide4 reviews">
        <div class="container expand-container">
            <div class="row main-heading">
                <div class="col-12 main-heading text-center">
                    <h2 class="main-font">Best in Business<span class="d-block text-blue">Happy Customers</span></h2>
                </div>
            </div>

            <div id="testimonial-carousal" class="owl-carousel owl-theme testimonial-owl text-center row-padding">
 
                <div class="item">
                    <div class="icon-quotes mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="description">
                        <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            mauris arcu.</p>
                    </div>
                    <div class="testimonial-img mt-4">
                        <img src="cars-automobile/images/testimonial-1.png" alt="student img">
                    </div>
                    <div class="testimonial-tittle mt-3 mb-3">
                        <h3 class="mb-0 text-red alt-font">David Miller</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="icon-quotes mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="description">
                        <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="testimonial-img mt-4">
                        <img src="cars-automobile/images/testimonial-2.png" alt="student img">
                    </div>
                    <div class="testimonial-tittle mt-3 mb-3">
                        <h3 class="mb-0 text-blue alt-font">Alex Jackson</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="icon-quotes mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="description">
                        <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            mauris arcu.</p>
                    </div>
                    <div class="testimonial-img mt-4">
                        <img src="cars-automobile/images/testimonial-3.png" alt="student img">
                    </div>
                    <div class="testimonial-tittle mt-3 mb-3">
                        <h3 class="mb-0 text-red alt-font">Mark Anthony</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="icon-quotes mb-4">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="description">
                        <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="testimonial-img mt-4">
                        <img src="cars-automobile/images/testimonial-4.png" alt="student img">
                    </div>
                    <div class="testimonial-tittle mt-3 mb-3">
                        <h3 class="mb-0 text-blue alt-font">Kelly Smith</h3>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END TESTIMONIALS -->

    <!-- START CONTACT -->
    <section class="section slide5 contact-sec" id="contact">
        <div class="container expand-container">
            <div class="row row">
                <div class="col-12 col-lg-7 main-heading">
                    <h2 class="main-font">HidegTeam<span class="d-block text-blue contact-sec__h2__span">Kapcsolat</span></h2>
                    <!-- <form class="row contact-form row-padding" id="contact-form-data">
                        <div class="col-12 col-lg-8" id="result"></div>
                        <div class="col-12 col-lg-8">
                            <input type="text" name="userName" placeholder="Name" class="form-control">
                            <input type="text" name="userPhone" placeholder="Contact No" class="form-control">
                            <input type="email" name="userEmail" placeholder="Email" class="form-control">
                            <textarea class="form-control" name="userMessage" rows="6" placeholder="Type Your Message Here"></textarea>
                            <a href="javascript:void(0);" class="btn btn-medium btn-rounded btn-red rounded-pill w-100 contact_btn main-font">Submit
                                Information</a>
                        </div>
                    </form> -->
                </div>
                <div class="col-12 col-lg-12 text-center text-lg-left d-flex align-items-center">
                    <div class="contact-details wow fadeInRight">
                        <!-- <h4 class="heading main-font">Store Location</h4>
                        <p class="text alt-font">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered .</p> -->
                        <ul>
                            <?php foreach ($getKapcsolat as $kapcsolat) : ?>
                                <li><i aria-hidden="true" class="fas fa-map-marker-alt"></i> <?php esc($kapcsolat["address"]) ?> </li>
                                <li><i aria-hidden="true" class="fas fa-phone-volume"></i>
                                    <span> <?php esc($kapcsolat["telefon"]) ?> </span>
                                </li>
                                <li><i aria-hidden="true" class="fas fa-paper-plane"></i><?php esc($kapcsolat["email"]) ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="slider-social side-icons">
                            <ul class="list-unstyled d-flex">
                                <a class="social-icon" target="_blank" href="https://www.facebook.com/profile.php?id=100023989812801"><i class="fab fa-facebook-f"></i></a>
                                <a class="social-icon" href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->


    <div id="data-modal">
        <!-- Modal Window 1 Start -->
        <div class="modal-window" id="morphic-window1">
            <div class="modal-body">
                <header>
                    <span class="close-modal"><i></i><i></i></span>
                </header>
                <div class="morphic-body">
                    <div class="container">
                        <div class="row main-morphic-body align-items-center">
                            <div class="morphic-img col-12 col-md-6">
                                <!-- Main Image -->
                                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-1.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-2.png" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-3.png" alt="Third slide">
                                        </div>
                                    </div>
                                    <!--/.Slides-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-thumb" data-slide-to="0" class="active">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal2-sub1.png" alt="First slide">
                                        </li>
                                        <li data-target="#carousel-thumb" data-slide-to="1">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal2-sub2.png" alt="Second slide">
                                        </li>
                                        <li data-target="#carousel-thumb" data-slide-to="2">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal2-sub3.png" alt="Third slide">
                                        </li>
                                    </ol>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="morphic-title col-12 col-md-6">
                                <h5>Article PZ-1000-23</h5>
                                <h3>Imported Car Tire</h3>
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has
                                    been the industry’s standard dummy. </p>

                                <div class="row pb-md-4">
                                    <!-- Sizes -->
                                    <div class="col-3 col-md-2 d-flex align-items-center align-items-lg-end">
                                        <div class="color-selection">
                                            <h6 class="text-center text-md-left text-blue alt-font">Size:</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10">
                                        <div class="color-picker text-center text-md-left">
                                            <div class="size__item">
                                                <a class="active">155/75</a>
                                                <a>165/75</a>
                                                <a>185/75</a>
                                                <a>210/75</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4 mt-3 mt-md-0">
                                    <!-- Quantity -->
                                    <div class="col-3 col-md-1 col-lg-2 d-flex align-items-center align-items-md-start">
                                        <div class="color-selection">
                                            <h6 class="text-center text-md-left text-blue alt-font">Qty:</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-lg-4 input_plus_mins">
                                        <div class="qty">
                                            <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                            <input type="number" class="count" name="qty" value="1">
                                            <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 price-modal">
                                        <h1>$299.00</h1>
                                    </div>
                                    <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-red text-capitalize">Buy Link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Next & Prev  -->
                        <div class="row justify-content-end">
                            <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                                <a class="d-flex justify-content-center" onclick="prev_window('morphic-window3');"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                                <a class="d-flex justify-content-center" onclick="next_window('morphic-window2');"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Window 1 End -->

        <!-- Modal Window 2 Start -->
        <div class="modal-window" id="morphic-window2">
            <div class="modal-body">
                <header>
                    <span class="close-modal"><i></i><i></i></span>
                </header>
                <div class="morphic-body">
                    <div class="container">
                        <div class="row main-morphic-body align-items-center">
                            <div class="morphic-img col-12 col-md-6">
                                <!-- Main Image -->
                                <div id="carousel-thumb2" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-1.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-2.png" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-3.png" alt="Third slide">
                                        </div>
                                    </div>
                                    <!--/.Slides-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-thumb2" data-slide-to="0" class="active">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal1-sub1.png" alt="First slide">
                                        </li>
                                        <li data-target="#carousel-thumb2" data-slide-to="1">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal1-sub2.png" alt="Second slide">
                                        </li>
                                        <li data-target="#carousel-thumb2" data-slide-to="2">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal1-sub3.png" alt="Third slide">
                                        </li>
                                    </ol>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="morphic-title col-12 col-md-6">
                                <h5>Article PZ-1000-23</h5>
                                <h3>Tire Alloy Rims</h3>
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has
                                    been the industry’s standard dummy. </p>

                                <div class="row pb-md-4">
                                    <!-- Sizes -->
                                    <div class="col-3 col-md-2 d-flex align-items-center align-items-lg-end">
                                        <div class="color-selection">
                                            <h6 class="text-center text-md-left text-blue alt-font">Size:</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10">
                                        <div class="color-picker text-center text-md-left">
                                            <div class="size__item">
                                                <a class="active">155/75</a>
                                                <a>165/75</a>
                                                <a>185/75</a>
                                                <a>210/75</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4 mt-3 mt-md-0">
                                    <!-- Quantity -->
                                    <div class="col-3 col-md-1 col-lg-2 d-flex align-items-center align-items-md-start">
                                        <div class="color-selection">
                                            <h6 class="text-center text-md-left text-blue alt-font">Qty:</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-lg-4 input_plus_mins">
                                        <div class="qty">
                                            <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                            <input type="number" class="count" name="qty" value="1">
                                            <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 price-modal">
                                        <h1>$299.00</h1>
                                    </div>
                                    <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-red text-capitalize">Buy Link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Next & Prev  -->
                        <div class="row justify-content-end">
                            <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                                <a class="d-flex justify-content-center" onclick="prev_window('morphic-window1');"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                                <a class="d-flex justify-content-center" onclick="next_window('morphic-window3');"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Window 2 End -->

        <!-- Modal Window 3 Start -->
        <div class="modal-window" id="morphic-window3">
            <div class="modal-body">
                <header>
                    <span class="close-modal"><i></i><i></i></span>
                </header>
                <div class="morphic-body">
                    <div class="container">
                        <div class="row main-morphic-body align-items-center">
                            <div class="morphic-img col-12 col-md-6">
                                <!-- Main Image -->
                                <div id="carousel-thumb3" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-1.png" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-2.png" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="cars-automobile/images/model-windows/modal-img-3.png" alt="Third slide">
                                        </div>
                                    </div>
                                    <!--/.Slides-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-thumb3" data-slide-to="0" class="active">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal1-sub1.png" alt="First slide">
                                        </li>
                                        <li data-target="#carousel-thumb3" data-slide-to="1">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal1-sub2.png" alt="Second slide">
                                        </li>
                                        <li data-target="#carousel-thumb3" data-slide-to="2">
                                            <img class="d-block w-100 img-fluid" src="cars-automobile/images/model-windows/modal1-sub3.png" alt="Third slide">
                                        </li>
                                    </ol>
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="morphic-title col-12 col-md-6">
                                <h5>Article PZ-1000-23</h5>
                                <h3>Engine Suspension</h3>
                                <p>Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has
                                    been the industry’s standard dummy. </p>

                                <div class="row pb-md-4">
                                    <!-- Sizes -->
                                    <div class="col-3 col-md-2 d-flex align-items-center align-items-lg-end">
                                        <div class="color-selection">
                                            <h6 class="text-center text-md-left text-blue alt-font">Size:</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10">
                                        <div class="color-picker text-center text-md-left">
                                            <div class="size__item">
                                                <a class="active">155/75</a>
                                                <a>165/75</a>
                                                <a>185/75</a>
                                                <a>210/75</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row pb-4 mt-3 mt-md-0">
                                    <!-- Quantity -->
                                    <div class="col-3 col-md-1 col-lg-2 d-flex align-items-center align-items-md-start">
                                        <div class="color-selection">
                                            <h6 class="text-center text-md-left text-blue alt-font">Qty:</h6>
                                        </div>
                                    </div>
                                    <div class="col-9 col-lg-4 input_plus_mins">
                                        <div class="qty">
                                            <span class="minus bg-dark"><i class="lni-minus"></i></span>
                                            <input type="number" class="count" name="qty" value="1">
                                            <span class="plus bg-dark"><i class="lni-plus"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12 price-modal">
                                        <h1>$299.00</h1>
                                    </div>
                                    <div class="col-12 modal-btn"><a target="_blank" href="https://www.amazon.com/" class="btn btn-medium btn-rounded btn-red text-capitalize">Buy Link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Next & Prev  -->
                        <div class="row justify-content-end">
                            <div class="d-none d-md-block left-arrow-sec text-center mt-auto mb-auto">
                                <a class="d-flex justify-content-center" onclick="prev_window('morphic-window2');"><i class="fa fa-angle-left"></i></a>
                            </div>
                            <div class="d-none d-md-block right-arrow-sec text-center mt-auto mb-auto">
                                <a class="d-flex justify-content-center" onclick="next_window('morphic-window1');"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Window 3 End -->
    </div>

    <!--START SCROLL TOP-->
    <div class="go-top"><i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>
    <!--END SCROLL TOP-->