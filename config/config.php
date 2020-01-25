<?php
  require(dirname(__FILE__).'../../../config.php');

  /*------------------------------------------------
  配列
  -------------------------------------------------*/

  $large_product_categories = [
    1 =>
  'レディース',
  'メンズ',
  'キッズ',
  'インテリア・住まい',
  '家電',
  'ホビー・娯楽',
  'ハンドメイド',
  ];

  $small_product_categories = [
    1 =>
  '服',
  '帽子',
  'アクセサリー',
  'ベビー服',
  'キッズ服',
  'キッズ靴',
  '子供用ファッション小物',
  '外出・移動用品',
  'ベビー服・寝具・室内用品',
  'おもちゃ',
  'キッチン・食器',
  'ベッド・マットレス・寝具',
  '机・いす',
  '収納家具',
  'カーペット・ラグ・マット',
  '照明',
  '時計',
  'インテリア小物',
  '季節・年中行事',
  'スマホ',
  'スマホアクセサリー',
  'PC・タブレット',
  'カメラ',
  'テレビ・映像機器',
  'オーディオ機器',
  '美容・健康',
  '冷暖房・空調',
  '生活家電',
  '本・DVD・音楽',
  'ゲーム',
  'スポーツ・レジャー',
  'アクセサリー(女性用)',
  'ファッション・小物',
  'アクセサリー・時計',
  '日用品・インテリア',
  '趣味・おもちゃ',
  '素材・材料',
  'その他',
  ];
  $states = [
    1 =>
  '北海道',
  '青森県',
  '岩手県',
  '宮城県',
  '秋田県',
  '山形県',
  '福島県',
  '茨城県',
  '栃木県',
  '群馬県',
  '埼玉県',
  '千葉県',
  '東京都',
  '神奈川県',
  '新潟県',
  '富山県',
  '石川県',
  '福井県',
  '山梨県',
  '長野県',
  '岐阜県',
  '静岡県',
  '愛知県',
  '三重県',
  '滋賀県',
  '京都府',
  '大阪府',
  '兵庫県',
  '奈良県',
  '和歌山県',
  '鳥取県',
  '島根県',
  '岡山県',
  '広島県',
  '山口県',
  '徳島県',
  '香川県',
  '愛媛県',
  '高知県',
  '福岡県',
  '佐賀県',
  '長崎県',
  '熊本県',
  '大分県',
  '宮崎県',
  '鹿児島県',
  '沖縄県',
  '未定',
  ];

  $product_condition = [
    1=>
  '新品・未使用',
  '未使用に近い',
  '目立った傷や汚れなし',
  'やや傷や汚れあり',
  '傷や汚れあり',
  '全体的に状態が悪い',
  ];