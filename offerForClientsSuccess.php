<body>
  <div id="wrapper">

    <!-- Header -->
    <header id="top">
      <div class="overlay-active" id="overlayOff">
        <span>
          <div class='mouse-wrapper'>
            <div class="mouse-icon"></div>
            <div class="mouse-arrow"></div>
          </div>
        </span>
      </div>
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark nav-menu fixed-top hero_top" id="mainNav">
        <div id="header" class="container-fluid"><a class="navbar-brand js-scroll-trigger" href="#"> <img src="/img/noclegowo.svg" /></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars"></i></button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <span class="nav-link">+48 794 944 944</span></li>
              <li class="nav-item"><a class="nav-link" href="#opinie">Opinie</a></li>
              <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
              <li class="nav-item"><a class="nav-link" href="#wiedza">Darmowy ebook</a></li>
              <li class="nav-item"><a class="nav-link" href="#cennik">Cennik</a></li>
              <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
            </ul>
            <a class="btn btn-white nav-link showAdd gtm_navbarAddOffer dimness" href="#">Dodaj obiekt</a>
          </div>
        </div>
      </nav>

      <!-- Hero -->
      <section class="hero relative">
        <div class="hero_image">
          <div class="container">
            <div class="row h-100 align-items-center">
              <div class="col-lg-5 col-md-8">
                <div class="form_body text-center signin">
                  <a name="dodaj">
                    <h2 class="form_title">Oferujesz noclegi? <br> Dodaj obiekt.</h2>
                  </a>
                  <form action="<?=$_SERVER['REQUEST_URI']?>" method="post" class="ng-pristine ng-valid " siq_id="autopick_9090">
                    <div class="form-group">
                      <?//=$registerOfferForm['email']->render(["type"=>"email", 'class'=>"form-control", "aria-describedby"=>"emailHelp", "placeholder"=>"Adres e-mail"])?>
                      <?//=$registerOfferForm['email']->renderError()?>
                    </div>
                    <div ng-controller="addOffer" class="form-group">
                      <input class="form-control" placeholder="" type="text" name="ghouse[city_tmp]" id="email ghouse_city_tmp" required autocomplete="false" ng-model="selected" uib-typeahead="state as state.name for state in getResults($viewValue)" typeahead-loading="loadingLocations" typeahead-no-results="noResults" typeahead-template-url="customTemplate.html" typeahead-popup-template-url="customPopupTemplate.html" typeahead-on-select="onSelect($item, $model, $label)" />
                      <label class="form-control-placeholder" for="email">Miejscowość</label>
                      <input type="hidden" name="geo_id" />
                      <input type="hidden" name="city_id" />
                      <?// if($registerOfferForm['city_tmp']->hasError()) echo $registerOfferForm['city_tmp']->renderError() ?>
                    </div>
                    <script type="text/ng-template" id="customPopupTemplate.html">
                      <div class="suggest-menu"
                           ng-style="{top: position().top+'px', left: position().left+'px'}"
                           style="display: block;"
                           ng-show="isOpen() && !moveInProgress"
                           aria-hidden="{{ n.g('!isOpen()')}}">

                          <ul class="dropdown-menu" role="listbox">
                              <li class="uib-typeahead-match" ng-repeat="match in matches track by $index" ng-class="{active: isActive($index) }"
                                  ng-mouseenter="selectActive($index)" ng-click="selectMatch($index)" role="option" id="{{n.g('::match.id')}}">
                                  <div uib-typeahead-match index="$index" match="match" query="query" template-url="templateUrl"></div>
                              </li>
                          </ul>
                      </div>
                  </script>
                    <script type="text/ng-template" id="customTemplate.html">
                      <a>
                          <div ng-class="'icon-'+match.model.type"></div>
                          <div class="suggest-title" ng-bind-html="match.label | uibTypeaheadHighlight:query"></div>
                          <div class="suggest-desc" ng-bind-html="match.model.descr ? (match.model.descr | uibTypeaheadHighlight:query) : null"></div>
                      </a>
                  </script>

                    <div class="form-group">
                      <?//=$registerOfferForm['contact_person']->render(['class'=>"form-control", "placeholder"=>"Imię i nazwisko"])?>
                      <?//=$registerOfferForm['contact_person']->renderError()?>
                    </div>
                    <button type="submit" class="btn btn-primary form_btn gtm_formAddOffer">Dodaj obiekt</button>
                    <label class="form-check" for="regulation">
                      <?//= $registerOfferForm['regulation'] -> render() ?>
                      <span class="checkmark"></span><span>Oświadczam, że znam i akceptuję <a target="_blank" href="https://www.noclegowo.pl/info/regulamin">regulamin
                          serwisu</a>.</span>
                    </label>
                    <?//=$registerOfferForm['regulation']->renderError()?>
                    <span>
                      <?//= (isset($registerOfferForm['_csrf_token']) && $registerOfferForm['_csrf_token']) ? $registerOfferForm['_csrf_token']->render() : ""; ?>
                    </span>

                  </form>

                </div>
              </div>
            </div>

          </div><!-- #main-slider -->
        </div>
      </section>
    </header>

    <!-- About us -->
    <section class="about">
      <div class="container">
        <div class="section_title">
          <h2>Dlaczego Noclegowo?</h2>
          <p></p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="about_body">
              <i class="fas fa-home"></i>
              <p class="about_title">Ty tu rządzisz i decydujesz.</p>
              <span>Twój dom, Twoje zasady. Masz pełną kontrolę nad prezentacją swojego obiektu. Samodzielnie określasz
                dostępność, ceny oraz wybierasz najwygodniejszy sposób komunikacji z gośćmi. </span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_body">
              <i class="far fa-handshake"></i>
              <p class="about_title">Doradzimy, podpowiemy. </p>
              <span>Stworzenie oferty to dla Ciebie czarna magia? Nic się nie martw. Na
                naszym blogu znajdziesz wiele porad dotyczących skutecznej reklamy. Możesz też do nas napisać
                lub zadzwonić.</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="about_body">
              <i class="fa fa-suitcase-rolling"></i>
              <p class="about_title">Pozyskasz nowych gości.</p>
              <span>Stali goście to za mało? Koniec z zamartwianiem się o pełne obłozenie obiektu. Z naszą pomocą
                dotrzesz do tysięcy osób na co dzień poszukujących noclegu w Twojej okolicy. </span>
            </div>
          </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="category">
      <div class="section_title">
        <h2>Czy Noclegowo jest dla mnie?</h2>
        <p>Oczywiście. Na pewno. Bez dwóch zdań.</p>
      </div>
      <div class="container">
        <p class="category_text">Jeżeli oferujesz…</p>
        <div id="category_carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <!-- Slide One -->
            <div class="text-center ">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-4">
                    <div class="category_single">
                      <div class="category_avatar">
                        <img class="lazy" data-src="img/category/apartaments.webp" alt="">
                      </div>
                      <div class="category_caption">
                        <p class=""><span>Apartamenty</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="category_single">
                      <div class="category_avatar">
                        <img class="lazy" data-src="img/category/agroturism.webp" alt="">
                      </div>
                      <div class="category_caption">
                        <p class=""><span>Ośrodki agroturystyczne</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="category_single">
                      <div class="category_avatar">
                        <img class="lazy" data-src="img/category/rooms.webp" alt="">
                      </div>
                      <div class="category_caption">
                        <p class=""><span>Kwatery i pokoje</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-4">
                    <div class="category_single">
                      <div class="category_avatar">
                        <img class="lazy" data-src="img/category/camping.webp" alt="">
                      </div>
                      <div class="category_caption">
                        <p class=""><span>Kampingi</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="category_single">
                      <div class="category_avatar">
                        <img class="lazy" data-src="img/category/holiday_house.webp" alt="">
                      </div>
                      <div class="category_caption">
                        <p class=""><span>Domy wakacyjne</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="category_single">
                      <div class="category_avatar">
                        <img class="lazy" data-src="img/category/summer_house.webp" alt="">
                      </div>
                      <div class="category_caption">
                        <p class=""><span>Domki letniskowe</span></p>
                      </div>
                    </div>
                  </div>
                  <p class="category_text m-0">...to zdecydowanie jest dla Ciebie!</p>
                </div>
                <div class="row">
                  <div class="btn-more ">
                    <a class="gtm_categoryAddOffer dimness1" href="#">Dodaj obiekt</a>
                  </div>
                </div>

              </div>
            </div>
    </section>

    <!-- Stats -->
    <section class="stats">
      <div class="section_title">
        <h2>Liczby mówią same za siebie</h2>
      </div>
      <div class="container">
        <div class="row text-center justify-content-center">
          <div class="col-md-3">
            <div class="stats_content">
              <i class="fas fa-chart-line"></i>
              <p class="stats_number">5,5 MLN</p>
              <span>odwiedzin w 2018</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats_content">
              <i class="far fa-envelope"></i>
              <p class="stats_number">3 687</p>
              <span>zapytań o nocleg dziennie</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stats_content">
              <i class="far fa-smile-beam"></i>
              <p class="stats_number">13 791</p>
              <span>zadowolonych wynajmujących</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonials" id="opinie">
      <div class="row slider">
        <div class="col-md-6 slide">sad</div>
        <div class="col-md-6 slide">sas</div>
      </div>
      <div data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
        <div>
          <h3>1</h3>
        </div>
        <div>
          <h3>2</h3>
        </div>
        <div>
          <h3>3</h3>
        </div>
        <div>
          <h3>4</h3>
        </div>
        <div>
          <h3>5</h3>
        </div>
        <div>
          <h3>6</h3>
        </div>
      </div>

      <div class="section_title">
        <h2>Opinie naszych klientów</h2>
        <p></p>
      </div>
      <div class="container text-center">
        <div id="testimonials_carousel" class="carousel slide" data-ride="carousel" data-interval="2000">
          <div class="carousel-inner">

            <!-- Blackquete 1 -->
            <div class="carousel-item active">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/sowa.webp" alt="">
                <blockquote>
                  <p>Usługa doskonała, a co najważniejsze na czele w stosunku do innych serwisów co daje dużą
                    oglądalność przez potencjalnych klientów obiektów turystycznych.</p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/okuninka/62683-o-w-zielona-sowa/">Ośrodek
                      Wczasowy Sowa, Jarosławiec</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 2 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/alba.webp" alt="">
                <blockquote>
                  <div>
                    <p>Współpracuję z portalem Noclegowo od kilku lat i mam wiele zapytań. Grzeczna obsługa. Jestem
                      osobą w podeszłym wieku często korzystam z pomocy i informacji.</p>
                  </div>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/leba/1027-willa-al-ba/">Willa AL-BA,
                      Łeba</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>


            <!-- Blackquete 3 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/olech.webp" alt="">
                <blockquote>
                  <p>Współpraca układa się bardzo dobrze. Obsługa na bardzo wysokim poziomie, profesjonalna ale przede
                    wszystkim bardzo pomocna.</p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/leba/4878-leba-kwatery-olech/">Kwatery
                      Olech, Łeba</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 4 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/uewy.webp" alt="">
                <blockquote>
                  <p>Skuteczny portal,dobre pozycjonowanie i miła obsługa dla klienta</p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/ustka/1102-domki-letniskowe-u-ewy/">Domki
                      letniskowe u Ewy, Ustka</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 5 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/malgosia.webp" alt="">
                <blockquote>
                  <p>Fajny portal dla mnie jeden z najlepszych jak nie najlepszy</p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/kolobrzeg/27234-apartament-malgosia/">Apartament Małgosia,
                      Kołobrzeg</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 6 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/nakaszubskiej.webp" alt="">
                <blockquote>
                  <p>Jeden z nielicznych rzetelnych portali</p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/kolobrzeg/35043-nakaszubskiej/">naKaszubskiej, Kołobrzeg</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 7 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/wisia.webp" alt="">
                <blockquote>
                  <p>Najlepszy serwis w pozyskiwaniu gosci </p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/zakopane/13161-willa-wisia/">Willa Wisia,
                      Zakopane</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 8 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/salon.webp" alt="">
                <blockquote>
                  <p>Bardzo dobrze pozycjonowany i skuteczny w pozyskaniu klienta portal </p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/swinoujscie/27835-apartamenty-salon/">Apartamenty Salon, Świnoujście</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 9 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/jagienka.webp" alt="">
                <blockquote>
                  <p>Portal godny polecenia. Najlepszy w pozycjonowaniu , najbardziej funkcjonalny i przejrzysty. To
                    jest to na co każdy z nas liczył! </p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/leba/3033-jagienka-tanio-wygodnie-i-blisko-morza/">Jagienka,
                      Łeba</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 10 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/granatowka.webp" alt="">
                <blockquote>
                  <p>Współpraca z noclegowo oceniam na bardzo dobrą. Miałam rezerwacje przez wasz portal. Oby tak dalej. Cena przystępna. Będę już zawsze z wami. </p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/bialy-dunajec/8087-granatowka/">Granatówka,
                      Biały Dunajec</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Blackquete 11 -->
            <div class="carousel-item">
              <div class="testimonial_single">
                <img class="testimonial_avatar lazy" data-src="img/testimonials/mansarda.webp" alt="">
                <blockquote>
                  <p>Podoba mi się! Np. dzięki "ogłoszeniom", które trafiają na mojego maila mam poczucie że coś się
                    dzieje, że moja oferta "żyje". Możliwość aktualizacji - czy to zdjęć czy treści. Świetny pomysł z
                    kalendarzem! </p>
                  <span>— <a target="_blank" href="https://www.noclegowo.pl/kolobrzeg/35356-kolobrzeska-mansarda-mieszkanie/">Kołobrzeska
                      Mansarda, Biały Dunajec</a></span>
                  <div class="testimonial_stars">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    (5/5)
                  </div>
                </blockquote class="blockquote">
              </div>
            </div>

            <!-- Carousel navigation -->
            <div class="owl-nav">
              <div class="owl-prev  carousel-control-prev">
                <a class="carousel-control" href="#testimonials_carousel" data-slide="prev"><span class="left"></span></a>
              </div>
              <div class="owl-next carousel-control-next">
                <a class="carousel-control" href="#testimonials_carousel" data-slide="next"><span class="right"></span></a>
              </div>
            </div>
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
              <li data-target="#testimonials_carousel" data-slide-to="0" class="active"></li>
              <li data-target="#testimonials_carousel" data-slide-to="1"></li>
              <li data-target="#testimonials_carousel" data-slide-to="2"></li>
              <li data-target="#testimonials_carousel" data-slide-to="3"></li>
              <li data-target="#testimonials_carousel" data-slide-to="4"></li>
              <li data-target="#testimonials_carousell" data-slide-to="5"></li>
              <li data-target="#testimonials_carousel" data-slide-to="6"></li>
              <li data-target="#testimonials_carousel" data-slide-to="7"></li>
              <li data-target="#testimonials_carousel" data-slide-to="8"></li>
              <li data-target="#testimonials_carousel" data-slide-to="9"></li>
              <li data-target="#testimonials_carousell" data-slide-to="10"></li>
            </ol>
          </div>
        </div>
        <p>Średnia ocen: 4.7 / 5.00 na podstawie wszystkich opinii.</p>
    </section>


    <!-- Plan & Pricing -->
    <section class="plan" id="cennik">
      <div class="section_title">
        <h2>Jak mogę rozpocząć współpracę?</h2>
        <p>Współpraca z Noclegowo dostępna jest w jednej z dwóch opcji: <br>
          <span class="font-weight-bold">rozliczenie za rezerwacje</span> lub <span class="font-weight-bold">roczna
            opłata abonamentowa</span>.</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="pricing_version_two">
              <span class="pricing_bracket">Jednorazowa opłata za roczną aktywację</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="pricing_version_one">
              <span class="pricing_bracket">Rozliczenie prowizyjne</span>
            </div>
          </div>
        </div>
        <div class="row no-align-items slider">

          <div class="col-md-3 slide">
            <div class="pricing border_effect text-center">
              <div class="pricing_title">Standard</div>
              <p class="pricing_subtitle">Pozyskasz nowych gości w swoim obiekcie.</p>
              <div class="pricing_button">
                <a href="#" class="btn btn-green dimness2 gtm_pricingStandard">Wybieram</a>
              </div>
              <ul>
                <li> Opłata: 369 zł brutto </li>
                <li> <span class="font-weight-bold">0%</span> prowizji </li>
                <li> <span class="font-weight-bold">36 PKT</span> na pozycjonowanie </li>
                <li id="bolder_standard">
                  <a href="#showmore" data-toggle="collapse" id="#showmore" aria-expanded="false" aria-controls="multiCollapseExample1">
                    Rozwiń pozostałe korzyści <i class="fas fa-angle-down rotate-icon"></i></a></li>
                <div class="collapse multi-collapse" id="showmore">
                  <li> Publikacja przez 12 m-cy </li>
                  <li> Galeria bez limitu </li>
                  <li> Opis bez limitu </li>
                  <li> Udogodnienia obiektu </li>
                  <li> Szczegółowy cennik </li>
                  <li> Kalendarz dostępności </li>
                  <li> Dostęp do Panelu 24/7 </li>
                  <li> Opinie od gości </li>
                  <li> Wsparcie Opiekuna Noclegowo </li>
                  <li> Bezpośredni kontakt od gości </li>
                  <li> Wyświetlany numer telefonu </li>
                  <li> Zapytania na e-mail </li>
                  <li> Linki do www/fb </li>
                  <li> Ogłoszenia Szukam noclegu </li>
                </div>
              </ul>
            </div>
          </div>
          <div class="col-md-3 slide">
            <div class="pricing border_effect text-center relative">
              <span class="pricing_ribbon">POLECANY</span>
              <div class="pricing_title" style="position:relative">Premium </div>
              <p class="pricing_subtitle">Będziesz wyżej pozycjonowany niż obiekty standard.</p>
              <div class="pricing_button"> <a href="#" class="btn btn-green dimness2 gtm_pricingPremium">Wybieram</a>
              </div>
              <ul>
                <li> Opłata: 999 zł brutto </li>
                <li> <span class="font-weight-bold">0%</span> prowizji </li>
                <li> <span class="font-weight-bold">99 PKT</span> na pozycjonowanie </li>
                <li id="bolder_premium">
                  <a href="#showmore" data-toggle="collapse" id="#showmore" aria-expanded="false" aria-controls="multiCollapseExample1">
                    Rozwiń pozostałe korzyści <i class="fas fa-angle-down rotate-icon"></i></a></li>
                <div class="collapse multi-collapse" id="showmore">
                  <li> Publikacja przez 12 m-cy </li>
                  <li> Galeria bez limitu </li>
                  <li> Opis bez limitu </li>
                  <li> Udogodnienia obiektu </li>
                  <li> Szczegółowy cennik </li>
                  <li> Kalendarz dostępności </li>
                  <li> Dostęp do Panelu 24/7 </li>
                  <li> Opinie od gości </li>
                  <li> Wsparcie Opiekuna Noclegowo </li>
                  <li> Bezpośredni kontakt od gości </li>
                  <li> Wyświetlany numer telefonu </li>
                  <li> Zapytania na e-mail </li>
                  <li> Linki do www/fb </li>
                  <li> Ogłoszenia Szukam noclegu</li>
                </div>
                <li class="benefits"> Gwarancja wysokich pozycji </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 slide">
            <div class="pricing border_effect text-center">
              <div class="pricing_title">Premium+</div>
              <p class="pricing_subtitle">Otrzymasz dodatkowe 1500 zł na pozycjonowanie obiektu.</p>
              <div class="pricing_button"> <a href="#" class="btn btn-green dimness3 gtm_pricingMax">Wybieram</a></div>
              <ul>
                <li> Opłata: 1999 zł brutto </li>
                <li> <span class="font-weight-bold">0%</span> prowizji </li>
                <li> <span class="font-weight-bold">1699 PKT</span> na pozycjonowanie </li>
                <li id="bolder_max">
                  <a href="#showmore" data-toggle="collapse" id="#showmore" aria-expanded="false" aria-controls="multiCollapseExample1">
                    Rozwiń pozostałe korzyści <i class="fas fa-angle-down rotate-icon"></i></a></li>
                <div class="collapse multi-collapse" id="showmore">
                  <li> Publikacja przez 12 m-cy </li>
                  <li> Galeria bez limitu </li>
                  <li> Opis bez limitu </li>
                  <li> Udogodnienia obiektu </li>
                  <li> Szczegółowy cennik </li>
                  <li> Kalendarz dostępności </li>
                  <li> Dostęp do Panelu 24/7 </li>
                  <li> Opinie od gości </li>
                  <li> Wsparcie Opiekuna Noclegowo </li>
                  <li> Bezpośredni kontakt od gości </li>
                  <li> Wyświetlany numer telefonu </li>
                  <li> Zapytania na e-mail </li>
                  <li> Linki do www/fb </li>
                  <li> Ogłoszenia Szukam noclegu</li>
                </div>
                <li class="benefits" id="change"> Gwarancja wysokich pozycji </li>
                <li class="benefits" id="change"> Promowanie na Facebooku </li>
                <li class="benefits" id="change"> Copywriting oferty</li>
                <li class="benefits" id="change"> Promocja w newsletterze </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 slide">
            <div class="pricing border_effect text-center">
              <div class="pricing_title">Rezerwacje</div>
              <p class="pricing_subtitle">Zapłacisz niewielką prowizję tylko za pozyskanych gości.</p>
              <div class="pricing_button"><a href="#" class="btn btn-green dimness4 gtm_pricingReservation">Wybieram</a>
              </div>
              <ul>
                <li> Opłata: 0 zł </li>
                <li> <span class="font-weight-bold">8%</span> prowizji </li>
                <li> <span class="font-weight-bold">36 PKT</span> na pozycjonowanie </li>
                <li id="bolder_reserv">
                  <a href="#showmore" data-toggle="collapse" id="#showmore" aria-expanded="false" aria-controls="multiCollapseExample1">
                    Rozwiń pozostałe korzyści <i class="fas fa-angle-down rotate-icon"></i></a></li>
                <div class="collapse multi-collapse" id="showmore">
                  <li> Publikacja obiektu </li>
                  <li> Galeria bez limitu </li>
                  <li> Opis bez limitu </li>
                  <li> Udogodnienia obiektu </li>
                  <li> Szczegółowy cennik </li>
                  <li> Kalendarz dostępności </li>
                  <li> Dostęp do Panelu 24/7 </li>
                  <li> Opinie od gości </li>
                  <li> Wsparcie Opiekuna Noclegowo </li>
                  <li> Ustalanie wysokości zadatku </li>
                </div>
                <li class="benefits" id="change"> Akceptacja rezerwacji on-line </li>
                <li class="benefits" id="change"> Szybka obsługa płatności </li>
                <li class="benefits" id="change"> Synchronizacja kalendarza iCal </li>
                <li class="benefits" id="change"> Powiadomienia e-mail i sms </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="alert alert-light text-center mt-4" role="alert">
              <i class="far fa-lightbulb mr-2" style="font-size: 22px"></i> Zarządzasz najmem wielu obiektów?
              <a target="_blank" href="https://www.noclegowo.pl/info/kontakt">Zapytaj o indywidualną ofertę współpracy.</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="faq" id="faq">
      <div class="container">
        <div class="panel-group" id="accordion">

          <!--Accordion wrapper-->
          <div class="accordion" id="accordionExample">
            <div class="section_title">
              <h2>Najczęściej zadawane pytania</h2>
              <p>Nie zwlekaj ani chwili dłużej. Zacznij pozyskiwać gości już dziś!</p>
            </div>
            <div class="row no-align-items">
              <div class="col-md-6">

                <!-- question 1 -->
                <div class="faq_item">
                  <div class="faq_header" id="headingOne">
                    <a href="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h5 class="faq_title">
                        1. Czym się różni wersja rozliczenia od jednorazowej płatności? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="faq_body">
                      Przy jednorazowej wpłacie goście będą kontaktować się bezpośrednio z Tobą - poprzez numer kontaktowy, formularz e-mail. Natomiast przy rozliczeniu prowizyjnym goście będą mogli przesłać prośbę o rezerwację w konkretnie wskazanym terminie o konkretny rodzaj zakwaterowania. Jeżeli termin będzie dostępny będziesz mógł przyjąć rezerwację, a gość wpłaca zadatek. Cała rezerwacja odbywa się on-line w Noclegowo.
                    </div>
                  </div>
                </div>

                <!-- question 2 -->
                <div class="faq_item">
                  <div class="faq_header" id="headingTwo">
                    <a a href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h5 class="faq_title">
                        2. Wybieram abonament. Czym różni się Standard od Premium? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="faq_body">
                      Decydując się na wersję Premium, masz zagwarantowane wyższe pozycje na listach wyszukiwania (m.in. miejscowość, region, rodzaj obiektu). Obiekt znajdzie się wśród obiektów Wyróżnionych. Obiekty Premium zawsze wyświetlane są powyżej obiektów Standard, nawet jeżeli Standard korzysta z dodatkowego pozycjonowania.
                    </div>
                  </div>
                </div>

                <!-- question 3 -->
                <div class="faq_item">
                  <div class="faq_header" id="headingThree">
                    <a a href="" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h5 class="faq_title">
                        3. Wybieram rozliczenie prowizyjne. Jak wygląda proces rezerwacji? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="faq_body">
                      Gość zainteresowany Twoim obiektem przesyła prośbę o rezerwację. Wybiera rodzaj zakwaterowania, termin oraz liczbę osób. Natychmiast otrzymasz o tym powiadomienie e-mail oraz sms. Masz 24 godziny na potwierdzenie lub odrzucenie takiej prośby. Jeżeli przyjmujesz rezerwację gość ma 24 godziny na wpłatę zadatku. Zadatek, pomniejszony o prowizję, przekazywany jest bezpośrednio do Ciebie.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">

                <!-- question 4 -->
                <div class="faq_item">
                  <div class="faq_header" id="headingFour">
                    <a a href="" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <h5 class="faq_title">
                        4. Gość wysłał prośbę o rezerwację o zajęty już termin. Czy grozi mi overbooking? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="faq_body">
                      Nie martw się. System rozliczenia prowizyjnego w Noclegowo jest wyjątkowo prosty. Rezerwacje nie są potwierdzane automatycznie. To Ty decydujesz, która rezerwacja będzie mogła być zrealizowana, poprzez akceptację prośby wysłanej przez gościa.
                    </div>
                  </div>
                </div>

                <!-- question 5 -->
                <div class="faq_item">
                  <div class="faq_header" id="headingFive">
                    <a a href="" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      <h5 class="faq_title"> 5. Gdzie będzie wyświetlana moja oferta? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="faq_body">
                      Obiekt będzie wyświetlany na wszystkich listach zgodny z rodzajem Twojego obiektu oraz lokalizacją. To znaczy, że jeżeli masz domek nad morzem to Twój obiekt będzie widoczny w miejscowości np. Władysławowie, w kryterium domki we Władysławowie, w całym regionie, czyli na Wybrzeżu, nad morzem, w województwie.
                    </div>
                  </div>
                </div>

                <!-- question 6 -->
                <div class="faq_item">
                  <div class="faq_header" id="headingSix">
                    <a a href="" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <h5 class="faq_title">
                        6. Gdzie otrzymam pomoc w razie problemów? <i class="fas fa-angle-down rotate-icon"></i>
                      </h5>
                    </a>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="faq_body">
                      Do Twojej dyspozycji jest Dział Obsługi Klienta Noclegowo. Chętnie odpowiemy na Twoje wszystkie pytania, udzielimy rady i wysłuchamy sugestii dotyczących usprawnień portalu, które według Ciebie byłyby wartościowe. Wystarczy zadzwonić lub skontaktować się mailowo. Jesteśmy tu dla Ciebie!
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- Call to action  -->
    <section class="general">
      <div class="cover">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center mt-5 mb-5">
              <div class="section_title">
                <h2>Goście czekają</h2>
                <p>Tysiące osób każdego dnia poszukuje noclegu na Noclegowo.</p>
                <p>Zacznij docierać do nich ze swoją ofertą już dziś.</p>
              </div>
              <a class="btn btn-black dimness5 gtm_middleAddOffer" href="#">Dodaj obiekt</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Ebook -->
    <section class="knowledge ebook" id="wiedza">
      <div class="section_title">
        <h2>Odbierz darmowy ebook</h2>
      </div>
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-md-5">
            <img class="lazy" data-src="img/ebook/guide_ebook.webp">
          </div>
          <div class="col-md-5">
            <div class="row">
              <div class="col-md-12">
                <p class="about_title">Dzielimy się wiedzą i doświadczeniem</p>
                <p class="mb-4">Znamy się na tym, co robimy, dlatego stworzyliśmy dla Ciebie źródło praktycznej i kompletnej wiedzy w postaci e-booka. W tym wydaniu dowiesz się m.in: </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2"><i class="far fa-comments"></i></div>
              <div class="col-md-10">
                <p class="">Jak komunikować się i budować dobre relacje z gośćmi. Na co zwrócić szczególną uwagę.</p>
              </div>
              <div class="col-md-2"><i class="far fa-comment-dots"></i></div>
              <div class="col-md-10">
                <p class="">Jak zachęcić gości do wystawienia opinii, czyli przydatne sposoby, by gość odwiedził Twój obiekt.</p>
              </div>
              <div class="col-md-2"><i class="far fa-heart"></i></div>
              <div class="col-md-10">
                <p class="">Jak skraść serca gości. Wpływ niespodzianek na reputację i rozgłos obiektu.</p>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-10">
                <p class="">... i wiele, wiele, więcej.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="btn-more">
              <a class="gtm_downloadEbook" target="_blank" href="http://ebook.noclegowo.pl/">Pobierz</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Guide -->
    <section class="guide">
      <div class="section_title">
        <h2>Ostatnio na blogu</h2>
        <p>Dowiedz się, jak zadbać o reklamę swojego obiektu w internecie.</p>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card">
              <div class="card_image">
                <a target="_blank" href="https://www.noclegowo.pl/przewodnik/popraw-skutecznosc-oferty-kompletny-poradnik-od-noclegowo/">
                  <img class="lazy" data-src="img/guide/effectiveness.webp" alt="Popraw skuteczność oferty - kompletny poradnik od Noclegowo"></a>
              </div>
              <div class="card_body">
                <h5 class="card_title"><a target="_blank" href="https://www.noclegowo.pl/przewodnik/popraw-skutecznosc-oferty-kompletny-poradnik-od-noclegowo/">
                    Skuteczna prezentacja obiektu w 9 krokach</a></h5>
                <p>Co zrobić, aby oferta noclegu przyciągała i była inna niż wszystkie? My znamy odpowiedź i chętnie
                  dzielimy się tą wiedzą.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card_image">
                <a target="_blank" href="https://www.noclegowo.pl/przewodnik/12-krokow-do-perfekcyjnej-galerii-zdjec/">
                  <img class="lazy" data-src="img/guide/gallery.webp" alt="12 kroków do perfekcyjnej galerii zdjęć Twojego obiektu"></a>
              </div>
              <div class="card_body">
                <h5 class="card_title"><a target="_blank" href="https://www.noclegowo.pl/przewodnik/12-krokow-do-perfekcyjnej-galerii-zdjec/">
                    12 kroków do perfekcyjnej galerii zdjęć</a></h5>
                <p>Jeden obraz wart więcej niż tysiąc słów. Poznaj tajniki atrakcyjnej prezentacji noclegu. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card_image">
                <a target="_blank" href="https://www.noclegowo.pl/przewodnik/jak-zachecic-gosci-do-wystawienia-opinii/">
                  <img class="lazy" data-src="img/guide/home.webp" alt="Jak zachęcić gości do wystawienia opinii?"></a>
              </div>
              <div class="card_body">
                <h5 class="card_title"><a target="_blank" href="https://www.noclegowo.pl/przewodnik/tego-nie-moze-u-ciebie-zabraknac/">
                    4 rzeczy które doceni każdy gość</a></h5>
                <p>Na rynku turystycznym miejsc noclegowych przybywa, a wymagania gości rosną. Dowiedz się jak im
                  sprostać. </p>
              </div>
            </div>
          </div>
          <div class="btn-more">
            <a target="_blank" href="https://www.noclegowo.pl/przewodnik/kategoria/dla-wlascicieli/">Czytaj więcej</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Commercial -->
    <section class="commercial" id="video">
      <div class="section_title">
        <h2>Chcemy być bliżej Ciebie</h2>
      </div>
      <div class="container">
        <div class="row justify-content-around youtube">
          <div class="col-md-5">
            <h2>Oglądaj nas na YouTube</h2>
            <p>Noclegowo.tv to kanał, gdzie doświadczeni właściciele udzielają cennych wskazówek oraz opowiadają
              ciekawostki, które przydarzają im się w biznesie wynajmu krótkoterminowego.</p>
            <p> Dzięki przeprowadzanym przez nas wywiadom, poznajemy lepiej Was i Wasze potrzeby, dzięki czemu stale
              możemy poprawiać użyteczność portalu. </p>
          </div>
          <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="653" height="380" src="https://www.youtube.com/embed/videoseries?list=PLR-cdLWSgmoQ27M2LR7vLHDPh29zZYFYz" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div class="btn-more">
            <a class="gtm_watchYoutube" target="_blank" href="https://www.youtube.com/c/noclegowopl/?sub_confirmation=1">Oglądaj</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Finito -->
    <section class="general">
      <div class="container">
        <div class="section_title">
          <h2>Gotowy na pozyskiwanie gości?</h2>
          <p>Bo my tak :)</p>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <img class="lazy" data-src="img/team.webp">
          </div>
        </div>
        <div class="btn-more">
          <a class="gtm_downloadEbook dimness6 gtm_endAddOffer" href="#">Dodaj obiekt już teraz!</a>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <footer class="footer contact">
      <div class="container">
        <div class="row no-align-items">
          <!-- Grid column -->
          <div class="col-md-3">
            <h5>Kontakt</h5>
            <div class="contact_body flex-row flexible">
              <div class="contact_icon"><span class="icon float-left"><i class="fab fa-facebook-messenger"></i></span>
              </div>
              <div class="contact_text"><a target="_blank" href="https://m.me/Noclegowo"><span>Messenger</span></a>
              </div>
            </div>
            <div class="contact_body flex-row flexible">
              <div class="contact_icon"><span class="icon float-left"><i class="fa fa-envelope"></i></span></div>
              <div class="contact_text"><span>ok@noclegowo.pl</span></div>
            </div>
            <div class="contact_body flex-row flexible">
              <div class="contact_icon"><span class="icon float-left"><i class="fa fa-phone"></i></span></div>
              <div class="contact_text"><span>+48 792 273 173 (dla obiektów)</span></div>
            </div>
            <div class="contact_body flex-row flexible">
              <div class="contact_icon"><span class="icon float-left"><i class="fa fa-location-arrow"></i></span></div>
              <div class="contact_text"><span>ul. Narutowicza 54, 96-130 Łódź</span></div>
            </div>
          </div>

          <!-- Grid column -->
          <div class="col-md-3">
            <h5>Dla szukających</h5>
            <ul>
              <li><a target="_blank" href="http://noclegowo.pl">Wyszukiwarka</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/ogloszenia/">Szukam noclegu</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/atrakcje">Ciekawe miejsca</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/przewodnik">Przewodnik</a></li>
              <li><a target="_blank" href="https://www.facebook.com/Noclegowo/">Facebook</a></li>
              <li><a target="_blank" href="https://www.instagram.com/noclegowo/">Instagram</a></li>
            </ul>
          </div>
          <!-- Grid column -->
          <div class="col-md-3">
            <h5>Dla wynajmujących</h5>
            <ul>
              <li><a target="_blank" href="https://oferta.noclegowo.pl">Oferta dla obiektów</a></li>
              <li><a target="_blank" href="https://panel.noclegowo.pl">Panel klienta</a></li>
              <li><a target="_blank" href="https://oferta.noclegowo.pl/#cennik">Cennik</a></li>
              <li><a target="_blank" href="https://ebook.noclegowo.pl">Darmowy ebook</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/przewodnik/kategoria/dla-wlascicieli/">Porady dla wynajmujących</a></li>
              <li><a target="_blank" href="https://noclegowo.pl/eksperci/">Eksperci Noclegowo</a></li>
              <li><a target="_blank" href="http://noclegowo.tv">Noclegowo TV</a></li>
            </ul>
          </div>
          <!-- Grid column -->
          <div class="col-md-3">
            <h5>O Noclegowo</h5>
            <ul>
              <li><a target="_blank" href="http://grupa.itur.pl">O nas</a></li>
              <li><a target="_blank" href="http://grupa.itur.pl/#team">Nasz zespół</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/info/regulamin">Regulamin</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/info/prywatnosc">Polityka prywatności</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/przewodnik/patronat-medialny/">Patronat medialny</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/przewodnik/media-o-nas/">Media o nas</a></li>
              <li><a target="_blank" href="http://grupa.itur.pl/#jobs">Kariera</a></li>
              <li><a target="_blank" href="https://www.noclegowo.pl/info/kontakt">Kontakt</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="btn btn-mobile dimess7 hideButton"><a href="#">Dodaj obiekt</a></div>

      <!-- Copyright -->
      <div class="footer_copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <span>© 2006-2019 <a href="#"> Noclegowo.pl</a></span>
            </div>
            <div class="col-md-8">
              <img class="lazy" data-src="img/partners/partners.webp">
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->