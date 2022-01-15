<?php

use Illuminate\Database\Seeder;

class CourtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('court')->insert([
            [
                'court_name' => '東京簡易裁判所',
                'court_postal_code' => '100-8971',
                'court_address' => '東京都千代田区霞が関1-1-2',
                'court_phone_number' => '03-3581-5411',
                'court_delivery_cost' => '1125',
                'court_notification_fee' => '120'
            ],
                //
                [
                'court_name' => '千葉簡易裁判所',
                'court_postal_code' => '260-0013',
                'court_address' => '千葉県千葉市中央区中央4-11-27',
                'court_phone_number' => '043-333-5290',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'
           ],
           [
                'court_name' => '佐倉簡易裁判所',
                'court_postal_code' => '285-0038',
                'court_address' => '千葉県佐倉市弥勒町92',
                'court_phone_number' => '043-484-1232',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'
           ],
           [
                'court_name' => '千葉一宮簡易裁判所',
                'court_postal_code' => '299-4397',
                'court_address' => '千葉県長生郡一宮町一宮2791',
                'court_phone_number' => '0475-42-3531',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
               ],
          [
                'court_name' => '松戸簡易裁判所',
                'court_postal_code' => '271-8522',
                'court_address' => '千葉県松戸市岩瀬無番地',
                'court_phone_number' => '047-368-5741',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
            [
                'court_name' => '木更津簡易裁判所',
                'court_postal_code' => '292-0832',
                'court_address' => '千葉県木更津市新田2-5-1',
                'court_phone_number' => '0438-22-3778',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
             [
                'court_name' => '館山簡易裁判所',
                'court_postal_code' => '294-0045',
                'court_address' => '千葉県館山市北条1073',
                'court_phone_number' => '0470-22-2273',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
            ],
             [
                'court_name' => '館山簡易裁判所',
                'court_postal_code' => '294-0045',
                'court_address' => '千葉県館山市北条1073',
                'court_phone_number' => '0470-22-2273',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
           [
                'court_name' => '八日市場簡易裁判所',
                'court_postal_code' => '289-2144',
                'court_address' => '千葉県匝瑳市八日市場イ2760',
                'court_phone_number' => '0479-72-1323',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
           ],
            [
                'court_name' => '佐原簡易裁判所',
                'court_postal_code' => '287-0003',
                'court_address' => '千葉県香取市佐原イ3375',
                'court_phone_number' => '0478-52-3040',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
            [
                'court_name' => '市川簡易裁判所',
                'court_postal_code' => '272-8511',
                'court_address' => '千葉県市川市鬼高2-20-20',
                'court_phone_number' => '047-334-3241',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
            ],
           [
                'court_name' => '銚子簡易裁判所',
                'court_postal_code' => '288-0817',
                'court_address' => '千葉県銚子市清川町4-9-4',
                'court_phone_number' => '0479-22-1249',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
             [
                'court_name' => '東金簡易裁判所',
                'court_postal_code' => '283-0005',
                'court_address' => '千葉県東金市田間2354-2',
                'court_phone_number' => '0475-52-2331',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
           [
                'court_name' => 'さいたま簡易裁判所',
                'court_postal_code' => '330-0063',
                'court_court_address' => '埼玉県さいたま市浦和区高砂3-16-45',
                'court_phone_number' => '048-863-8741',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
            [
                'court_name' => '越谷簡易裁判所',
                'court_postal_code' => '343-0023',
                'court_address' => '埼玉県越谷市東越谷9-2-8',
                'court_phone_number' => '048-910-0126',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
           [
                'court_name' => '川越簡易裁判所',
                'court_postal_code' => '350-8531',
                'court_address' => '埼玉県川越市宮下町2-1-3',
                'court_phone_number' => '049-273-3019',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
            ],
            [
                'court_name' => '熊谷簡易裁判所',
                'court_postal_code' => '360-0041',
                'court_address' => '埼玉県熊谷市宮町1-68',
                'court_phone_number' => '048-500-3122',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
            ],
             [
                'court_name' => '秩父簡易裁判所',
                'court_postal_code' => '368-0035',
                'court_address' => '埼玉県秩父市上町2-9-12',
                'court_phone_number' => '0494-22-0226',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
              [
                'court_name' => '川口簡易裁判所',
                'court_postal_code' => '332-0032',
                'court_address' => '埼玉県川口市中青木2-22-5',
                'court_phone_number' => '048-252-3770',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
            ],
            [
                'court_name' => '大宮簡易裁判所',
                'court_postal_code' => '330-0803',
                'court_address' => '埼玉県さいたま市大宮区高鼻町3-140',
                'court_phone_number' => '048-641-4288',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
           [
                'court_name' => '久喜簡易裁判所',
                'court_postal_code' => '346-0016',
                'court_address' => '埼玉県久喜市久喜東1-15-3',
                'court_phone_number' => '0480-21-0157',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
          [
                'court_name' => '飯能簡易裁判所',
                'court_postal_code' => '357-0021',
                'court_address' => '埼玉県飯能市大字双柳3713',
                'court_phone_number' => '042-972-2342',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
            [
                'court_name' => '所沢簡易裁判所',
                'court_postal_code' => '359-0042',
                'court_address' => '埼玉県所沢市並木6-1-4',
                'court_phone_number' => '04-2996-1801',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
             [
                'court_name' => '本庄簡易裁判所',
                'court_postal_code' => '367-0031',
                'court_address' => '埼玉県所沢市並木6-1-4',
                'court_phone_number' => '04-2996-1801',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
              [
                'court_name' => '本庄簡易裁判所',
                'court_postal_code' => '367-0031',
                'court_address' => '埼玉県所沢市並木6-1-4',
                'court_phone_number' => '04-2996-1801',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
            [
                'court_name' => '横浜簡易裁判所',
                'court_postal_code' => '231-0021',
                'court_address' => '神奈川県横浜市中区日本大通9',
                'court_phone_number' => '045-662-6971',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
            [
                'court_name' => '川崎簡易裁判所',
                'court_postal_code' => '210-8559',
                'court_address' => '神奈川県川崎市川崎区富士見1-1-3',
                'court_phone_number' => '044-233-8301',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
            [
                'court_name' => '相模原簡易裁判所',
                'court_postal_code' => '252-0236',
                'court_address' => '神奈川県相模原市中央区富士見6-10-1',
                'court_phone_number' => '042-757-7706',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
              [
                'court_name' => '横須賀簡易裁判所',
                'court_postal_code' => '238-8510',
                'court_address' => '神奈川県横須賀市新港町1番地9',
                'court_phone_number' => '046-823-1907',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
             [
                'court_name' => '小田原簡易裁判所',
                'court_postal_code' => '250-0012',
                'court_address' => '神奈川県小田原市本町1-7-9',
                'court_phone_number' => '0465-24-1569',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
              [
                'court_name' => '神奈川簡易裁判所',
                'court_postal_code' => '221-0822',
                'court_address' => '神奈川県横浜市神奈川区西神奈川1-11-1',
                'court_phone_number' => '045-321-8045',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
            ],
              [
                'court_name' => '保土ヶ谷簡易裁判所',
                'court_postal_code' => '240-0062',
                'court_address' => '神奈川県横浜市保土ケ谷区岡沢町239',
                'court_phone_number' => '045-331-5991',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
              [
                'court_name' => '鎌倉簡易裁判所',
                'court_postal_code' => '248-0014',
                'court_address' => '神奈川県鎌倉市由比ガ浜2-23-22',
                'court_phone_number' => '0467-22-2202',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
             [
                'court_name' => '藤沢簡易裁判所',
                'court_postal_code' => '251-0054',
                'court_address' => '神奈川県藤沢市朝日町1-8',
                'court_phone_number' => '0466-22-2684',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
             [
                'court_name' => '平塚簡易裁判所',
                'court_postal_code' => '254-0045',
                'court_address' => '神奈川県平塚市見附町43-9',
                'court_phone_number' => '0463-31-0513',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
              ],
            [
                'court_name' => '厚木簡易裁判所',
                'court_postal_code' => '243-0003',
                'court_address' => '神奈川県厚木市寿町3-5-3',
                'court_phone_number' => '046-221-2018',
                'court_delivery_cost' => '1099',
                'court_notification_fee' => '84'   
             ],
            ]);
 }
}