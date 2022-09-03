<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * テスト用から実装するデータに入れ替えました＠Sin 8/4
     *
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '日本の未来を変える学校が始動、一期生 募集開始予定！',
            'article_category_id' => 5,
            'thumbnail' => 'seminar02.jpg',
            'content' => '徳島県の神山に日本の未来を担う神山まるごと高専(仮)が開校予定です。どんどん発展する徳島県のＩＴ技術学習環境に注目です。',
            'icon_id' => 1,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '徳島県小学生プログラミング大会2022',
            'article_category_id' => 2,
            'thumbnail' => 'Kids_programing.jpg',
            'content' => '徳島県の小学生たち、役立つアイデアをプログラミング作品にして応募してみよう！グランプリ受賞者は全国大会へ！',
            'icon_id' => 2,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '徳島でプログラミングを習うなら、QLIPプログラミングスクール!',
            'article_category_id' => 5,
            'thumbnail' => 'QLIP.png',
            'content' => 'QLIPプログラミングスクールでは、小学3年生～高校3年生対象の夏の限定コースを開催しています。自ら考え作り出す力と社会に発信する力も培う事を目的としています。今注目されるプログラミング教育とは!
            詳しくはこちら
            http://qlip.school/asp/newsitem.asp?nw_id=2064
            QLIP プログラミングスクール
            http://qlip.school/asp/newscat.asp?nc_id=239',
            'icon_id' => 3,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '徳島でサテライトオフィス・コワーキングスペースを探すなら',
            'article_category_id' => 5,
            'thumbnail' => 'Satellitelogo.png',
            'content' => '徳島県下でオフィスワークしたい！場所探しをするならこのサイトです。徳島のサテライトオフィスの詳細や魅力をより詳しく、また県下のコワーキングスペースを分かりやすく紹介してくれています。',
            'icon_id' => 4,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '徳島でIT関連企業に就職するなら',
            'article_category_id' => 3,
            'thumbnail' => 'TurnUptokusima.png',
            'content' => '徳島のIT企業で働きたい!そんな方にぴったりのサイトがあります。Turn up徳島さんでは徳島県でのIT関連企業の紹介及び求人情報、暮らしやイベント等のわくわくするような徳島の魅力を発信されています。',
            'icon_id' => 5,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '障害者のテレワーク雇用に向けた企業向けコンサルティングについて',
            'article_category_id' => 1,
            'thumbnail' => 'adoption01.jpeg',
            'content' => '障害者のテレワーク雇用導入を検討されている企業や、導入後の課題をお持ちの企業に向け、障害者雇用に精通した専門アドバイザーから無料のコンサルティングが受けられます。',
            'icon_id' => 5,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '今年もデジタルとくしま大賞の作品募集が始まりました',
            'article_category_id' => 4,
            'thumbnail' => 'Dezitoku.jpg',
            'content' => '当サイト、あわしょーと!も参加させて頂く予定です!デジタルの力で徳島を盛り上げたい、そんな作品が一挙に集まるコンペティションです。応募期間令和4年6月1日（水）～令和4年10月31日（月）※当日消印有効
            4.応募資格
            徳島の魅力発信やデジタルコンテンツ制作に意欲的である方であれば、プロ・アマの 別を問わず全国から応募が可能です。
            主催:徳島県
            詳しくはこちら
            https://www.pref.tokushima.lg.jp/ippannokata/sangyo/ict/7205651/',
            'icon_id' => 5,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '「あわ☆ショート!」WEBアプリが公開されました!',
            'article_category_id' => 5,
            'thumbnail' => 'demo.jpeg',
            'content' => 'この度、私たちWEBアプリケーション制作科において制作を進めてきた当アプリが遂に公開されました。
                        このアプリを制作するにあたり、一つの企画から全員の様々なアイデアが加わり、とても楽しい作品に仕上がったと思います。

                        昨今では、コロナ禍でのリモートワークの普及など、より高レベルなＰＣスキルを求められる事が多くなって来たのではないでしょうか。
                        タイピング練習など基本的な操作の鍛錬が必要なのは当然ながら、いまや小学生からＰＣが与えられており、多くのＰＣ業務従事者には基本的な操作の定着が成されているのではと思われます。
                        それを踏まえて、よりスキルを得る為にはショートカットキーの技術を習得することがベストではないかと考え制作に至りました。

                        私たちの住む徳島県におきましては、IT関連事業に注力し、徳島県の魅力を最大限に活かした多くの魅力的な事業やその実績がめざましいものであります。
                        そこで、徳島県民のIT技術推進をアピールすべく、徳島県民VS他県民としてショートカットキーの練習スコアで競い合う事で、皆さまがより楽しみながら練習が行えるようなサイトになることを目標としました。

                        また、徳島県を中心にしたIT関連情報の記事も合わせて発信しておりますので、練習で立ち寄っていただいた際には是非ご覧ください。

                        社会人の方は就業前や手が空いた時間に10分練習時間に充ててみていただければ、また、学生の方は就職前準備等で利用してもらえれば、少しの時間のショートカットが大きな時間のショートカットへと繋がり、個人のスキルを向上させるだけではなく、業務効率化へ繋がるはずだと確信しております。

                        皆さまがこのサイトを以てショートカットキーの練習に励んで頂けたら幸いです。
                        是非とも本サイトをお楽しみください！',
            'icon_id' => 5,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => 'とくしまICTバザールセミナー2022',
            'article_category_id' => 2,
            'thumbnail' => 'TokusimaICT.png',
            'content' => 'デジタル産業の下の企業等が自慢の一品を持ち寄るビジネスマッチングの機会として、また子どもたちが最先端のデジタル機器に触れられる機会にも！アスティ徳島にて開催。
            開催期間
            令和４年１０月１３日（木）〜１５日（土）リアル会場
            令和４年１０月１０日（月）〜１５日（土）オンライン

            会場
            メイン会場 アスティとくしま（徳島市山城町東浜傍示1-1）
            サテライト会場 徳島県立工業技術センター(徳島市雑賀町西開11-2)

            主催
            徳島ビジネスチャレンジメッセ実行委員会
        （構成団体）
            徳島県、徳島市、とくしま産業振興機構、徳島商工会議所連合会、徳島県商工会連合会、徳島県中小企業団体中 央会、徳島大学、
            日本政策金融公庫、徳島健康科学総合センター、徳島ニュービジネス協議会
            詳しくはこちら
            https://tokushima-ict-bazaar.jimdofree.com/%E5%87%BA%E5%B1%95%E8%80%85%E5%8B%9F%E9%9B%86/',
            'icon_id' => 5,
            'is_show' => TRUE,
            'created_at' => now(),
            'created_user' => 'sato',
        ];
        DB::table('articles')->insert($param);
    }
}
