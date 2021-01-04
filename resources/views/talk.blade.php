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
        html,body {
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
            border: solid #E0E0E0 1px;
        }

        .search-back {
            position:relative;;
            top:0px;
            height:80px;
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .search-text {
            position:relative;
            height: 40%;
            width: 80%;
            border: none;
            border-radius: 4px;
            color: #00697A;
            font-family: "Font Awesome 5 Free", 'Noto Sans JP', 'sans-serif';
            font-weight: 600;
        }
        .folder-list {
            position: relative;
            height: calc(100%  - 80px);
            width: 100%;
            overflow-y:scroll;
            -ms-overflow-style: none;    /* IE, Edge 対応 */
            scrollbar-width: none;       /* Firefox 対応 */
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
            overflow-x:scroll;
            -ms-overflow-style: none;    /* IE, Edge 対応 */
            scrollbar-width: none;       /* Firefox 対応 */
        }

        .folder-list::-webkit-scrollbar,.folder-list > li::-webkit-scrollbar {  /* Chrome, Safari 対応 */
            display:none;
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
            -webkit-border-radius:50%;
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
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row;
            width:60%;
            /* width:60%;
            background-color:#40px; */
        }
        .my-header-items-section {
            display: flex;
            /* display:-webkit-box;
  	        display:-ms-flexbox; */
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
            width: 57.8vw;
            top: 80px;
            position: absolute;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        
        /* .inner-circle {
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            width: 100%;
            position: relative;
            height: 20px;
            top: 30%;
        } */
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
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: white;
            text-align: center;
            line-height: 36px;
            -webkit-border-radius:50%;
            display:block;
        }

        /*メッセージ入力欄*/
        #send > textarea{
            /* width: 53%; */
            width:calc(100%-70px);
            /* height: calc(100vh - 180px); */
            height:100%;
            min-width: 20%;
            min-height: 100%;
            max-width:100%;
            /* resize: vertical; */
            overflow:auto;
            border:2px #E0E0E0 solid;
        }

        /* .button-area{
            text-align:center;
        } */

        #send > button {
            text-align: center;
            background: #6FD8BB;
            width: 70px;
            height:100px;
            vertical-align:top;
            border:transparent;
            position:fixed;
        }

        /* .sendBt{
            vertical-align: center;
            background: #6FD8BB;
            width:50px;
            height:10px;
        } */
        .fa-telegram-plane{
            font-size:50px;
            color:white;
        }
        #send {
            position:fixed;
            display: flex;
            display:-webkit-box;
  	        display:-ms-flexbox;
            height:100px;
            bottom:0;
            /* background-color:red; */
            width:57.8vw;
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
   
</body>

</html>