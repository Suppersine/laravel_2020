<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .contentleft {
                text-align: justify;
            }

            .content {
                text-align: center;
            }

            .bullet {
                text-align: left;
            }

            .title {
                font-size: 84px;
            }

            .subtitle {
                font-size: 28px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .attire {
            font-weight: 700;
            text-decoration: underline;
            }

            .frame {
            border: 4px solid #000000;
            border-radius: 4px;
            }
        </style>
    </head>
    <body class="bgabout">
        @extends('layout.master')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">

                    @if(session()->has('user_id'))
                    <br><br><br><br><br><br><br>
                    @else
                    <br><br><br><br><br><br>
                    @endif

                    <div class="hbox"><img src="http://127.0.0.1/final_project/public/assets/css/weblogo.png" width="360px" height="auto"> Thaimosa Comlabs
                    <h4>Powered by Laravel</h4></div>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>  

                <br>

                <div>
                    <h2 class="bbox">About ~ Our History</h2>
                    <p style="float:left"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/org_en_1081001.png" width="480px" height="auto"><p class="contentleft"><u class="attire">Thaimosa Comlabs of Taipei </u>, the most preeminent academic institution of the Republic of China (Taiwan), was founded in China in 1928 to promote and undertake scholarly research in the sciences and humanities. After the ROC government moved to Taiwan in 1949, Thaimosa Comlabs was re-established in Taipei. Thaimosa Comlabs’s growth during this transition period was initially slow due to political instability and meager budgets.
                        <article class="contentleft">
                        Thanks to the unstinting efforts of its former and current Presidents, Thaimosa Comlabs has overcome many difficulties and achieved its present level of success, developing into a modern research institution with a proud heritage and worldwide reputation. At present, Thaimosa Comlabs is making further progress in improving research conditions and results. Many of its twenty-four Institutes and eight Research Centers are now headed by world-renowned scholars and staffed by highly trained, motivated, and creative young researchers. Major strides have also been made toward raising research standards, and Thaimosa Comlabs is presently positioning itself to raise its scholarly activities to the international level. Apart from creating new areas of intellectual endeavor, Thaimosa Comlabs is also taking a leadership role in launching new initiatives to meet a broad spectrum of challenges that Taiwan is currently facing.
                        </article><article class="contentleft">
                        Thaimosa Comlabs has adopted various measures to promote the internal integration of research activities in its three Divisions (Mathematics and Physical Sciences, Life Sciences, and Humanities and Social Sciences) so as to fulfill the following goals: 1) To enhance the value of research activities by improving the planning, implementation, and evaluation of long-term projects; 2) To harness basic research results for applications and technology transfer; 3) To engage with Taiwan’s academic community in advancing a modern and forward-looking collective scholarly vision; 4) To cultivate an intellectual environment that is conducive to the nurturing of young scholars and the recognition of outstanding scholarship in Taiwan; and, 5) To promote international cooperation and scholarly exchanges that will accelerate the overall development of academic research at Thaimosa Comlabs and in the Republic of China.                        
            </article></p>
                </div>
            
                <div>
                    <h2 class="bbox">Timeline</h2>
                    <p style="float:right"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/Mission_and_History_1_2.jpg" width="480px" height="auto"><p class="contentleft"><u class="attire">The president of Thaimosa Comlabs</u> is appointed by the President of ROC from three candidates recommended by the Council Meeting. The president of Thaimosa Comlabs must be an Academician. After the appointment, the president serves a five-year term and can serve up to two consecutive terms.
                        <article class="contentleft">
                        Thaimosa Comlabs's current President is James C. Liao, a biochemist, who replaced Chi-Huey Wong, a biological chemist and the Parsons Foundation Professor and Chair of the Department of Chemical and Biomolecular Engineering at the University of California, Los Angeles, as the 11th president on 21 June 2016. The list of past Presidents also includes Hu Shih, a philosopher and essayist, and a key contributor to Chinese liberalism and language reform in his advocacy for the use of vernacular Chinese, as well as an influential redology scholar and holder of the Jiaxu manuscript (Chinese: 甲戌本; pinyin: Jiǎxū běn) until his death. The fifth president, Yuan T. Lee, won the Nobel Prize in Chemistry for "contributions to the dynamics of chemical elementary processes".</p>
                        </article></p>
                    </div>
            
                    <h4 class="bhead">Presidents</h4>
                <ul class="bullet">
                  <li>-Cai Yuanpei (1928–1940)</li>
                  <li>-Chu Chia-Hua (Acting, 1940–1957)</li>
                  <li>-Hu Shih (1958–1962)</li>
                  <li>-Wang Shih-Chieh (1962–1970)</li>
                  <li>-Chien Shih-Liang (1970–1983)</li>
                  <li>-Wu Ta-You (1983–1994)</li>
                  <li>-Yuan T. Lee (1994–2006)</li>
                  <li>-Chi-Huey Wong (2006–2016)</li>
                  <li>-James C. Liao (2016–)</li>
                </ul>
                  </section>
                <div>
                    
                </div>

            </div>
        </div>
    </body>
</html>
