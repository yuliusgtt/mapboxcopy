<?php

namespace App\Http\Controllers;

use App\Models\mapdata;
use Illuminate\Http\Request;
use Bagusindrayana\LaravelMaps\LaravelMaps;
use Bagusindrayana\LaravelMaps\Mapbox;
use Bagusindrayana\LaravelMaps\Leaflet\LeafletMarker;


class MapBoxController extends Controller
{
    public function index(){
        $mapdata1 = mapdata::select('id','poligon', 'latitude','longitude')->first();
        $mapdata = mapdata::select('id','poligon', 'latitude','longitude')->get();

        $map = LaravelMaps::leaflet('map')
            ->setView([$mapdata1->latitude, $mapdata1->longitude], 15);
        
        foreach($mapdata as $items){

            $idd = $items->id;
            $poli = $items->poligon;
            $lat = $items->latitude;
            $long = $items->longitude;

            $marker = new LeafletMarker([$lat, $long]);
            $marker->bindPopup('detail koordinat '. $idd.'='.$lat.','.$long);
            $map->addMarker($marker);
        }
        
        return view('welcome',compact('map'));
    }
}
