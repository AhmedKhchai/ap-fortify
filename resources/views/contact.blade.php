<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('css/img/AP_LOGO_Rouge_170px.png') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>L’Armoire Poéthique</title>
</head>

<body style="background-color: #f9f9f6">
    <div class="container body-container">
        <div class="row">
            <div class="d-sm-block d-md-block d-lg-none  col-lg-6 col-sm-12  ">
                <div class="container-main-logo">

                    <img src="{{ asset('css/img/AP_LOGO_Rouge.png') }}" class="img-fluid main-logo"
                        alt="l’Armoire Poéthique">
                </div>
                <h2 class="sub-text-main-logo">Bien s'habiller et savoir pourquoi</h2>
                <div class="main-icons">
                    <a href="https://www.linkedin.com/company/l-armoire-po%C3%A9thique/" target="_blank">

                        <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            viewBox="0 0 50 50">
                            <path
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg></a>
                    <a href="https://m.facebook.com/LArmoire-Po%C3%A9thique-100796095773474/" target="_blank">

                        <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            viewBox="0 0 50 50">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg></a>

                    <a href="https://www.instagram.com/larmoirepoethique/" target="_blank">

                        <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            viewBox="0 0 50 50">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg></a>

                </div>
            </div>
            <div class="col-lg-6 col-sm-12" style="margin-top:10%">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 style="margin: 2rem 0rem 2rem 0rem;">Besoin de renseignements ?</h2>
                    </div>
                </div>

                {{-- @if ($sent)
                    <form method="POST" action="/reset">
                        @csrf
                        <button type="submit" class="subscription-success">
                            Message Envoyer
                            <svg id="Group_79" style="margin-left: 1rem;" class="check-mark" data-name="Group 79"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path id="Path_10738" data-name="Path 10738"
                                    d="M12,24A12,12,0,1,1,24,12,12.035,12.035,0,0,1,12,24ZM12,2A10,10,0,1,0,22,12,10.029,10.029,0,0,0,12,2Z"
                                    fill="#fff" />
                                <path id="Path_10739" data-name="Path 10739"
                                    d="M11,16a.908.908,0,0,1-.7-.3l-3-3a.99.99,0,0,1,1.4-1.4l3,3a.967.967,0,0,1,0,1.4A.908.908,0,0,1,11,16Z"
                                    fill="#fff" />
                                <path id="Path_10740" data-name="Path 10740"
                                    d="M11,16a.908.908,0,0,1-.7-.3.967.967,0,0,1,0-1.4l6-6a.99.99,0,0,1,1.4,1.4l-6,6a.908.908,0,0,1-.7.3Z"
                                    fill="#fff" />
                            </svg>

                        </button>
                    </form>
                @else --}}
                <form method="POST" action="/contact/send" class="input-form">
                    @csrf
                    <div class="container mt-3">
                        <div class="row" style="align-items: center;
                            justify-content: center;">
                            <input type="text" class=" col-lg-12 contact-name-input" placeholder="Nom et prénom"
                                name="name">
                            <input type="email" class=" col-lg-12 contact-email-input" placeholder="Email" name="email">
                            <input type="text" class=" col-lg-12 contact-description-input"
                                placeholder="Dites-nous tout !" name="description">
                            <button type="submit" class=" col-lg-12 email-submit-btn">
                                Envoyer

                            </button>
                        </div>
                    </div>
                </form>
                {{-- @endif --}}

            </div>
            <div class="d-none d-sm-none d-md-none d-lg-block  col-lg-6 col-sm-12  ">

                <img src="{{ asset('css/img/AP_LOGO_Rouge.png') }}" class="img-fluid main-logo"
                    alt="l’Armoire Poéthique">

                <h2 class="sub-text-main-logo">Bien s'habiller et savoir pourquoi</h2>
                <div class="main-icons">
                    <a href="https://www.linkedin.com/company/l-armoire-po%C3%A9thique/" target="_blank">

                        <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            viewBox="0 0 50 50">
                            <path
                                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg></a>
                    <a href="https://m.facebook.com/LArmoire-Po%C3%A9thique-100796095773474/" target="_blank">

                        <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            viewBox="0 0 50 50">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg></a>

                    <a href="https://www.instagram.com/larmoirepoethique/" target="_blank">

                        <svg class="main-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            viewBox="0 0 50 50">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg></a>

                </div>

            </div>
        </div>
        <div class="flowers">
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-12 col-md-12 col-12 footer-img-container">

                        <div class="footer-logo">
                            <a href="/">
                                <img src="{{ asset('css/img/AP_LOGO_Noir.png') }}" class="footer-img" alt="">
                            </a>
                        </div>

                    </div>
                    <div class="col-6 col-xl-2 col-md-6 col-sm-6">
                        <ul class="footer-sub-menu">
                            <li class="sub-menu-item"><a class="footer-link" href="/contact">Contactez-nous !</a>
                            </li>
                            <li class="sub-menu-item">Mentions légales</li>
                            {{-- <li class="sub-menu-item">CGU</li> --}}
                        </ul>
                    </div>


                    <div class="col-6 col-xl-4 col-md-6 col-sm-6 footer-icons">
                        <a href="https://www.linkedin.com/company/l-armoire-po%C3%A9thique/" target="_blank">
                            <svg class=" footer-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 50 50">
                                <path
                                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                            </svg>
                        </a>
                        <a href="https://m.facebook.com/LArmoire-Po%C3%A9thique-100796095773474/" target="_blank">
                            <svg class=" footer-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 50 50">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/larmoirepoethique/" target="_blank">
                            <svg class="footer-icon" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 50 50">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg></a>
                    </div>
                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <ul class="footer-main-text">
                            <li class="footer-item">45, rue Sainte Colombe, 33000 Bordeaux </li>
                            <li class="footer-item">06 78 46 98 53 </li>
                            <li class="footer-item">contact@larmoirepoethique.fr</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
