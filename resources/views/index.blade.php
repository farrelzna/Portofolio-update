@extends('master')
@section('main')

<div id="header">
    <div class="container">
        <div class="header-text" id="header">
            <p>Web Portofolio</p>
            <img src="assets/img/bismilah.jpg" alt="">
            <h1>Hi, saya <span>Farel</span><br />dan ini Portofolio saya</h1>
        </div>
    </div>
</div>
<br><br><br>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="assets/img/bismilah.jpg" alt="">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <img src="assets/img/bisimilah.jpg" alt="">
                <p>
                    Saya adalah seorang siswa dari SMK WIKRAMA Bogor, berumur 15 tahun, saya menempati dikelas 10, dan
                    saya berada dijurusan PPLG, dan saya memiliki minat yang besar dalam bidang IT, terutama Design dan
                    Ngoding. Selain aktif dalam kegiatan akademik, saya juga terlibat dalam berbagai kegiatan ekstrakurikuler
                    seperti klub Pyhton dan tim Karya Ilmiah Remaja sekolah. Dengan semangat belajar yang tinggi,
                    saya bercita-cita untuk melanjutkan pendidikan di perguruan tinggi terkemuka dan menjadi seorang sarjana
                    yang dapat berkontribusi bagi kemajuan ilmu pengetahuan di Indonesia. Hobi saya meliputi membaca novel,
                    bermain musik, dan menjelajahi alam. Saya berharap dapat menjalin pertemanan dan bekerja sama dengan teman-teman
                    serta guru-guru di sekolah ini untuk meraih prestasi bersama.
                </p>
                <div class="tab-titles">
                    <p class="tab-links active-links" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br />Design Web/App interface</li>
                        <li><span>Web Development</span><br />Design App interface</li>
                        <li><span>Game Development</span><br />Building Pc Games</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>2023 - curent</span><br />Lorem ipsum</li>
                        <li><span>2022 - curent</span><br />Lorem ipsum</li>
                        <li><span>2021 - curent</span><br />Lorem ipsum</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2023</span><br />UI/UX DESIGN TRAINING</li>
                        <li><span>2023</span><br />UI/UX DESIGN TRAINING</li>
                        <li><span>2023</span><br />UI/UX DESIGN TRAINING</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="service">
    <div class="container">
        <h1 class="sub-tittle">Service</h1>
        <div class="service-list">
            <div>
                <i class="fa-solid fa-code"></i>
                <h2>Web Design</h2>
                <p>LA web designer is responsible for creating the design and layout of a website or web pages. 
                    Unlike web developers, who specialise in creating new websites' structures and the code that 
                    forms these, web designers tend to focus on the visual aspects of a site, such as its layout 
                    and its usability. However, there can be crossover between these two roles.</p>
                <a href="https://targetjobs.co.uk/careers-advice/job-descriptions/web-designer-job-description">Learn More</a>
            </div>
            <div>
                <i class="fa-sharp fa-solid fa-crop-simple"></i>
                <h2>back-end developer</h2>
                <p>In our digital world, nearly every company has a website, or uses software and IT systems. 
                    Backend development helps these systems run. Backend developer responsibilities include 
                    creating, maintaining, testing, and debugging the entire back end of an application or system. 
                    This includes the core application logic, databases, data and application integration, API, 
                    and other processes taking place behind the scenes. A highly skilled back end developer is a 
                    programmer who knows how to analyze user needs to ensure a positive user experience.</p>
                <a href="https://business.linkedin.com/talent-solutions/resources/how-to-hire-guides/back-end-developer/job-description">Learn more</a>
            </div>
            <div>
                <i class="fa-brands fa-app-store"></i>
                <h2>UI/UX Design</h2>
                <p>UI/UX designers are responsible for creating user-centered designs for digital products, 
                    such as websites, mobile apps, and software interfaces. Their primary focus is on enhancing 
                    user satisfaction and usability by improving the accessibility, efficiency, and aesthetics 
                    of the product.
                </p>
                <a href="https://www.simplilearn.com/tutorials/ui-ux-career-resources/ui-ux-designer-job-description#:~:text=UI%2FUX%20designers%20are%20responsible,and%20aesthetics%20of%20the%20product.">Learn more</a>
            </div>
        </div>
    </div>
</div>
<div id="section">
    <div class="container">
        <h1 class="sub-tittle">Educatioanal History</h1>
        <div class="work-list">
            <div class="work">
                <img src="assets/img/2022-05-26.jpg" alt="">
                <h4>SDN Ciawi 01</h4>
                <div class="layer">
                    <p>Jl. Nasional 11 No.487, Bendungan, Kec. Ciawi, Kabupaten Bogor, Jawa Barat 16720</p>
                    <a href="https://maps.app.goo.gl/KUNi7fg3Vhgme9g3A"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="assets/img/2023-06-13.jpg" alt="">
                <h4>SMPN 1 Megamendung</h4>
                <div class="layer">
                    <p>8VX8+VWF, Jalan Raya Puncak, Pasir Angin, Megamendung, Cipayung Datar, Kec. Megamendung,
                        Kabupaten Bogor, Jawa Barat 16720</p>
                    <a href="https://maps.app.goo.gl/Tnfp4pxgUJVRUJ328"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="assets/img/2021-04-05.jpg" alt="">
                <h4>SMK Wikrama Bogor</h4>
                <div class="layer">
                    <p>Jl. Raya Wangun, RT.01/RW.06, Sindangsari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
                    <a href="https://maps.app.goo.gl/guHwAcdYaGtp9TMd8"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
            </div>
        </div>
        <a href="/Portofolio" class="btn">See more</a>
    </div>
</div>

@endsection