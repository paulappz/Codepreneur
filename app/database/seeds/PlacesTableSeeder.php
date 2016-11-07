<?php

class PlacesTableSeeder extends Seeder {
    public function run()
    {
        $places = [
           'FUTA - North Gate' => [ 
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Akure-Ilesha Express Way',
                'fair_price'=>50, 
                'transport_mode'=>'FUTA Shuttle', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'ROADBLK01',
                'road'=>'Akure-Ilesha Express Way',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road / Olusegun Obasanjo Way/Akure-Ilesha Express Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>22, 
                'code'=>'ROADBLK01',
                'road'=>'Akure-Ilesha Express Way',
               ],
            ],
            'FUTA - South Gate' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/ FUTA Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'FUTA01',
                'road'=>'FUTA Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Olusegun Obasanjo Way/ FUTA Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>19, 
                'code'=>'FUTA01',
                'road'=>'FUTA Road',
               ], 
            ],
            'Akure - South LGA Secretariat' => [
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/FUTA Rd/Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>17, 
                'code'=>'AKSLGA',
                'road'=>'FUTA Road',
               ], 
            ],
            'Ilesha Garage - Aule Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'FUTA01',
                'road'=>'Olusegun Obasanjo Way',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>15, 
                'code'=>'ILESHA01',
                'road'=>'Olusegun Obasanjo Way',
               ], 
            ],
            'Lafe Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>8, 
                'code'=>'LAFE01',
                'road'=>'Olusegun Obasanjo Way',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>13, 
                'code'=>'LAFE01',
                'road'=>'Olusegun Obasanjo Way',
               ],
            ],
            'Police Headquarters' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>9, 
                'code'=>'PHEADQ01',
                'road'=>'Olusegun Obasanjo Way',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>12, 
                'code'=>'PHEADQ01',
                'road'=>'Olusegun Obasanjo Way',
               ],
            ],
            'Leo Hospital - Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'LEO01',
                'road'=>'Olusegun Obasanjo Way',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>12, 
                'code'=>'LEO01',
                'road'=>'Olusegun Obasanjo Way',
               ],
            ],
            'Champion - Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'CHAMPION01',
                'road'=>'Olusegun Obasanjo Way',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Olusegun Obasanjo Way',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'CHAMPION01',
                'road'=>'Olusegun Obasanjo Way',
               ],
            ],
            'Obadare - Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>12, 
                'code'=>'OBADARE01',
                'road'=>'Oyemekun Road',
               ],
               [
                'name'=>'bishade',
                'route'=> 'Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>7, 
                'code'=>'OBADARE01',
                'road'=>'Oyemekun Road',
               ],
            ],
            'Oyemekun Grammar School' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>13, 
                'code'=>'OGSA01',
                'road'=>'Oyemekun Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road',
                'fair_price'=>30, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>7, 
                'code'=>'OGSA01',
                'road'=>'Oyemekun Road',
               ],
            ],
            'Ondo Bye - Pass' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>19, 
                'code'=>'BYEPASS01',
                'road'=>'Oyemekun Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road',
                'fair_price'=>30, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>3, 
                'code'=>'BYEPASS01',
                'road'=>'Oyemekun Road',
               ],
            ],
            'Ondo State Library' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>22, 
                'code'=>'LIB01',
                'road'=>'Oyemekun Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>1, 
                'code'=>'LIB01',
                'road'=>'Oyemekun Road',
               ],
            ],
            'Bishop Adegbola - Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oyemekun Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>23, 
                'code'=>'ADEGBOLA01',
                'road'=>'Oyemekun Road',
               ],
            ],
            'Cathedral - Traffic Light' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>24, 
                'code'=>'CATHEDRA01',
                'road'=>'Oba Adesida Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Oba Adesida Road',
                'fair_price'=>30, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>3, 
                'code'=>'CATHEDRA01',
                'road'=>'Oba Adesida Road',
               ],
            ],
            'Akure Stadium Junction' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>26, 
                'code'=>'STADIUM01',
                'road'=>'Oba Adesida Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>5, 
                'code'=>'STADIUM01',
                'road'=>'Oba Adesida Road',
               ],
            ],
            'Old Garage' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>28, 
                'code'=>'OLDGARAGE01',
                'road'=>'Oba Adesida Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>7, 
                'code'=>'OLDGARAGE01',
                'road'=>'Oba Adesida Road',
               ],
            ],
            'Post Office (NIPOST)' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>25, 
                'code'=>'OFFICE01',
                'road'=>'Oba Adesida Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>8, 
                'code'=>'OFFICE01',
                'road'=>'Oba Adesida Road',
               ],
            ],
            'Oja - Oba Adesida' => [
               [
                'name'=>'ak-lga', 
                'route'=> 'Olusegun Obasanjo Way/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>26, 
                'code'=>'OJAO02',
                'road'=>'Oba Adesida Road',
               ],
               [
                'name'=>'bishade', 
                'route'=> 'Oyemekun Road/Oba Adesida Road',
                'fair_price'=>50, 
                'transport_mode'=>'Taxi', 
                'way'=>'Direct', 
                'duration'=>10, 
                'code'=>'OJAO02',
                'road'=>'Oba Adesida Road',
               ],
            ],
        ];

        $placesWithAreas = []; 

        foreach (array_keys($places) as $place) {
            $area = Area::select('id')->where('description', $place)->first();
            
            foreach ($places[$place] as $updateAblePlace) {
                $updateAblePlace['area_id'] = $area['id'];
                array_push($placesWithAreas, $updateAblePlace);
            }
        }

        $seeded = DB::table('places')->where('name', 'bishade')->count() > 0;
        
        if($seeded) {
            DB::table('places')->delete();
        }

        foreach($placesWithAreas as $place) {
            Place::create($place);
        }
    }
}
