<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use App\Embassy;
class SiteController extends Controller
{
    
	public static function hotels(){
        $client = new Client();
      //  $client->getHttpClient('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=5000&type=hotel&keyword=hotel&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0')->setDefaultOption('verify', false);
    
       $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=5000&type=hotel&keyword=hotel&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
        $h= $places['results'];
       // echo $response->getBody();
        $hotels=[];
        foreach($h as $hotel){
        	$r = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$hotel['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($r->getBody(),true);
        		$hotels[]= $r1['result'];
        }
       // return $arr;
        return view('user.pages.hotels',compact('hotels'));
	}
    public function home(){
    	return view('user.pages.home');
    }
    public function hejj(){
    	return view('user.pages.hejj');
    }
    public function calender(){
    	return view('user.pages.calender');
    }
    public function embassies(){
    	$embassies=Embassy::all();
    	return view('user.pages.embassies',compact('embassies'));
    }

    public function markets(){
    	$client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=10000&type=market&keyword=market&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
         $m= $places['results'];
          $markets=[];
        foreach($m as $market){
        	$re = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$market['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($re->getBody(),true);
        		$markets[]= $r1['result'];
        }
    	return view('user.pages.market',compact('markets'));
    }
    public function resturants(){
    	$client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=10000&type=resturant&keyword=resturant&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
         $r= $places['results'];
          $resturants=[];
        foreach($r as $resturant){
        	$re = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$resturant['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($re->getBody(),true);
        		$resturants[]= $r1['result'];
        }
    	return view('user.pages.resturants',compact('resturants'));
    }
    public function transportation(){
    	$client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=2000&type=transportation&keyword=transportation&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
         $t= $places['results'];
         $transportations=[];
        foreach($t as $transportation){
        	$re = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$transportation['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($re->getBody(),true);
        		$transportations[]= $r1['result'];
        }
    	return view('user.pages.transportation',compact('transportations'));
    }
    public function emergencies(){
    	$client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=2000&type=police&keyword=police&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
         $p= $places['results'];
         $policies=[];
        foreach($p as $police){
        	$re = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$police['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($re->getBody(),true);
        		$policies[]= $r1['result'];
        }


         $response1 = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=2000&type=ambulance&keyword=ambulance&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places1= json_decode($response1->getBody(),true);
         $a= $places1['results'];

        $ambulances=[];
        foreach($a as $ambulance){
        	$re = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$ambulance['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($re->getBody(),true);
        		$ambulances[]= $r1['result'];
        }
         $response2 = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=1000&type=fire&keyword=fire&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places2= json_decode($response2->getBody(),true);
         $fs= $places2['results'];
         $fire_stations=[];
        foreach($fs as $fire){
        	$re = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$fire['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($re->getBody(),true);
        		$fire_stations[]= $r1['result'];
        }


    	return view('user.pages.emergencies',compact(['policies','ambulances','fire_stations']));
    }
    public function hospitals(){
    	$client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=21.422510,%2039.826168&radius=10000&type=hospital&keyword=hospital&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
         $h= $places['results'];
          $hospitals=[];
        foreach($h as $hospital){
        	$r = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$hospital['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($r->getBody(),true);
        		$hospitals[]= $r1['result'];
        }
    	return view('user.pages.hospitals',compact('hospitals'));
    }
    public function umra(){
    	return view('user.pages.umra');
    }

    public function get_embassies(){
    	//24.774265, 46.738586
    	$client = new Client();
        $response = $client->get('https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=24.774265, 46.738586&radius=10000&type=embassy&keyword=embassy&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');
        $places= json_decode($response->getBody(),true);
         $e= $places['results'];
         foreach($e as $embassy){
        	$r = $client->get('https://maps.googleapis.com/maps/api/place/details/json?placeid='.$embassy['place_id'].'&key=AIzaSyDri898Pju6FtGLdIrmN8itz4SmzKMVqI0');

        	$r1	=json_decode($r->getBody(),true);
        		$embassies[]= $r1['result'];
        }
        $i=1;
         foreach($embassies as $embassy){
         	//$emb=new Embassy();

         	//$emb->name=$embassy['name'];
         	//$emb->address=$embassy['vicinity'];
         	$emb=Embassy::find($i);
         	$emb->phone=isset($embassy['international_phone_number'])?$embassy['international_phone_number']:'No Number';
         	$emb->save();
         	$i++;
         }
    	
    }
}
