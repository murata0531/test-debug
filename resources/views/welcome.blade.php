<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            *{
                margin: 0;
                padding: 0;
            }

            body{
                top: 0px;
                left: 0px;
                width: 1920px;
                min-height: 100vh;    
                background: #FFFFFF;
                opacity: 1;
            }

            .left_all{
                min-height: 100vh;
                width: 18vw;
                background: #62ABB6;
                opacity: 1;
            }
​
            .test{
                display: flex;
                -webkit-box-align: start;
                -ms-flex-align: start;
                align-items: flex-start;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                height: 100%;
                padding-bottom: 9px;
                pointer-events: auto;
                overflow-x: hidden;
                overflow-y: auto;
            }

            .nav-list{
                -webkit-box-flex: 0;
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: 100%;
                list-style-type: none;
            }
​
            .nav-list > li{
                vertical-align: middle; 
            } 
​

​
            .left1{
                position: relative;
                height: 8vh;
                padding-left: 3vw;
                position: relative;
                color: white;
                letter-spacing: 2.4px;
                opacity: 1;
            }
        </style>
    </head>

    <body>
        
        <!-- 左側のもの -->
        <div class="left_all">
            <div class="test">
                <br><br>
                <ul class="nav-list">
                    <li>
                        <div class=" left1" id="aaa">
                            <i class="fas fa-home">
                            </i>
                            ホーム
                        </div>
                    </li>
                    <li>
                        <div class="left1" id="aa">
                            <i class="fas fa-clipboard-list">
                            </i>
                            タスク
                        </div>
                    </li>
                    <li>
                        <div class="left1">
                            <i class="far fa-comment-alt">
                            </i>
                            トーク
                        </div>
                    </li>
                    <li>
                        <div class="left1">
                            <i class="fas fa-book-open">
                            </i>
                            ノート
                        </div>
                    </li>
                    <li>
                        <div class="left1">
                            <i class="far fa-folder">
                            </i>
                            ファイル共有
                        </div>
                    </li>
                    <li>
                        <div class="left1">
                            <i class="far fa-file-alt">
                                
                            </i>
                            レポート
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 真ん中のもの -->
        <div class="center_all">
        </div>
    </body>
</html>
