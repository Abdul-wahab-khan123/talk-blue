<?php include 'includes/links.php'; ?>
<main>
    <div class="top_desh">
        <p>You are previewing <span>all course lessons</span>.</p>
    </div>
    <section class="deshboard-wrap">
        <div class="container-fluid">
            <div class="wrap_crash">
                <div class="side-bar">
                    <div class="side-contant">
                        <div class="main-img">
                            <img src="assets/images/logo.png" alt="">
                        </div>
                        <div class="txt">
                            <a href="Javascript:;"><i class="fa-solid fa-angle-left"></i> Go to deshboard</a>
                            <h2>This is some placeholder content the Settings tab's associated content.</h2>
                            <div class="range">
                                <input type="range" name="volume" id="volume">
                                <p><span>100%</span> Complete</p>
                            </div>
                        </div>
                    </div>
                    <div class="search-by">
                        <input type="text" name="search" placeholder="Search for lessons title">
                        <button><i class="fa-solid fa-caret-down"></i></button>
                    </div>
                    <div class="faq-box">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button course-btn collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            <input class="form-check-input custom-radio" type="radio"
                                                name="exampleRadios" id="exampleRadios1" value="option1">
                                            <label class="form-check-label two-part" for="exampleRadios1">
                                                <h4>Course Notes</h4>
                                                <p>3/3</p>
                                            </label>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="tab-nav">
                                                <button class="nav-link tab-btn line" id="v-pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                                    role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <p>Course Notes - Before You get started
                                                        <span><i class="fa-regular fa-file-lines"></i> Text</span>
                                                    </p>
                                                </button>
                                                <button class="nav-link tab-btn line" id="v-pills-messages-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                                    type="button" role="tab" aria-controls="v-pills-messages"
                                                    aria-selected="false">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                    <p>All homework handouts - printable
                                                        <span><i class="fa-solid fa-cloud-arrow-down"></i>
                                                            Download</span>
                                                    </p>
                                                </button>
                                                <button class="nav-link tab-btn line" id="v-pills-profile-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                                    type="button" role="tab" aria-controls="v-pills-profile"
                                                    aria-selected="false">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                    <p>LIntroduction in to my photography
                                                        <span><i class="fa-solid fa-headphones"></i> Audio</span>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingtwo">
                                        <button class="accordion-button course-btn collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapsetwo"
                                            aria-expanded="false" aria-controls="flush-collapsetwo">
                                            <input class="form-check-input custom-radio" type="radio"
                                                name="exampleRadios2" id="exampleRadios2" value="option2">
                                            <label class="form-check-label two-part" for="exampleRadios2">
                                                <h4>Chapter 1 - Introduction to voice Recorder journaling</h4>
                                                <p>3/3</p>
                                            </label>
                                        </button>
                                    </h2>
                                    <div id="flush-collapsetwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingtwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="tab-nav">
                                                <button class="nav-link tab-btn" id="v-pills-three-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button"
                                                    role="tab" aria-controls="v-pills-three" aria-selected="false">
                                                    <p>Lesson 1a (Watch) – Introduction
                                                        <span><i class="fa-solid fa-video"></i> Video – 15 min</span>
                                                    </p>
                                                </button>
                                                <button class="nav-link tab-btn" id="v-pills-four-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-four"
                                                    type="button" role="tab" aria-controls="v-pills-four"
                                                    aria-selected="false">
                                                    <p>Lesson 1b (Listen) – Introduction
                                                        <span><i class="fa-solid fa-headphones"></i> Audio</span>
                                                    </p>
                                                </button>
                                                <button class="nav-link tab-btn" id="v-pills-five-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-five" type="button"
                                                    role="tab" aria-controls="v-pills-five" aria-selected="false">
                                                    <p>Lesson 1c (Read) – Introduction
                                                        <span><i class="fa-solid fa-file-pdf"></i> pdf</span>
                                                    </p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detail-side">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">
                            <div class="main-box">
                                <div class="Lesson">
                                    <h2>Course Notes - Before You get started </h2>
                                    <div class="full">
                                        <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                                    </div>
                                </div>
                                <div class="content-with-box">
                                    <h3>Time Involvement:</h3>
                                    <p>You can take the course all in one sitting, over a few weeks or a blend of
                                        both, it's up to you.</p>
                                    <div class="para">
                                        <p><span>All in one sitting</span>(Approx. 2.5 hours) <br>Homework time
                                            varies</p>
                                        <p><span>Slowly over 9 weeks</span>(Approx. 30 minutes/week)<br>Homework
                                            time varies</p>
                                        <p><span>Hybrid Course</span>Mix of audio, reading and video Pick and choose
                                            where to start Come back and review anytime Homework time varies</p>
                                    </div>
                                    <h3>Formats:</h3>
                                    <p>We have offered the course content in 3 formats so you can choose the one you
                                        prefer for each week.</p>
                                    <ul>
                                        <li><span>Watch</span> via video slideshow</li>
                                        <li><span>Watch</span> via video slideshow</li>
                                        <li><span>Watch</span> via video slideshow</li>
                                        <li><span>Watch</span> via video slideshow</li>
                                    </ul>
                                </div>
                                <div class="btn-complete">
                                    <button class="btn btn-mark">Mark InComplete</button>
                                    <button class="btn btn-mark complete">Complete
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <div class="main-box">
                                <div class="Lesson">
                                    <h2>All homework handouts - printable </h2>
                                    <div class="full">
                                        <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                                    </div>
                                </div>
                                <div class="content-with-box">
                                    <h3></h3>
                                    <p>You can take the course all in one sitting, over a few weeks or a blend of
                                        both, it's up to you.</p>
                                    <p>We have offered the course content in 3 formats so you can choose the one you
                                        prefer for each week.</p>
                                    <div class="download-pdf">
                                        <h6>VJR-Homework.pdf</h6>
                                        <button class="btn btn-download">Download</button>
                                    </div>
                                </div>
                                <div class="btn-complete">
                                    <button class="btn btn-mark">Mark InComplete</button>
                                    <button class="btn btn-mark complete">Complete <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <div class="main-box">
                                <div class="Lesson">
                                    <h2>Lesson 1a (Listen) – Introduction</h2>
                                    <div class="full">
                                        <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                                    </div>
                                </div>
                                <div class="content-with-box">
                                    <div class="card">
                                        <audio controls class="w-100">
                                            <source src="assets/images/r.webm" type="audio/mpeg">
                                        </audio>
                                        <p>You can take the course all in one sitting, over a few weeks or a blend of both, it's up to you.</p>
                                    </div>
                                </div>
                                <div class="btn-complete">
                                    <button class="btn btn-mark">Mark InComplete</button>
                                    <button class="btn btn-mark complete">Complete <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-three" role="tabpanel"
                            aria-labelledby="v-pills-three-tab" tabindex="0">
                            <div class="main-box">
                                <div class="Lesson">
                                    <h2>Lesson 1a (Watch) – Introduction</h2>
                                    <div class="full">
                                        <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                                    </div>
                                </div>
                                <div class="content-with-box">
                                    <video controls loop muted>
                                        <source src="assets/images/video1.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <div class="btn-complete">
                                    <button class="btn btn-mark">Mark InComplete</button>
                                    <button class="btn btn-mark complete">Complete <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-four" role="tabpanel"
                            aria-labelledby="v-pills-four-tab" tabindex="0">
                            <div class="main-box">
                                <div class="Lesson">
                                    <h2>Lesson 1a (Listen) – Introduction</h2>
                                    <div class="full">
                                        <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                                    </div>
                                </div>
                                <div class="content-with-box">
                                    <div class="card">
                                        <audio controls class="w-100">
                                            <source src="assets/images/r.webm" type="audio/mpeg">
                                        </audio>
                                        <p>You can take the course all in one sitting, over a few weeks or a blend of both, it's up to you.</p>
                                    </div>
                                </div>
                                <div class="btn-complete">
                                    <button class="btn btn-mark">Mark InComplete</button>
                                    <button class="btn btn-mark complete">Complete <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-five" role="tabpanel"
                            aria-labelledby="v-pills-five-tab" tabindex="0">
                            <div class="main-box">
                                <div class="Lesson">
                                    <h2>Lesson 1a (Read) – Introduction</h2>
                                    <div class="full">
                                        <i class="fa-solid fa-down-left-and-up-right-to-center"></i>
                                    </div>
                                </div>
                                <div class="content-with-box">
                                    <embed src="assets/images/rrr.pdf" type="application/pdf" width="100%" height="600px">
                                </div>
                                <div class="btn-complete">
                                    <button class="btn btn-mark">Mark InComplete</button>
                                    <button class="btn btn-mark complete">Complete <i
                                            class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/script.php'; ?>