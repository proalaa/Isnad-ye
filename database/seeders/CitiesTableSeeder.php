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
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Riyadh' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Hariq' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Kharj' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Ad Diriyah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Ad Dilam' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Ad Duwadimi' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Az Zulfi' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'As Sulayyil' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Ghat' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Quwayiyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Majmaah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Al Muzahimiyah' ,
                'ar_name'    => '??????????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Tumair' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Thadiq' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Harmah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Huraymila' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Hawtat Bani Tamim' ,
                'ar_name'    => '???????? ?????? ????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Shaqra' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Duruma' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Afif' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2879' , 'name' => 'Layla' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Abha' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Abu Arish' , 'ar_name' => '?????? ????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Ad Dammam' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Adh Dhahran' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Ahad Al Musarihah' ,
                'ar_name'    => '?????? ????????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Ahad Rifaydah' , 'ar_name' => '?????? ??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Ahsa' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2874' , 'name' => 'Al Baha' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al Bukayriyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Hufuf' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Jubail' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Al Jumum' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Khafji' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Khubar' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Al Khurmah' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Al Madinah Al Munawwarah' ,
                'ar_name'    => '?????????????? ??????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Al Majardah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al Midhnab' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Mubarraz' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Al Qatif' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Al Qunfidhah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Al Qurayyat' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Al Wajh' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Aloweqaliya' , 'ar_name' => '??????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'An Nuayriyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ar Rass' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Arar' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Aredah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ash Shimasiyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2882' , 'name' => 'Ash Shinan' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'At Taif' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Badr' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2874' , 'name' => 'Baljorashi' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Balqarn' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Beesh' , 'ar_name' => '??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Billasmar' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Bishah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Buqayq' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Buraydah' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Dawmat Al Jandal' ,
                'ar_name'    => '???????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Duba' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Hafar Al Batin' ,
                'ar_name'    => '?????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2882' , 'name' => 'Hail' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Haql' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Inak' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Jazan' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Jeddah' , 'ar_name' => '??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Khamis Mushayt' ,
                'ar_name'    => '???????? ????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Khaybar' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Khulays' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'King Abdullah Economic City' ,
                'ar_name'    => '?????????? ?????????? ?????????????? ????????????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Makkah Al Mukarramah' ,
                'ar_name'    => '?????? ??????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Muhayil' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2885' , 'name' => 'Najran' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Qaryat Al Ulya' ,
                'ar_name'    => '???????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Rabigh' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Rafha' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Ras Tannurah' , 'ar_name' => '?????? ??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Rawan' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Riyad Al Khabra' ,
                'ar_name'    => '???????? ??????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Sabya' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Safwa' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Sakaka' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2883' , 'name' => 'Samtah' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Sayhat' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2885' , 'name' => 'Sharurah' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2876' , 'name' => 'Tabarjel' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Tabuk' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2880' , 'name' => 'Tarut' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2881' , 'name' => 'Tathilith' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Tayma' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Thuwal' , 'ar_name' => '??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2875' , 'name' => 'Turaif' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2884' , 'name' => 'Turbah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2886' , 'name' => 'Umluj' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Unayzah' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Uyun Al Jawa' ,
                'ar_name'    => '???????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2885' , 'name' => 'Yadamah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Yanbu' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Dhahran Aljanoub' ,
                'ar_name'    => '?????????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Ad Darb' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Aflaj' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'An Namas' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Aqiq' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'At Tuwal' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Badaya' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Rahima' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Ranyah' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Sabt Alalayah' ,
                'ar_name'    => '?????? ??????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Mukhwah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Sajir' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Sarat Abida' , 'ar_name' => '???????? ??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Batha' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Hawtat Sudayr' , 'ar_name' => '???????? ????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Jouf' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Lith' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Tanumah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Thqbah' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Ula' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2877' , 'name' => 'Wadi Al Dawasir' ,
                'ar_name'    => '???????? ??????????????' , 'code' => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'Ar Ruqi',
                'ar_name' => '????????????',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'As Suairah',
                'ar_name' => '??????????????',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'Ath Thybiyah',
                'ar_name' => '??????????????',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'King Fahd International Airport',
                'ar_name' => '???????? ?????????? ??????',
                'code' => '',
                'status' => '1'
            ],
            [
                'country_id' => $saudiArabiaId,
                'zone_id' => '2880',
                'name' => 'King Khalid Airport',
                'ar_name' => '???????? ?????????? ????????',
                'code' => '',
                'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL FAQIR',
                'ar_name'    => '????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL FARDANIYAH',
                'ar_name'    => '??????????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL HASAMAH',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL HEED',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Al Hufayyirah',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL KADADIYAH',
                'ar_name'    => '????????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL KHARKHIR',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL KHAWBAH',
                'ar_name'    => '????????????', 'code' => '', 'status' => '1'
            ] ,  [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL MARMUTHAH',
                'ar_name'    => '????????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL MULAYDA\'',
                'ar_name'    => '????????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL QAMAS',
                'ar_name'    => '????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL RABEYA',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Al Taraf',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL ZUBAIRAH',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AL-REGEE',
                'ar_name'    => '????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Alhojrah',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AlRafiea',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'ALRAYTH',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Ar Rishawiyah',
                'ar_name'    => '????????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'AS SULAYMI',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'As Sulubiayh',
                'ar_name'    => '????????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Ash Shaara',
                'ar_name'    => '??????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Athom Center',
                'ar_name'    => '???????? ??????????', 'code' => '', 'status' => '1'
            ] ,  [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'BN KABEER',
                'ar_name'    => '???? ????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'dhriah',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Edabi',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Fayfa',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'HEDAD BNY MALEK',
                'ar_name'    => '???????? ?????? ????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'hufir',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'JBAH',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Khottah',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Maysan Office',
                'ar_name'    => '???????? ??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Qahmah',
                'ar_name'    => '????????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Samakh',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Sanbia',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Maysan',
                'ar_name'    => '??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'SBEEH',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'shary',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'SWAR',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'TEBRAK AND JELA',
                'ar_name'    => '?????????? ??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Temyat Province',
                'ar_name'    => '???????????? ??????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'Thebea',
                'ar_name'    => '????????', 'code' => '', 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '0', 'name' => 'TRABAH HAEL',
                'ar_name'    => '?????????? ????????', 'code' => '', 'status' => '1'
            ] ,

            [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Abu Dhabi' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Dubai' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Sharjah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Ajman' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Umm al-Quwain' , 'ar_name' => '???? ??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Ras Al Khaimah' , 'ar_name' => '?????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Fujairah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Al Ain' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Khor Fakkan' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Ruwais' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Sila' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Mussafah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Jebel Ali' , 'ar_name' => '?????? ??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Dibba Al-Hisn' , 'ar_name' => '?????? ?????????? ' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Dhaid' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $uaeId , 'zone_id' => '0' , 'name' => 'Kalba' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Manama' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Muharraq' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Sitra' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'East Riffa' , 'ar_name' => '???????????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'West Riffa' , 'ar_name' => '???????????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Isa Town' , 'ar_name' => '?????????? ????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Hamad Town' , 'ar_name' => '?????????? ??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Zayed town' , 'ar_name' => '?????????? ????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Aali' , 'ar_name' => '???????? ????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Budaiya' , 'ar_name' => '???????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Jidhafs' , 'ar_name' => '???? ??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Tubli' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Adliya' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Al - Malikiyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Noaim' , 'ar_name' => '????????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Galali' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Samaheej' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Al Dair' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Sanabis' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Sar' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Buri' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Al Hidd' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Karzakan' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Bani Jamra' , 'ar_name' => '?????? ????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Arad' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Diraz' , 'ar_name' => '????????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Bilad Al Qadeem' ,
                'ar_name'    => '???????????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $bahrainId , 'zone_id' => '0' , 'name' => 'Janabiyah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Doha' , 'ar_name' => '????????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Abo Dhalouf' , 'ar_name' => '?????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Abu Thaylah' , 'ar_name' => '?????? ??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Ad Dawhah al Jadidah' ,
                'ar_name'    => '???????????? ??????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'AlArish' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Ghariya' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Ghuwariyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Hitmi' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Jasrah' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Jumaliyah' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Khalifa city' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Khor' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Mafjar' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Wakrah' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Ras Laffan Industrial City' ,
                'ar_name'    => '?????????? ?????? ???????? ????????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Rayyan' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Ruwais' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Al Thaqab' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Dukhan' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Umm Bab' , 'ar_name' => '???? ??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Mesaieed' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Umm Salal Ali' , 'ar_name' => '???? ???????? ??????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Umm Salal Mohammed' ,
                'ar_name'    => '???? ???????? ????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $qatarId , 'zone_id' => '0' , 'name' => 'Madinat ash - Shamal' ,
                'ar_name'    => '?????????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Muscat' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Sohar' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Nizwa' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Sur' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Rustaq' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Qalhat' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Salalah' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Al Amarat' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Barka' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Bawshar' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'AlBuraymi' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Ibra' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Muttrah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Seeb' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Blue City' ,
                'ar_name'    => '?????????????? ?????????????? (????????)' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Bahla' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Suwayq' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Khasab' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Madha' , 'ar_name' => '??????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Shinas' , 'ar_name' => '????????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Qurayyat' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Samail' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $omanId , 'zone_id' => '0' , 'name' => 'Saham' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Kuwait City' , 'ar_name' => '?????????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Hawally' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Al Farwaniyah' , 'ar_name' => '??????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Al Ahmadi' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Al Jahra' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $kuwaitId , 'zone_id' => '0' , 'name' => 'Mubarak Al - Kabeer' ,
                'ar_name'    => '?????????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Khabra' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Qawara' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Alasyah' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Dariyah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Albasar' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al - Nabhaniyah' ,
                'ar_name'    => '??????????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Dekhnh' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Uglat Asugour' ,
                'ar_name'    => '???????? ????????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Alfwailq' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Qaser bin aqeel' ,
                'ar_name'    => '?????? ???? ????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Quba' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Qusaybaa' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Albateen' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'AlAmmar' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Shri' , 'ar_name' => '??????' , 'code' => '' ,
                'status'     => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Al Fawara' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Dilemma' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Abanat' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Aldhahrya' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ain bin Fahid' ,
                'ar_name'    => '?????? ???? ????????' , 'code' => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Aba alworod' , 'ar_name' => '?????? ????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Quraa' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Shihiya' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Banban' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Salbukh' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Malham' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Hesey' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Sudair' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ruygeb' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Tameriya' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Jalajel' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Alqasab' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Tharmadaa' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ashikar' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Almashaba' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Hair' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Melih' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Almsaeidih' , 'ar_name' => '??????????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Bahrah' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Shmeissi' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId , 'zone_id' => '2878' , 'name' => 'Ruwayghib' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] , [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Hadeethah', 'ar_name' => '??????????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Halat Ammar', 'ar_name' => '???????? ????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Haqil', 'ar_name' => '????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Rania', 'ar_name' => '????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Shoaiba', 'ar_name' => '??????????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Uyun', 'ar_name' => '????????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Satorp', 'ar_name' => '???????????? ?????????? ??????????????,????????????',
                'code'       => '', 'status' => '1'
            ], [
                'country_id' => $saudiArabiaId, 'zone_id' => '2878', 'name' => 'Muthaleif', 'ar_name' => '??????????????',
                'code'       => '', 'status' => '1'
            ],
            //
            [
                'country_id' => $spainId , 'zone_id' => '0' , 'name' => 'Madrid' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $spainId , 'zone_id' => '0' , 'name' => 'Barcelona' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $spainId , 'zone_id' => '0' , 'name' => 'Valencia' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $italyId , 'zone_id' => '0' , 'name' => 'Rome' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $italyId , 'zone_id' => '0' , 'name' => 'Milan' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $italyId , 'zone_id' => '0' , 'name' => 'Naples' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $franceId , 'zone_id' => '0' , 'name' => 'Paris' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $franceId , 'zone_id' => '0' , 'name' => 'Lyon' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $franceId , 'zone_id' => '0' , 'name' => 'Strasbourg' , 'ar_name' => '??????????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $irelandId , 'zone_id' => '0' , 'name' => 'Dublin' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $irelandId , 'zone_id' => '0' , 'name' => 'Galway' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $irelandId , 'zone_id' => '0' , 'name' => 'Cork' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $greeceId , 'zone_id' => '0' , 'name' => 'Athens' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $greeceId , 'zone_id' => '0' , 'name' => 'Thessaloniki' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $greeceId , 'zone_id' => '0' , 'name' => 'Patras' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $austriaId , 'zone_id' => '0' , 'name' => 'Vienna' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $austriaId , 'zone_id' => '0' , 'name' => 'Graz' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $austriaId , 'zone_id' => '0' , 'name' => 'Villach' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $netherlandsId , 'zone_id' => '0' , 'name' => 'Amsterdam' , 'ar_name' => '????????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $netherlandsId , 'zone_id' => '0' , 'name' => 'Rotterdam' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $netherlandsId , 'zone_id' => '0' , 'name' => 'The Hague' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $portugalId , 'zone_id' => '0' , 'name' => 'Lisbon' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $portugalId , 'zone_id' => '0' , 'name' => 'Porto' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $portugalId , 'zone_id' => '0' , 'name' => 'Braga' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $belgiumId , 'zone_id' => '0' , 'name' => 'Brussels' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $belgiumId , 'zone_id' => '0' , 'name' => 'Bruges' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $belgiumId , 'zone_id' => '0' , 'name' => 'Antwerp' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $switzerlandId , 'zone_id' => '0' , 'name' => 'Bern' , 'ar_name' => '??????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $switzerlandId , 'zone_id' => '0' , 'name' => 'Zurich' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $switzerlandId , 'zone_id' => '0' , 'name' => 'Geneva' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $unitedStatesId , 'zone_id' => '0' , 'name' => 'Washington' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $egyptId , 'zone_id' => '0' , 'name' => 'Cairo' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $turkeyId , 'zone_id' => '0' , 'name' => 'Ankara' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $unitedKingdomId , 'zone_id' => '0' , 'name' => 'London' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $australiaId , 'zone_id' => '0' , 'name' => 'Canberra' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $canadaId , 'zone_id' => '0' , 'name' => 'Ottawa' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $jordanId , 'zone_id' => '0' , 'name' => 'Amman' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $libyaId , 'zone_id' => '0' , 'name' => 'Tripoli' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $algeriaId , 'zone_id' => '0' , 'name' => 'Algiers' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $tunisiaId , 'zone_id' => '0' , 'name' => 'Tunis' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $moroccoId , 'zone_id' => '0' , 'name' => 'Rabat' , 'ar_name' => '????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $lebanonId , 'zone_id' => '0' , 'name' => 'Beirut' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Sana`a' , 'ar_name' => '??????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Aden' , 'ar_name' => '??????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Ibb' , 'ar_name' => '????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Al-Hodida' , 'ar_name' => '??????????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Dhamar' , 'ar_name' => '????????' ,
                'code'       => '' , 'status' => '1'
            ] ,
            [
                'country_id' => $yemenId , 'zone_id' => '0' , 'name' => 'Hadramout' , 'ar_name' => '????????????' ,
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
