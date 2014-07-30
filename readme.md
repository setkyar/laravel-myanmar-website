# Website for Laravel

[Laravel Myanmar](http://laravelmyanmar.com) ရဲ့ Source Code တွေပါ။
(ဒီ Readme File က ပြည့်စုံမှုမရှိသေးပါဘူး။ မကြာခင် Update လုပ်ပါမယ်)

## Features
1. User Authentication (Register, Login နှင့် တစ်ခြား Feature တွေကို ဖြည်းဖြည်းချင်း ထပ်ဖြည့်ပါမယ်)
2. Documentation Reader
3. Coming Soon...

### Requirements
ဒီ Laravel Myanmar (Source Code) တွေကို Run ဖို့အတွက် အောက်ကအတိုင်းလိုအပ်ပါတယ်။

- Composer
- PHP >= 5.3.7
- MCrypt PHP Extension

## Installation

ဒီ Source ကို Git Clone လုပ်ပြီး (သို့မဟုတ်) Download လုပ်ပြီး Terminal / CMD ကနေ Project Folder ထဲသွားပါ။ လိုအပ်တဲ့ Package တွေအတွက် Composer Install ပြုလုပ်ပါ။

`composer install`

`app/config/database.php` ထဲမှာ ကိုယ့်ရဲ့ Database information တွေထည့်ပါ။

ပြီးရင် Database Migration လုပ်ရပါမယ်။

`php artisan migrate`
 
## Change Logs

### 29 July 2014
Featured added :
- FAQs system added.
- User Bio now supported Markdown
- Add blog list of respective user on their profile.


Bug fixes :
- Editor no longer save content on LocalStorage
- Fix redirection error on Category creation
- added favicon
- Search no longer accept null query and prompt error message
- Fix title on profile page

## License
Do - 
- Use for your own project
- Use codes or files as a part of your project
- Learn
- Install locally

Don't -
- Remove / modify original author information
