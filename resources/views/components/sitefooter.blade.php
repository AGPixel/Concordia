<footer class="footer-personal v-light mt-50">
    <div class="d-grid grid-md-3 align-items-center">
        <div class="links">
            <ul class="d-flex">
                <li><a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}">Home</a></li>
                <li><a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}sobre">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Sobre" : "About" : "Sobre" }}</a></li>
                <li><a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}portifolio">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Projetos" : "Projects" : "Projetos" }}</a></li>
                <li><a href="{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "/pt/" : "/eng/" : "/pt/" }}servico">{{ isset($_COOKIE['language']) ? $_COOKIE['language'] == 'pt' ? "Serviços" : "Service" : "Serviços" }}</a></li>
            </ul>
        </div>

        <div class="dsn-logo main-logo d-flex align-items-center justify-content-center">
            <div class="main-logo">
                <a href="#" class="custom-logo-link main-brand effect-ajax">
                    <img class="custom-logo logo-light" src="assets/img/logo-light.png" alt="">
                    <img class="custom-logo logo-dark" src="assets/img/logo.png" alt="">
                </a>
            </div>
        </div>

        <div class="copyright">
            <p class="over-hidden">
                <strong>Copyright &copy; 2025{{ date("Y") == '2025' ? '' : '-'.date("Y") }} <a href="https://pixelinmotion.pt/" target="_blank">Pixel In Motion</a>.</strong> All rights reserved.
            </p>
        </div>
    </div>
</footer>
