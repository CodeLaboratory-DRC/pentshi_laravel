@extends('templates.app')
@section('header')
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Pensthi.com, Archives, épreuves,cours,université">
    <meta name="description" content="Retrouvez les archives des cours et examens des universités congolaises, partager par des étudiants et professeurs de la communauté.">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Pensthi.com - Archives des cours et épreuves d’université</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="{{ URL::asset('jquery-1.9.1.min.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ URL::asset('nicepage.js') }}" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=abril-fatface">


    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ URL::asset('favicon/site.webmanifest') }}">



    <script type="application/ld+json">
        {
            "@context": "http://schema.org"
            , "@type": "Organization"
            , "name": ""
            , "url": "index.php"
            , "logo": "images/Webp.net-resizeimage4.png"
            , "sameAs": []
        }

    </script>
    <meta property="og:title" content="Pensthi.com - Archives des cours et épreuves d’université">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Retrouvez les archives des cours et examens des universités congolaises, partager par des étudiants et professeurs de la communauté.">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.php">
    <meta property="og:url" content="index.php">
</head>
@endsection

@section('content')

<section class="u-clearfix u-image u-image-tiles u-shading u-section-1" id="carousel_eeb5">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-26-lg u-size-26-xl u-size-32-md u-size-32-sm u-size-32-xs u-layout-cell-1">
                        <div class="u-container-layout u-container-layout-1">
                            <h1 class="u-custom-font u-text u-text-black u-text-1">Archives</h1>
                            <h1 class="u-text u-text-palette-4-base u-text-2">Examens et tp's</h1>
                            <div class="u-form u-form-1">
                                <form action="lost.php" method="POST" class="u-block-4349-15 u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form">
                                    <div class="u-form-email u-form-group">
                                        <label for="email-c151" class="u-form-control-hidden u-label">Email</label>
                                        <input type="text" placeholder="effectuer une recherche ici" id="email-c151" name="text" class="u-border-1 u-border-white u-input u-input-rectangle u-white" required="">
                                    </div>
                                    <div class="u-form-group u-form-submit">
                                        <a href="#" class="u-btn u-btn-submit u-button-style u-palette-4-base u-btn-1">Chercher<br>
                                        </a>
                                        <input type="submit" value="submit" class="u-form-control-hidden">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-28-md u-size-28-sm u-size-28-xs u-size-34-lg u-size-34-xl u-image-1">
                        <div class="u-container-layout u-container-layout-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-3205">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3>Cours Populaires</h3>
        <div class="u-blog u-repeater u-repeater-1">
            <div class="u-align-center u-blog-post u-container-style u-grey-5 u-repeater-item u-repeater-item-1">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                    <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="images/1.jpeg">

                    <h4 class="u-blog-control u-text u-text-1">
                        <a class="u-post-header-link" href="#">Post 1 Headline</a>
                    </h4>
                    <div class="u-blog-control u-post-tags u-post-tags-1">
                        <a>Tag 1</a>,<a>Tag 2</a>,<a>Tag 3</a>
                    </div>

                    <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                        <span class="u-meta-date u-meta-icon">Fri Jun 19 2020</span>
                        <span class="u-meta-comments u-meta-icon">Comments (0)</span>
                    </div>
                    <a href="" class="u-blog-control u-btn u-button-style u-btn-1">Afficher</a>
                </div>
            </div>

            <div class="u-align-center u-blog-post u-container-style u-grey-5 u-repeater-item u-video-cover u-repeater-item-2">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                    <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-2" src="images/2.jpeg">

                    <h4 class="u-blog-control u-text u-text-2">
                        <a class="u-post-header-link" href="#">Post 2 Headline</a>
                    </h4>
                    <div class="u-blog-control u-post-tags u-post-tags-2">
                        <a>Tag 1</a>,<a>Tag 2</a>,<a>Tag 3</a>
                    </div>
                    <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-2">
                        <span class="u-meta-date u-meta-icon">Fri Jun 19 2020</span>
                        <span class="u-meta-comments u-meta-icon">Comments (0)</span>
                    </div>
                    <a href="" class="u-blog-control u-btn u-button-style u-btn-2">Afficher</a>
                </div>
            </div>
            <div class="u-align-center u-blog-post u-container-style u-grey-5 u-repeater-item u-video-cover u-repeater-item-3">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                    <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="images/3.jpeg">
                    <h4 class="u-blog-control u-text u-text-3">
                        <a class="u-post-header-link" href="#">Post 3 Headline</a>
                    </h4>
                    <div class="u-blog-control u-post-tags u-post-tags-3">
                        <a>Tag 1</a>,<a>Tag 2</a>,<a>Tag 3</a>
                    </div>
                    <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                        <span class="u-meta-date u-meta-icon">Fri Jun 19 2020</span>
                        <span class="u-meta-comments u-meta-icon">Comments (0)</span>
                    </div>

                    <a href="" class="u-blog-control u-btn u-button-style u-btn-3">Afficher</a>
                </div>
            </div>
        </div>
    </div>
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3>Epreuves Populaires</h3>
        <div class="u-blog u-repeater u-repeater-1">
            <div class="u-align-center u-blog-post u-container-style u-grey-5 u-repeater-item u-repeater-item-1">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                    <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="images/1.jpeg">

                    <h4 class="u-blog-control u-text u-text-1">
                        <a class="u-post-header-link" href="#">Post 1 Headline</a>
                    </h4>
                    <div class="u-blog-control u-post-tags u-post-tags-1">
                        <a>Tag 1</a>,<a>Tag 2</a>,<a>Tag 3</a>
                    </div>

                    <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-1">
                        <span class="u-meta-date u-meta-icon">Fri Jun 19 2020</span>
                        <span class="u-meta-comments u-meta-icon">Comments (0)</span>
                    </div>
                    <a href="" class="u-blog-control u-btn u-button-style u-btn-1">Afficher</a>
                </div>
            </div>

            <div class="u-align-center u-blog-post u-container-style u-grey-5 u-repeater-item u-video-cover u-repeater-item-2">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                    <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-2" src="images/2.jpeg">

                    <h4 class="u-blog-control u-text u-text-2">
                        <a class="u-post-header-link" href="#">Post 2 Headline</a>
                    </h4>
                    <div class="u-blog-control u-post-tags u-post-tags-2">
                        <a>Tag 1</a>,<a>Tag 2</a>,<a>Tag 3</a>
                    </div>
                    <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-2">
                        <span class="u-meta-date u-meta-icon">Fri Jun 19 2020</span>
                        <span class="u-meta-comments u-meta-icon">Comments (0)</span>
                    </div>
                    <a href="" class="u-blog-control u-btn u-button-style u-btn-2">Afficher</a>
                </div>
            </div>
            <div class="u-align-center u-blog-post u-container-style u-grey-5 u-repeater-item u-video-cover u-repeater-item-3">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                    <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-3" src="images/3.jpeg">
                    <h4 class="u-blog-control u-text u-text-3">
                        <a class="u-post-header-link" href="#">Post 3 Headline</a>
                    </h4>
                    <div class="u-blog-control u-post-tags u-post-tags-3">
                        <a>Tag 1</a>,<a>Tag 2</a>,<a>Tag 3</a>
                    </div>
                    <div class="u-blog-control u-metadata u-text-grey-30 u-metadata-3">
                        <span class="u-meta-date u-meta-icon">Fri Jun 19 2020</span>
                        <span class="u-meta-comments u-meta-icon">Comments (0)</span>
                    </div>

                    <a href="" class="u-blog-control u-btn u-button-style u-btn-3">Afficher</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-palette-3-light-3 u-section-3" id="carousel_0428">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-size-42 u-size-60-md">
                        <div class="u-layout-row">
                            <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-1">
                                <div class="u-container-layout u-valign-middle u-container-layout-1">
                                    <h2 class="u-heading-font u-text u-text-1">Abonnez-vous à notre newsletter</h2>
                                    <p class="u-text u-text-font u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                        nullam nunc justo sagittis suscipit ultrices. Sample text. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
                                    <div class="u-form u-form-1">
                                        <form action="https://nicepage.com/editor/Forms/Process" method="POST" class="u-block-3251-25 u-clearfix u-form-horizontal u-form-spacing-15 u-inner-form" source="email">
                                            <!-- hidden inputs for siteId and pageId -->
                                            <input type="hidden" id="siteId" name="siteId" value="176195">
                                            <input type="hidden" id="pageId" name="pageId" value="176196"><!-- always visible -->
                                            <div class="u-form-email u-form-group">
                                                <label for="email-d820" class="u-form-control-hidden u-label">Email</label>
                                                <input type="email" placeholder="Entrez une adresse mail valide" id="email-d820" name="email" class="u-active-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-hover-palette-1-base u-input u-input-rectangle u-white" required="">
                                            </div>
                                            <div class="u-form-group u-form-submit">
                                                <a href="#" class="u-black u-border-1 u-border-black u-btn u-btn-submit u-button-style u-btn-1">soumettre</a>
                                                <input type="submit" value="submit" class="u-form-control-hidden">
                                            </div>
                                            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.
                                            </div>
                                            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix
                                                errors then try again. </div>
                                            <input type="hidden" value="" name="recaptchaResponse">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-18 u-size-60-md">
                        <div class="u-layout-col">
                            <div class="u-container-style u-hidden-md u-hidden-sm u-hidden-xs u-layout-cell u-right-cell u-size-20 u-layout-cell-2">
                                <div class="u-container-layout">
                                    <img src="images/default-image.jpg" alt="" class="u-image u-image-circle u-image-1" data-image-width="2000" data-image-height="1333">
                                </div>
                            </div>
                            <div class="u-container-style u-layout-cell u-right-cell u-size-40 u-layout-cell-3">
                                <div class="u-container-layout">
                                    <img class="u-expanded-width u-image u-image-2" src="images/dd1105f0f31a455551384292c6b8c989.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
