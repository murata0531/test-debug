<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>arael</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <!-- Styles -->




    <style>
     *{
            margin: 0px;
            padding: 0px;
    }

        html,
        body {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            height: 100vh;
            width: 100vw;
            padding: 0;
            margin: 0 auto;
            font-size: 4vm;
            font-family: 'Noto Sans JP', sans-serif;
            position: fixed;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li a {
            height: 50px;
            width: 100%;
            color: white;
            text-align: left;
            font-size: 100%;
            display: block;
            text-decoration: none;
            padding-left: 20px;
        }

        /*サイドメニュー*/
        .side-menu {
            width: 18vw;
            height: 100vh;
            background-color: #62ABB6;
        }

        .side-menu>ul>li>a {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            align-items: center;

        }

        /*main-menu: folder +  main-contents*/
        .main-menu {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            height: 100vh;
            width: calc(100vw - 18vw);
        }

        /*トーク一覧*/
        .folder-menu {
            width: 24vw;
            height: 100vh;
            background-color: #CCE3E3;
            color: #007a7a;
            overflow-y: scroll;
            overflow-x: hidden;
            border: solid #E0E0E0 1px;
        }

        .search-text {
            height: 40px;
            width: calc(24vw - 80px);
            margin: 20px 40px;
            border: none;
            border-radius: 4px;
            color: #00697A;
            font-family: "Font Awesome 5 Free", 'Noto Sans JP', 'sans-serif';
            font-weight: 600;
        }

        .folder-list {
            position: fixed;
            height: calc(100vh - 40px);
            top: 80px;
            width: 24vw;
            overflow-x: scroll;
        }

        .folder-list>li {
            border: solid 1px white;
            height: 80px;
            width: 100%;
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            align-items: center;
            -webkit-box-align: center;
	        -ms-flex-align: center;
            background-color: #e9f2f3;
        }

        .user-icon {
            height: 30px;
            width: 35px;
            position: relative;
            margin: 15px;
            background: #FFFFFF;
            text-align: center;
        }

        .user-icon > .fa-user {
            position: relative;
            top: 4px;
        }

        .user-text {
            position: relative;
            height: 100%;
            width: 100%;
            display: flex;
            flex-flow: column;
            justify-content: space-around;
            -ms-flex-pack: distribute;
        }

        .text-list {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            position: relative;
            /* top: 15px; */
        }


        .date {
            color: #8aa0a0;
            font-size: 12px;
            position: relative;
            left: 155px;
            top: 5px;
        }

        .talk-list {
            width: 100%;
            position: relative;
            bottom: 10px;
        }

        .talk-list>input {
            height: 10px;
            width: 15vw;
            text-overflow: ellipsis;
            position: relative;
            top: 13px;
        }

        .talk-list>.talk-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #E47E7E;
            text-align: center;
            color: white;
            position: relative;
            bottom: 25px;
            left: 255px;
            bottom: 10px;
            
        }

        /*main-contents: header + main-items*/
        .main-contents {
            height: 100vh;
            width: 58vw;
            background-color: gray;
        }

        .my-header {
            width: 40vw;
            height: 80px;
            background-color: #E9F2F3;
            color: #8aa0a0;
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            margin-left: 0;
            position: fixed;
        }

        .account-settings {
            width: 20vw;
            height: 80px;
            right: 0px;
            border-left: solid #CCE3E3;
            background: #E9F2F3;
            display: flex;
            flex-flow: row;
            justify-content: center;
            top: 0px;
            position: fixed;

            /* width:30%;
            background-color:blue; */
        }

        .account-settings>.my-header-items-section>a {
            color: #8AA0A0;
        }

        .account-settings>.my-header-items-section>p {
            color: #8AA0A0;
            font-size: 12px;
        }


        .my-header-title {
            width: 40%;
            background-color: #e9f2f3;
            margin-top: 20px;
            margin-left: 10px;

            /* width:40%;
            background-color:#e9f2f3; */
        }

        h5{
             color:#62ABB6;
        }

        h6{
            margin-top:10px;
            color:#8AA0A0;
        }


        .my-header-items {
            display:flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            flex-flow:row;
            width:60%;
            /* width:60%;
            background-color:#40px; */
        }

        .my-header-items-section {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            flex-flow: column wrap;
            margin-right:10px;
            align-items: center;
            margin-top: 10px;
        }

        .my-header-items >.my-header-items-section > .circle {
            background-color: #00B7B7;
            color: #fff;
        }

        .my-header-items > .my-header-items-section > p {
            font-size: 12px;
        }

        /*main-item*/
        .main-item {
            background-color: #FFFFFF;
            height: calc(100vh - 180px);
            width: 58vw;
            top: 80px;
            position: absolute;
            overflow-y: scroll;
            overflow-x: hidden;
        }



        /* .maru {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            flex-flow: column; 
            vertical-align: top;
            background-color:red;
            position:relative;
            left:10px;
        }
        /* 円の大きさ */
        /* .size_normal{
            width: 20px;
            height: 20px;
        } */
        /* 文字の大きさ */
        /* .letter3 {
            font-size: 15px;
            line-height: 7px;
        } */
        /* 円と文字の色 */
        /* .pink1 {
            color: black;
            border: 2px solid red;
            bakground-color:red;
        } */
        .inner-circle {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            width: 100%;
            position: relative;
            height: 20px;
            top: 30%;
        }

        .circle {
            /* width: 20px;
            height: 20px;
            border-radius: 50%;
            background: red;
            text-align: center;
            color:white;
            position:relative;
            bottom:13px;
            left:255px; */
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: white;
            text-align: center;
            line-height: 36px;
        }


        #send {
            position:fixed;
            height:100px;
            bottom:0;
            background-color:red;
            width:100%;
        }
    </style>

</head>

<body>
    <div class="side-menu">
        <ul>
            <li><a href="#"><i class="fas fa-home"></i><span>ホーム</span></a></li>
            <li><a href="#"><i class="fas fa-tasks"></i><span>タスク</span></a></li>
            <li><a href="#"><i class="far fa-comment-alt"></i><span>トーク</span></a></li>
            <li><a href="#"><i class="fas fa-book-open"></i><span>ノート</span></a></li>
            <li><a href="#"><i class="far fa-folder"></i><span>ファイル共有</span></a></li>
            <li><a href="#"><i class="far fa-file-alt"></i><span>レポート</span></a></li>

        </ul>
    </div>
    <div id="talk"></div>
    <script src="{{asset('/js/app.js')}}"></script>
    <div>

        <!-- <script>
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }); -->
        </script>
</body>

</html>