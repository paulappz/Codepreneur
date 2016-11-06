<?php

class AreasTableSeeder extends Seeder {
    public function run()
    {
        $areas = [
            ['description'=>'FUTA - North Gate', 'name' => 'FUTA-NORTH'],
            ['description'=>'FUTA - South Gate', 'name' => 'FUTA-SOUTH'],
            ['description'=>'Apatapiti - Community, FUTA', 'name' => 'FUTA-SOUTH'],
            ['description'=>'Alaba - Community, FUTA(Aba - Oyo)', 'name' => 'FUTA-SOUTH'],
            ['description'=>'Akure - South LGA Secretariat', 'name' => 'AK-LGA'],
            ['description'=>'Ilesha Garage - Aule Junction', 'name' => 'ILESHA-GRG'],
            ['description'=>'Lafe Junction', 'name' => 'LAFE'],
            ['description'=>'Police Headquarters', 'name' => 'PHEADQ'],
            ['description'=>'Leo Hospital - Junction', 'name' => 'LEO'],
            ['description'=>'Champion - Junction', 'name' => 'CHAMP'],
            ['description'=>'Obadare - Junction', 'name' => 'OBDA'],
            ['description'=>'Oyemekun Grammar School', 'name' => 'OGSA'],
            ['description'=>'Ondo Bye - Pass', 'name' => 'BYEPASS'],
            ['description'=>'Ondo State Library', 'name' => 'LIB'],
            ['description'=>'Bishop Adegbola - Junction', 'name' => 'BISHADE'],
            ['description'=>'Cathedral - Traffic Light', 'name' => 'CATHE'],
            ['description'=>'Akure Stadium Junction', 'name' => 'STDM'],
            ['description'=>'Old Garage', 'name' => 'OLDGRG'],
            ['description'=>'Post Office (NIPOST)', 'name' => 'POSTOFF'],
            ['description'=>'Oja - Oba Adesida', 'name' => 'OJA'],
        ];

        $seeded = DB::table('areas')->where('description', $areas[0]['description'])->count() > 0;
        if (!$seeded)
            foreach($areas as $area) {
                Area::create($area);
            }

    }
}
