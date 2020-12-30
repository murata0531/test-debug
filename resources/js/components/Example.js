import React ,{Component} from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component
{
    render()
    {

        return(
            <div>

                {/*header*/}
                
                <header className="header">
                    <h1 className="site-title">
                        < a href="./">クリ★スタ</a>
                    </h1>

                    {/*ナビゲーションバー*/}
                    <div className="nav-wrapper">
                        <nav className="header-nav">
                            <div>
                                <ul className="nav-list">
                                    <li className="nav-item"><a href="#about">About</a></li>
                                    <li className="nav-item"><a href="#blog">News</a></li>
                                    <li className="nav-item"><a href="#blog">Access</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </header>
                

                {/*fv(ファーストビュー)*/}
                <div className="fv">
                    <p className="main-copy">Create.Design</p>
                </div>


                {/*About*/}
                <section className="section-wrapper" id="about">
                    <div>
                        <h2 className="section-title">About</h2>
                        <h3 className="about-title">ミニマルで<br></br>洗練されたデザインを。</h3>
                        <p className="text-about">
                            近年、ミニマルなデザインが流行しています。そこで弊社では、クライアント企業様新規サービスなどの課題に対してミニマルで洗練されたデザインを実現させることで解決のサポートをいたします。もちろんすべてのサービスにおいてミニマルなデザインが課題解決になるわけではないので、課題や今後のサービスの展開等しっかりとヒアリングを行なった上でご提案させて頂きます。
                        </p>
                    </div>
                </section>
                

                {/*service*/}
                <section className="section-wrapper" id="service">
                    <h2 className="section-title">Service</h2>
                    <div className="content-inner">
                        <div className="reverce">
                            <div className="text-wrapper-service">
                                <h3 className="service-title">リリース時のサポートで<br></br>サービスのプランディングを</h3>
                                <p className="section-text-service">弊社では、リリース時もサポートさせて頂きます。プレスリリース用のサイトや動画制作を通して、サービスのプランディングを行わせて頂きます。</p>
                            </div>
                            <div className="text-wrapper-service">
                                <img  className="reverce-img"srcSet="https://drive.google.com/uc?export=view&id=16l_4EvoVBKm1Vu8WesRIgisMZfCKjJZY"
                                    alt="黒い布の上に置かれた黒い一眼レフカメラ" ></img>
                            </div>
                            
                        </div>       
                    </div>

                    <div className="content-inner">
                        <div className="reverce">
                            <div className="text-wrapper-service">
                                <img className="reverce-img" srcSet="https://drive.google.com/uc?export=view&id=1Uif2Ch2m5pnIUuTWqEiZUCVe1qwu4UXG"
                                    alt="黒い布の上に置かれた黒い一眼レフカメラ"></img>
                            </div>
                            <div className="text-wrapper-service">
                                <h3 className="service-title">リリース時のサポートで<br></br>サービスのプランディングを</h3>
                                <p className="section-text-service">弊社では、リリース時もサポートさせて頂きます。プレスリリース用のサイトや動画制作を通して、サービスのプランディングを行わせて頂きます。</p>
                            </div>
                        </div>
                    </div>

                </section>


                {/*News*/}
                <section className="section-wrapper" id="blog">
                    <div className="section-inner">
                        <h2 className="section-title">NEWS</h2>

                        <ul className="card-list">
                            <li className="card-item">
                                <a href="#!">
                                    <div className="card-img">
                                        <img srcSet="https://drive.google.com/uc?export=view&id=1_QC1qlYK_8IbZgQojdrvL0esg1sqQVfI" alt="黒い背景にあるPC"></img>
                                    </div>

                                    <div className="news-position">
                                        <p className="text-news">新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                                    </div>
                                </a>
                            </li>

                            <li className="card-item">
                                <a href="#!">
                                    <div className="card-img">
                                        <img srcSet="https://drive.google.com/uc?export=view&id=1_QC1qlYK_8IbZgQojdrvL0esg1sqQVfI"
                                            alt="黒い背景にあるPC"></img>
                                    </div>

                                    <div className="news-position">
                                        <p className="text-news">新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                                    </div>
                                </a>
                            </li>

                            <li className="card-item">
                                <a href="#!">
                                    <div className="card-img">
                                        <img srcSet="https://drive.google.com/uc?export=view&id=1_QC1qlYK_8IbZgQojdrvL0esg1sqQVfI"
                                            alt="黒い背景にあるPC"></img>
                                    </div>

                                    <div className="news-position">
                                        <p className="text-news">新規サイトを公開しました。今回のサイトは白と黒を基調にしたミニマルなデザインになっています。</p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </section>

                {/*Contact*/}
                <section className="section-wrapper">
                    <h2 className="section-title">Contact</h2>
                    <form action="" className="form">
                        <div className="form-part">
                            <label for="input-name">担当者</label>
                            <input type="text" id="input-subject"/>
                        </div>

                        <div className="form-part">
                            <label for="input-tell">電話番号</label>
                            <input type="text" id="input-subject"/>
                        </div>

                        <div className="form-part">
                            <label for="input-mail">メールアドレス</label>
                            <input type="text" id="input-subject"/>
                        </div>

                        <div className="form-part">
                            <label for="detail">お問い合わせ内容</label>
                            <textarea name="" type="text" id="detail" cols="30" rows="10"/>
                        </div>

                        <div className="form-send">
                            <input type="submit" value="送信" className="form-btn"/>
                        </div>
                    </form>
                </section>
            </div>

        );
    }
}


if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
