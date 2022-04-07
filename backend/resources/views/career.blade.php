@extends('layout')

@section('title')
    <title>
        EASY WORK | Career
    </title>
@endsection

@section('style')
<link rel="stylesheet" href="{{url('assets/css/career.css')}}">
@endsection

@section('content')
    <main id="up-page">

        <div class="content-up">
            <div class="pic-up">
                <div class="slides-up">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://sun-asterisk.com/wp-content/uploads/2020/03/recruit-top1-1b.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="	https://sun-asterisk.com/wp-content/uploads/2020/03/recruit-top5-1b.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://sun-asterisk.com/wp-content/uploads/2020/03/recruit-top4-1b.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                    </div>
                </div>

                <div class="recruit">
                    <div class="recruit-content">
                        <h1>採用情報</h1>
                        <p>Career</p>
                    </div>
                    <a href="#recruit-box">
                        <img src="https://sun-asterisk.com/wp-content/themes/basetemplate/images/recruit/icon_scroll.png" alt="SCROLL">
                    </a>
                </div>

            </div>

            <div class="recruit-2" id="recruit-box">
                <div class="recruit-inner">
                    <h2>ミライは <br>
                        ぼくらの<br>
                        手の中に</h2>
                    <p>いつだってどんな夢も小さく見える
                        とてつもなく大きなぼくらの世界
                        たとえば、夢の一歩、
                        たったひとりに感じてもらいたい価値さえも
                        本物にするのは難しい
                        だから本気で考えたい
                        一つひとつの価値創造が本物になるプロセスを、
                        そのイマジネーションが感動を生む瞬間を
                        諦めないでチャレンジし続けよう
                        最高の仲間としか実現できない価値創造の種が、
                        ぼくらの手の中にあるかぎり</p>
                </div>
            </div>
        </div>

        <div class="vision-box">
            <div class="vision">
                <div class="scroll-show">
                    <p>Vision</p>
                    <h3>誰もが価値創造に夢中になれる世界</h3>
                </div>
                <div class="slogan">
                    <p>Create a world where everyone has the freedom
                        to make awesome things that matter.</p>
                </div>

                <a href="" class="btn-vision">
                    <span class="">企業理念</span>
                </a>
            </div>
        </div>

        <div class="about">
            <div class="about-title">
                <h3>About Sun*</h3>
                <span>働く環境</span>
            </div>

            <div class="about-inner">
                <div class="about-content">
                    <a href="" class="content-left">
                        <h4>社内風景</h4>
                        <h5>どんなオフィスで働いているのか、日々の仕事風景をご紹介します。</h5>
                    </a>

                    <a href="" class="content-center">
                        <h4>社内制度</h4>
                        <h5>メンバーが気持ちよく働くために、様々な福利厚生・制度を用意しています。</h5>
                    </a>
                    
                    <a href="" class="content-right">
                        <h4>データで見るSun*</h4>
                        <h5>Sun*のこれまでの成長や特徴を表す基本データを数字でご紹介します。</h5>
                    </a>
                    
                </div>
            </div>

            <a href="" class="btn-vision btn-about">
                <span class="">企業理念</span>
            </a>
        </div>

        <div class="more-info">
            <div class="about-title">
                    <h3>Recruit information</h3>
                    <span>採用情報</span>
                    <h6>Sun* は国内外に総勢1,500名のエンジニア、デザイナー、戦略コンサルタントなどが集結する、デジタル・クリエイティブスタジオです。
                        次世代の産業基盤を担うDigital Transformation（DX）を上流設計、
                        開発実装、人材育成といった網羅的なソリューションで実現するために誕生しました。
                        「誰もが価値創造に夢中になれる世界」というビジョンを胸に、社会に貢献していくことに共感いただける方を募集しています。</h6>
            </div>

            <div class="entry">
                <div class="entry-title">
                    <h2>募集職種一覧</h2>
                </div>

                <div class="row">
                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Design Director</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>

                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>UI/UX Designer</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>UX Specialist</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>

                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Account Development</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Corporate Engineer</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>

                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Cloud Architect</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Recruiter</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>

                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Design Director</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="list-entry col-md-6">
                        <div class="entry-img">
                            <img src="assets/imgs/no_image.png" alt="">
                        </div>
                        <div class="entry-position">
                            <h5>Design Director</h5>
                            <a href="">ENTRY</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </main>
@endsection