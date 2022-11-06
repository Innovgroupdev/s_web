<footer id="colophon" class="site-footer2">
    <!-- Address -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="iq-fancy-box-04">
                    <!-- <div class="iq-icon">
                        <i aria-hidden="true" class="ion-ios-location-outline"></i>
                    </div>
                    <div class="fancy-content">
                        <h5>Siège social</h5>
                        <span>
                            Immeuble FADEL, Agbalépédogan, Lomé-TOGO</span>
                    </div> -->
                    <img src="{{asset('images/slogan-cible-app.png')}}" style="max-height : 173px" alt="Slogan cible">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="iq-fancy-box-04">
                    <!-- <div class="iq-icon">
                        <i aria-hidden="true" class="ion-ios-telephone-outline"></i>
                    </div> -->
                    <div class="fancy-content">
                        <h5>Notre présence</h5>
                        <!-- <span class="lead"><a href="tel:+22899328853">+228 99 32 88 53</a></span> -->
                        <span class="lead">Sénégal | Côté d'ivoire | RDC | Cameroun | TOGO | Benin | Burkina Faso </span>

                        <!-- <p>Lundi – Vendredi : 09h 00 – 18h 00</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="iq-fancy-box-04">
                    <!-- <div class="iq-icon">
                        <i aria-hidden="true" class="ion-ios-email-outline"></i>
                    </div> -->
                    <div class="fancy-content">
                        <h5>Email</h5>
                        <span><a href="mailto:Support@cible-app.com">Support@cible-app.com </a></span>
                        <p>Réponse dans 1h maximum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Address END -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row flex-row-reverse">


                <div class="col-lg-6">
                    <ul class="info-share">
                        <li><a href="https://www.linkedin.com/company/cible-app/" title="Page Linkedin de CIBLE" target="_blank" rel="noopener noreferrer"><i class="fa fa-linkedin"></i></a></li>
                        <li class="d-none d-md-inline-block"><a href="https://www.instagram.com/cible_app/"  title="Page Instagram de CIBLE" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
                        <li  class="d-md-none" ><a href="https://www.instagram.com/invites/contact/?i=1g3q0tntwd7bs&utm_content=p0pxx73"  title="Page Instagram de CIBLE" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://youtube.com/channel/UC84ld5phXpktjk8eE75rEIw" title="Page Youtube de CIBLE" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://twitter.com/CibleApp?t=fZnzC21urJJ_-SolfBcocw&s=09" target="_blank" title="Page Twitter de CIBLE" rel="noopener noreferrer"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.tiktok.com/@cible_app?is_from_webapp=1&sender_device=pc" title="Page Tiktok de CIBLE" target="_blank" rel="noopener noreferrer">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill : #fff; width:14px;height : 14px">
                                    <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                                </svg></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="footer-copyright">
                        Copyright 2021 <a href="http://www.innovgroup.tech/" target="_blank" rel="noopener noreferrer">DIGITAL INNOV GROUP</a> All
                        Rights Reserved. </div>
                </div>
            </div>
        </div>
    </div>

</footer>



 <!-- =========================================Header================================================================================= -->
 <div class="modal fade" id="exampleModalCenterHeaderGain" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content pt-0">

                    <div class="modal-body text-center py-0 px-0" style="overflow : hidden">
                        <div class="container-fluid p-0 m-0" style="position:relative">
                            <img src="{{ asset('images/afficheGainImage.jpeg')}}" class="container-fluid p-0 m-0" loading="lazy" alt="" srcset="{{ asset('images/afficheGainImage.jpeg')}}">
                            <button type="button" class="close" style="position:absolute;top:1rem;right: 0.5rem;transform:translate(-50%,-50%);" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color:#000">&times;</span>
                            </button>
                        </div>
                        <div class="p-3">
                            <h3 class="modal-title mt-4 h5 fw-600" id="exampleModalLongTitle" style="font-size: 1.5rem;font-weight:bold">Soyez informé au lancement !</h5>
                                <p class="mb-0 pb-0 text-secondary">
                                    Votre adresse email ne sera pas publiée.
                                </p>
                                <form id="informHeader" class="comment-form text-left">
                                    @csrf
                                    <div class="row my-4">
                                        <div class="col-4 mb-3 pr-0 mr-0">
                                            <select class="" required id="select_Gain">
                                                <option value="" disabled hidden selected>Choix du pays</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->name}}" id="paysGain">{{$country->name}} - {{$country->code}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-8 mb-3">
                                            <input id="numberGain" placeholder="Numéro de téléphone" type="number" value="" size="30" maxlength="100" aria-describedby="number-notes" required='required' />
                                        </div>
                                        <div class="col-12">
                                            <input id="emailGain" placeholder="Email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes"  />
                                        </div>
                                        <div class="col-12 px-4">
                                            <div class="form-check d-flex align-items-center">
                                                <input class="form-check-input mr-3" type="checkbox" onchange="get_check_title()"  id="is_org_title">
                                                <label class="form-check-label mt-1" style="cursor:pointer" for="is_org_title">
                                                    Je suis un organisateur
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center text-danger mt-3">
                                            <strong> <span id="error_informGain" style="color:red!important"></span></strong>
                                        </div>
                                        <div class="col-12 mt-4 d-flex justify-content-center">

                                            <input name="submit" type="submit" class="submit w-50 mx-auto" value="Envoyer" />
                                        </div>
                                    </div>

                                </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
<!-- === back-to-top End === -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    })();
</script>

