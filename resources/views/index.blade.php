@extends('app')
@section('active-1','nav-active')
@section('active-2','nav-non-active')
@section('active-3','nav-non-active')
@section('title','Accueil')
    
@section('content')
    
<div class="row">

    <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">

               <article role="pge-title-content">

                   <header>

                       <h2><span style="color: rgb(231, 130, 0);">Malan Emm.</span>coder est un art !</h2>

                   </header>

                   <p>Ceci est mon portefolio, vous retrouverez mes projets terminés et ceux en cour ..!</p>
                   <br>
               </article>

           </section>


           <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">
               
              
               <figure class="effect-oscar">
                   @foreach ($projets[0]->images as $item)
                   <img src="{{asset('images/work/'.$item->nom)}}" alt="" class="img-responsive" />
                   @break
                   @endforeach

                   <figcaption>

                       <h2><span> {{$projets[0]->nom}}</span></h2>

                       <p>{{$projets[0]->detail}}.</p>

                       <a href="{{route('detail',$projets[0]->id)}}">View more</a>
                   </figcaption>

               </figure>
          
           </section>

           <div class="clearfix"></div>

           @php
               $t=count($projets);
               
                foreach ($projets as $key => $value) {
                    if ($key!=0) {
                        if ($key==intval($t/1.5)) break;
                        $prjs_1[$key-1]=$value;
                    }
                }
                foreach ($projets as $key => $value) {
                    if ($key!=0) {
                        if ($key>=intval($t/1.5)){
                        $prjs_2[$key-1]=$value;}
                    }
                }
                
            @endphp

           
               
           
           <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

               <ul class="grid-lod effect-2" id="grid">
                @foreach ($prjs_1 as $projet)
                   <li>

                       <figure class="effect-oscar">

                        @foreach ($projet->images as $item)
                        
                        <img src="{{asset('images/work/'.$item->nom)}}" alt="" class="img-responsive" />
                        @break
                        @endforeach
                           <figcaption> 

                               <h2><span> {{$projet->nom}}</span></h2>
       
                               <p>{{$projet->detail}}.</p>
       
                               <a href="{{route('detail',$projet->id)}}">View more</a>
                           </figcaption>

                       </figure>

                   </li>
                   @endforeach
               </ul>
           </section>
           

           
               
           
           <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 grid">

               <ul class="grid-lod effect-2" id="grid">
                @foreach ($prjs_2 as $projet)
                   <li>

                       <figure class="effect-oscar">

                        @foreach ($projet->images as $item)
                        <img src="{{asset('images/work/'.$item->nom)}}" alt="" class="img-responsive" />
                        @break
                        @endforeach
                           <figcaption>

                               <h2><span> {{$projet->nom}}</span></h2>
       
                               <p>{{$projet->detail}}.</p>
       
                               <a href="{{route('detail',$projet->id)}}">View more</a>
                           </figcaption>

                       </figure>

                   </li>
                   @endforeach
               </ul>
           </section>
           


           

           <div class="clearfix"></div>

       </div>
@endsection