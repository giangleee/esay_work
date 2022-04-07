@extends('layout')

@section('title')
    <title>
        EASY WORK | About us
    </title>
@endsection

@section('style')
<link rel="stylesheet" href="{{url('assets/css/about.css')}}">
@endsection

@section('content')
<main id="up-page">
    <div class="sliders">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/imgs/banner/Sun-World-Fansipan-Legend-2-w.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="assets/imgs/banner/Sun-world-Ba-Na-Hills-1.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="assets/imgs/banner/Sun-world-Ba-Na-Hills-Cau-Vang.jpg" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="history">
       <div class="box-content">
        <div class="title">
            <h1>OUR HISTORY</h1 >
        </div>
        <div class="content">
            <p>After 10 years of development in Vietnam, Sun Group today is proud to be a group of young Vietnamese businessmen that have established international calibre projects, 
                some of which have set Guinness World Records.</p>
            <h4>SUN GROUP FOCUSES ON THE 4 MAIN FIELDS:</h4>
            <div class="row list-img">
                <div class="col-sm-3 list-picture">
                    <img class="" src="./assets/imgs/business/ICDN_Resort-Panorama.png" alt="">
                    <span>Leisure travel</span>
                </div>
                <div class="col-sm-3 list-picture">
                    <img class="" src="./assets/imgs/business/Sun-grand-city-Thuy-Khue-e1499239964144.png" alt="">
                    <span>Recreation & Entertainment</span>
                </div>
                <div class="col-sm-3 list-picture">
                    <img class="" src="./assets/imgs/business/Sun-World-Fansipan-Legend-2-wc.png" alt="">
                    <span>Real estate</span>
                </div>
                <div class="col-sm-3 list-picture">
                    <img class="" src="./assets/imgs/business/Van-Don-International-Airport-9w.png" alt="">
                    <span>Infrastructure Investment</span>
                </div>

            </div>
            
            <div class="more-content">
                <h5>1998 – 2006</h5>
            <p>Sun Group was first established in Ukraine in 1998 by a group of Vietnamese young intellectuals. Initially, Sun Group built its reputation in the 
                Vietnamese community in Ukraine by developing a number of highly appreciated developments, including Barabasova (the biggest commercial centre catering to overseas Vietnamese), 
                Lang Thoi Dai, Sun City – a commercial centre and office building for lease and an in-house waterpark inside the Sun City…
            </p>
            <h5>2007 – 2009</h5>
            <p>When Sun Group decided to officially invest in Vietnam, Da Nang was chosen as its start up point, with a criteria of “quality and difference” and a goal to create timeless products. <br>

                In September 14, 2007, Ba Na Cable Car Service Joint Stock Company was established. Two years later, two cable car systems Suoi Mo – Ba Na and Debay – Morin were put into operation, setting two world records in the process. Sun World Ba Na Hills tourism area was officially opened as one of Vietnam’s leading entertainment and leisure complexes, marking Sun Group’s first step in Vietnam.</p>
            <h5>2009 – 2012</h5>
            <p>Sun Group was first established in Ukraine in 1998 by a group of Vietnamese young intellectuals. Initially, Sun Group built its reputation in the 
                Vietnamese community in Ukraine by developing a number of highly appreciated developments, including Barabasova (the biggest commercial centre catering to overseas Vietnamese), 
                Lang Thoi Dai, Sun City – a commercial centre and office building for lease and an in-house waterpark inside the Sun City…
            </p>
            <h5>2013 – 2016</h5>
            <p>Sun Group was first established in Ukraine in 1998 by a group of Vietnamese young intellectuals. Initially, Sun Group built its reputation in the 
                Vietnamese community in Ukraine by developing a number of highly appreciated developments, including Barabasova (the biggest commercial centre catering to overseas Vietnamese), 
                Lang Thoi Dai, Sun City – a commercial centre and office building for lease and an in-house waterpark inside the Sun City…
            </p>
            <h5>2016 – 2020</h5>
            <p>Sun Group was first established in Ukraine in 1998 by a group of Vietnamese young intellectuals. Initially, Sun Group built its reputation in the 
                Vietnamese community in Ukraine by developing a number of highly appreciated developments, including Barabasova (the biggest commercial centre catering to overseas Vietnamese), 
                Lang Thoi Dai, Sun City – a commercial centre and office building for lease and an in-house waterpark inside the Sun City…
            </p>
            </div>

            <div class="about-more-title">
                <h4>MISSION</h4>   
                <div class="about-more-content">
                    <p class="col-md-6">Since the beginning, carrying the great mission of pioneers,
                        Sun Group has been identifying areas of great potential that
                        have not been fully exploited, reimagining them, and bringing
                        out to our customers products of great beauty and value that
                        transcend the passage of time. Sun Group is dedicated in
                        making Vietnam a prosperous nation, enhancing the quality
                        of life of the locals, and promoting to the world the beauty
                        of Vietnam. Sun Group also fosters the Vietnamese with
                        appropriate characteristics, energy and health to seize the
                        opportunity</p>
                </div>
                <h4>VISION</h4>   
                <div class="about-more-content">
                    <p class="col-md-6">Adhering to sustainable development, Sun Group endeavors
                        to become a leading private economic group that has an
                        international position and a world-class standing, in which
                        identifies entertainment, hospitality tourism, real estate, and
                        infrastructure as key areas for strategic investment. Being a
                        pioneer in constructing cultural tourism in Vietnam, we also
                        wish to nurture and promote a methodical, professional and
                        humanistic approach to develop the tourism culture in Vietnam.
                         </p>
                </div>
                <h4>CORE VALUE</h4>   
                <div class="about-more-content">
                    <p class="col-md-6">“QUALITY”, “LUXURY”, “DIFFERENCE” – these represent Sun Group’s core values since its establishment and throughout its development.
                         This system of values has been a crucial part of Sun Group’s leaders’ collective mission to create timeless landmarks and masterpieces in Vietnam.</p>
                </div>
                <h4>SUN GROUP’S FACTS & FIGURES</h4>   
                <div class="about-more-content">
                    <ol class="list-fact col-md-6">
                        <li>10 years experience</li>
                        <li>51 subsidiaries</li>
                        <li>4631 staffs</li>
                        <li>113 projects</li>
                        <li>VND 137,000 BILLION of investment</li>
                    </ol>
                </div>
            </div>
            
        </div>
       </div>
    </div>
</main>
@endsection
