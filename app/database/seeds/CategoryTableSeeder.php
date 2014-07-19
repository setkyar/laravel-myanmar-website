<?php

class CategoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('categories')->delete();

        LM\Models\Category::create(
            array(
                'name' => 'Announcement',
                'description' => 'ဆိုက်နှင့်ပတ်သက်သော ကြေညာချက်များ'
            )
        );
        LM\Models\Category::create(
            array(
                'name' => 'News',
                'description' => 'Laravel နှင့်ပတ်သက်သော သတင်းများ'
            )
        );
    }

}