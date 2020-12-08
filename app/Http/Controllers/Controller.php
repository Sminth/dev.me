<?php

namespace App\Http\Controllers;

use App\projet;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $projets=projet::orderBy('created_at','DESC')->get();
        return view('index',compact("projets"));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function detail(projet $projet){
        return view('details',compact("projet"));
    }

    public function sendMail(Request $request){

        $to_name = 'Emmanuel Malan';
        $to_email = 'emmanuelmalan225@gmail.com';
        $data = array('name'=>"sminth", "body" => "vous avez un nouveau message de ".$request->name." <br> contenu du message : <br> ".$request->message." <br> mail: ".$request->email);
        Mail::send('mail', $data, function($message) use ($to_name, $to_email, $request) {
        $message->to($to_email, $to_name)->subject('Nouveau message de Mr/Mme '.$request->name);
        $message->from('virtus225one@gmail.com','Nouveau message de Mr/Mme '.$request->name);
            
        });
        return redirect()->route('accueil');
    }
}
