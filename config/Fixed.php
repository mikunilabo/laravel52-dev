<?php

return [
    /**
     * INFO
     */
    'info' => [
            'SiteName' => 'TDDテスト',
    ],
    
    /**
     * 権限
     */
    'role' => [
            'ADMINISTRATOR' => 'システム管理者',
            'PROVIDER'      => '配信確認担当者',
            'OPERATOR'      => '運用担当者',
            'READER'        => '閲覧専用者',
    ],
    
    /**
     * アップロードディレクトリ
     */
    'upload_path' => [
            'program_image' => '/uploads/images/program/program_image/',// 番組代表画像
            'logo_image'    => '/uploads/images/program/logo_image/',   // 番組ロゴ画像
            'vod_image'     => '/uploads/images/program/vod_image/',    // VOD 画像
    ],
        
    /**
     * アップロードファイルサイズ
     */
    'upload_max_filesize' => [
            'program_image'      => '1048576',// 1MB
            'program_image_disp' => '1MB',
            'logo_image'         => '1048576',// 1MB
            'logo_image_disp'    => '1MB',
            'vod_image'          => '1048576',// 1MB
            'vod_image_disp'     => '1MB',
    ],
        
    /**
     * 番組タイプ
     */
    'program_type' => [
            'R' => 'R:レギュラー',
            'S' => 'S:レギュラー(S)',
            'T' => 'T:特番',
            'O' => 'O:その他',
    ],
        
    /**
     * CMS番組カテゴリ
     */
    'CMS_program_category' => [
            '1' => '報道',
            '2' => '教養・ドキュメンタリー',
            '3' => 'アニメ',
            '4' => '旅・グルメ',
            '5' => '情報・バラエティ',
            '6' => 'ドラマ',
            '7' => '映画',
            '8' => 'スポーツ',
            '9' => '音楽',
            '20'=> 'ミニ番組',
    ],
    
    /**
     * EPGカテゴリ
     */
    'EPG_category' => [
            '1' => '報道',
            '2' => '教養・ドキュメンタリー',
            '3' => 'アニメ',
            '4' => '旅・グルメ',
            '5' => '情報・バラエティ',
            '6' => 'ドラマ',
            '7' => '映画',
            '8' => 'スポーツ',
            '9' => '音楽',
            '20'=> 'ミニ番組',
    ],
        
    /**
     * TVer番組カテゴリ
     */
    'TVer_program_category' => [
            '1' => 'ドラマ',
            '2' => 'バラエティ',
            '3' => 'アニメ',
            '4' => '報道・ドキュメンタリー',
            '5' => 'スポーツ',
            '6' => 'その他',
    ],
    
    /**
     * Yahooカテゴリ (親)
     */
    'Yahoo_category_parent' => [
            '1'  => 'ドラマ',
            '2'  => '映画',
            '3'  => 'スポーツ',
            '4'  => '音楽',
            '5'  => 'バラエティ',
            '6'  => 'アニメ／特撮',
            '7'  => '趣味／教育',
            '8'  => 'ニュース／報道',
            '9'  => '情報／ワイドショー',
            '10' => 'ドキュメンタリー／教養',
            '11' => '劇場／公演',
            '12' => '福祉',
            '99' => 'その他',
    ],
    
    /**
     * Yahooカテゴリ (子)
     * ※現在はリレーション配列を使用中
     */
    /*
    'Yahoo_category_children' => [
            '101'  => '国内ドラマ',
            '102'  => '海外ドラマ',
            '103'  => '時代劇',
            
            '201'  => '洋画',
            '202'  => '邦画',
            '203'  => 'アニメ',
            
            '301'  => 'スポーツニュース',
            '302'  => '野球',
            '303'  => 'サッカー',
            '304'  => 'ゴルフ',
            '305'  => 'その他の球技',
            '306'  => '相撲',
            '307'  => '格闘技',
            '308'  => 'オリンピック',
            '309'  => '国際大会',
            '310'  => 'マラソン',
            '311'  => '陸上',
            '312'  => '水泳',
            '313'  => 'モータースポーツ',
            '314'  => 'マリンスポーツ',
            '315'  => 'ウインタースポーツ',
            '316'  => '競馬',
            '317'  => '公営競技',
            
            '401'  => '国内ロック・ポップス',
            '402'  => '海外ロック・ポップス',
            '403'  => 'クラシック',
            '404'  => 'オペラジャズ',
            '405'  => 'フュージョン',
            '406'  => '歌謡曲',
            '407'  => '演歌',
            '408'  => 'ライブ',
            '409'  => 'コンサート',
            '410'  => 'ランキング',
            '411'  => 'リクエスト',
            '412'  => 'カラオケ',
            '413'  => 'のど自慢',
            '414'  => '民謡',
            '415'  => '邦楽',
            '416'  => '童謡',
            '417'  => 'キッズ',
            '418'  => '民族音楽',
            '419'  => 'ワールドミュージック',
            
            '501'  => 'クイズ',
            '502'  => 'ゲーム',
            '503'  => 'トークバラエティ',
            '504'  => 'お笑い・コメディ',
            '505'  => '音楽バラエティ',
            '506'  => '旅バラエティ',
            '507'  => '料理バラエティ',
            
            '601'  => '国内アニメ',
            '602'  => '海外アニメ',
            '603'  => '特撮',
            
            '701'  => '旅',
            '702'  => '釣り',
            '703'  => 'アウトドア',
            '704'  => '園芸',
            '705'  => 'ペット',
            '706'  => '手芸音楽',
            '707'  => '美術',
            '708'  => '工芸囲碁',
            '709'  => '将棋',
            '710'  => '麻雀',
            '711'  => 'パチンコ',
            '712'  => '車',
            '713'  => 'オートバイ',
            '714'  => 'コンピュータ',
            '715'  => 'TVゲーム',
            '716'  => '会話',
            '717'  => '語学',
            '718'  => '幼児',
            '719'  => '小学生',
            '720'  => '中学生',
            '721'  => '高校生',
            '722'  => '大学生',
            '723'  => '受験',
            '724'  => '生涯教育',
            '725'  => '資格',
            '726'  => '教育問題',
            
            '801'  => '定時・総合',
            '802'  => '天気',
            '803'  => '特集・ドキュメント',
            '804'  => '政治',
            '805'  => '国会',
            '806'  => '経済',
            '807'  => '市況',
            '808'  => '海外',
            '809'  => '国際解説',
            '810'  => '討論・会談',
            '811'  => '報道特番',
            '812'  => 'ローカル・地域',
            '813'  => '交通',
            
            '901'  => '芸能・ワイドショー',
            '902'  => 'ファッション',
            '903'  => '暮らし・住まい',
            '904'  => '健康・医療',
            '905'  => 'ショッピング・通販',
            '906'  => 'グルメ・料理イベント',
            '907'  => '番組紹介・お知らせ',
            
            '1001' => '社会・時事',
            '1002' => '歴史・紀行',
            '1003' => '自然・動物・環境',
            '1004' => '宇宙・科学・医学',
            '1005' => 'カルチャー・伝統文化',
            '1006' => '文学・文芸',
            '1007' => 'スポーツ',
            '1008' => 'ドキュメンタリー全般',
            '1009' => 'インタビュー・討論',
            
            '1101' => '現代劇・新劇',
            '1102' => 'ミュージカル',
            '1103' => 'ダンス・バレエ',
            '1104' => '落語・園芸',
            '1105' => '歌舞伎・古典',
            
            '1201' => '高齢者',
            '1202' => '障碍者',
            '1203' => '社会福祉',
            '1204' => 'ボランティア',
            '1205' => '手話文字（字幕）',
            '1206' => '音声解説',
    ],
    */
    
    /**
     * Yahooカテゴリ (リレーション)
     */
    'Yahoo_categories' => [
            '1'  => [
                    //'100'  => 'ドラマ',
                    '101'  => '国内ドラマ',
                    '102'  => '海外ドラマ',
                    '103'  => '時代劇',
            ],
            '2'  => [
                    //'200'  => '映画',
                    '201'  => '洋画',
                    '202'  => '邦画',
                    '203'  => 'アニメ',
            ],
            '3'  => [
                    //'300'  => 'スポーツ',
                    '301'  => 'スポーツニュース',
                    '302'  => '野球',
                    '303'  => 'サッカー',
                    '304'  => 'ゴルフ',
                    '305'  => 'その他の球技',
                    '306'  => '相撲',
                    '307'  => '格闘技',
                    '308'  => 'オリンピック',
                    '309'  => '国際大会',
                    '310'  => 'マラソン',
                    '311'  => '陸上',
                    '312'  => '水泳',
                    '313'  => 'モータースポーツ',
                    '314'  => 'マリンスポーツ',
                    '315'  => 'ウインタースポーツ',
                    '316'  => '競馬',
                    '317'  => '公営競技',
            ],
            '4'  => [
                    //'400'  => '音楽',
                    '401'  => '国内ロック・ポップス',
                    '402'  => '海外ロック・ポップス',
                    '403'  => 'クラシック',
                    '404'  => 'オペラジャズ',
                    '405'  => 'フュージョン',
                    '406'  => '歌謡曲',
                    '407'  => '演歌',
                    '408'  => 'ライブ',
                    '409'  => 'コンサート',
                    '410'  => 'ランキング',
                    '411'  => 'リクエスト',
                    '412'  => 'カラオケ',
                    '413'  => 'のど自慢',
                    '414'  => '民謡',
                    '415'  => '邦楽',
                    '416'  => '童謡',
                    '417'  => 'キッズ',
                    '418'  => '民族音楽',
                    '419'  => 'ワールドミュージック',
            ],
            '5'  => [
                    //'500'  => 'バラエティ',
                    '501'  => 'クイズ',
                    '502'  => 'ゲーム',
                    '503'  => 'トークバラエティ',
                    '504'  => 'お笑い・コメディ',
                    '505'  => '音楽バラエティ',
                    '506'  => '旅バラエティ',
                    '507'  => '料理バラエティ',
            ],
            '6'  => [
                    //'600'  => 'アニメ／特撮',
                    '601'  => '国内アニメ',
                    '602'  => '海外アニメ',
                    '603'  => '特撮',
            ],
            '7'  => [
                    //'700'  => '趣味／教育',
                    '701'  => '旅',
                    '702'  => '釣り',
                    '703'  => 'アウトドア',
                    '704'  => '園芸',
                    '705'  => 'ペット',
                    '706'  => '手芸音楽',
                    '707'  => '美術',
                    '708'  => '工芸囲碁',
                    '709'  => '将棋',
                    '710'  => '麻雀',
                    '711'  => 'パチンコ',
                    '712'  => '車',
                    '713'  => 'オートバイ',
                    '714'  => 'コンピュータ',
                    '715'  => 'TVゲーム',
                    '716'  => '会話',
                    '717'  => '語学',
                    '718'  => '幼児',
                    '719'  => '小学生',
                    '720'  => '中学生',
                    '721'  => '高校生',
                    '722'  => '大学生',
                    '723'  => '受験',
                    '724'  => '生涯教育',
                    '725'  => '資格',
                    '726'  => '教育問題',
            ],
            '8'  => [
                    //'800'  => 'ニュース／報道',
                    '801'  => '定時・総合',
                    '802'  => '天気',
                    '803'  => '特集・ドキュメント',
                    '804'  => '政治',
                    '805'  => '国会',
                    '806'  => '経済',
                    '807'  => '市況',
                    '808'  => '海外',
                    '809'  => '国際解説',
                    '810'  => '討論・会談',
                    '811'  => '報道特番',
                    '812'  => 'ローカル・地域',
                    '813'  => '交通',
            ],
            '9'  => [
                    //'900'  => '情報／ワイドショー',
                    '901'  => '芸能・ワイドショー',
                    '902'  => 'ファッション',
                    '903'  => '暮らし・住まい',
                    '904'  => '健康・医療',
                    '905'  => 'ショッピング・通販',
                    '906'  => 'グルメ・料理イベント',
                    '907'  => '番組紹介・お知らせ',
            ],
            '10' => [
                    //'1001' => 'ドキュメンタリー／教養',
                    '1002' => '歴史・紀行',
                    '1003' => '自然・動物・環境',
                    '1004' => '宇宙・科学・医学',
                    '1005' => 'カルチャー・伝統文化',
                    '1006' => '文学・文芸',
                    '1007' => 'スポーツ',
                    '1008' => 'ドキュメンタリー全般',
                    '1009' => 'インタビュー・討論',
            ],
            '11' => [
                    //'1100' => '劇場／公演',
                    '1101' => '現代劇・新劇',
                    '1102' => 'ミュージカル',
                    '1103' => 'ダンス・バレエ',
                    '1104' => '落語・園芸',
                    '1105' => '歌舞伎・古典',
            ],
            '12' => [
                    //'1200' => '福祉',
                    '1201' => '高齢者',
                    '1202' => '障碍者',
                    '1203' => '社会福祉',
                    '1204' => 'ボランティア',
                    '1205' => '手話文字（字幕）',
                    '1206' => '音声解説',
            ],
            '99' => [
                    //'9900'=> 'その他',
            ],
    ],
    
    /**
     * エピソード配信枠管理
     * 入力ステータス
     */
    'input_status' => [
            '1'  => '未確定',
            '2'  => 'TXCOM確認中',
            '3'  => 'GYAO！のみ確定',
            '4'  => '確定',
    ],
    
    /**
     * 曜日
     */
    'week' => [
            '0'  => '日',
            '1'  => '月',
            '2'  => '火',
            '3'  => '水',
            '4'  => '木',
            '5'  => '金',
            '6'  => '土',
    ],
    
    /**
     * 都道府県
     */
    'pref' => [
            '1'  => '北海道',
            '2'  => '青森県',
            '3'  => '岩手県',
            '4'  => '宮城県',
            '5'  => '秋田県',
            '6'  => '山形県',
            '7'  => '福島県',
            '8'  => '茨城県',
            '9'  => '栃木県',
            '10' => '群馬県',
            '11' => '埼玉県',
            '12' => '千葉県',
            '13' => '東京都'  ,
            '14' => '神奈川県',
            '15' => '新潟県',
            '16' => '富山県',
            '17' => '石川県',
            '18' => '福井県',
            '19' => '山梨県',
            '20' => '長野県',
            '21' => '岐阜県',
            '22' => '静岡県',
            '23' => '愛知県',
            '24' => '三重県',
            '25' => '滋賀県',
            '26' => '京都府',
            '27' => '大阪府',
            '28' => '兵庫県',
            '29' => '奈良県',
            '30' => '和歌山県',
            '31' => '鳥取県',
            '32' => '島根県',
            '33' => '岡山県',
            '34' => '広島県',
            '35' => '山口県',
            '36' => '徳島県',
            '37' => '香川県',
            '38' => '愛媛県',
            '39' => '高知県',
            '40' => '福岡県',
            '41' => '佐賀県',
            '42' => '長崎県',
            '43' => '熊本県',
            '44' => '大分県',
            '45' => '宮崎県',
            '46' => '鹿児島県',
            '47' => '沖縄県',
    ],

];