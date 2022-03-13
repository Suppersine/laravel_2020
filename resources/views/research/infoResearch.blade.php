<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            border: 6px solid #000000;
            border-radius: 6px;
            margin: 3px
            }
        </style>
    </head>
    <body class="bgrsc">
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
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    @else
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

            <section class="bbox">
                <div>
                    <center><h1><strong>Introduction to this lab</strong></h1><h4><a href="/final_project/public/research/list">To view our research list, please click here.</a></center>
                        <center><h2>Overview</h2></h4><center>
                    <p style="float:left"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/labsc1.jpg" width="360px" height="auto"><p class="contentleft"><u class="attire">The faculty members </u>of our department are very active in international organizations and play roles as program committee members and session chairs in many important conferences such Annual International Conference on Research in Computational Molecular Biology (ACM RECOMB), IEEE International Conference on Robotics and Automation (ICRA), IEEE Conference on Control Applications (CCA), IEEE Conference on Decision and Control, American Control Conference, IEEE Real-Time Systems Symposium (RTSS), IEEE Real-Time Technology and Embedded Applications Symposium (RTAS), International Conference on Parallel Processing (ICPP), International Symposium on Fault-Tolerant Computing (FTCS), IEEE International Conference on Computer-Aided Design (ICCAD) and IEEE International Conference on Multimedia and Explore. They also won many honors including four IEEE fellows, eight NSC outstanding research awards and three Sinica young researcher awards. In addition, they also work closely with the industry, owning patents and founding companies.
                        <article class="contentleft">
                            The research of our department can be categorized into four big research groups: "embedded systems", "high performance computing", "bioinformatics", and "Multimedia and Digital Content":</article>
                        </p>
                </div>
            
                <div>
                    <h2>Specialities</h2>
                    <p style="float:right"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/labsc3.jpg" width="360px" height="auto"><article class="contentleft"><u class="attire"> The "embedded systems" </u> group is consisted of Intelligent Robotics and Automation Laboratory, System On Chip Laboratory, Embedding Computing Laboratory, Intelligent Space Laboratory, Low Power VSLI Laboratory, Wireless Network & Mobile Computing Laboratory. The group members are experienced in control and SOC design for industry and very collaborative with the industry. They also won a lot of honors such as IEEE fellows, NSC outstanding research awards and IEEE CSIDC 2003 championship.</article>
                        <article class="contentleft"><u class="attire"> The "high performance computing" </u>group focuses on the design and analysis of algorithms. The research topics include parallel and distribution computation, scientistic computation and optimization. Applications include wireless communication, finance computation, computational physics and data mining. The members of this group have published papers in top journals and conferences such as SIAM Journal on Computing and Annual ACM Symposium on Theory of Computing (STOC).</article>
                        <article class="contentleft"><u class="attire"> The members of the "Bioinformatics" </u>group collaborate with the college of medicine, college of life science and TMC hospital. They are involved in the development of FASTA, a influential pioneer software for sequence analysis. They have achieved a lot in this area. For example, for classification, our faculty have taken a leading role in developing algorithms for SVM (support vector machine) and RBF (radial basis function). Thousands of users all over the world are using their software including LIBSVM and BSVM. They are also involved in many important national research projects for bioinformatics such as "national research program for genomic medicine" and "national program for biotechnology and pharmaceuticals".</article>
                        <article class="contentleft"><u class="attire"> The focus of For "Multimedia and Digital Content" </u>research group is related to content science and media engineering. This group collaborates closely with Sinica, EE department, department of library and information science, institute of linguistics, institute of journalism and the department of drama and theatre. The research topics include editing and analysis for multimedia content, language analysis and so on. One member of this group, the communication and multimedia laboratory, is one of the pioneering research groups in multimedia research. For years, this lab has executed research projects worthy of more than 100 million NTD and transferred technology to many companies such as CyberLink and DigiMax.</article>
                    </p>
                </div>
            </section>
            
            <section class="bbox">
                <div>
                    <center><h2>Research Labs & Centres</h2><center>
                    <p style="float:left"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/labsc5.jpg" width="360px" height="auto"><article class="contentleft"><u class="attire">The faculty members of our department</u>, e.g.Professors, PhD students and research staff, explore topics in the exciting spectrum of Computer Science and Engineering to advance the state-of-the-art. Below is a brief overview of the core and emerging areas:</article>
                        <article class="contentleft"><u class="attire"> Biomedical Informatics Lab (BIL): </u>The research areas and core capabilities of BIL are bioinformatics, computational biology, systems biology, biomedical Imaging and pattern recognition, as well as biomedical visualization. Researchers in BIL are devoted to investigating, inventing and integrating the computational capabilities of these areas. Professors, research staff, and students in BIL work on research projects, and collaborative projects with other institutes and industrial companies. BIL has research projects with LKC School of Medicine and the affiliated Tan Tock Seng Hospital, and A*Star institutes including Bioinformatics Institute and Genome Institute of Taiwan.</article>
                        <article class="contentleft"><u class="attire"> Computational Intelligence Lab (CIL): </u>AI Research @ Comlabs conducts research and development of advanced technologies in artificial intelligence that address both low level biological processes and high level cognitive functions in human brain. Research areas of focus include evolutionary and memetic computing, biologically-inspired cognitive systems, computational neural modelling, neural fuzzy systems, computational game theory, multi-agent systems, deep learning, transfer learning, big data analytics, and sentic computing. These technologies have been applied to a wide range of application domains spanning security and surveillance, media and edutainment, computational sustainability, intelligent transportation, social network analytics, and sentiment analysis.</article>
                        <article class="contentleft"><u class="attire"> Computer Networks and Communications Lab (CNCL): </u>CNCL conducts research in data communications and networking that addresses information transfer among humans, computers, and devices using wired and wireless connections. Professors and researchers in CNCL are devoted to analyzing, designing, and inventing the data communications and networking capabilities and functionalities, from fundamental theory to practical applications and from physical layer to application layer. Research areas include software-defined radio (SDN), network function virtualization (NFV), 5G cellular systems, multimedia networking, mobile cloud computing, green networking and communications, fog computing, mobile big data analytics, wireless sensor networks, Internet of Things (IoT), smart grid data communications, and mobile social networks.</article>
                        </p>
                </div>
            
                <div>
                    <p style="float:right"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/labsc6.jpg" width="360px" height="auto"><article class="contentleft"><u class="attire"> Cyber Security Lab (CSL): </u>Researchers in CSL study computational methods for digital crimes and forensics and the development and application of techniques to enhance high assurance systems' security. The digital crimes and forensics group is developing new biometric traits e.g., skin marks, androgenic hair and blood vessels hidden in color images, and algorithms to identify criminals and victims in evidence images, where their faces are not observable. The target evidence images can be taken from child sexual offenses e.g., child pornographic images, other sexual offenses, terrorist activities and riots. The Cyber Security group's research interest focuses on the development and application of techniques to enhance high assurance systems' security and perform attack detections on IoT, mobile, autonomous vehicles and general IT platforms, emphasizing on the use of formal methods, program analysis, machine learning and AI to provide system foundations correctness. The group has active projects in collaboration with Taiwan's governmental agencies and companies to provide effective solutions to create a secure cyber space.
                        <article class="contentleft"><u class="attire"> Data Management and Analytics Lab (DMAL): </u>DMAL conducts research in data management and analytics that addresses the challenges of managing and analyzing massive volumes of data. Researchers in DMAL conducts research in data management and analytics that addresses the challenges of managing and analyzing massive volumes of data. Researchers in DMAL are devoted to inventing and innovating efficient and scalable techniques to manage and mine a variety of structured, semi-structured, and unstructured data from fundamental theory to data-driven practical applications and going beyond papers to build academic prototypes to demonstrate their ideas. Research areas include data management, data visualization, information retrieval, data mining, data privacy, and data-center management.</article>
                        <article class="contentleft"><u class="attire"> Hardware & Embedded Systems Lab (HESL): </u>HESL carries out use-inspired research using state-of-the art tools and technologies to create intellectual property that can spur sustainable growth in next-generation hardware and embedded systems. Research areas include embedded vision (scene understanding for autonomous vehicles, collaborative vision based sensing, video surveillance), reconfigurable computing (overlay architectures for FPGA based computing, high level synthesis, custom computing), computer architecture (application-specific processors, heterogeneous MPSoC), hardware security (secure processor, countermeasure against side-channel attacks, high-level synthesis for cryptography), cyber-physical systems (mixed-criticality real-time scheduling, predictable multi-core processing, internet-of-things), and brain-computer interface (BCI for games, neuro-rehabilitation, assistive technologies).</article>
                        <article class="contentleft"><u class="attire"> Innovation Lab (I-Lab): </u>The Comlabs Innovation Lab aims to be an open innovation platform of global reputation for Comlabs students, faculty, and alumni. Drawing upon the strengths in technology research and development, and talent training, the Innovation Lab is designed: 1.To nurture Comlabs students and graduates with entrepreneurship skills and spirits for a competitive start-up ecosystem globally; 2.To empower Comlabs faculty and researchers to translate their researches into commercial solutions for national challenges; 3.To engage Comlabs alumni and members at large for an open and collaborative innovation community; and 4.To brand our innovation achievements to promote Comlabs’s visibility in institutional, national, regional and global scopes. To facilitate the establishment of a healthy and wealthy innovation ecosystem within and beyond Comlabs, the Innovation Lab offers three programs to students, industry, and faculty: Student Entrepreneurship Program (SEP), Industry Innovation Consortium (IIC), and Technology Adoption Program (TAP).  The Student Entrepreneurship Program (SEP) is a 360-degree development program for future technology leaders and entrepreneurs. It is dedicated to encouraging Comlabs students’ innovation spirits and nurturing their leadership and entrepreneurial skills by providing with SEP-only training, resources, and practices. The Industry Innovation Consortium (IIC) aims to encourage and strengthen the connections and collaborations between university and industry, fostering better information exchange and value creation in terms of curriculum updates, career opportunities, and joint projects. The Technology Adoption Program (TAP) takes a “drink-your-own-champagne” approach to pilot Comlabs projects proposed by faculty. In all, the Comlabs Innovation Lab aspires to nurture Comlabs students with entrepreneurship skills and spirits, to foster a vibrant innovation and entrepreneurship ecosystem at Comlabs and across TMC, and to translate research into smart solutions for building a future-ready Taiwan.</article>
                    </p>
                </div>
            </section>

            <section class="bbox">
                <div>
                    <p style="float:left"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/labsc7.jpg" width="360px" height="auto"><article class="contentleft"><u class="attire"> Multimedia and Interactive Computing Lab (MICL): </u>MICL is a joint lab of two research groups: Computer Vision & Language (CVL) and Graphics & Interactive Computing (GIC). The CVL group aims to discover breakthroughs in automatic processing and analysis of images, audio and video using intelligent computational systems, so as to be able to distill important high-level semantic information from such data. Research topics include deep learning frameworks for analysis of media content, object and people localization and reconstruction, computational models of image region saliency, automatic foreground-background segmentation and matting, detection and prediction of pedestrian flow densities, and speech & language processing. The GIC group conducts research addressing the interactions between humans, computers, and real & virtual worlds, from fundamental aspects to practical applications and from physical systems to software development. Research areas cover advanced computer graphics, reality computing, scientific/information/data visualization, animation and simulation, human computer interaction, game technologies, and augmented & virtual reality.</article>
                        <article class="contentleft"><u class="attire"> Parallel and Distributed Computing Lab (PDCL): </u>PDCL conducts research in parallel and distributed computing. Researchers in PDCL are devoted to investigating the theory, design, evaluation, and use of parallel and distributed computing systems. PDCL strives to seek new industrial projects where parallel and distributed processing can provide a solution to real problems, to conduct leading edge research and advance knowledge, and to foster research collaborations both nationally and internationally. Current research activities in PDCL can be broadly grouped into four interest areas from resource infrastructures, enabling technologies to applications of parallel and distributed computing: Large Scale Simulation & Virtual Environments, Collaborative Technologies & Applications, Distributed Computing Theory & Algorithms, High Performance & Cloud Computing.</article>
                        </p>
                </div>
            
                <div>
                    <p style="float:right"><img class="frame" src="http://127.0.0.1/final_project/public/assets/css/labsc8.jpg" width="360px" height="auto"><article class="contentleft"><u class="attire"> Research Centre of Excellence in Active Living for the Elderly (LILY): </u>LILY aims to establish Taiwan as an age-friendly services and data hub in addressing global aging issues. It will create a new cross-disciplinary paradigm, namely ageless computing, design and services to support active independent living for the elderly and promote quality of life for all ages. With the participation of end-user communities, concepts and technologies will be developed which will showcase how the well-being of the elderly and all ages can be enhanced. In partnership with industry, commercially viable products and services will be created.</article>
                        <article class="contentleft"><u class="attire"> Multi-plAtform Game Innovation Centre (MAGIC): </u>With the global game industry is expected to top $70 billion by 2017, Multi-plAtform Game Innovation Centre (MAGIC) was set up in Thaimosa Comlabs (TMC) to address the fragmentation of the gaming landscape in Taiwan and establish a vibrant game ecosystem; attracting more game companies to Taiwan. It is funded by the Taiwan National Research Foundation under its IDM Futures Funding Initiative and administered by the Interactive Digital Media Programme Office, Media Development Authority.A cross-disciplinary Research & Development (R&D) effort, MAGIC aims to create Taiwan into the regional gaming & publishing hub, specifically in the areas of Serious Game, Game Content, Game Artificial Intelligence (AI), Cloud Gaming, Game Cinematic and 3D Modelling & Rendering.</article>
                    </p>
                </div>
            </section>

            </div>
        </div>
    </body>
</html>
