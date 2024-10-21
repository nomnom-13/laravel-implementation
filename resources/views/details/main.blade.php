<x-layout>

    <section class="main-section me" id="me">
        <div class="wrapper">
            <div class="img">
                <img src="{{ asset('img/me.png') }}" alt="My Image">
            </div>
            <div class="text-holder">
                <div class="text">
                    <h2>{{ Str::ucfirst($details->firstName) }} {{ Str::ucfirst($details->lastName) }}</h2>
                    <hr>
                    <p>{{ $details->course }} Student</p>
                </div>

                <div class="info">
                    <div class="title">
                        <span>Address</span>
                        <span>Birthday</span>
                        <span>Age</span>
                        <span>Status</span>
                        <span>Sex</span>
                        <span>Nationality</span>
                    </div>
                    <div class="divider">
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                        <p>:</p>
                    </div>
                    <div class="info-txt">
                        <p>{{ Str::ucfirst($details->address) }}</p>
                        <p>{{ $details->birthday }}</p>
                        <p>{{ $details->age }}</p>
                        <p>{{ Str::ucfirst($details->status) }}</p>
                        <p>{{ Str::ucfirst($details->sex) }}</p>
                        <p>{{ Str::ucfirst($details->nationality) }}</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="main-section education" id="education">
        <div class="wrapper">
            <div class="text">
                <h2>Educational Attainment</h2>
            </div>
            <div class="educ-info">
                <div class="college educ-container">
                    <div class="school">
                        <h4>College</h4>
                        <span>:</span>
                        <h4>{{ Str::ucfirst($details->college) }}</h4>
                        <span>-</span>
                        <h4>A.Y. 2021-Present</h4>
                    </div>
                </div>
                <div class="shs educ-container">
                    <div class="school">
                        <h4>Senior High School</h4>
                        <span>:</span>
                        <h4>{{ Str::ucfirst($details->shs) }}</h4>
                        <span>-</span>
                        <h4>A.Y. 2016-2018</h4>
                    </div>
                </div>
                <div class="jhs educ-container">
                    <div class="school">
                        <h4>Junior High School</h4>
                        <span>:</span>
                        <h4>{{ Str::ucfirst($details->jhs) }}</h4>
                        <span>-</span>
                        <h4>A.Y. 2012-2016</h4>
                    </div>
                </div>
                <div class="elem educ-container">
                    <div class="school">
                        <h4>Elementary</h4>
                        <span>:</span>
                        <h4>{{ Str::ucfirst($details->elem) }}</h4>
                        <span>-</span>
                        <h4>A.Y. 2006-2012</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section hobby" id="hobby">
        <div class="wrapper">
            <div class="text">
                <h2>Hobbies</h2>
            </div>
            <div class="hblist">
                <div class="games">
                    <div class="img-holder">
                        <i class='bx bx-joystick'></i>
                    </div>
                    <hr>
                    <h2>{{ Str::ucfirst($details->hobby_1) }}</h2>
                </div>
                <div class="read">
                    <div class="img-holder">
                        <i class='bx bx-book-reader'></i>
                    </div>
                    <hr>
                    <h2>{{ Str::ucfirst($details->hobby_2) }}</h2>
                </div>
                <div class="watch">
                    <div class="img-holder">
                        <i class='bx bx-desktop'></i>
                    </div>
                    <hr>
                    <h2>{{ Str::ucfirst($details->hobby_3) }}</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="main-section contact" id="contact">
        <div class="wrapper">
            <div class="text">
                <h2>Contact Me!</h2>
            </div>
            <div class="social-media">
                <div class="links">
                    <a href="https://www.facebook.com/raymondsantos.13" target="_blank">
                        <i class='bx bxl-facebook-circle'></i>
                    </a>
                    <a href="https://www.instagram.com/ar_ey_es_13/" target="_blank">
                        <i class='bx bxl-instagram'></i>
                    </a>
                    <a href="https://github.com/santos-raymond" target="_blank">
                        <i class='bx bxl-github'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</x-layout>
