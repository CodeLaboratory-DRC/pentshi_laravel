@extends('templates.app')
@section('header')
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="SE CONNECTIOn">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Ajouter une Epreuve - Archives des cours et épreuves d’université</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Se-connecter.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.2.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org"
            , "@type": "Organization"
            , "name": ""
            , "url": "index.html"
            , "logo": "images/Webp.net-resizeimage4.png"
            , "sameAs": []
        }

    </script>
    <meta property="og:title" content="Connection - Archives des cours et épreuves d’université">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="/">
    <meta property="og:url" content="/">
</head>
@endsection
@section('content')
<section class="u-align-center u-clearfix u-grey-5 u-section-1" id="carousel_a6ae">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-border-10 u-border-palette-1-base u-container-style u-group u-group-1">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
                <h2 class="u-align-center u-text u-text-1">Ajouter une epreuve</h2>
                <p class="u-align-center u-text u-text-2">Completer les informations </p>
                <div class="u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="email" name="form">
                        <input type="hidden" id="siteId" name="siteId" value="176195">
                        <input type="hidden" id="pageId" name="pageId" value="176220">
                        <div class="u-form-group u-form-phone">
                            <label for="name-31bd" class="u-label">Titre</label>
                            <input type="tel" placeholder="Intitule de l'epreuve" id="name-31bd" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                        </div>
                        <div class="u-form-group">
                            <label for="email-31bd" class="u-label">Promotion</label>
                            <input type="text" placeholder="Choisir la promotion" id="email-31bd" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                        </div>
                        <div class="u-align-center u-form-group u-form-submit">
                            <a href="#" class="u-btn u-btn-submit u-button-style">Soumettre</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
