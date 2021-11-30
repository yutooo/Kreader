<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>活字読める君</title>
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.js"></script>

    </head>
    <body>
        <header class="header">
            <a href="{{route('index')}}"  class="home"><h1>活字読める君</h1></a>
        </header>

            <ul class="side" id="left">
                <li id="subject">
                    主題<br>
                </li>
            </ul>
            <ul class="side" id="right">
                <li id="digest">
                    要約<br>
                </li>
            </ul>
            <div class="main">
                <ul id="top">
                    <li id="">
                        <input type="text" id="box">
                        <button onclick="post('subject','box')" id="button1">主題</button>
                        <button onclick="post('digest','box')" id="button2">要約</button>
                    </li>
                </ul>

                <div id="text">
                <?php
                    $textArray =preg_split("//u", $text, -1, PREG_SPLIT_NO_EMPTY);  //日本語の文字列を文字要素に分割
                    $num=0; //現在の要素番号
                    $numMax=count($textArray); //配列数
                    $moji_gyo=0; //一行あたりの文字数

                    foreach( $textArray as $value){
                        //漢字だったら
                        if(preg_match("/[一-龠]+$/u",$value)){
                            echo "<span class='kanji'>{$value}</span>";
                            $moji_gyo++;
                        }
                        //最後要素でないかつ、’。’か文字数制限以上で’、’が来たときは改行
                        else if($numMax > $num+1 && (( $value=="、" &&  $moji_gyo> 15 )|| $value=="。")){

                                //、、、で続いてしまった時のために次の確認
                            if($textArray[$num+1]=="、" || $textArray[$num+1]=="。" ){
                                echo $value;
                                $moji_gyo++;
                            }
                            else{
                                echo "{$value}<br />";
                                $moji_gyo= 0;
                            }
                        }
                        //最終要素番号
                        else if($numMax==$num+1){
                            echo "{$value}<br />";
                            $moji_gyo= 0;
                        }
                        //一般文字
                        else{
                            echo $value;
                            $moji_gyo++;
                        }
                        $num++;
                    }

                ?>
                </div>
            </div>

        <script src="js/changed.js"></script>
    </body>
</html>
