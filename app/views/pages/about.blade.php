@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>ကျွန်ုပ်တို့အကြောင်း</h1>
  </div>
  <div class="main-content col-md-9">
	<p>Laravel Myanmar မှာတော့ Laravel နဲ့ပတ်သက်တဲ့ Tutorial တွေ ၊ သတင်းတွေ ဖတ်ရှုနိုင်မယ့်အပြင် ၊ Documentation ကိုလဲ မြန်မာလိုဖတ်ရှုနိုင်မှာဖြစ်ပါတယ်။</p>
    <section id="what-we-do" class="row" style="margin-top: 10px">
      <div class="what-we-do-item text-left col-md-4">
        <h2 class="app-heading"><a href="http://localhost/laravel-mm/public/blog">ဘလော့ဂ်</a></h2>
        <p>Laravel သင်ခန်းစာများ ၊ သတင်းများ ၊ Review များကို ပုံမှန်ဖော်ပြပေးလျက်ရှိပါသည်</p>
      </div>
      <div class="what-we-do-item text-left col-md-4">
        <h2 class="app-heading"><a href="http://localhost/laravel-mm/public/docs">မြန်မာဘာသာသို့ပြန် အသုံးပြုနည်း</a></h2>
        <p>အဖွဲ့ဝင်များအားလုံး စုပေါင်းပြီး Documentation ကို မြန်မာဘာသာဖြင့် ဖတ်ရှုနိုင်ရန် ဘာသာပြန်ထားပါတယ်</p>
      </div>
      <div class="what-we-do-item text-left col-md-4">
        <h2 class="app-heading"><a href="https://www.facebook.com/groups/laravelmyanmar/" target="_blank">Facebook Group</a></h2>
        <p>Laravel နှင့်ပတ်သက်သမျှ ဆွေးနွေးနိုင်မည့် အပြင် အခက်အခဲများကို Facebook Group တွင် မေးမြန်းနိုင်ပါတယ်</p>
      </div>
    </section>
    <p>
      Laravel Myanmar က တစ်ဦး/တစ်ယောက်အားနဲ့မဟုတ်ဘဲ Contributor တွေရဲ့အားနဲ့ရပ်တည်နေတာဖြစ်ပါတယ်။ သင့်အနေနဲ့လဲ ကျွန်တော်တို့နဲ့ပူးပေါင်းချင်တယ်ဆိုရင် ဝမ်းပန်းတသာ ကြိုဆိုပါတယ်။
    </p>
    <h3>Stay Connected with Us</h3>
    <div class="list-group">
      <a href="https://twitter.com/Laravel_Myanmar" target="_blank" class="list-group-item">
        Twitter - @Laravel_Myanmar
      </a>
      <a href="https://github.com/laravel-myanmar/" target="_blank" class="list-group-item">Github - https://github.com/laravel-myanmar/</a>
      <a href="https://www.facebook.com/laravelmyanmar" target="_blank" class="list-group-item">Facebook Page https://www.facebook.com/laravelmyanmar</a>
      <a href="https://www.facebook.com/groups/laravelmyanmar/" target="_blank" class="list-group-item">Facebook Group https://www.facebook.com/groups/laravelmyanmar/</a>
    </div>
  </div>
  <div class="main-sidebar col-md-3">
    <ul class="sub-page">
    	<li><a href="{{ route('homePage') }}">Home</a></li>
    	<li><a href="{{ route('aboutPage') }}" class="active">About Us</a></li>
    </ul>
  </div>
</section>

@stop