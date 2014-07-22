@extends('templates.layouts.default')

@section('content')
    <section id="main-masthead" class="main-masthead">
      <h1 class="masthead-title">Laravel - Myanmar Community</h1>
      <span class="masthead-flag"></span>
    </section>

    <section id="what-we-do" class="row">
      <div class="what-we-do-item col-md-4">
        <h2 class="app-heading"><a href="{{ url('blog') }}">ဘလော့ဂ်</a></h2>
        <p>Laravel သင်ခန်းစာများ ၊ သတင်းများ ၊ Review များကို ပုံမှန်ဖော်ပြပေးလျက်ရှိပါသည်</p>
      </div>
      <div class="what-we-do-item col-md-4">
        <h2 class="app-heading"><a href="{{ url('docs') }}">မြန်မာဘာသာပြန်ထားသော အသုံးပြုနည်း</a></h2>
        <p>အဖွဲ့ဝင်များအားလုံး စုပေါင်းပြီး Documentation ကို မြန်မာဘာသာဖြင့် ဖတ်ရှုနိုင်ရန် ဘာသာပြန်ထားပါတယ်</p>
      </div>
      <div class="what-we-do-item col-md-4">
        <h2 class="app-heading"><a href="https://www.facebook.com/groups/laravelmyanmar/" target="_blank">Facebook Group</a></h2>
        <p>Laravel နှင့်ပတ်သက်သမျှ ဆွေးနွေးနိုင်မည့် အပြင် အခက်အခဲများကို Facebook Group တွင် မေးမြန်းနိုင်ပါတယ်</p>
      </div>
    </section>
@stop