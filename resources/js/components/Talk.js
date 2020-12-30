// import React from 'react';
// import ReactDOM from 'react-dom';
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Talk extends Component {
    render() {

        const videocontext = {
            left: "2%",
            bottom: "100%"
        };

        const filecontext = {
            left: "18.5%",
            bottom: "100%"
        }

        const submitcontext = {
            left: "83.5%",
            bottom: "100%"
        }

        const familycontext = {
            left: "20px",
            top: "0px",
            color: "black"
        }

        const familysettingcontext = {
            left: "90%",
            top: "0px",
            color: "black"
        }
        return (

            <div className="main-menu">
                <div className="folder-menu">
                    <div className="search-back"><input type="text" className="search-text" placeholder=" &#xf002; キーワードを入力"></input></div>
                    <ul className="folder-list">
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div className="user-icon"><i class="far fa-user"></i></div>
                            <div className="user-text">
                                <div className="text-list"><span className="person">開発部長</span><span className="date">昨日</span></div>
                                <div className="talk-list">
                                    <input type="text" value="おはよう御座います。こちらサンプルテキストです。"></input>
                                    <p className="talk-circle">7</p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                <div className="main-contents">
                    <div className="my-header">
                        <div className="my-header-title">
                            <h5>トーク</h5>
                            <h6>グループ名</h6>
                        </div>
                        <div className="my-header-items">
                            <section className="my-header-items-section">
                                <a href="" className="circle"><i class="fas fa-phone-alt"></i></a>
                                <p onClick={
                                    function () {

                                    }
                                }>通話</p>
                            </section>
                            <section className="my-header-items-section">
                                <a href="" className="circle"><i class="fas fa-video"></i></a>
                                <p>ビデオ通話</p>
                            </section>
                            <section className="my-header-items-section">
                                <a href="" className="circle"><i class="fas fa-bars"></i></a>
                                <p>メニュー</p>
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
                        <div id="messageLine" className="p-2">

                            {/* <!-- 会話挿入空間 --> */}

                            <div class="opponent">
                            '   <div class="faceicon">
                                    <img src="../" width="50" height="50" class="rounded-circle align-middle img-responsive float-left"></img><p className="name font-weight-bold m-0">開発部長</p>
                                </div>
                                <div class="message_box m-2">
                                    <div class="message_content p-3">
                                        <div class="message_text">メッセージ</div>
                                    </div>
                                </div>
                                <p class="dateTime float-right">2020/11/12</p>
                            </div>
                            <div class="clear"></div>


                            <div class="myself">
                                <div class="faceicon">
                                    <img src="../" width="50" height="50" class="rounded-circle align-middle img-responsive float-right"></img>
                                </div>
                                <div class="message_box m-2">
                                    <div class="message_content p-3">
                                        <div class="message_text">メッセージ</div>
                                    </div>
                                </div>
                                <p class="dateTime float-left">2020/11/11</p>
                            </div>
                            <div class="clear"></div>


                        </div>

                        {/* 会話部分ここまで↑ */}

                        {/* 会話送信部分ここから */}
                        <div id="review"></div>

                        <div id="send" className="col p-2">
                            <div className="form-inline col btn-mouseover">
                                <button id="btn1" type="submit" className="btn btn-primary col-2 btn-mouseover"><a href="/video" target="_blank" rel="noopener"><i className="fas fa-video col-2"></i></a></button>
                                <div className="mouseover__box" style={videocontext}>
                                    <p>ビデオ通話</p>
                                </div>
                                <label htmlFor="btn2" id="avatar" name="avatar" className="btn btn-primary col-2  btn-mouseover"><input id="btn2" type="file" onChange={this.filehandleChange} accept="image/*"></input><i className='fas fa-folder-open'></i></label>
                                <div className="mouseover__box" style={filecontext}>
                                    <p>ファイルをアップロード<br></br>(イメージファイルのみ可)</p>
                                </div>
                                <div className="form-group col-6">
                                    <textarea className="form-control" id="exampleFormControlTextarea1" rows="3" value={this.state.value} onChange={this.handleChange}></textarea>
                                </div>
                                <button id="btn3" type="submit" className="btn btn-primary col-2 btn-mouseover"><i className="fas fa-paper-plane"></i></button>
                                <div className="mouseover__box" style={submitcontext}>
                                    <p>送信</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

if (document.getElementById('talk')) {
    ReactDOM.render(<Talk />, document.getElementById('talk'));
}
