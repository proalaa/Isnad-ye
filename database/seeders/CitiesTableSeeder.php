<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Country;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yemenId = Country::where('iso_code_3' , '=', 'YEM')->firstOrFail()->id;
        $saudiArabiaId = Country::where('iso_code_3', '=', 'SAU')->firstOrFail()->id;
        $uaeId = Country::where('iso_code_3', '=', 'ARE')->firstOrFail()->id;
        $omanId = Country::where('iso_code_3', '=', 'OMN')->firstOrFail()->id;
        $kuwaitId = Country::where('iso_code_3', '=', 'KWT')->firstOrFail()->id;
        $bahrainId = Country::where('iso_code_3', '=', 'BHR')->firstOrFail()->id;
        $qatarId = Country::where('iso_code_3', '=', 'QAT')->firstOrFail()->id;

        $spainId = Country::where('iso_code_3', '=', 'ESP')->firstOrFail()->id;
        $italyId = Country::where('iso_code_3', '=', 'ITA')->firstOrFail()->id;
        $franceId = Country::where('iso_code_3', '=', 'FRA')->firstOrFail()->id;
        $irelandId = Country::where('iso_code_3', '=', 'IRL')->firstOrFail()->id;
        $greeceId = Country::where('iso_code_3', '=', 'GRC')->firstOrFail()->id;
        $austriaId = Country::where('iso_code_3', '=', 'AUT')->firstOrFail()->id;
        $netherlandsId = Country::where('iso_code_3', '=', 'NLD')->firstOrFail()->id;
        $portugalId = Country::where('iso_code_3', '=', 'PRT')->firstOrFail()->id;
        $belgiumId = Country::where('iso_code_3', '=', 'BEL')->firstOrFail()->id;
        $switzerlandId = Country::where('iso_code_3', '=', 'CHE')->firstOrFail()->id;

        $unitedStatesId = Country::where('iso_code_3', '=', 'USA')->firstOrFail()->id;
        $egyptId = Country::where('iso_code_3', '=', 'EGY')->firstOrFail()->id;
        $turkeyId = Country::where('iso_code_3', '=', 'TUR')->firstOrFail()->id;
        $unitedKingdomId = Country::where('iso_code_3', '=', 'GBR')->firstOrFail()->id;
        $australiaId = Country::where('iso_code_3', '=', 'AUS')->firstOrFail()->id;
        $canadaId = Country::where('iso_code_3', '=', 'CAN')->firstOrFail()->id;
        $jordanId = Country::where('iso_code_3', '=', 'JOR')->firstOrFail()->id;
        $libyaId = Country::where('iso_code_3', '=', 'LBY')->firstOrFail()->id;
        $algeriaId = Country::where('iso_code_3', '=', 'DZA')->firstOrFail()->id;
        $tunisiaId = Country::where('iso_code_3', '=', 'TUN')->firstOrFail()->id;
        $moroccoId = Country::where('iso_code_3', '=', 'MAR')->firstOrFail()->id;
        $lebanonId = Country::where('iso_code_3', '=', 'LBN')->firstOrFail()->id;

        $items = [
            [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Riyadh' , 'ar_name' => 'الرياض' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Hariq' , 'ar_name' => 'الحريق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Kharj' , 'ar_name' => 'الخرج' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Ad Diriyah' , 'ar_name' => 'الدرعية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Ad Dilam' , 'ar_name' => 'الدلم' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Ad Duwadimi' , 'ar_name' => 'الدوادمي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Az Zulfi' , 'ar_name' => 'الزلفي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'As Sulayyil' , 'ar_name' => 'السليل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Ghat' , 'ar_name' => 'الغاط' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Quwayiyah' , 'ar_name' => 'القويعية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Majmaah' , 'ar_name' => 'المجمعة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Muzahimiyah' ,
                'ar_name'    => 'المزاحمية' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Tumair' , 'ar_name' => 'تمير' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Thadiq' , 'ar_name' => 'ثادق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Harmah' , 'ar_name' => 'حرمة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Huraymila' , 'ar_name' => 'حريملاء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Hawtat Bani Tamim' ,
                'ar_name'    => 'حوطة بني تميم' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Shaqra' , 'ar_name' => 'شقراء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Duruma' , 'ar_name' => 'ضرما' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Afif' , 'ar_name' => 'عفيف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Layla' , 'ar_name' => 'ليلى' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Abha' , 'ar_name' => 'أبها' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Abu Arish' , 'ar_name' => 'أبو عريش' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Ad Dammam' , 'ar_name' => 'الدمام' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Adh Dhahran' , 'ar_name' => 'الظهران' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Ahad Al Musarihah' ,
                'ar_name'    => 'احد المسارحة' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Ahad Rifaydah' , 'ar_name' => 'احد رفيده' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Ahsa' , 'ar_name' => 'الأحساء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2874' , 'name' => 'Al Baha' , 'ar_name' => 'الباحة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al Bukayriyah' , 'ar_name' => 'البكيرية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Hufuf' , 'ar_name' => 'الهفوف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Jubail' , 'ar_name' => 'الجبيل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Al Jumum' , 'ar_name' => 'الجموم' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Khafji' , 'ar_name' => 'الخفجي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Khubar' , 'ar_name' => 'الخبر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Al Khurmah' , 'ar_name' => 'الخرمة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Al Madinah Al Munawwarah' ,
                'ar_name'    => 'المدينة المنورة' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Al Majardah' , 'ar_name' => 'المجاردة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al Midhnab' , 'ar_name' => 'المذنب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Mubarraz' , 'ar_name' => 'المبرز' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Qatif' , 'ar_name' => 'القطيف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Al Qunfidhah' , 'ar_name' => 'القنفذة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Al Qurayyat' , 'ar_name' => 'القريات' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Al Wajh' , 'ar_name' => 'الوجه' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Aloweqaliya' , 'ar_name' => 'العويقيلة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'An Nuayriyah' , 'ar_name' => 'النعيرية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ar Rass' , 'ar_name' => 'الرس' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Arar' , 'ar_name' => 'عرعر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Aredah' , 'ar_name' => 'العارضة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ash Shimasiyah' , 'ar_name' => 'الشماسية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2882' , 'name' => 'Ash Shinan' , 'ar_name' => 'الشنان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'At Taif' , 'ar_name' => 'الطائف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Badr' , 'ar_name' => 'بدر' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2874' , 'name' => 'Baljorashi' , 'ar_name' => 'بلجرشي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Balqarn' , 'ar_name' => 'بلقرن' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Beesh' , 'ar_name' => 'بيش' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Billasmar' , 'ar_name' => 'بللسمر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Bishah' , 'ar_name' => 'بيشة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Buqayq' , 'ar_name' => 'بقيق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Buraydah' , 'ar_name' => 'بريدة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Dawmat Al Jandal' ,
                'ar_name'    => 'دومة الجندل' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Duba' , 'ar_name' => 'ضباء' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Hafar Al Batin' ,
                'ar_name'    => 'حفر الباطن' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2882' , 'name' => 'Hail' , 'ar_name' => 'حائل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Haql' , 'ar_name' => 'حقل' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Inak' , 'ar_name' => 'عنك' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Jazan' , 'ar_name' => 'جازان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Jeddah' , 'ar_name' => 'جدة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Khamis Mushayt' ,
                'ar_name'    => 'خميس مشيط' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Khaybar' , 'ar_name' => 'خيبر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Khulays' , 'ar_name' => 'خليص' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'King Abdullah Economic City' ,
                'ar_name'    => 'مدينة الملك عبدالله الاقتصادية' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Makkah Al Mukarramah' ,
                'ar_name'    => 'مكة المكرمة' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Muhayil' , 'ar_name' => 'محايل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2885' , 'name' => 'Najran' , 'ar_name' => 'نجران' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Qaryat Al Ulya' ,
                'ar_name'    => 'قرية العليا' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Rabigh' , 'ar_name' => 'رابغ' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Rafha' , 'ar_name' => 'رفحاء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Ras Tannurah' , 'ar_name' => 'راس تنورة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Rawan' , 'ar_name' => 'روان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Riyad Al Khabra' ,
                'ar_name'    => 'رياض الخبراء' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Sabya' , 'ar_name' => 'صبيا' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Safwa' , 'ar_name' => 'صفوى' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Sakaka' , 'ar_name' => 'سكاكا' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Samtah' , 'ar_name' => 'صامطة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Sayhat' , 'ar_name' => 'سيهات' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2885' , 'name' => 'Sharurah' , 'ar_name' => 'شرورة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Tabarjel' , 'ar_name' => 'طبرجل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Tabuk' , 'ar_name' => 'تبوك' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Tarut' , 'ar_name' => 'تاروت' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Tathilith' , 'ar_name' => 'تثليث' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Tayma' , 'ar_name' => 'تيماء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Thuwal' , 'ar_name' => 'ثول' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Turaif' , 'ar_name' => 'طريف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Turbah' , 'ar_name' => 'تربه' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Umluj' , 'ar_name' => 'املج' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Unayzah' , 'ar_name' => 'عنيزة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Uyun Al Jawa' ,
                'ar_name'    => 'عيون الجواء' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2885' , 'name' => 'Yadamah' , 'ar_name' => 'يدمة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Yanbu' , 'ar_name' => 'ينبع' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Dhahran Aljanoub' ,
                'ar_name'    => 'ظهران الجنوب' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Ad Darb' , 'ar_name' => 'الدرب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Aflaj' , 'ar_name' => 'أفلاج' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'An Namas' , 'ar_name' => 'النماص' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Aqiq' , 'ar_name' => 'عقيق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'At Tuwal' , 'ar_name' => 'الطوال' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Badaya' , 'ar_name' => 'البدائع' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Rahima' , 'ar_name' => 'رحيمة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Ranyah' , 'ar_name' => 'رانيا' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Sabt Alalayah' ,
                'ar_name'    => 'سبت العلايه' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Mukhwah' , 'ar_name' => 'المخواة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Sajir' , 'ar_name' => 'ساجر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Sarat Abida' , 'ar_name' => 'سراة عبيدة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Batha' , 'ar_name' => 'بطحة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Hawtat Sudayr' , 'ar_name' => 'حوطة سدير' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Jouf' , 'ar_name' => 'الجوف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Lith' , 'ar_name' => 'الليث' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Tanumah' , 'ar_name' => 'التنومة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Thqbah' , 'ar_name' => 'الثقبة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Ula' , 'ar_name' => 'العلا' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Wadi Al Dawasir' ,
                'ar_name'    => 'وادي الدواسر' , 'code' => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'Ar Ruqi',
                'ar_name' => 'الرقعي',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'As Suairah',
                'ar_name' => 'السعيرة',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'Ath Thybiyah',
                'ar_name' => 'الذيبية',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'King Fahd International Airport',
                'ar_name' => 'مطار الملك فهد',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'King Khalid Airport',
                'ar_name' => 'مطار الملك خالد',
                'code' => '',
                'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL FAQIR',
                'ar_name'    => 'الفقير', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL FARDANIYAH',
                'ar_name'    => 'الفردانية', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL HASAMAH',
                'ar_name'    => 'الحصامة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL HEED',
                'ar_name'    => 'الحيد', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Al Hufayyirah',
                'ar_name'    => 'الحفيرا', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL KADADIYAH',
                'ar_name'    => 'الكدادية', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL KHARKHIR',
                'ar_name'    => 'الخرخير', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL KHAWBAH',
                'ar_name'    => 'الخوبة', 'code' => '', 'status' => '1'
            ] ,  [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL MARMUTHAH',
                'ar_name'    => 'المرموثة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL MULAYDA\'',
                'ar_name'    => 'المليداء', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL QAMAS',
                'ar_name'    => 'القماص', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL RABEYA',
                'ar_name'    => 'الرابية', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Al Taraf',
                'ar_name'    => 'الطرف', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL ZUBAIRAH',
                'ar_name'    => 'الزبيرة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL-REGEE',
                'ar_name'    => 'الريقي', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Alhojrah',
                'ar_name'    => 'الهوجرة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AlRafiea',
                'ar_name'    => 'الرفيعة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'ALRAYTH',
                'ar_name'    => 'الريث', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Ar Rishawiyah',
                'ar_name'    => 'الرشاوية', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AS SULAYMI',
                'ar_name'    => 'السليمي', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'As Sulubiayh',
                'ar_name'    => 'الصلبيّة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Ash Shaara',
                'ar_name'    => 'الشعراء', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Athom Center',
                'ar_name'    => 'مركز الثوم', 'code' => '', 'status' => '1'
            ] ,  [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'BN KABEER',
                'ar_name'    => 'بن كبير', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'dhriah',
                'ar_name'    => 'ضهرية', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Edabi',
                'ar_name'    => 'إدبي', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Fayfa',
                'ar_name'    => 'فيفاء', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'HEDAD BNY MALEK',
                'ar_name'    => 'حداد بني مالك', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'hufir',
                'ar_name'    => 'حفير', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'JBAH',
                'ar_name'    => 'جباه', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Khottah',
                'ar_name'    => 'خطاه', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Maysan Office',
                'ar_name'    => 'مكتب ميسون', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Qahmah',
                'ar_name'    => 'القحمة', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Samakh',
                'ar_name'    => 'صماخ', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Sanbia',
                'ar_name'    => 'صنبية', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Maysan',
                'ar_name'    => 'ميسون', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'SBEEH',
                'ar_name'    => 'صبيح', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'shary',
                'ar_name'    => 'شاري', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'SWAR',
                'ar_name'    => 'سوار', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'TEBRAK AND JELA',
                'ar_name'    => 'تبراك وجيلا', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Temyat Province',
                'ar_name'    => 'محافظة تمياط', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Thebea',
                'ar_name'    => 'ظبيا', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'TRABAH HAEL',
                'ar_name'    => 'ترابة حائل', 'code' => '', 'status' => '1'
            ] ,

            [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Abu Dhabi' , 'ar_name' => 'أبوظبي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Dubai' , 'ar_name' => 'دبي' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Sharjah' , 'ar_name' => 'الشارقة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Ajman' , 'ar_name' => 'عجمان' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Umm al-Quwain' , 'ar_name' => 'أم القيوين' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Ras Al Khaimah' , 'ar_name' => 'رأس الخيمة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Fujairah' , 'ar_name' => 'الفجيرة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Al Ain' , 'ar_name' => 'العين' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Khor Fakkan' , 'ar_name' => 'خورفكان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Ruwais' , 'ar_name' => 'الرويس' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Sila' , 'ar_name' => 'السلع' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Mussafah' , 'ar_name' => 'مصفح' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Jebel Ali' , 'ar_name' => 'جبل علي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Dibba Al-Hisn' , 'ar_name' => 'دبا الحصن ' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Dhaid' , 'ar_name' => 'الذيد' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Kalba' , 'ar_name' => 'وكلباء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Manama' , 'ar_name' => 'المنامة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Muharraq' , 'ar_name' => 'المحرق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Sitra' , 'ar_name' => 'سترة' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'East Riffa' , 'ar_name' => 'الرفاع الشرقي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'West Riffa' , 'ar_name' => 'الرفاع الغربي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Isa Town' , 'ar_name' => 'مدينة عيسى' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Hamad Town' , 'ar_name' => 'مدينة حمد' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Zayed town' , 'ar_name' => 'مدينة زايد' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Aali' , 'ar_name' => 'قرية عالي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Budaiya' , 'ar_name' => 'قرية البديع' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Jidhafs' , 'ar_name' => 'جد حفص' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Tubli' , 'ar_name' => 'توبلي' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Adliya' , 'ar_name' => 'العدلية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Al - Malikiyah' , 'ar_name' => 'المالكية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Noaim' , 'ar_name' => 'النعيم' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Galali' , 'ar_name' => 'قلالي' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Samaheej' , 'ar_name' => 'سماهيج' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Al Dair' , 'ar_name' => 'الدير' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Sanabis' , 'ar_name' => 'السنابس' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Sar' , 'ar_name' => 'سار' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Buri' , 'ar_name' => 'بوري' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Al Hidd' , 'ar_name' => 'الحد' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Karzakan' , 'ar_name' => 'كرزكان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Bani Jamra' , 'ar_name' => 'بني جمرة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Arad' , 'ar_name' => 'عراد' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Diraz' , 'ar_name' => 'الدراز' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Bilad Al Qadeem' ,
                'ar_name'    => 'البلاد القديم' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Janabiyah' , 'ar_name' => 'الجنبية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Doha' , 'ar_name' => 'الدوحة' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Abo Dhalouf' , 'ar_name' => 'أبو الظلوف' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Abu Thaylah' , 'ar_name' => 'أبو ثايلة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Ad Dawhah al Jadidah' ,
                'ar_name'    => 'الدوحة الجديدة' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'AlArish' , 'ar_name' => 'الـعريش' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Ghariya' , 'ar_name' => 'الغارية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Ghuwariyah' , 'ar_name' => 'الغويرية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Hitmi' , 'ar_name' => 'الهتمي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Jasrah' , 'ar_name' => 'الجسرة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Jumaliyah' , 'ar_name' => 'الجميلية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Khalifa city' , 'ar_name' => 'الخليفة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Khor' , 'ar_name' => 'الخور' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Mafjar' , 'ar_name' => 'الـمفجر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Wakrah' , 'ar_name' => 'الوكرة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Ras Laffan Industrial City' ,
                'ar_name'    => 'مدينة رأس لفان الصناعية' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Rayyan' , 'ar_name' => 'الريان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Ruwais' , 'ar_name' => 'الرويس' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Thaqab' , 'ar_name' => 'الثقب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Dukhan' , 'ar_name' => 'دخان' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Umm Bab' , 'ar_name' => 'أم باب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Mesaieed' , 'ar_name' => 'مسيعيد' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Umm Salal Ali' , 'ar_name' => 'أم صلال على' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Umm Salal Mohammed' ,
                'ar_name'    => 'أم صلال محمد' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Madinat ash - Shamal' ,
                'ar_name'    => 'مدينة الشمال' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Muscat' , 'ar_name' => 'مسقط' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Sohar' , 'ar_name' => 'صحار' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Nizwa' , 'ar_name' => 'نزوى' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Sur' , 'ar_name' => 'صور' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Rustaq' , 'ar_name' => 'الرستاق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Qalhat' , 'ar_name' => 'قلهات' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Salalah' , 'ar_name' => 'صلالة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Al Amarat' , 'ar_name' => 'عامرات' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Barka' , 'ar_name' => 'بركاء' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Bawshar' , 'ar_name' => 'بوشر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'AlBuraymi' , 'ar_name' => 'بريمي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Ibra' , 'ar_name' => 'إبراء' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Muttrah' , 'ar_name' => 'مطرح' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Seeb' , 'ar_name' => 'السيب' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Blue City' ,
                'ar_name'    => 'المدينة الزرقاء (عمان)' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Bahla' , 'ar_name' => 'بهلا' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Suwayq' , 'ar_name' => 'السويق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Khasab' , 'ar_name' => 'خصب' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Madha' , 'ar_name' => 'مدحاء' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Shinas' , 'ar_name' => 'شناص' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Qurayyat' , 'ar_name' => 'قريات' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Samail' , 'ar_name' => 'سمائل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Saham' , 'ar_name' => 'صحم' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Kuwait City' , 'ar_name' => 'مدينة الكويت' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Hawally' , 'ar_name' => 'حولي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Al Farwaniyah' , 'ar_name' => 'الفروانية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Al Ahmadi' , 'ar_name' => 'الأحمدي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Al Jahra' , 'ar_name' => 'الجهراء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Mubarak Al - Kabeer' ,
                'ar_name'    => 'مبارك الكبير' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Khabra' , 'ar_name' => 'الخبراء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Qawara' , 'ar_name' => 'القوارة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Alasyah' , 'ar_name' => 'الاسياح' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Dariyah' , 'ar_name' => 'ضرية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Albasar' , 'ar_name' => 'البصر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al - Nabhaniyah' ,
                'ar_name'    => 'النبهانية' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Dekhnh' , 'ar_name' => 'دخنة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Uglat Asugour' ,
                'ar_name'    => 'عقلة الصقور' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Alfwailq' , 'ar_name' => 'الفويلق' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Qaser bin aqeel' ,
                'ar_name'    => 'قصر بن عقيل' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Quba' , 'ar_name' => 'قبة' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Qusaybaa' , 'ar_name' => 'قصيباء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Albateen' , 'ar_name' => 'البطين' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'AlAmmar' , 'ar_name' => 'العمار' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Shri' , 'ar_name' => 'شري' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al Fawara' , 'ar_name' => 'الفوارة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Dilemma' , 'ar_name' => 'الدليمية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Abanat' , 'ar_name' => 'ابانات' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Aldhahrya' , 'ar_name' => 'الظاهرية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ain bin Fahid' ,
                'ar_name'    => 'عين بن فهيد' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Aba alworod' , 'ar_name' => 'أبا الورود' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Quraa' , 'ar_name' => 'القرعاء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Shihiya' , 'ar_name' => 'الشيحية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Banban' , 'ar_name' => 'بنبان' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Salbukh' , 'ar_name' => 'صلبوخ' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Malham' , 'ar_name' => 'ملهم' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Hesey' , 'ar_name' => 'الحسي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Sudair' , 'ar_name' => 'سدير' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ruygeb' , 'ar_name' => 'رويغيب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Tameriya' , 'ar_name' => 'تميرية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Jalajel' , 'ar_name' => 'جلاجل' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Alqasab' , 'ar_name' => 'القصب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Tharmadaa' , 'ar_name' => 'ثرمداء' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ashikar' , 'ar_name' => 'أشيقر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Almashaba' , 'ar_name' => 'المعشبة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Hair' , 'ar_name' => 'الحائر' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Melih' , 'ar_name' => 'مليح' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Almsaeidih' , 'ar_name' => 'المساعدية' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Bahrah' , 'ar_name' => 'بحرة' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Shmeissi' , 'ar_name' => 'الشميسي' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ruwayghib' , 'ar_name' => 'رويغب' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Hadeethah', 'ar_name' => 'الحديثة',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Halat Ammar', 'ar_name' => 'حالة عمار',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Haqil', 'ar_name' => 'حقيل',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Rania', 'ar_name' => 'رنية',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Shoaiba', 'ar_name' => 'الشعيبة',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Uyun', 'ar_name' => 'العيون',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Satorp', 'ar_name' => 'ارامكو توتال للتكرير,الجبيل',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Muthaleif', 'ar_name' => 'المظليف',
                'code'       => '', 'status' => '1'
            ],
            //
            [
                'country_id' => $spainId , 'zone_id' => '0' , 'name' => 'Madrid' , 'ar_name' => 'مدريد' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $spainId , 'zone_id' => '0' , 'name' => 'Barcelona' , 'ar_name' => 'برشلونة' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $spainId , 'zone_id' => '0' , 'name' => 'Valencia' , 'ar_name' => 'فالنسيا' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $italyId , 'zone_id' => '0' , 'name' => 'Rome' , 'ar_name' => 'روما' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $italyId , 'zone_id' => '0' , 'name' => 'Milan' , 'ar_name' => 'ميلان' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $italyId , 'zone_id' => '0' , 'name' => 'Naples' , 'ar_name' => 'نابولي' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $franceId , 'zone_id' => '0' , 'name' => 'Paris' , 'ar_name' => 'باريس' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $franceId , 'zone_id' => '0' , 'name' => 'Lyon' , 'ar_name' => 'ليون' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $franceId , 'zone_id' => '0' , 'name' => 'Strasbourg' , 'ar_name' => 'ستراسبورغ' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $irelandId , 'zone_id' => '0' , 'name' => 'Dublin' , 'ar_name' => 'دبلن' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $irelandId , 'zone_id' => '0' , 'name' => 'Galway' , 'ar_name' => 'غالواي' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $irelandId , 'zone_id' => '0' , 'name' => 'Cork' , 'ar_name' => 'فلين' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $greeceId , 'zone_id' => '0' , 'name' => 'Athens' , 'ar_name' => 'أثينا' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $greeceId , 'zone_id' => '0' , 'name' => 'Thessaloniki' , 'ar_name' => 'سالونيك' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $greeceId , 'zone_id' => '0' , 'name' => 'Patras' , 'ar_name' => 'باتراس' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $austriaId , 'zone_id' => '0' , 'name' => 'Vienna' , 'ar_name' => 'فيينا' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $austriaId , 'zone_id' => '0' , 'name' => 'Graz' , 'ar_name' => 'غراتس' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $austriaId , 'zone_id' => '0' , 'name' => 'Villach' , 'ar_name' => 'فيلاخ' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $netherlandsId , 'zone_id' => '0' , 'name' => 'Amsterdam' , 'ar_name' => 'أمستردام' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $netherlandsId , 'zone_id' => '0' , 'name' => 'Rotterdam' , 'ar_name' => 'روتردام' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $netherlandsId , 'zone_id' => '0' , 'name' => 'The Hague' , 'ar_name' => 'لاهاي' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $portugalId , 'zone_id' => '0' , 'name' => 'Lisbon' , 'ar_name' => 'لشبونة' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $portugalId , 'zone_id' => '0' , 'name' => 'Porto' , 'ar_name' => 'بورتو' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $portugalId , 'zone_id' => '0' , 'name' => 'Braga' , 'ar_name' => 'براغا' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $belgiumId , 'zone_id' => '0' , 'name' => 'Brussels' , 'ar_name' => 'بروكسل' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $belgiumId , 'zone_id' => '0' , 'name' => 'Bruges' , 'ar_name' => 'بروج' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $belgiumId , 'zone_id' => '0' , 'name' => 'Antwerp' , 'ar_name' => 'أنتويرب' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $switzerlandId , 'zone_id' => '0' , 'name' => 'Bern' , 'ar_name' => 'برن' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $switzerlandId , 'zone_id' => '0' , 'name' => 'Zurich' , 'ar_name' => 'زيوريخ' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $switzerlandId , 'zone_id' => '0' , 'name' => 'Geneva' , 'ar_name' => 'جنيف' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $unitedStatesId , 'zone_id' => '0' , 'name' => 'Washington' , 'ar_name' => 'واشنطن' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $egyptId , 'zone_id' => '0' , 'name' => 'Cairo' , 'ar_name' => 'القاهرة' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $turkeyId , 'zone_id' => '0' , 'name' => 'Ankara' , 'ar_name' => 'أنقرة' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $unitedKingdomId , 'zone_id' => '0' , 'name' => 'London' , 'ar_name' => 'لندن' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $australiaId , 'zone_id' => '0' , 'name' => 'Canberra' , 'ar_name' => 'كانبيرا' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $canadaId , 'zone_id' => '0' , 'name' => 'Ottawa' , 'ar_name' => 'أوتاوا' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $jordanId , 'zone_id' => '0' , 'name' => 'Amman' , 'ar_name' => 'عمان' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $libyaId , 'zone_id' => '0' , 'name' => 'Tripoli' , 'ar_name' => 'طرابلس' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $algeriaId , 'zone_id' => '0' , 'name' => 'Algiers' , 'ar_name' => 'الجزائر' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $tunisiaId , 'zone_id' => '0' , 'name' => 'Tunis' , 'ar_name' => 'تونس' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $moroccoId , 'zone_id' => '0' , 'name' => 'Rabat' , 'ar_name' => 'الرباط' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $lebanonId , 'zone_id' => '0' , 'name' => 'Beirut' , 'ar_name' => 'بيروت' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Sana`a' , 'ar_name' => 'صنعاء' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Aden' , 'ar_name' => 'عدن' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Ibb' , 'ar_name' => 'اب' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Al-Hodida' , 'ar_name' => 'الحديدة' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Dhamar' , 'ar_name' => 'ذمار' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Hadramout' , 'ar_name' => 'حضرموت' ,
                'code'       => '' , 'status' => '1'
            ] ,

        ];

        foreach ($items as $item) {
            City::firstOrCreate(
                [
                    'country_id' => $item['country_id'],
                    'name'       => $item['name'],
                    'ar_name'    => $item['ar_name']
                ],
                Arr::except($item, ['country_id', 'name'])
            );
        }
    }
}
