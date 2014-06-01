@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>ကျွနု်ပ်တို့အကြောင်း</h1>
  </div>
  <div class="main-content col-lg-9">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <section class="row">
      <div class="col-lg-12">
        <h4>မြန်မာဘာသာသို့ပြန် အသုံးပြုနည်း</h4>
        <p>အဖွဲ့ဝင်များအားလုံး စုပေါင်းပြီး Documentation ကို မြန်မာဘာသာဖြင့် ဖတ်ရှုနိုင်ရန် ဘာသာပြန်ထားပါတယ်</p>
      </div>
      <div class="col-lg-12">
        <h4>ဆွေးနွေး ၊ မေးမြန်ရန်အတွက် ဖိုရမ်</h4>
        <p>အတွေ့အကြုံများ ဆွေးနွေးနိုင်မည့်အပြင် မေးခွန်းများမေးမြန်းနိုင်မည့် ဖိုရမ်ရှိပါတယ်</p>
      </div>
      <div class="col-lg-12">
        <h4>နေရာတိုင်းတွင် လူတိုင်း ပူးပေါင်းပါဝင်နိုင်ခြင်း</h4>
        <p>အသုံးပြုနည်းဘာသာပြန်သည့်အပိုင်းမှ အစ ယခုဝဘ်ဆိုက်တည်ဆောက်သည်အထိ ပူးပေါင်းပါဝင်နိုင်ပါတယ်</p>
      </div>
    </section>
  </div>
  <div class="main-sidebar col-lg-3">
    <ul class="sub-page">
    	<li><a href="{{ route('homePage') }}">Home</a></li>
    	<li><a href="{{ route('aboutPage') }}" class="active">About Us</a></li>
    </ul>
  </div>
</section>

@stop