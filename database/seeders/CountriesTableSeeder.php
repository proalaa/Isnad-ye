<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Afghanistan', 'ar_name' => 'أفغانستان', 'iso_code_2' => 'AF', 'iso_code_3' => 'AFG',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Albania', 'ar_name' => 'ألبانيا', 'iso_code_2' => 'AL', 'iso_code_3' => 'ALB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Algeria', 'ar_name' => 'الجزائر', 'iso_code_2' => 'DZ', 'iso_code_3' => 'DZA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'American Samoa', 'ar_name' => 'ساموا الأمريكي', 'iso_code_2' => 'AS',
                'iso_code_3' => 'ASM', 'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Andorra', 'ar_name' => 'أندورا', 'iso_code_2' => 'AD', 'iso_code_3' => 'AND',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Angola', 'ar_name' => 'أنغولا', 'iso_code_2' => 'AO', 'iso_code_3' => 'AGO',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Anguilla', 'ar_name' => 'أنغويلا', 'iso_code_2' => 'AI', 'iso_code_3' => 'AIA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Antarctica', 'ar_name' => 'أنتاركتيكا', 'iso_code_2' => 'AQ', 'iso_code_3' => 'ATA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Antigua and Barbuda', 'ar_name' => 'أنتيغوا وبربودا', 'iso_code_2' => 'AG',
                'iso_code_3' => 'ATG', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Argentina', 'ar_name' => 'الأرجنتين', 'iso_code_2' => 'AR', 'iso_code_3' => 'ARG',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Armenia', 'ar_name' => 'أرمينيا', 'iso_code_2' => 'AM', 'iso_code_3' => 'ARM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Aruba', 'ar_name' => 'أروبا', 'iso_code_2' => 'AW', 'iso_code_3' => 'ABW',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Australia', 'ar_name' => 'أستراليا', 'iso_code_2' => 'AU', 'iso_code_3' => 'AUS',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Austria', 'ar_name' => 'النمسا', 'iso_code_2' => 'AT', 'iso_code_3' => 'AUT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Azerbaijan', 'ar_name' => 'أذربيجان', 'iso_code_2' => 'AZ', 'iso_code_3' => 'AZE',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bahamas', 'ar_name' => 'الباهاماس', 'iso_code_2' => 'BS', 'iso_code_3' => 'BHS',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bahrain', 'ar_name' => 'البحرين', 'iso_code_2' => 'BH',
                'iso_code_3' => 'BHR', 'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Bangladesh', 'ar_name' => 'بنغلاديش', 'iso_code_2' => 'BD', 'iso_code_3' => 'BGD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Barbados', 'ar_name' => 'بربادوس', 'iso_code_2' => 'BB', 'iso_code_3' => 'BRB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Belarus', 'ar_name' => 'روسيا البيضاء', 'iso_code_2' => 'BY', 'iso_code_3' => 'BLR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Belgium', 'ar_name' => 'بلجيكا', 'iso_code_2' => 'BE', 'iso_code_3' => 'BEL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Belize', 'ar_name' => 'بيليز', 'iso_code_2' => 'BZ', 'iso_code_3' => 'BLZ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Benin', 'ar_name' => 'بنين', 'iso_code_2' => 'BJ', 'iso_code_3' => 'BEN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bermuda', 'ar_name' => 'جزر برمود', 'iso_code_2' => 'BM', 'iso_code_3' => 'BMU',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bhutan', 'ar_name' => 'بوتان', 'iso_code_2' => 'BT', 'iso_code_3' => 'BTN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bolivia', 'ar_name' => 'بوليفيا', 'iso_code_2' => 'BO', 'iso_code_3' => 'BOL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bosnia and Herzegovina', 'ar_name' => 'البوسنة و الهرسك', 'iso_code_2' => 'BA',
                'iso_code_3' => 'BIH', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Botswana', 'ar_name' => 'بوتسوانا', 'iso_code_2' => 'BW', 'iso_code_3' => 'BWA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bouvet Island', 'ar_name' => 'جزيرة بوفيه', 'iso_code_2' => 'BV',
                'iso_code_3' => 'BVT', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Brazil', 'ar_name' => 'البرازيل', 'iso_code_2' => 'BR', 'iso_code_3' => 'BRA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'British Indian Ocean Territory', 'ar_name' => 'إقليم المحيط الهندي البريطاني', 'iso_code_2' => 'IO',
                'iso_code_3' => 'IOT', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Brunei Darussalam', 'ar_name' => 'بروناي دار السلام', 'iso_code_2' => 'BN',
                'iso_code_3' => 'BRN', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bulgaria', 'ar_name' => 'بلغاريا', 'iso_code_2' => 'BG', 'iso_code_3' => 'BGR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Burkina Faso', 'ar_name' => 'بوركينا فاسو', 'iso_code_2' => 'BF',
                'iso_code_3' => 'BFA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Burundi', 'ar_name' => 'بوروندي', 'iso_code_2' => 'BI', 'iso_code_3' => 'BDI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cambodia', 'ar_name' => 'كمبوديا', 'iso_code_2' => 'KH', 'iso_code_3' => 'KHM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cameroon', 'ar_name' => 'كاميرون', 'iso_code_2' => 'CM', 'iso_code_3' => 'CMR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Canada', 'ar_name' => 'كندا', 'iso_code_2' => 'CA', 'iso_code_3' => 'CAN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Cape Verde', 'ar_name' => 'الرأس الأخضر', 'iso_code_2' => 'CV', 'iso_code_3' => 'CPV',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cayman Islands', 'ar_name' => 'جزر كايمان', 'iso_code_2' => 'KY',
                'iso_code_3' => 'CYM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Central African Republic', 'ar_name' => 'جمهورية أفريقيا الوسطى', 'iso_code_2' => 'CF',
                'iso_code_3' => 'CAF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Chad', 'ar_name' => 'تشاد', 'iso_code_2' => 'TD', 'iso_code_3' => 'TCD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Chile', 'ar_name' => 'تشيلي', 'iso_code_2' => 'CL', 'iso_code_3' => 'CHL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'China', 'ar_name' => 'الصين', 'iso_code_2' => 'CN', 'iso_code_3' => 'CHN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Christmas Island', 'ar_name' => 'جزيرة كريسماس', 'iso_code_2' => 'CX',
                'iso_code_3' => 'CXR', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cocos (Keeling) Islands', 'ar_name' => 'جزر كوكوس (كيلينغ)', 'iso_code_2' => 'CC',
                'iso_code_3' => 'CCK', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Colombia', 'ar_name' => 'كولومبيا', 'iso_code_2' => 'CO', 'iso_code_3' => 'COL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Comoros', 'ar_name' => 'جزر القمر', 'iso_code_2' => 'KM', 'iso_code_3' => 'COM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Democratic Republic of the Congo', 'ar_name' => 'جمهورية الكونغو الديمقراطية', 'iso_code_2' => 'CD', 'iso_code_3' => 'COD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Republic of the Congo', 'ar_name' => 'جمهورية الكونغو', 'iso_code_2' => 'CG', 'iso_code_3' => 'COG',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cook Islands', 'ar_name' => 'جزر كوك', 'iso_code_2' => 'CK',
                'iso_code_3' => 'COK', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Costa Rica', 'ar_name' => 'كوستاريكا', 'iso_code_2' => 'CR', 'iso_code_3' => 'CRI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cote DIvoire', 'ar_name' => 'ساحل العاج', 'iso_code_2' => 'CI',
                'iso_code_3' => 'CIV', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Croatia', 'ar_name' => 'كرواتيا', 'iso_code_2' => 'HR', 'iso_code_3' => 'HRV',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cuba', 'ar_name' => 'كوبا', 'iso_code_2' => 'CU', 'iso_code_3' => 'CUB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Cyprus', 'ar_name' => 'قبرص', 'iso_code_2' => 'CY', 'iso_code_3' => 'CYP',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Czech Republic', 'ar_name' => 'الجمهورية التشيكية', 'iso_code_2' => 'CZ',
                'iso_code_3' => 'CZE', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Denmark', 'ar_name' => 'الدانمارك', 'iso_code_2' => 'DK', 'iso_code_3' => 'DNK',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Djibouti', 'ar_name' => 'جيبوتي', 'iso_code_2' => 'DJ', 'iso_code_3' => 'DJI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Dominica', 'ar_name' => 'دومينيكا', 'iso_code_2' => 'DM', 'iso_code_3' => 'DMA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Dominican Republic', 'ar_name' => 'الجمهورية الدومينيكية', 'iso_code_2' => 'DO',
                'iso_code_3' => 'DOM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'East Timor', 'ar_name' => 'تيمور الشرقية', 'iso_code_2' => 'TL', 'iso_code_3' => 'TLS',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Ecuador', 'ar_name' => 'إكوادور', 'iso_code_2' => 'EC', 'iso_code_3' => 'ECU',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Egypt', 'ar_name' => 'مصر', 'iso_code_2' => 'EG', 'iso_code_3' => 'EGY',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'El Salvador', 'ar_name' => 'إلسلفادور', 'iso_code_2' => 'SV', 'iso_code_3' => 'SLV',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Equatorial Guinea', 'ar_name' => 'غينيا الاستوائي', 'iso_code_2' => 'GQ',
                'iso_code_3' => 'GNQ', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Eritrea', 'ar_name' => 'إريتريا', 'iso_code_2' => 'ER', 'iso_code_3' => 'ERI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Estonia', 'ar_name' => 'استونيا', 'iso_code_2' => 'EE', 'iso_code_3' => 'EST',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Ethiopia', 'ar_name' => 'أثيوبيا', 'iso_code_2' => 'ET', 'iso_code_3' => 'ETH',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Falkland Islands( Malvinas )', 'ar_name' => 'جزر فوكلاند', 'iso_code_2' => 'FK',
                'iso_code_3' => 'FLK', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Faroe Islands', 'ar_name' => 'جزر فارو', 'iso_code_2' => 'FO',
                'iso_code_3' => 'FRO', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Fiji', 'ar_name' => 'فيجي', 'iso_code_2' => 'FJ', 'iso_code_3' => 'FJI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Finland', 'ar_name' => 'فنلندا', 'iso_code_2' => 'FI', 'iso_code_3' => 'FIN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'France', 'ar_name' => 'فرنسا', 'iso_code_2' => 'FR',
                'iso_code_3' => 'FRA', 'address_format' => '', 'postcode_required' => '1', 'status' => '1'
            ], [
                'name' => 'French Guiana', 'ar_name' => 'غويانا الفرنسية', 'iso_code_2' => 'GF',
                'iso_code_3' => 'GUF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'French Polynesia', 'ar_name' => 'بولينيزيا الفرنسية', 'iso_code_2' => 'PF',
                'iso_code_3' => 'PYF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'French Southern Territories', 'ar_name' => 'أراض فرنسية جنوبية وأنتارتيكية', 'iso_code_2' => 'TF',
                'iso_code_3' => 'ATF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Gabon', 'ar_name' => 'الغابون', 'iso_code_2' => 'GA', 'iso_code_3' => 'GAB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Gambia', 'ar_name' => 'غامبيا', 'iso_code_2' => 'GM', 'iso_code_3' => 'GMB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Georgia', 'ar_name' => 'جيورجيا', 'iso_code_2' => 'GE', 'iso_code_3' => 'GEO',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Germany', 'ar_name' => 'ألمانيا', 'iso_code_2' => 'DE', 'iso_code_3' => 'DEU',
                'address_format' => '', 'postcode_required' => '1', 'status' => '1'
            ], [
                'name' => 'Ghana', 'ar_name' => 'غانا', 'iso_code_2' => 'GH', 'iso_code_3' => 'GHA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Gibraltar', 'ar_name' => 'جبل طارق', 'iso_code_2' => 'GI', 'iso_code_3' => 'GIB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Greece', 'ar_name' => 'اليونان', 'iso_code_2' => 'GR', 'iso_code_3' => 'GRC',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Greenland', 'ar_name' => 'جرينلاند', 'iso_code_2' => 'GL', 'iso_code_3' => 'GRL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Grenada', 'ar_name' => 'غرينادا', 'iso_code_2' => 'GD', 'iso_code_3' => 'GRD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guadeloupe', 'ar_name' => 'جزر جوادلوب', 'iso_code_2' => 'GP', 'iso_code_3' => 'GLP',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guam', 'ar_name' => 'جوام', 'iso_code_2' => 'GU', 'iso_code_3' => 'GUM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guatemala', 'ar_name' => 'غواتيمال', 'iso_code_2' => 'GT', 'iso_code_3' => 'GTM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guinea', 'ar_name' => 'غينيا', 'iso_code_2' => 'GN', 'iso_code_3' => 'GIN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guinea - Bissau', 'ar_name' => 'غينيا بيساو', 'iso_code_2' => 'GW',
                'iso_code_3' => 'GNB', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guyana', 'ar_name' => 'غيانا', 'iso_code_2' => 'GY', 'iso_code_3' => 'GUY',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Haiti', 'ar_name' => 'هايتي', 'iso_code_2' => 'HT', 'iso_code_3' => 'HTI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Heard and Mc Donald Islands', 'ar_name' => 'جزر هيرد وماكدونالد', 'iso_code_2' => 'HM',
                'iso_code_3' => 'HMD', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Honduras', 'ar_name' => 'هندوراس', 'iso_code_2' => 'HN', 'iso_code_3' => 'HND',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Hong Kong', 'ar_name' => 'هونغ كونغ', 'iso_code_2' => 'HK', 'iso_code_3' => 'HKG',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Hungary', 'ar_name' => 'المجر', 'iso_code_2' => 'HU', 'iso_code_3' => 'HUN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Iceland', 'ar_name' => 'آيسلندا', 'iso_code_2' => 'IS', 'iso_code_3' => 'ISL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'India', 'ar_name' => 'الهند', 'iso_code_2' => 'IN', 'iso_code_3' => 'IND',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Indonesia', 'ar_name' => 'أندونيسيا', 'iso_code_2' => 'ID', 'iso_code_3' => 'IDN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Iran( Islamic Republic of)', 'ar_name' => 'إيران', 'iso_code_2' => 'IR',
                'iso_code_3' => 'IRN', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Iraq', 'ar_name' => 'العراق', 'iso_code_2' => 'IQ', 'iso_code_3' => 'IRQ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Ireland', 'ar_name' => 'جمهورية أيرلندا', 'iso_code_2' => 'IE', 'iso_code_3' => 'IRL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Italy', 'ar_name' => 'إيطاليا', 'iso_code_2' => 'IT', 'iso_code_3' => 'ITA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Jamaica', 'ar_name' => 'جمايكا', 'iso_code_2' => 'JM', 'iso_code_3' => 'JAM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Japan', 'ar_name' => 'اليابان', 'iso_code_2' => 'JP', 'iso_code_3' => 'JPN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Jordan', 'ar_name' => 'الأردن', 'iso_code_2' => 'JO', 'iso_code_3' => 'JOR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Kazakhstan', 'ar_name' => 'كازاخستان', 'iso_code_2' => 'KZ', 'iso_code_3' => 'KAZ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Kenya', 'ar_name' => 'كينيا', 'iso_code_2' => 'KE', 'iso_code_3' => 'KEN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Kiribati', 'ar_name' => 'كيريباتي', 'iso_code_2' => 'KI', 'iso_code_3' => 'KIR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'North Korea', 'ar_name' => 'كوريا الشمالية', 'iso_code_2' => 'KP', 'iso_code_3' => 'PRK',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'South Korea', 'ar_name' => 'كوريا الجنوبية', 'iso_code_2' => 'KR', 'iso_code_3' => 'KOR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Kuwait', 'ar_name' => 'الكويت', 'iso_code_2' => 'KW',
                'iso_code_3' => 'KWT', 'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Kyrgyzstan', 'ar_name' => 'قيرغيزستان', 'iso_code_2' => 'KG', 'iso_code_3' => 'KGZ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Lao People\'s Democratic Republic', 'ar_name' => 'جمهورية لاو الديمقراطية الشعبية', 'iso_code_2' => 'LA',
                'iso_code_3' => 'LAO', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Latvia', 'ar_name' => 'لاتفيا', 'iso_code_2' => 'LV', 'iso_code_3' => 'LVA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Lebanon', 'ar_name' => 'لبنان', 'iso_code_2' => 'LB', 'iso_code_3' => 'LBN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Lesotho', 'ar_name' => 'ليسوتو', 'iso_code_2' => 'LS', 'iso_code_3' => 'LSO',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Liberia', 'ar_name' => 'ليبيريا', 'iso_code_2' => 'LR', 'iso_code_3' => 'LBR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Libya', 'ar_name' => 'ليبيا', 'iso_code_2' => 'LY',
                'iso_code_3' => 'LBY', 'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Liechtenstein', 'ar_name' => 'ليختنشتين', 'iso_code_2' => 'LI',
                'iso_code_3' => 'LIE', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Lithuania', 'ar_name' => 'لتوانيا', 'iso_code_2' => 'LT', 'iso_code_3' => 'LTU',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Luxembourg', 'ar_name' => 'لوكسمبورغ', 'iso_code_2' => 'LU', 'iso_code_3' => 'LUX',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Macau', 'ar_name' => 'ماكاو', 'iso_code_2' => 'MO', 'iso_code_3' => 'MAC',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'FYROM', 'ar_name' => ' جمهورية شمال مقدونيا', 'iso_code_2' => 'MK', 'iso_code_3' => 'MKD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Madagascar', 'ar_name' => 'مدغشقر', 'iso_code_2' => 'MG', 'iso_code_3' => 'MDG',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Malawi', 'ar_name' => 'مالاوي', 'iso_code_2' => 'MW', 'iso_code_3' => 'MWI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Malaysia', 'ar_name' => 'ماليزيا', 'iso_code_2' => 'MY', 'iso_code_3' => 'MYS',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Maldives', 'ar_name' => 'المالديف', 'iso_code_2' => 'MV', 'iso_code_3' => 'MDV',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Mali', 'ar_name' => 'مالي', 'iso_code_2' => 'ML', 'iso_code_3' => 'MLI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Malta', 'ar_name' => 'مالطا', 'iso_code_2' => 'MT', 'iso_code_3' => 'MLT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Marshall Islands', 'ar_name' => 'جزر مارشال', 'iso_code_2' => 'MH',
                'iso_code_3' => 'MHL', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Martinique', 'ar_name' => 'مارتينيك', 'iso_code_2' => 'MQ', 'iso_code_3' => 'MTQ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Mauritania', 'ar_name' => 'موريتانيا', 'iso_code_2' => 'MR', 'iso_code_3' => 'MRT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Mauritius', 'ar_name' => 'موريشيوس', 'iso_code_2' => 'MU', 'iso_code_3' => 'MUS',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Mayotte', 'ar_name' => 'مايوت', 'iso_code_2' => 'YT', 'iso_code_3' => 'MYT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Mexico', 'ar_name' => 'المكسيك', 'iso_code_2' => 'MX', 'iso_code_3' => 'MEX',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Micronesia, Federated States of', 'ar_name' => 'ولايات ميكرونيسيا المتحدة	', 'iso_code_2' => 'FM',
                'iso_code_3' => 'FSM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Moldova, Republic of', 'ar_name' => 'مولدافيا', 'iso_code_2' => 'MD',
                'iso_code_3' => 'MDA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Monaco', 'ar_name' => 'موناكو', 'iso_code_2' => 'MC', 'iso_code_3' => 'MCO',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Mongolia', 'ar_name' => 'منغوليا', 'iso_code_2' => 'MN', 'iso_code_3' => 'MNG',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Montserrat', 'ar_name' => 'مونتسيرات', 'iso_code_2' => 'MS', 'iso_code_3' => 'MSR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Morocco', 'ar_name' => 'المغرب', 'iso_code_2' => 'MA', 'iso_code_3' => 'MAR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Mozambique', 'ar_name' => 'موزمبيق', 'iso_code_2' => 'MZ', 'iso_code_3' => 'MOZ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Myanmar', 'ar_name' => 'ميانمار', 'iso_code_2' => 'MM', 'iso_code_3' => 'MMR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Namibia', 'ar_name' => 'ناميبيا', 'iso_code_2' => 'NA', 'iso_code_3' => 'NAM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Nauru', 'ar_name' => 'ناورو', 'iso_code_2' => 'NR', 'iso_code_3' => 'NRU',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Nepal', 'ar_name' => 'نيبال', 'iso_code_2' => 'NP', 'iso_code_3' => 'NPL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Netherlands', 'ar_name' => 'هولندا', 'iso_code_2' => 'NL', 'iso_code_3' => 'NLD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Netherlands Antilles', 'ar_name' => 'جزر الأنتيل الهولندي', 'iso_code_2' => 'AN',
                'iso_code_3' => 'ANT', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'New Caledonia', 'ar_name' => 'كاليدونيا الجديدة', 'iso_code_2' => 'NC',
                'iso_code_3' => 'NCL', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'New Zealand', 'ar_name' => 'نيوزيلندا', 'iso_code_2' => 'NZ', 'iso_code_3' => 'NZL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Nicaragua', 'ar_name' => 'نيكاراجوا', 'iso_code_2' => 'NI', 'iso_code_3' => 'NIC',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Niger', 'ar_name' => 'النيجر', 'iso_code_2' => 'NE', 'iso_code_3' => 'NER',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Nigeria', 'ar_name' => 'نيجيريا', 'iso_code_2' => 'NG', 'iso_code_3' => 'NGA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Niue', 'ar_name' => 'نييوي', 'iso_code_2' => 'NU', 'iso_code_3' => 'NIU',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Norfolk Island', 'ar_name' => 'جزيرة نورفولك', 'iso_code_2' => 'NF',
                'iso_code_3' => 'NFK', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Northern Mariana Islands', 'ar_name' => 'جزر ماريانا الشمالية', 'iso_code_2' => 'MP',
                'iso_code_3' => 'MNP', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Norway', 'ar_name' => 'النرويج', 'iso_code_2' => 'NO', 'iso_code_3' => 'NOR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Oman', 'ar_name' => 'عمان', 'iso_code_2' => 'OM', 'iso_code_3' => 'OMN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Pakistan', 'ar_name' => 'باكستان', 'iso_code_2' => 'PK', 'iso_code_3' => 'PAK',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Palau', 'ar_name' => 'بالاو', 'iso_code_2' => 'PW', 'iso_code_3' => 'PLW',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Panama', 'ar_name' => 'بنما', 'iso_code_2' => 'PA', 'iso_code_3' => 'PAN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Papua New Guinea', 'ar_name' => 'بابوا غينيا الجديدة', 'iso_code_2' => 'PG',
                'iso_code_3' => 'PNG', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Paraguay', 'ar_name' => 'باراغواي', 'iso_code_2' => 'PY', 'iso_code_3' => 'PRY',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Peru', 'ar_name' => 'بيرو', 'iso_code_2' => 'PE', 'iso_code_3' => 'PER',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Philippines', 'ar_name' => 'الفليبين', 'iso_code_2' => 'PH', 'iso_code_3' => 'PHL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Pitcairn Island', 'ar_name' => 'جزر بيتكيرن', 'iso_code_2' => 'PN', 'iso_code_3' => 'PCN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Poland', 'ar_name' => 'بولندا', 'iso_code_2' => 'PL', 'iso_code_3' => 'POL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Portugal', 'ar_name' => 'البرتغال', 'iso_code_2' => 'PT', 'iso_code_3' => 'PRT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Puerto Rico', 'ar_name' => 'بورتوريكو', 'iso_code_2' => 'PR', 'iso_code_3' => 'PRI',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Qatar', 'ar_name' => 'قطر', 'iso_code_2' => 'QA', 'iso_code_3' => 'QAT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Reunion', 'ar_name' => 'لا ريونيون', 'iso_code_2' => 'RE', 'iso_code_3' => 'REU',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Romania', 'ar_name' => 'رومانيا', 'iso_code_2' => 'RO', 'iso_code_3' => 'ROM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Russian Federation', 'ar_name' => 'روسيا', 'iso_code_2' => 'RU',
                'iso_code_3' => 'RUS', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Rwanda', 'ar_name' => 'رواندا', 'iso_code_2' => 'RW', 'iso_code_3' => 'RWA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Kitts and Nevis', 'ar_name' => 'سانت كيتس ونيفس', 'iso_code_2' => 'KN',
                'iso_code_3' => 'KNA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Lucia', 'ar_name' => 'سانت لوسيا', 'iso_code_2' => 'LC', 'iso_code_3' => 'LCA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Vincent and the Grenadines', 'ar_name' => 'سانت فنسنت وجزر غرينادين', 'iso_code_2' => 'VC',
                'iso_code_3' => 'VCT', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Samoa', 'ar_name' => 'ساموا', 'iso_code_2' => 'WS', 'iso_code_3' => 'WSM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'San Marino', 'ar_name' => 'سان مارينو', 'iso_code_2' => 'SM', 'iso_code_3' => 'SMR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Sao Tome and Principe', 'ar_name' => 'ساو تومي وبرينسيبي', 'iso_code_2' => 'ST',
                'iso_code_3' => 'STP', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saudi Arabia', 'ar_name' => 'السعودية', 'iso_code_2' => 'SA',
                'iso_code_3' => 'SAU', 'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Senegal', 'ar_name' => 'السنغال', 'iso_code_2' => 'SN', 'iso_code_3' => 'SEN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Seychelles', 'ar_name' => 'سيشيل', 'iso_code_2' => 'SC', 'iso_code_3' => 'SYC',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Sierra Leone', 'ar_name' => 'سيراليون', 'iso_code_2' => 'SL',
                'iso_code_3' => 'SLE', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Singapore', 'ar_name' => 'سنغافورة', 'iso_code_2' => 'SG', 'iso_code_3' => 'SGP',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Slovak Republic', 'ar_name' => 'سلوفاكيا', 'iso_code_2' => 'SK',
                'iso_code_3' => 'SVK', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Slovenia', 'ar_name' => 'سلوفينيا', 'iso_code_2' => 'SI', 'iso_code_3' => 'SVN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Solomon Islands', 'ar_name' => 'جزر سليمان', 'iso_code_2' => 'SB',
                'iso_code_3' => 'SLB', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Somalia', 'ar_name' => 'الصومال', 'iso_code_2' => 'SO', 'iso_code_3' => 'SOM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'South Africa', 'ar_name' => 'جنوب أفريقيا', 'iso_code_2' => 'ZA',
                'iso_code_3' => 'ZAF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'South Georgia and the South Sandwich Islands', 'ar_name' => 'جورجيا الجنوبية وجزر ساندويتش الجنوبية',
                'iso_code_2' => 'GS', 'iso_code_3' => 'SGS', 'address_format' => '', 'postcode_required' => '0',
                'status' => '0'
            ], [
                'name' => 'Spain', 'ar_name' => 'إسبانيا', 'iso_code_2' => 'ES', 'iso_code_3' => 'ESP',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Sri Lanka', 'ar_name' => 'سريلانكا', 'iso_code_2' => 'LK', 'iso_code_3' => 'LKA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Helena', 'ar_name' => 'سانت هيلينا', 'iso_code_2' => 'SH', 'iso_code_3' => 'SHN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Pierre and Miquelon', 'ar_name' => 'سان بيير وميكلون', 'iso_code_2' => 'PM',
                'iso_code_3' => 'SPM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Sudan', 'ar_name' => 'السودان', 'iso_code_2' => 'SD', 'iso_code_3' => 'SDN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Suriname', 'ar_name' => 'سورينام', 'iso_code_2' => 'SR', 'iso_code_3' => 'SUR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Svalbard and Jan Mayen Islands', 'ar_name' => 'جزر سفالبارد وجان ماين', 'iso_code_2' => 'SJ',
                'iso_code_3' => 'SJM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Swaziland', 'ar_name' => 'سوازيلند', 'iso_code_2' => 'SZ', 'iso_code_3' => 'SWZ',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Sweden', 'ar_name' => 'السويد', 'iso_code_2' => 'SE', 'iso_code_3' => 'SWE',
                'address_format' => '', 'postcode_required' => '1', 'status' => '0'
            ], [
                'name' => 'Switzerland', 'ar_name' => 'سويسرا', 'iso_code_2' => 'CH', 'iso_code_3' => 'CHE',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Syrian Arab Republic', 'ar_name' => 'سوريا', 'iso_code_2' => 'SY',
                'iso_code_3' => 'SYR', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Taiwan', 'ar_name' => 'تايوان', 'iso_code_2' => 'TW', 'iso_code_3' => 'TWN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tajikistan', 'ar_name' => 'طاجيكستان', 'iso_code_2' => 'TJ', 'iso_code_3' => 'TJK',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tanzania, United Republic of', 'ar_name' => 'تنزانيا', 'iso_code_2' => 'TZ',
                'iso_code_3' => 'TZA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Thailand', 'ar_name' => 'تايلندا', 'iso_code_2' => 'TH', 'iso_code_3' => 'THA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Togo', 'ar_name' => 'توغو', 'iso_code_2' => 'TG', 'iso_code_3' => 'TGO',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tokelau', 'ar_name' => 'توكيلاو', 'iso_code_2' => 'TK', 'iso_code_3' => 'TKL',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tonga', 'ar_name' => 'تونغا', 'iso_code_2' => 'TO', 'iso_code_3' => 'TON',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Trinidad and Tobago', 'ar_name' => 'ترينيداد وتوباغو', 'iso_code_2' => 'TT',
                'iso_code_3' => 'TTO', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tunisia', 'ar_name' => 'تونس', 'iso_code_2' => 'TN', 'iso_code_3' => 'TUN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Turkey', 'ar_name' => 'تركيا', 'iso_code_2' => 'TR', 'iso_code_3' => 'TUR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'Turkmenistan', 'ar_name' => 'تركمانستان', 'iso_code_2' => 'TM',
                'iso_code_3' => 'TKM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Turks and Caicos Islands', 'ar_name' => 'جزر توركس وكايكوس', 'iso_code_2' => 'TC',
                'iso_code_3' => 'TCA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tuvalu', 'ar_name' => 'توفالو', 'iso_code_2' => 'TV', 'iso_code_3' => 'TUV',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Uganda', 'ar_name' => 'أوغندا', 'iso_code_2' => 'UG', 'iso_code_3' => 'UGA',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Ukraine', 'ar_name' => 'أوكرانيا', 'iso_code_2' => 'UA', 'iso_code_3' => 'UKR',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'UAE', 'ar_name' => 'الإمارات العربية المتحدة',
                'iso_code_2' => 'AE', 'iso_code_3' => 'ARE', 'address_format' => '', 'postcode_required' => '0',
                'status' => '1'
            ], [
                'name' => 'United Kingdom', 'ar_name' => 'المملكة المتحدة', 'iso_code_2' => 'GB',
                'iso_code_3' => 'GBR', 'address_format' => '', 'postcode_required' => '1', 'status' => '1'
            ], [
                'name' => 'United States', 'ar_name' => 'الولايات المتحدة', 'iso_code_2' => 'US',
                'iso_code_3' => 'USA', 'address_format' => '', 'postcode_required' => '0', 'status' => '1'
            ], [
                'name' => 'United States Minor Outlying Islands', 'ar_name' => 'جزر الولايات المتحدة البعيدة الصغرى', 'iso_code_2' => 'UM',
                'iso_code_3' => 'UMI', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Uruguay', 'ar_name' => 'أورغواي', 'iso_code_2' => 'UY', 'iso_code_3' => 'URY',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Uzbekistan', 'ar_name' => 'أوزباكستان', 'iso_code_2' => 'UZ', 'iso_code_3' => 'UZB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Vanuatu', 'ar_name' => 'فانواتو', 'iso_code_2' => 'VU', 'iso_code_3' => 'VUT',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Vatican City State', 'ar_name' => 'دولة مدينة الفاتيكان', 'iso_code_2' => 'VA',
                'iso_code_3' => 'VAT', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Venezuela', 'ar_name' => 'فنزويلا', 'iso_code_2' => 'VE', 'iso_code_3' => 'VEN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Vietnam', 'ar_name' => 'فيتنام', 'iso_code_2' => 'VN', 'iso_code_3' => 'VNM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Virgin Islands( British )', 'ar_name' => 'الجزر العذراء البريطانية', 'iso_code_2' => 'VG',
                'iso_code_3' => 'VGB', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Virgin Islands( U . S .)', 'ar_name' => 'الجزر العذراء الأمريكي', 'iso_code_2' => 'VI',
                'iso_code_3' => 'VIR', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Wallis and Futuna Islands', 'ar_name' => 'والس وفوتونا', 'iso_code_2' => 'WF',
                'iso_code_3' => 'WLF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Western Sahara', 'ar_name' => 'الصحراء الغربية', 'iso_code_2' => 'EH',
                'iso_code_3' => 'ESH', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Yemen', 'ar_name' => 'اليمن', 'iso_code_2' => 'YE', 'iso_code_3' => 'YEM',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Zambia', 'ar_name' => 'زامبيا', 'iso_code_2' => 'ZM', 'iso_code_3' => 'ZMB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Zimbabwe', 'ar_name' => 'زمبابوي', 'iso_code_2' => 'ZW', 'iso_code_3' => 'ZWE',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Montenegro', 'ar_name' => 'الجبل الأسو', 'iso_code_2' => 'ME', 'iso_code_3' => 'MNE',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Serbia', 'ar_name' => 'جمهورية صربيا', 'iso_code_2' => 'RS', 'iso_code_3' => 'SRB',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Aaland Islands', 'ar_name' => 'جزر أولاند', 'iso_code_2' => 'AX',
                'iso_code_3' => 'ALA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Bonaire, Sint Eustatius and Saba', 'ar_name' => 'الجزر الكاريبية الهولندية', 'iso_code_2' => 'BQ',
                'iso_code_3' => 'BES', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Curacao', 'ar_name' => 'كوراساو', 'iso_code_2' => 'CW', 'iso_code_3' => 'CUW',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Palestinian', 'ar_name' => 'فلسطين', 'iso_code_2' => 'PS',
                'iso_code_3' => 'PSE', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'South Sudan', 'ar_name' => 'جنوب السودان', 'iso_code_2' => 'SS', 'iso_code_3' => 'SSD',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Barthélemy', 'ar_name' => 'سانت بارتيليمي', 'iso_code_2' => 'BL',
                'iso_code_3' => 'BLM', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Saint Martin', 'ar_name' => 'سانتا مارتن', 'iso_code_2' => 'MF',
                'iso_code_3' => 'MAF', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Canary Islands', 'ar_name' => 'جزر الكناري', 'iso_code_2' => 'IC',
                'iso_code_3' => 'ICA', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Ascension Island', 'ar_name' => 'جزيرة أسينشين', 'iso_code_2' => 'AC',
                'iso_code_3' => 'ASC', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Kosovo, Republic of', 'ar_name' => 'جمهورية كوسوفو', 'iso_code_2' => 'XK',
                'iso_code_3' => 'UNK', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Isle of Man', 'ar_name' => 'جزيرة مان', 'iso_code_2' => 'IM', 'iso_code_3' => 'IMN',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Tristan da Cunha', 'ar_name' => 'تريستان دا كونا', 'iso_code_2' => 'TA',
                'iso_code_3' => 'SHN', 'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Guernsey', 'ar_name' => 'غيرنزي', 'iso_code_2' => 'GG', 'iso_code_3' => 'GGY',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ], [
                'name' => 'Jersey', 'ar_name' => 'جيرزي', 'iso_code_2' => 'JE', 'iso_code_3' => 'JEY',
                'address_format' => '', 'postcode_required' => '0', 'status' => '0'
            ]
        ];

        foreach ($items as $item) {
            Country::updateOrCreate(['iso_code_3' => $item['iso_code_3']], Arr::except($item, 'iso_code_3'));
        }
    }
    }