<style id='font-awesome-inline-css'>
    [data-font="FontAwesome"]:before {
        font-family: 'FontAwesome' !important;
        content: attr(data-icon) !important;
        speak: none !important;
        font-weight: normal !important;
        font-variant: normal !important;
        text-transform: none !important;
        line-height: 1 !important;
        font-style: normal !important;
        -webkit-font-smoothing: antialiased !important;
        -moz-osx-font-smoothing: grayscale !important;
    }
</style>

<script>
    const formCommentIn1 = document.querySelector("#exampleModalCenterHeaderGain");
    if (formCommentIn1) {
        let pays_ = "";
        $('#select_Gain').on('change', function() {
            pays_ = this.value;
            //alert(this.value); //or alert($(this).val());
        });

        var check_ = "";

        function get_check_title(){
            const elem = document.querySelector('#is_org_title')
            if (elem.checked) {
                check_ = 1
                console.log(check_)
            } else {
                check_ = 0
                console.log(check_)
            }
        }
        formCommentIn1.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(e.target)
            //console.log(formData.entries())
            //    e.preventDefault();
            let pays = pays_
            let email = $("#emailGain").val();
            let numero = $("#numberGain").val();
            let is_organisateur = check_;
            let _token = $("input[name=_token]").val();
            console.log(pays, $("#emailGain").val(), numero)
            //debugger
            $.ajax({
                url: "{{route('informer-enregistre')}}",
                type: "POST",
                data: {
                    email: email,
                    pays: pays,
                    numero: numero,
                    is_organisateur: is_organisateur,
                    _token: _token
                },
                beforeSend: function() {
                    let timerInterval;
                    Swal.fire({
                        title: 'Envoie en cours ...',
                        html: 'Chargement dans <b></b> milliseconds.',
                        timer: 1000000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                    setCookie('numero', numero, 180);
                    setCookie('email', email, 180);
                    setCookie('modalGain', 'true', 180);
                },
                success: function(response) {
                    if (response) {


                        Swal.fire({
                            icon: 'success',
                            title: 'Envoyé avec succès',
                            text: "Vos informations ont été prises en compte avec succès",
                            showConfirmButton: true,
                        })
                        $('#informHeader')[0].reset();
                        $('#error_informGain').hide();
                        $('#informHeader')[0].hide();
                    }
                },
                error: function() {
                    $('#error_informGain').html("<label class='text-danger'> Votre numéro ou email existe déjà </label>")
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur !',
                        text: 'Le formulaire contient une ou plusieurs erreurs . \n Veuillez revérifier!',
                    })
                }

            });
        });
    }
</script>



<script>

           $(window).on('load', function() {
              var temp = getCookie('modalGain')
           console.log(temp);
              setTimeout(() => {
                  if(temp == null){
                      $('#exampleModalCenterHeaderGain').modal('show');
                  }
              }, 10000);
          });

      </script>
<script async rel="preconnect" src="{{ asset('/js/js_composer_front.min31dc.js?ver=6.6.0')}}" id='wpb_composer_front_js-js'></script>
<script async rel="preconnect" src="{{ asset('/js/bootstrap.min5152.js?ver=1.0')}}" id='bootstrap-js'></script>
<script async rel="preconnect" src="{{ asset('/js/owl.carousel.min5152.js?ver=1.0')}}" id='carousel-js'></script>
<script async rel="preconnect" src="{{ asset('/js/counter/jquery.countTo5152.js?ver=1.0')}}" id='jquery-counter-js'></script>
<script async rel="preconnect" src="{{ asset('/js/jquery.appear5152.js?ver=1.0')}}" id='jquery-appear-js'></script>
<script async rel="preconnect" src="{{ asset('/js/magnific-popup/jquery.magnific-popup.min5152.js?ver=1.0')}}" id='jquery-magnific-js'></script>
<script async rel="preconnect" src="{{ asset('/js/skrollr5152.js?ver=1.0')}}" id='skrollr-js'></script>
<script async rel="preconnect" src="{{ asset('/js/wow.min5152.js?ver=1.0')}}" id='wow-js'></script>
<script async rel="preconnect" src="{{ asset('/js/jquery.countdown.min5152.js?ver=1.0')}}" id='jquery-countdown-js'></script>
<script async rel="preconnect" src="{{ asset('/js/appino-custom5152.js?ver=1.0')}}" id='appino-custom-js'></script>
<script rel="preconnect" src="{{ asset('/js/particles/particles.min5152.js?ver=1.0')}}" id='jquery-particles-js'></script>
<script async rel="preconnect" src="{{ asset('/js/particles/app5152.js?ver=1.0')}}" id='jquery-app-js'></script>
<script>
    jQuery(document).ready(function() {
        jQuery(document).on('submit', 'form#appino_subscription', function(e) {
            e.preventDefault();
            var sub_name = jQuery('#subnewsname').val();
            var sub_email = jQuery('#subnewsemail').val();
            //alert(sub_email);
            jQuery.ajax({
                url: "wpadmin/admin-ajax.php",
                type: 'POST',
                data: {
                    sub_email: sub_email,
                    action: 'check_info_details'
                },
                success: function(results) {
                    jQuery('.epic_results').html(results);
                    jQuery('#subnewsemail').val('');
                },
                complete: function() {
                    jQuery('.loading').hide();
                    jQuery(".news_text").show();
                    jQuery("#sidebar_button").show();
                    jQuery('.epic_results').show();
                },
                beforeSend: function() {
                    jQuery('.loading').show();
                    jQuery(".news_text").show();
                    jQuery("#sidebar_button").show();
                    jQuery('.epic_results').hide();
                }
            });

        });

    });
</script>
<!-- === back-to-top End === -->
