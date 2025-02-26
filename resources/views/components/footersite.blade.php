<footer class="footer background-section v-dark pt-60">
    <div class="container p-relative">
        <div class="d-grid grid-lg-4 grid-md-3">
            <div class="logo-wrap">
                <div class="logo d-flex">
                    <img src="{{ asset("/assets/img/logo-light.png") }}" alt="" class="logo">
                </div>
                <svg class="shape-one" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_13_104)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30 0H0C16.5684 0 30 13.4314 30 30V0Z" fill="#0E0E0E" />
                    </g>
                    <defs>
                        <clipPath id="clip0_13_104">
                            <rect width="30" height="30" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <svg class="shape-two" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H30C13.4316 0 0 13.4314 0 30V0Z" fill="#0E0E0E" />
                </svg>

            </div>

            <div class="footer-links">
                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                    {{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "INFORMAÇÃO" : "INFORMATION" : "INFORMAÇÃO" }}</h4>
                <ul>
                    <li class="">
                        <a href="{{ $args->navigation_url_1 ? $args->navigation_url_1 : '#' }}">{{ $args->navigation_title_1 ? $args->navigation_title_1 : 'navigation_title_1' }}</a>
                    </li>
                    <li class="">
                        <a href="{{ $args->navigation_url_2 ? $args->navigation_url_2 : '#' }}">{{ $args->navigation_title_2 ? $args->navigation_title_2 : 'navigation_title_2' }}</a>
                    </li>
                    <li class="">
                        <a href="{{ $args->navigation_url_3 ? $args->navigation_url_3 : '#' }}">{{ $args->navigation_title_3 ? $args->navigation_title_3 : 'navigation_title_3' }}</a>
                    </li>
                    <li class="">
                        <a href="{{ $args->navigation_url_4 ? $args->navigation_url_4 : '#' }}">{{ $args->navigation_title_4 ? $args->navigation_title_4 : 'navigation_title_4' }}</a>
                    </li>

                </ul>
            </div>

            <div class="footer-contact">
                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                    {{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "LINKS ÚTEIS" : "USEFUL LINKS" : "LINKS ÚTEIS" }}
                </h4>

                <ul>
                    <li class="li-links-uteis">
                        <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}service-terms">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Termos de Serviço" : "Service Terms" : "Termos de Serviço" }}</a>
                    </li>
                    <li class="li-links-uteis">
                        <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}privacy-politics">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Politica de Privacidade" : "Privacy Politics" : "Politica de Privacidade" }}</a>
                    </li>
                    <li class="li-links-uteis">
                        <a href="https://www.livroreclamacoes.pt/Inicio/" target="_blank">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Livro de Reclamações" : "Complaints Book" : "Livro de Reclamações" }}</a>
                    </li>
                    <li class="li-links-uteis">
                        <a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}contato">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Contacte-nos" : "Talk to us" : "Contacte-nos" }}</a>
                    </li>
                </ul>

            </div>

            <div class="footer-socials">
                <h4 class="sm-title-block p-relative circle-before circle-after circle-both-before mb-10 text-upper">
                    {{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "SIGA-NOS" : "FOLLOW US" : "SIGA-NOS" }}
                </h4>
                <ul class="dsn-socials box-social">
                    <li>
                        <a href="{{ $args->social_url_facebook ? $args->social_url_facebook : 'social_url_facebook' }}" target="_blank" class="background-main">
                            <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>FB</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $args->social_url_instagram ? $args->social_url_instagram : 'social_url_instagram' }}" target="_blank" class="background-main">
                            <i class="fab fa-instagram" aria-hidden="true"></i> <span>IN</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $args->social_url_twitter ? $args->social_url_twitter : 'social_url_twitter' }}" target="_blank" class="background-main">
                            <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                        </a>
                    </li>
                </ul>

                <div style="margin-top: 2em;">
                    {{ $contact->footer_email }}
                </div>
                <div style="margin-top: 0.5em;">
                    {{ $contact->footer_call }}
                </div>

            </div>
        </div>
        <div class="dsn-default-btn dsn-icon-heading-color text-align-end">
            <a class="dsn-btn dsn-border border-color-default background-transparent image-zoom move-circle has-icon-left dsn-parallax-hover" href="#main_root" rel="nofollow" data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
                <span class="d-flex align-items-center justify-content-center h-100">
                    <span class="dsn-icon no-padding heading-color z-index-1 btn-icon-left">
                        <svg enable-background="new 0 0 32 32" version="1.1" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path d="M24.285,11.284L16,19.571l-8.285-8.288c-0.395-0.395-1.034-0.395-1.429,0  c-0.394,0.395-0.394,1.035,0,1.43l8.999,9.002l0,0l0,0c0.394,0.395,1.034,0.395,1.428,0l8.999-9.002  c0.394-0.395,0.394-1.036,0-1.431C25.319,10.889,24.679,10.889,24.285,11.284z" fill="#121313" id="Expand_More"></path>

                        </svg>
                    </span>
                    <span class="title-btn p-relative  z-index-1 heading-color" data-animate-text="SCROLL TOP">
                        <span>SCROLL TOP</span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class="copyright background-main">
        <div class="container d-flex align-items-center justify-content-between">
            <strong>Copyright Concórdia Management 2025{{ date("Y") == '2025' ? '' : '-'.date("Y") }} &copy; Todos os direitos reservados.</strong>
            Licença AMI 13796
            <div>Desenvolvido por <a class="text-link" href="https://pixelinmotion.pt/" target="_blank">Pixel In Motion</a></div>
            <!-- 
            Desenvolvedor: Lucas Daniel Beltrame de Lima Rodrigues 
            Linkedin: https://www.linkedin.com/in/lucas-dniel-beltrame-de-lima-rodrigues/
            -->
        </div>
    </div>
</footer>
