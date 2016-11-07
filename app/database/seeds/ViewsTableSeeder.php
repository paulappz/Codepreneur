<?php

class ViewsTableSeeder extends Seeder {
    public function run()
    {
        $views = [
            ['code'=>'ROADBLK01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'FUTA01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'ILESHA01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'LAFE01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'PHEADQ01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'LEO01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'CHAMPION01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'OBADARE01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'OGSA01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'BYEPASS01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'LIB01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'ADEGBOLA01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'CATHEDRA01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'STADIUM01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'OLDGARAGE01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'OFFICE01', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'OJAO02', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'AKSLGA', 'view'=>'images/views/wakaimg.jpg'],
            ['code'=>'ROADBLK01', 'view'=>'images/views/wakaimg.jpg'],
        ];

        $viewsWithPlaces = array_map(function($view) {
            $place = Place::select('id')->where('code', $view['code'])->first();
            return [
                'place_id'=>$place['id'], 
                'view'=>$view['view']
            ];
        }, $views);


        $seeded = DB::table('views')->where('view', $views[0]['view'])->count() > 0;

        if (!$seeded)
            foreach ($viewsWithPlaces as $view) {
                PlaceView::create($view);
            }
    }
}
