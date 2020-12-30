<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                /*font-family: 'Nunito';*/
                color: #141414;
                font-size: 18px;
                letter-spacing: 0.05em;
                margin-left: auto;
                margin-right: auto;
                font-family: 'Roboto', sans-serif, 'Noto Sans JP', sans-serif;
            }

            html{
                color: #000;
                background: #fff;
            }

            li{
                /*listの先頭の記号を無効にする */
                list-style: none;
            }

            a{
                text-decoration: none;
                color: #fff;
            }

            /*header*/
            .header{
                background-color: #1b1310;
                color: #fff;
                height: 74px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                /*上下：０｜左右：120pxの余白 */
                padding: 0 120px;
                /*下線 */
                border-bottom: 1px solid #fff;
            }

            .nav-list{
                /*navの横並び */
                display: flex;
            }

            .nav-item{
                /*メニューの右側に余白 */
                margin-right: 55px;
            }

            /*fv(ファーストビュー)*/
            .fv{
                height: 90vh;
                background-color: #141414;
                /*メインコピーの上下左右中央寄せ*/
                display: flex;
                /*アイテムを中央に寄せる*/
                justify-content: center;
                /*コンテナ内のアイテムを中央に寄せる*/
                align-items: center;
                /*積み重なるように配置*/
                flex-direction: column;
            }

            .main-copy{
                font-size: 5rem;
                color: #fff;
                font-weight: bold;
                border: 2px solid #fff;
                padding: 34px 42px
            }

            /*service・news*/
            .section-title{
                text-align: center;
            }

            .section-wrapper{
                /*上｜左右｜下*/
                padding: 100px 15% 50px;
            }

            .text-wrapper-service{
                width: 480px;
                height: 280px;
                text-align: left;
                margin-top: 40px;
                
            }
            
          
            .content-inner{
                /* flex-wrap: wrap; */
                display: flex;
                width: 1030px;
                height: 280px;
                margin-top: 20px;
            }

            .reverce{
                display: flex;
                justify-content: space-between;
                line-height:40px;
            }

            /*news*/
            .card-list{
                display: flex;
                justify-content: space-between;
            }

            .card-item{
                margin: 50px 0 0;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                box-shadow: 0px 0px 6px #1B131066;
                height: 350px;
                width: 320px;
            }

            .text-news{
                color: black;
            }

            .news-position{
                position: relative;
                text-align: left;
            }

            /*contact*/
            .form{
                max-width: 700px;
                margin: 0 auto;
            }

            input, textarea{
                border: 1px solid #141414;
                padding: 10px;
            }

            .form-part{
                display: flex;
                flex-direction: column;
                margin-top: 25px;
            }

            label{
                margin-bottom: 5px;
            }

            #input-subject, textarea[
                line-height: 2;
                font-size: 1.6rem;
            ]

            textarea{
                resize: none;
                height: 171px;
            }

            .form-send{
                text-align: center;
                margin-top: 50px;
            }

            .form-btn{
                display: inline-block;
                width: 235px;
                padding: 20px 30px;
                /*ボックスの４つのコーナーの角丸をまとめて指定する*/
                border-radius: 30px;
                font-size: 2rem;
                font-weight: bold;
                text-align: center;
                color: #fff;
                background-color: #1b1310;
                box-shadow: 0px 0px 6px #1b1310;
            }

            .reverce-img {
                width: 480px;
                height: 240px;
            }

        </style>
    </head>

    <body>
        <div id="example"></div>
        <script src="{{asset('/js/app.js')}}">
        
        </script>
    </body>
</html>
