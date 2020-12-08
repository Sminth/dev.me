@extends('app')
@section('active-1','nav-non-active')
@section('active-2','nav-active')
@section('active-3','nav-non-active')
@section('title','Apropos')
    
@section('content')

    <link href="{{asset('css/bootstrap-custom.css')}}" rel="stylesheet" type="text/css">

    <div class="row">

        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

            <article role="pge-title-content">

                <header>

                    <h2 class="d-none d-lg-block"><span style="color:rgb(231, 130, 0)">je fait</span>ce que j'aime faire !</h2>
                    <h3 class="d-lg-none" style="font-size: 40px;"><span style="display: block;color:rgb(231, 130, 0);font-size:50px">je fait</span>ce que j'aime faire !</h3>

                </header>

                <p>Je suis programmeur, amoureux du code et du design...</p>
                <blockquote class="blockquote" style="font-style:normal;
  margin-left:5px;
  font-family:'Segoe Print', 'Times New Roman', Verdana;
  padding-left: 48px;
  background:url('/images/blockquote.png');
  background-repeat:no-repeat;
  min-height: 30px; ">
                    <p>pour moi la programmation est plus qu'une pratique importante, c'est aussi un formidable moyen d'atteindre les bases de la connaissance.</p>
                </blockquote>

            </article>

        </section>

        <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <article class="about-content col-12" style="background:rgb(231, 130, 0);">

                <p>Je me nomme Emmanuel Malan, Etudiant en licence 2 MIAGE-GI et j'ai 20 ans . <br>
                    Je suis amoureux de la technologie et de la programmation,
                    apprendre à coder m'a permet de garder un esprit vif et une logique qui coïncident avec l’émergence des nouvelles technologies .<br>
                    Chaque jour j'apprend de nouvelles choses, afin de creer quelques chose d'innovent, c'est incroyable de savoir qu'avec un bout de code je peux faire beaucoup de chose !
                </p>

                <p>J'écris du code dans le langage qui me tombe sous la main, pour innover, automatiser les taches les plus ennuyeuses .</p>

            </article>

        </section>



        <div class="clearfix"></div>



        <!-- thumbnails -->

        <div class="thumbnails-pan">

            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-6 d-none d-lg-block">

                <figure>

                    <img src="{{asset('images/about-images/bg.jpg')}}" class="img-responsive" style="max-height: 350px;width:500px" />

                    <figcaption>

                        <h3>codeur pour la vie</h3>

                    </figcaption>

                </figure>

            </section>



            <section class="col-xs-12 col-sm-4 col-md-4 col-lg-6 ">
                <figure>

                    <img src="{{asset('images/about-images/ma.jpg')}}" class="img-responsive" />

                    <figcaption>

                        <h3>Emmanuel Malan</h3>

                        <h5>programmeur</h5>

                    </figcaption>

                </figure>


            </section>


        </div>

        <!-- thumbnails -->

    </div>
@stop