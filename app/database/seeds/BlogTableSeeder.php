<?php

class BlogTableSeeder extends Seeder {

    public function run()
    {
        DB::table('blogs')->delete();

        LM\Models\Blog::create(
        	array(
        		'title' => 'Hello Laravel Users from Myanmar',
        		'slug' => 'hello-world',
        		'excerpt' => 'Laravel ကိုသုံးပြီးတော့ ပေါ့ပေါ့ပါးပါး Todo List လေးတစ်ခု အတူတူတည်ဆောက် ကြည့်ကြပါမယ်။',
        		'content' => 'Laravel ကိုသုံးပြီးတော့ ပေါ့ပေါ့ပါးပါး Todo List လေးတစ်ခု အတူတူတည်ဆောက် ကြည့်ကြပါမယ်။',
        		'l_version' => '4.2 or Above',
        		'status' => 'active',
        		'user_id' => '1'
        	)
        );

        LM\Models\Blog::create(
        	array(
        		'title' => 'Laravel ဖြင့် Todo List တစ်ခုတည်ဆောက်ခြင်း',
        		'slug' => 'building-a-todo-list',
        		'excerpt' => 'ကိုယ့် Application က Laravel မှာ ပါဝင်လာပြီးသားဖြစ်တဲ့ Authentication မှာပါတဲ့ Feature တွေနဲ့တင် မလုံလောက်ဘဲ ၊ User Role တွေ ၊ User Group တွေပါလာပြီဆိုရင်တော့ Sentry Package ကိုအသုံးပြုနိုင်ပါတယ်',
        		'content' => 'Laravel ကိုသုံးပြီးတော့ ပေါ့ပေါ့ပါးပါး Todo List လေးတစ်ခု အတူတူတည်ဆောက် ကြည့်ကြပါမယ်။',
        		'l_version' => '4.2 or Above',
        		'status' => 'active',
        		'user_id' => '2'
        	)
        );

        LM\Models\Blog::create(
        	array(
        		'title' => 'Authentication အတွက် Sentry Package အသုံးပြုခြင်း',
        		'slug' => 'authentication-with-sentry',
        		'excerpt' => 'ကိုယ့် Application က Laravel မှာ ပါဝင်လာပြီးသားဖြစ်တဲ့ Authentication မှာပါတဲ့ Feature တွေနဲ့တင် မလုံလောက်ဘဲ ၊ User Role တွေ ၊ User Group တွေပါလာပြီဆိုရင်တော့ Sentry Package ကိုအသုံးပြုနိုင်ပါတယ်',
        		'content' => 'ကိုယ့် Application က Laravel မှာ ပါဝင်လာပြီးသားဖြစ်တဲ့ Authentication မှာပါတဲ့ Feature တွေနဲ့တင် မလုံလောက်ဘဲ ၊ User Role တွေ ၊ User Group တွေပါလာပြီဆိုရင်တော့ Sentry Package ကိုအသုံးပြုနိုင်ပါတယ်',
        		'l_version' => '4.2 or Above',
        		'status' => 'active',
        		'user_id' => '1'
        	)
        );
    }

}