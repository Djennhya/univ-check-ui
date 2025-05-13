@extends('frontend.layouts.app')
@section('title', 'About')
@section('header-attr') class="nav-shadow" @endsection

@section('content')
<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html" class="fs-6 text-secondary">Accueil</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="about.html" class="fs-6 text-secondary">A propos</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Breadcrumb Ends Here -->

<!-- About Intro Starts Here -->
<section class="about-intro section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 position-relative mt-4 mt-lg-0" style="z-index: 0;">
                <div class="about-intro__img-wrapper">
                    <img src="{{asset('/frontend/dist/images/about/13.jpg')}}" alt="Intro Image"
                       />
                </div>
                <div class="intro-shape">
                    <img src="{{asset('/frontend/dist/images/shape/rec04.png')}}" alt="Shape"
                        class="img-fluid shape-01" />
                    <img src="{{asset('/frontend/dist/images/shape/dots/dots-img-09.png')}}" alt="Shape"
                        class="img-fluid shape-02" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-intro__textContent">
                    <h2 class="font-title--md mb-3">Dévélopper plus vos compétences</h2>
                    <p class="mt-2 mt-lg-1 mb-2 mb-lg-4 text-secondary">
                        Notre mission est de vous aider à identifier et développer les 
                        compétences clés pour votre réussite. Grâce à des objectifs clairs, 
                        des formations ciblées, et un apprentissage continu, nous vous guidons 
                        vers l'excellence professionnelle et personnelle.
                    </p>
                    <p class="text-secondary">
                        Apprenez, pratiquez, évoluez : développez vos compétences
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Intro Ends Here -->

<!-- About Feature Starts Here -->
<section class="section aboutFeature pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-feature dark-feature">
                    <h5 class="text-white font-title--sm">Qui sommes-nous </h5>
                    <p class="text-lowblack">
                        "Nous sommes une plateforme dédiée au développement des compétences, 
                        offrant des ressources et des outils pour apprendre, pratiquer et 
                        maîtriser de nouvelles aptitudes. Notre objectif est de vous accompagner 
                        dans votre parcours d'apprentissage, en fournissant des formations de 
                        qualité et des conseils d'experts et des opportunités de réseautage.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="about-feature">
                    <h5 class="font-title--sm">Notre Mission</h5>
                    <p class="text-secondary">
                        "Notre mission est de fournir des ressources et des outils pour 
                        aider chacun à identifier, développer et maîtriser les compétences 
                        essentielles à leur réussite. Nous visons à créer un environnement 
                        d'apprentissage engageant et accessible, où chacun peut progresser 
                        à son propre rythme et atteindre ses objectifs professionnels et personnels."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Feature Ends Here -->

<!-- Brands Starts Here -->
<section class="section overflow-hidden brands pb-lg-0">
    <div class="bg-secondary py-80">
        <div class="container">
            <div class="row mb-40">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="brands__titleContent">
                        <h5 class="mb-2 dark-text font-title--sm">
                            Plus de 30 écoles et collèges apprennent avec nous.
                        </h5>
                        <p class="font-para--lg">
                            "Plus de 30 écoles et collèges apprennent avec nous, bénéficiant de nos 
                            ressources pédagogiques et de notre expertise pour enrichir leur enseignement 
                            et soutenir le développement des compétences de leurs étudiants."
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-area">
                        <div class="brand-area-image">
                            <img src="{{asset('/frontend/dist/images/versity/1.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('/frontend/dist/images/versity/2.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('/frontend/dist/images/versity/3.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('/frontend/dist/images/versity/4.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('/frontend/dist/images/versity/2.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                        <div class="brand-area-image">
                            <img src="{{asset('/frontend/dist/images/versity/5.png')}}" alt="Brand"
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Brands Ends Here -->

<!-- Best Instructors Starts Here -->

@endsection

@push('scripts')
@endpush