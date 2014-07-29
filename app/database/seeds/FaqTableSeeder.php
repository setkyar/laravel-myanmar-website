<?php

class FaqTableSeeder extends Seeder {

    public function run()
    {
        DB::table('faqs')->delete();

        LM\Models\Faq::create(
            array(
                'question' => 'MCrypt Error',
                'slug' => 'mcrypt-error',
                'answer' => 'Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum',
                'user_id' => '1',
                'errors' => 'Laravel requires the Mcrypt PHP extension.',
                'status' => 'active'
            )
        );
        LM\Models\Faq::create(
            array(
                'question' => 'Module / Plugin in Laravel',
                'slug' => 'module-in-laravel',
                'answer' => 'Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh.',
                'user_id' => '1',
                'errors' => '',
                'status' => 'active'
            )
        );
    }

}