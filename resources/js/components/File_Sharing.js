import React ,{Component} from 'react';
import ReactDOM from 'react-dom';


export default class File_Sharing extends Component
{
    render()
    {

        return(
            <div className="main-menu">
                <div className="folder-menu">
                    <input type="text" className="search-text" placeholder="&#xf002;キーワードを入力"></input>
                    <ul className="folder-list">
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>                                
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="" className="folder-a"><i class="far fa-folder folder-icon"></i>テストフォルダ</a><a href=""><i class="fas fa-ellipsis-h"></i></a></li>
                    </ul>
                </div>
                <div className="main-contents">
                    <div className="my-header">
                        <div className="my-header-title">
                            <h5>ファイル共有</h5>
                            <h6>フォルダ名</h6>
                        </div>
                        <div className="my-header-items">
                            <section className="my-header-items-section">
                                <a href="" className="circle"><i class="fas fa-cloud-download-alt"></i></a>
                                <p  onClick={
                                        function(){

                                    }
                                }>ダウンロード</p>
                            </section>
                            <section className="my-header-items-section">
                                <a href="" className="circle"><i class="fas fa-cloud-upload-alt"></i></a>
                                <p>アップロード</p>
                            </section>
                            <section className="my-header-items-section">
                                <a href="" className="circle"><i class="fas fa-user-plus"></i></a>
                                <p>共有ユーザ追加</p>
                            </section>                               
                        </div>
                    </div>
                    <div className="account-settings">
                        <section className="my-header-items-section">
                            <a href="" className="circle"><i class="far fa-user"></i></a>
                            <p>アカウント</p>
                        </section>
                        <section className="my-header-items-section">
                            <a href="" className="circle"><i class="far fa-bell"></i></a>
                            <p>通知</p>
                        </section>
                        <section className="my-header-items-section">
                            <a href="" className="circle"><i class="fas fa-cog"></i></a>
                            <p>設定</p>
                        </section>
                        <section className="my-header-items-section">
                            <a href="" className="circle"><i class="far fa-question-circle"></i></a>
                            <p>ヘルプ</p>
                        </section>
                    </div>
                     <div className="main-item">
                         <table border="0">
                             <tr>
                                 <th></th>
                                 <th></th>
                                 <th><a href="">ファイル名</a></th>
                                 <th></th>
                                 <th><a href="">ファイルサイズ</a></th>
                                 <th><a href="">変更日</a></th>
                             </tr>
                             
                             <tr>
                                 
                                    <td><input type="checkbox"></input></td>
                                    <td><i class="far fa-file"></i></td>
                                    <td><a href="">サンプルファイル</a></td>
                                    <td><a href=""><i class="fas fa-ellipsis-h"></i></a></td>
                                    <td>3.9MB</td>
                                    <td>3日前</td>
                                
                             </tr>
                             <tr>
                                 
                                    <td><input type="checkbox"></input></td>
                                    <td><i class="far fa-file"></i></td>
                                    <td><a href="">サンプルファイル</a></td>
                                    <td><a href=""><i class="fas fa-ellipsis-h"></i></a></td>
                                    <td>3.9MB</td>
                                    <td>3日前</td>
                                
                             </tr>
                             <tr>
                                 {/* <a href=""> */}
                                    <td><input type="checkbox"></input></td>
                                    <td><i class="far fa-file"></i></td>
                                    <td><a href="">サンプルファイル</a></td>
                                    <td><a href=""><i class="fas fa-ellipsis-h"></i></a></td>
                                    <td>3.9MB</td>
                                    <td>3日前</td>
                                {/* </a> */}
                             </tr>
                         </table>
                        
                     </div>
                </div>
                
            </div>
        );
    }
}

// file_sharing.blade.php内にfile_sharingというタグがある場合、 //
if (document.getElementById('file_sharing')) {
    // File_Sharingクラスを実行する //
    ReactDOM.render(<File_Sharing />, document.getElementById('file_sharing'));

}