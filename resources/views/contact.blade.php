@extends('app')
@section('active-1','nav-non-active')
@section('active-2','nav-non-active')
@section('active-3','nav-active')
@section('title','Contact')
    
@section('content')
        <link href="css/bootstrap-custom.css" rel="stylesheet" type="text/css">

            <div class="row">

            

            	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

                	<article role="pge-title-content" class="contact-header">

                    	<header>

                        	<h2><span style="color: rgb(231, 130, 0);">Salut !</span> ecrivez moi .</h2>

                        </header>

                        <p><a  href="tel:8197654321"><i class="fa fa-phone" aria-hidden="true"></i><br class="d-block d-lg-none"> +22588364403</a></p>
                        
                        <p><a href="mailto:emmanuelmalan225@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> emmanuelmalan225@gmail.com</a></p>

                    </article>

                </div>

               

                <!-- map -->

                <div class="clearfix"></div>

                

               <!-- contat-from-wrapper -->

               <div class="contat-from-wrapper">

               		  <div id="message"></div>

                        <form method="post" action="{{route('mail')}}" name="cform" id="cform">
                            @csrf
                            <div class="row">

                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

                                <input required  name="name" id="name" type="text" placeholder="votre nom">

                                </div>

                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">

                                <input required name="email" id="email" type="email"  placeholder="votre email">

                                </div>

                            </div>

                            <div class="clearfix"></div>

                            <textarea required name="message" id="msg" cols="" rows="" placeholder="votre message"></textarea>

                            <div class="clearfix"></div>

                             <input style="background-color: rgb(231, 130, 0);" name="" type="submit" value="Envoyer">

                            <div id="simple-msg"></div>

                        </form>

               </div>

            </div>
@stop
   