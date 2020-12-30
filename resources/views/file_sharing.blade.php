<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"/>

        <!-- Styles -->
        <style>
            *{
                margin: 0px;
                padding: 0px;
            }

            html,body {
                display:flex;
                height:100vh;
                width:100vw;
                padding:0;
                margin:0 auto;
                font-size:4vm;
                font-family: 'Noto Sans JP', sans-serif;
                position:fixed;
            }

            ul {
                list-style:none;
                padding:0;
                margin:0;
            }

            li > a {
                height:50px;
                width : 100%;
                color:white;
                text-align:left;
                font-size:100%;
                display:block;
                text-decoration:none;
                padding-left:20px;
                
            }

            /*サイドメニュー*/
            .side-menu {
                width:18vw;
                height:100vh;
                background-color:#62ABB6;
            }

            .side-menu > ul > li > a {
                display:flex;
                align-items:center;
            }

            /*main-menu:folder+main-contents*/
            .main-menu {
                display:flex;
                height:100vh;
                width:calc(100vw - 18vw);
            }

            /*フォルダー*/
            .folder-menu {
                width:24vw;
                height:100vh;
                background-color:#CCE3E3;
                overflow-y:scroll;
                overflow-x:hidden;
                border: solid #E0E0E0 1px;
                
            }
            .search-text{
                height: 40px;
                width: calc(24vw - 80px);
                margin: 20px 40px;
                border: none;
                border-radius:4px;
                color: #00697A;
                font-family: "Font Awesome 5 Free", 'Noto Sans JP', 'sans-serif';
                font-weight: 600;
                position:fixed;
            }

            .folder-list{
                position: fixed;
                height: calc(100vh - 40px);
                top: 80px;
                overflow-x: scroll;
                width:24vw;
                text-align:center;
            }
            
            .folder-list > li{
                border:solid 1px white;
                height:80px;
                width:100%;
                display:flex;
                align-items:center;
                background: #E9F2F3;
                
            }

            a.folder-a , .folder-icon,.fa-ellipsis-h{
                text-decoration: none;
                color: #00697A;
            }

            .folder-icon{
                right: 38vw;
                /* margin-right:20px; */
                margin-right:1vw;
            }
            
            .fa-ellipsis-h{
                /* margin-left: 100px; */
                margin-left: 5vw;
            }

            
            /*main-contents:header+main-items*/
            .main-contents {
                height:100vh;
                width:58vw;
                background-color:gray;
            }

            .my-header {
                width:40vw;
                height:80px;
                background-color: #E9F2F3;
                color:#8aa0a0;
                display:flex;
                margin-left:0;
                position:fixed;
            }

            .account-settings {
                width:20vw;
                height:80px;
                right:0px;
                border-left:solid #CCE3E3;
                background:#E9F2F3;
                display:flex;
                flex-flow:row;
                justify-content:center;
                top:0px;
                position:fixed;
            }

            .account-settings > .my-header-items-section > a {
                color:#8AA0A0;
            }

            .account-settings > .my-header-items-section > p {
                color:#8AA0A0;
                font-size:12px;
            }
            .main-item {
                background-color: #FFFFFF;
                height:calc(100vh - 80px);
                width:58vw;
                top:80px;
                position:absolute;
            }
            
            h5{
                color:#62ABB6;
            }

            h6{
                margin-top:10px;
                color:#8AA0A0;
            }
            
            .circle{
                /* width: 48px;
                height: 48px; */
                width: 38px;
                height: 38px;
                border-radius: 50%;
                background: white;
                text-align: center;
                line-height: 36px;
            }

            .my-header-items{
                display:flex;
                flex-flow:row;
                width:60%;
            }

            .my-header-title{
                width:40%;
                background-color:#e9f2f3;
                margin-top:20px;
                margin-left:10px;
            }

            .my-header-items-section{
                display:flex;
                flex-flow:column wrap;
                margin-right:10px;
                align-items:center;
                margin-top:10px;
            }

            .my-header-items > .my-header-items-section > .circle {
                background-color:#00B7B7;
                color:#fff;
            }

            .my-header-items > .my-header-items-section > p {
                font-size:12px;
            }

            /*main-items*/
            .main-item{
                align-items: center;
                text-align:center;
                
            }
            table{
                /* margin:auto; */
                border-collapse:collapse;
                position:relative;
                top:50px;
                /* position:absolute; */
                width:90%;
                display:inline-block;
                top:50px;
                left: 30px;
                display:table;
                table-layout:auto;
            }

            th{
                
                border-bottom:solid #8AA0A0;
            }

            table > tr >td{
                height:50px;
                color:#8AA0A0;
            }

            table > tr > th > a{
                text-decoration:none;
                color:#8AA0A0;
                align-items:center;
            }
            table > tr > td > a{
                /* display:inline-block; */
                display:flex;
                align-items:center;
                justify-content:center;
                position:relative;
                width:100%;
                height:100%;
                text-decoration:none;
                color:#8AA0A0;
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
        <div id="file_sharing"></div>
        <script src="{{asset('/js/app.js')}}">
        </script>
    </body>
</html>