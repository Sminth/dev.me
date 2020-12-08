@extends('app')
@section('active-1','nav-active')
@section('active-2','nav-non-active')
@section('active-3','nav-non-active')
@section('title','detail')
    
@section('content')

            <!-- work details -->

                	<div class="work-details">


                        <div class="row">

                        	<div class="col-xs-12 col-sm-12 col-md-4">

                            	<header role="work-title" >

                                	<h2>{{$projet->nom}}</h2>
                                    @if ($projet->liensite)
                                    <a href="http://{{$projet->liensite}}" target="_blank">Visité en ligne <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    @endif
                                    @if ($projet->liengithub)
                                    <a href="{{$projet->liengithub}}">code source (github)<i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    @else 
                                    <p><i>Ø aucun lien vers le referentiel</i></p>
                                    @endif

                                </header> 

                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-8">

                            	<section>

                                	<p>{!! $projet->description !!}</p>

                                    <p><strong>Evolution</strong><br/>
                                        @php
                                            if($projet->progression<=25) $bg="red";
                                            elseif($projet->progression<=50) $bg="green";
                                            elseif($projet->progression<=75) $bg="blue";
                                            else $bg="orange";
                                        @endphp
                                        <div class="progress"style="width: 100%;" >
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width:{{$projet->progression}}%;background-color:{{$bg}}" 
                                            aria-valuenow="{{$projet->progression}}" aria-valuemin="0" aria-valuemax="100">{{$projet->progression}}%</div>
                                        </div>
                                        <p><strong>Outil(s) & Langage(s) utilisé(s)</strong><br/>
                                        <p>{{$projet->langage}}</p>
                                </section>

                            </div> 
 
                        </div>

                        <div class="clearfix"></div>

                        

                        <div class="work-images grid">

                            <ul class="grid-lod effect-2" id="grid">
                                @if(count($projet->images)<2)
                                <li><img src="{{asset('images/work/'.$projet->images[0]->nom)}}" alt="" class="img-responsive"/></li>
                                    
                                @else
                                @foreach ($projet->images as $i=>$item)
                                @if($i!=0 and $item)
                                <li><img src="{{asset('images/work/'.$item->nom)}}" alt="" class="img-responsive"/></li>
                                @endif
                               @endforeach
                                @endif
                            </ul>

                        </div>

                        

                    </div>

                <!-- work details -->
@stop