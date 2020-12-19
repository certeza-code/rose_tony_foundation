<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Rose Tony Foundation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/fonts/font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/rose_tony.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('img/rose_tony.css') }}"> -->
        <!-- <link rel="stylesheet" href="resources/css/app.css"> -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>
        <!-- <style>
            body {
                font-family: 'Nunito';
            }
        </style> -->
    </head>
    <body class="" >
         <section class="container-fluid py-0" id="container1">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light col-sm-12 col-xs-12 col-md-12" id="box1">
                    <a class="navbar-brand" href="">
                        <img class="logo" src="{{url('/img/images/logot.png')}}" alt="logo">
                        <!-- <a class="logo_title" id="logo_title">THE ROSE TONY FOUNDATION</a> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"            
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"aria-label="Toggle navigation" id="navBarToggler">
                        <span class="navbar-toggler-icon" id="togglerIcon"></span>
                    </button>
                    <div class="collapse navbar-collapse mr-auto offset-4 " id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" id="home-icon" href="">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="color: blue; ">
                            <a class="nav-link" id="home-icon" href="{{ asset('about.blade.php') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-icon" href="{{ asset('/about.blade.php') }}">Our Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-icon" href="#">News Feeds</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-icon" href="rose_gallery.html">Gallery</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
        <!-- <div class="container-fluid bg-warning" id=""> -->
            <div class="row">
                <div class="col-md-12" id="carousel-slide">
                    <div class="carousel slide" data-ride="carousel" id="slides">
                        <ol class="carousel-indicators">
                            <li data-target="#slides" data-slide-to="0" class="active"></li>
                            <li data-target="#slides" data-slide-to="1" ></li>
                            <li data-target="#slides" data-slide-to="2"></li>
                            <li data-target="#slides" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img class="image_slides w-100" src="{{url('https://media.istockphoto.com/photos/cheering-african-female-student-with-group-of-african-american-picture-id1169691210?k=6&m=1169691210&s=612x612&w=0&h=8qwGKv5EQlFyZR3iWghuiEWS5AmXxDsyCgGINGsEdPs=')}}" alt="slides">
                                <div class="carousel-caption">
                                    <h4 class="col-xs-12 col-sm-12 col-md-12"> Over 200 students are benefiting from the scholarship scheme</h4>
                                    <p>The dreams of many students are fulfilled and we are happy to be the driving wheel.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="image_slides w-100 " src="{{url('https://scholarship-positions.com/wp-content/uploads/2020/01/UK-Scholarships-for-African-Students.jpg')}}" alt="slides">
                                <div class="carousel-caption">
                                    <h3>Train up a child in the way he should grow</h3>
                                    <p>Education still remains the powerful tool to great success and 
                                        accomplishment </p>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <img class="image_slides w-100" src="{{url('/img/images/studygals.jpg')}}" alt="slides">
                                <div class="carousel-caption">
                                    <h4 class="pt-4 col-xs-12 col-sm-12 col-md-12">Together we can make Nigeria great!</h4>
                                    <p id="future">The future Nigeria is here among the youths
                                        The future is bright and the youths are the future.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img class="image_slides w-100" src="{{url('/img/images/images (23)~2.jpeg')}}" alt="slides">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <div class="container-fluid pt-2" id="writeupBox">
            <div class="row">
                <div class="col-md-6" id="writeup">
                    <p id="history">
                        The Rose Tony Foundation is a non governmental organisation 
                        which is focused on awarding scholarships to indigenous 
                        students who have proven and distinguished themselves to be academically inclined.
                        The foundation was founded by Lady Rose Chukwu together with the husband 
                        High Chief Tony Chukwu a.k.a onweghi ihe kariri Chineke in 2007 and over the years , it has recorded tremendous increase in the number of students awarded the scholarship annually.
                        The foundation is a reminder that there is always the need to give back to the society as there is more reward and sense of fulfillment in giving.
                        The foundation has helped in so many ways to alleviate much burdens from parents who cannot afford to train their children in the tertiary institution. It has also helped to reduce the rate of illiteracy among indegenous students.
                        The foundation can boast of producing first class students who are creating positive impact in the world at large
                        <a href="about.html" class="read-more">Read more</a>
                   </p>
                </div>
                <div class="col-md-4  text-center offset-1 py-4 divquote">
                    <p class="quote">
                        Motto:<br>"A scholarship foundation where excellence counts ..."
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid box2">
            <div class="row">
                <div class="col-md-12" id="stment">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="row">
                                <div class="col-md-4 mission-tag">
                                    <img class=" img-fluid stment-img" src="{{url('/img/images/images (25)~2.jpeg')}}" alt="mission statement">
                                    <h3 id="mission">Our Mission</h3>
                                    <p>
                                        Our mission is to help actualise the dreams of students who cannot afford tertiary education and in essence partake in the modelling of our tommorrow.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img class="stment-img" src="{{url('/img/images/images (26)~2.jpeg')}}" alt="vision statement">
                            <h3 id="mission">Our Vision</h3>
                            <p>
                                Our vision is to develop well rounded ,confident and responsible
                                individuals who aspire to achieve their full potentials. We will 
                                do this by partaking in the sponsorship for the students tertiary education  which everyone is equal and all achievements are celebrated.
                            </p>
                        </div>
                        <div class="col-md-6 text-center ">
                            <img class="stment-img" src="{{url('/img/images/Foundation_Logo-512.png')}}" alt="our belief">
                            <h3 id="mission">Our Belief</h3>
                            <p>We believe that every child deserves a sound education.
                                We believe that our students are the emerging future leaders and we ensure that the right path towards academic execellence is maintained. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3" id="newsUpdate">
            <div class="row">
                <div class="col-md-4" id="news1">
                    <div class=" bg-success">
                        <label>THe award of scholarships tgo student beneciaries</label>
                    </div>
                </div>
                <div class="col-md-4" id="news2"></div>
                <div class="col-md-4" id="news3"></div>
            </div>
        </div>
        <div class="container-fluid" id="box3">
            <div class="row">
                <div class="col-md-6 py-3"> 
                   <img class="apply-image" src="{{url('/img/images/female student.jpg')}}" alt="student application">
                   <div class="text-center" id="clickHere">
                       <a id="" href="rose_gallery.html">Click Here</a>
                   </div>
                </div>
                    <div class=" col-md-6 pt-2">
                        <h3 id="h3-application">Apply For Scholarship</h3>
                        <p>The Rose Tony Scholarship Foundation award is an annual scholarship to indigenous and eligible
                            students  who successfully write and pass the foundation's exam.
                            The scholarship is basically for undergraduates who are indigenes of 
                            Ehime Mbano LGA in Imo State and Afikpo South in Ebonyi State of Nigeria respectively.
                            The aforementioned indigenes must be an undergraduate student of a known tertiary institution in Nigeria. Our scholarship scheme spans within Nigeria only.The beneficiaries are awarded the sum of one hundred thousand naira(#100,000)per academic session from the time of gaining the scholarship till he or she graduates from the tertiary institution.
                        </p>
                        <h3 id="h3-application">Eligibility</h3>
                        <p>You must be a certified undergraduate student of a known Nigeria Tertiary  Institution starting from first admission and evidence of acceptance receipt.</p>
                        <p>You must be an indigene of Ehime Mbano LGA of Imo State or Afikpo North LGA of Ebonyi State, Nigeria.
                        </p>
                        <h3 id="h3-application">Requirements For Application</h3>
                        <p>The following are the requirements needed from students who wish
                            to apply for the scholarship;
                        </p>
                        <ul class="pl-5">
                            <li>A photocopy of your school admission letter </li>
                            <li>A photocopy of your JAMB UTME result slip</li>
                            <li>A photocopy of JAMB admission letter</li>
                            <li>A photocopy of your WAEC result</li>
                            <li>A photocopy of your acceptance fee receipt</li>
                            <li>Certificate of Local Government of Origin</li>
                            <li>Two passport sized photograph</li>
                            <li>An application letter explaining why you need the scholarship.</li>
                        </ul>
                        <p>The requirements are to be submitted to Rev Fr Stan, the parish priest of
                                St. Michael's Catholic Church, umueze1 via <a class="" id="phone-num">+2348034970774</a> or click <a href="https://forms.gle/4aTfDSUUgEFok5DM7" id="link-to-apply">here</a> to submit online.
                        </p>
                        <div>
                            <a class="applyBtn" href="{{ asset('../https://forms.gle/4aTfDSUUgEFok5DM7') }}">Apply Now</a>
                        </div>
                    
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12 pt-5 " id="testmonial">See What Our Students Are Saying</div>
                <div class="col-md-12 bg-light" id="stu-testmonial">
                    <div class="row">
                        <div class="col-md-4" id="Testimonies">
                            <figure class="text-center py-1">
                                <img class="img-fluid" src="{{url('/img/images/anthony.jpg')}}" id="stu_img" alt="Mr Anyanwu , a beneficiary">
                                <label class="text">Mr. Great Anyanwu</label>
                                <span class="text">(2010 beneficiary)</span>
                            </figure>
                            <div>
                                <p class="">
                                        "I still remember the beautiful smiling face of our beloved Mother, I call her my 2nd Mother because she really is.  The very reason I made it to where am today. My life has changed, I embraced my goals and ambitions, moved to United States in Aug . Today I celebrate and ending my year with an award from the United States Army as Top 20 graduates of my class with 230 soldiers. I look forward to more accomplishments in future,let my story encourage you". 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4" id="Testimonies">
                            <figure class="py-1 text-center">
                                <img src=" {{url('/img/images/confy.jpg')}}" id="stu_img" alt="Ms Confidence, a beneficiary">
                                <label class="">Ms Confidence Oguka</label>
                                <span class="">(2016 beneficiary)</span>
                            </figure> 
                            <div>
                                <p>
                                   "The foundation has opened several opportunities for me to explore as a student and I am so grateful for that"
                                </p>
                            </div>     
                        </div>
                        <div class="col-md-4" id="Testimonies">
                            <figure class="py-1 text-center">
                                <img src="{{url('/img/images/scholar.jpg')}}" id="stu_img" alt="Ms Confidence, a beneficiary">
                                <label class="">Mr Oko Christian Ndukwe</label>
                                <span class="">(2017 beneficiary)</span>
                            </figure> 
                            <div>
                                <p>
                                   The schorlarship restored my hope when i thought all hope was lost.  
                                </p>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid " id="box5">
            <div class="row">
                <div class="col-md-12 bg">
                    <h4 id="ourProgram"><marquee>Discover our various programs and events</marquee></h4>
                </div>
                <div class="col-md-3" id="overflow">
                    <p>The 2019 student beneficiaries who excelled in both the written and oral 
                        exam will be awarded the schorlarship on the 31st of December 2019 at High Chief Tony Chukwu's hometown house in Ehime Mbano Local Government Area in Imo State.The occassion was graced by so many distinguished dignitaries who ..<a href="programs.html" class="readMore">Read more</a>
                    </p>
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="container-fluid" id="box6">
            <div class="row">
               <div class="col-md-12">
                   <div class="row">
                       <div class="col-md-3 pt-2">
                            <p>Contact us<br>
                                <i class="fa fa-phone">+234</i><br>
                                <i class="fa fa-whatsapp">+234</i><br>
                                <a href="" class="text-light"><i class="fa fa-twitter"></i>@roseTonyFoundation</a><br>
                                <i class="fa fa-facebook"> Rose Tony Foundation</i><br>
                                <i class="fa fa-envelope"> ogukaconfidence@gmail.com</i>
                            </p>  
                       </div>
                       <div class="col-md-3 pt-2">
                           <p>Our Partners<br>
                            <a href="" class="text-light">ROUDO CONSTRUCTIONS</a>
                        </p>
                       </div>
                       <div class="col-md-3 pt-2">
                           <p>News and Updates<br>
                                <a href="" class="text-light">Latest News</a>
                           </p>
                       </div>
                       <div class="col-md-3 pt-2">FAQs</div>
                   </div>
               </div>
            </div>
        </div>
        <div id="background-wrap">
            <div class="bubble x1"></div>
            <div class="bubble x2"></div>
            <div class="bubble x3"></div>
            <div class="bubble x4"></div>
            <div class="bubble x5"></div>
            <div class="bubble x6"></div>
            <div class="bubble x7"></div>
            <div class="bubble x8"></div>
            <div class="bubble x9"></div>
            <div class="bubble x10"></div>
        </div>
        <a class="logo_title" id="logo_title">THE ROSE TONY FOUNDATION</a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- <script>
            let trial = document.querySelector('#logo_title')
            let m = 12788;
            alert(trial.innerHTML);
        </script> -->
    </body>
</html>
