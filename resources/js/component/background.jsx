import React, { useEffect } from "react";
import { Link } from "react-router-dom";


export default function Background() {

    return (
        <React.Fragment>
            <body>
                <header id="header" className="d-flex align-items-center">
                    <div className="container d-flex align-items-center justify-content-between">
                        <h1 className="logo">
                            <a href="index.html">
                                Yo-courses<span>.</span>
                            </a>
                        </h1>

                        <a href="index.html" className="logo"></a>
                        <nav id="navbar" className="navbar">
                            <ul>
                                <li>
                                    <a
                                        className="nav-link scrollto active"
                                        href="#hero"
                                    >
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a
                                        className="nav-link scrollto"
                                        href="#about"
                                    >
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a
                                        className="nav-link scrollto"
                                        href="#services"
                                    >
                                        Services
                                    </a>
                                </li>

                                <li>
                                    <a
                                        className="nav-link scrollto"
                                        href="#team"
                                    >
                                        Team
                                    </a>
                                </li>

                                <li>
                                    <a
                                        className="nav-link scrollto"
                                        href="#pricing"
                                    >
                                        pricing
                                    </a>
                                </li>
                            </ul>
                            <i className="bi bi-list mobile-nav-toggle"></i>
                        </nav>
                    </div>
                </header>

                <section id="hero" className="d-flex align-items-center">
                    <div
                        className="container"
                        data-aos="zoom-out"
                        data-aos-delay="100"
                    >
                        <h1>
                            Welcome to <span>Yo-courses</span>
                        </h1>
                        <h2>
                            I am a talented developper making Fully functional
                            web sites ,<br />
                            and i am here to show you
                        </h2>
                        <div className="d-flex">
                            <Link
                                to="auth"
                                className="btn-get-started scrollto"
                            >
                                Get Started
                            </Link>
                        </div>
                    </div>
                </section>

                <section id="featured-services" className="featured-services">
                    <div className="container" data-aos="fade-up">
                        <div className="row">
                            <div className="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div
                                    className="icon-box"
                                    data-aos="fade-up"
                                    data-aos-delay="100"
                                >
                                    <div className="icon">
                                        <i className="bx bxl-dribbble"></i>
                                    </div>
                                    <h4 className="title">
                                        <a href="">
                                            Versatility and Efficiency
                                        </a>
                                    </h4>
                                    <p className="description">
                                        Learning web full stack development
                                        offers versatility and efficiency by
                                        enabling you to handle both front-end
                                        and back-end tasks, streamlining
                                        workflows and optimizing development
                                        processes.
                                    </p>
                                </div>
                            </div>

                            <div className="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div
                                    className="icon-box"
                                    data-aos="fade-up"
                                    data-aos-delay="200"
                                >
                                    <div className="icon">
                                        <i className="bx bx-file"></i>
                                    </div>
                                    <h4 className="title">
                                        <a href="">
                                            Seamless Collaboration and
                                            Communication
                                        </a>
                                    </h4>
                                    <p className="description">
                                        Proficiency in web full stack
                                        development promotes seamless
                                        collaboration and communication between
                                        front-end and back-end teams, fostering
                                        efficient teamwork and smoother project
                                        execution.
                                    </p>
                                </div>
                            </div>

                            <div className="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div
                                    className="icon-box"
                                    data-aos="fade-up"
                                    data-aos-delay="300"
                                >
                                    <div className="icon">
                                        <i className="bx bx-tachometer"></i>
                                    </div>
                                    <h4 className="title">
                                        <a href="">
                                            Cost-Effective Development
                                        </a>
                                    </h4>
                                    <p className="description">
                                        Web full stack development skills help
                                        reduce costs by eliminating the need for
                                        separate specialists or teams, allowing
                                        you to independently manage and execute
                                        web projects.
                                    </p>
                                </div>
                            </div>

                            <div className="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div
                                    className="icon-box"
                                    data-aos="fade-up"
                                    data-aos-delay="400"
                                >
                                    <div className="icon">
                                        <i className="bx bx-world"></i>
                                    </div>
                                    <h4 className="title">
                                        <a href="">
                                            Rapid Prototyping and Iteration
                                        </a>
                                    </h4>
                                    <p className="description">
                                        Proficiency in web full stack
                                        development enables rapid prototyping
                                        and iterative development cycles,
                                        accelerating the process of bringing
                                        ideas to life and delivering improved
                                        web applications.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="about" className="about section-bg">
                    <div className="container" data-aos="fade-up">
                        <div className="section-title">
                            <h2>About</h2>
                            <h3>
                                Find Out More <span>About Me</span>
                            </h3>
                            <p>
                                Welcome to our course website! We are dedicated
                                to providing high-quality education and
                                empowering individuals like you to acquire
                                valuable skills in web development.
                            </p>
                        </div>

                        <div className="row">
                            <div
                                className="col-lg-6"
                                data-aos="fade-right"
                                data-aos-delay="100"
                            >
                                <img
                                    src="assets/img/about.jpg"
                                    className="img-fluid"
                                    alt=""
                                />
                            </div>
                            <div
                                className="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <h3>
                                    Unlock Your Potential with Our Comprehensive
                                    Web Development Courses
                                </h3>

                                <ul>
                                    <li>
                                        <i className="bx bx-store-alt"></i>
                                        <div>
                                            <h5>
                                                Empowering You to Explore,
                                                Master, and Excel in Web
                                                Development
                                            </h5>
                                            <p>
                                                Our goal is to create a
                                                supportive learning environment
                                                where you can explore the
                                                intricacies of front-end and
                                                back-end technologies, master
                                                industry-leading frameworks, and
                                                gain hands-on experience through
                                                practical projects.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <i className="bx bx-images"></i>
                                        <div>
                                            <h5>
                                                Nurture Your Web Development
                                                Journey with Expert Guidance and
                                                Dynamic Curriculum
                                            </h5>
                                            <p>
                                                With our comprehensive
                                                curriculum and experienced
                                                instructors, we strive to equip
                                                you with the knowledge and tools
                                                needed to succeed in the
                                                ever-evolving field of web
                                                development. Join us on this
                                                exciting journey as we unlock
                                                your potential and help you pave
                                                the way towards a successful
                                                career in web development.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <p>
                                    Whether you are a beginner taking your first
                                    steps in web development or an experienced
                                    developer looking to enhance your skills, we
                                    are here to help you achieve your goals.
                                    Through engaging lessons, interactive
                                    exercises, and collaborative projects, we
                                    aim to foster your growth and ignite your
                                    passion for web development.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="counts" className="counts">
                    <div className="container" data-aos="fade-up">
                        <div className="row">
                            <div className="col-lg-3 col-md-6">
                                <div className="count-box">
                                    <i className="bi bi-emoji-smile"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="232"
                                        data-purecounter-duration="1"
                                        className="purecounter"
                                    ></span>
                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div className="col-lg-3 col-md-6 mt-5 mt-md-0">
                                <div className="count-box">
                                    <i className="bi bi-journal-richtext"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="521"
                                        data-purecounter-duration="1"
                                        className="purecounter"
                                    ></span>
                                    <p>Projects</p>
                                </div>
                            </div>

                            <div className="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div className="count-box">
                                    <i className="bi bi-headset"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="1463"
                                        data-purecounter-duration="1"
                                        className="purecounter"
                                    ></span>
                                    <p>Hours Of Support</p>
                                </div>
                            </div>

                            <div className="col-lg-3 col-md-6 mt-5 mt-lg-0">
                                <div className="count-box">
                                    <i className="bi bi-people"></i>
                                    <span
                                        data-purecounter-start="0"
                                        data-purecounter-end="15"
                                        data-purecounter-duration="1"
                                        className="purecounter"
                                    ></span>
                                    <p>Hard Workers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="services" className="services">
                    <div className="container" data-aos="fade-up">
                        <div className="section-title">
                            <h2>Services</h2>
                            <h3>
                                Check our <span>Services</span>
                            </h3>
                            <p>
                                Discover our comprehensive range of services
                                designed to cater to all your web development
                                needs.
                            </p>
                        </div>

                        <div className="row">
                            <div
                                className="col-lg-4 col-md-6 d-flex align-items-stretch"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <div className="icon-box">
                                    <div className="icon">
                                        <i className="bx bxl-dribbble"></i>
                                    </div>
                                    <h4>
                                        <a href="">
                                            Web Design and Development
                                        </a>
                                    </h4>
                                    <p>
                                        Our skilled team specializes in creating
                                        captivating and user-friendly websites,
                                        tailored to your unique brand identity.
                                        From wireframing and prototyping to
                                        responsive web development, we bring
                                        your vision to life, ensuring a seamless
                                        user experience across all devices.
                                    </p>
                                </div>
                            </div>

                            <div
                                className="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <div className="icon-box">
                                    <div className="icon">
                                        <i className="bx bx-file"></i>
                                    </div>
                                    <h4>
                                        <a href="">Front-end Development</a>
                                    </h4>
                                    <p>
                                        Enhance your web presence with
                                        cutting-edge front-end development
                                        solutions. Our experts utilize the
                                        latest technologies and frameworks to
                                        craft visually stunning and interactive
                                        user interfaces, ensuring your website
                                        stands out from the competition.
                                    </p>
                                </div>
                            </div>

                            <div
                                className="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
                                data-aos="zoom-in"
                                data-aos-delay="300"
                            >
                                <div className="icon-box">
                                    <div className="icon">
                                        <i className="bx bx-tachometer"></i>
                                    </div>
                                    <h4>
                                        <a href=""> Back-end Development</a>
                                    </h4>
                                    <p>
                                        Our back-end development services
                                        empower your website with robust
                                        functionality and seamless performance.
                                        Leveraging scalable architectures and
                                        efficient database management, we create
                                        powerful server-side solutions to
                                        support your web applications.
                                    </p>
                                </div>
                            </div>

                            <div
                                className="col-lg-4 col-md-6 d-flex align-items-stretch mt-4"
                                data-aos="zoom-in"
                                data-aos-delay="100"
                            >
                                <div className="icon-box">
                                    <div className="icon">
                                        <i className="bx bx-world"></i>
                                    </div>
                                    <h4>
                                        <a href="">E-commerce Development</a>
                                    </h4>
                                    <p>
                                        Unlock the potential of online retail
                                        with our e-commerce development
                                        expertise. We build secure and
                                        feature-rich e-commerce platforms that
                                        enable seamless product management,
                                        secure payment gateways, and
                                        personalized shopping experiences for
                                        your customers.
                                    </p>
                                </div>
                            </div>

                            <div
                                className="col-lg-4 col-md-6 d-flex align-items-stretch mt-4"
                                data-aos="zoom-in"
                                data-aos-delay="200"
                            >
                                <div className="icon-box">
                                    <div className="icon">
                                        <i className="bx bx-slideshow"></i>
                                    </div>
                                    <h4>
                                        <a href="">CMS Development</a>
                                    </h4>
                                    <p>
                                        Take control of your website content
                                        with our CMS (Content Management System)
                                        development services. We create custom
                                        CMS solutions that simplify content
                                        updates, streamline workflows, and
                                        empower you to manage and organize your
                                        digital assets effortlessly.
                                    </p>
                                </div>
                            </div>

                            <div
                                className="col-lg-4 col-md-6 d-flex align-items-stretch mt-4"
                                data-aos="zoom-in"
                                data-aos-delay="300"
                            >
                                <div className="icon-box">
                                    <div className="icon">
                                        <i className="bx bx-arch"></i>
                                    </div>
                                    <h4>
                                        <a href="">
                                            Website Maintenance and Support
                                        </a>
                                    </h4>
                                    <p>
                                        Ensure the smooth and uninterrupted
                                        operation of your website with our
                                        comprehensive maintenance and support
                                        services. From regular updates and
                                        security patches to performance
                                        optimizations and troubleshooting, we
                                        keep your website running flawlessly.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="testimonials" className="testimonials">
                    <div className="container" data-aos="zoom-in">
                        <div
                            className="testimonials-slider swiper"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <div className="swiper-wrapper">
                                <div className="swiper-slide">
                                    <div className="testimonial-item">
                                        <img
                                            src="assets/img/testimonials/testimonials-1.jpg"
                                            className="testimonial-img"
                                            alt=""
                                        />
                                        <h3>SAFOUAT Younes</h3>
                                        <h4>Ceo &amp; Founder</h4>
                                        <p>
                                            <i className="bx bxs-quote-alt-left quote-icon-left"></i>
                                            As the founder of the website and a
                                            web full stack developer, I bring a
                                            passion for innovation and a wealth
                                            of expertise in creating dynamic and
                                            functional web solutions. With a
                                            deep understanding of both front-end
                                            and back-end technologies, I strive
                                            to deliver cutting-edge websites
                                            that seamlessly merge design
                                            aesthetics with powerful
                                            functionality.
                                            <i className="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>

                                <div className="swiper-slide">
                                    <div className="testimonial-item">
                                        <img
                                            src="assets/img/testimonials/testimonials-2.jpg"
                                            className="testimonial-img"
                                            alt=""
                                        />
                                        <h3>Sara Wilsson</h3>
                                        <h4>Designer</h4>
                                        <p>
                                            <i className="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Export tempor illum tamen malis
                                            malis eram quae irure esse labore
                                            quem cillum quid cillum eram malis
                                            quorum velit fore eram velit sunt
                                            aliqua noster fugiat irure amet
                                            legam anim culpa.
                                            <i className="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>

                                <div className="swiper-slide">
                                    <div className="testimonial-item">
                                        <img
                                            src="assets/img/testimonials/testimonials-3.jpg"
                                            className="testimonial-img"
                                            alt=""
                                        />
                                        <h3>Jena Karlis</h3>
                                        <h4>Store Owner</h4>
                                        <p>
                                            <i className="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Enim nisi quem export duis labore
                                            cillum quae magna enim sint quorum
                                            nulla quem veniam duis minim tempor
                                            labore quem eram duis noster aute
                                            amet eram fore quis sint minim.
                                            <i className="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>

                                <div className="swiper-slide">
                                    <div className="testimonial-item">
                                        <img
                                            src="assets/img/testimonials/testimonials-4.jpg"
                                            className="testimonial-img"
                                            alt=""
                                        />
                                        <h3>Matt Brandon</h3>
                                        <h4>Freelancer</h4>
                                        <p>
                                            <i className="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Fugiat enim eram quae cillum dolore
                                            dolor amet nulla culpa multos export
                                            minim fugiat minim velit minim dolor
                                            enim duis veniam ipsum anim magna
                                            sunt elit fore quem dolore labore
                                            illum veniam.
                                            <i className="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>

                                <div className="swiper-slide">
                                    <div className="testimonial-item">
                                        <img
                                            src="assets/img/testimonials/testimonials-5.jpg"
                                            className="testimonial-img"
                                            alt=""
                                        />
                                        <h3>John Larson</h3>
                                        <h4>Entrepreneur</h4>
                                        <p>
                                            <i className="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Quis quorum aliqua sint quem legam
                                            fore sunt eram irure aliqua veniam
                                            tempor noster veniam enim culpa
                                            labore duis sunt culpa nulla illum
                                            cillum fugiat legam esse veniam
                                            culpa fore nisi cillum quid.
                                            <i className="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div className="swiper-pagination"></div>
                        </div>
                    </div>
                </section>

                <section id="team" className="team section-bg">
                    <div className="container" data-aos="fade-up">
                        <div className="section-title">
                            <h2>Team</h2>
                            <h3>
                                Our Hardworking <span>Team</span>
                            </h3>
                            <p>
                                Our exceptional team of web development experts
                                combines diverse skills and a shared passion for
                                delivering outstanding results. With seamless
                                collaboration and a commitment to excellence, we
                                bring your web projects to life with creativity
                                and precision.
                            </p>
                        </div>

                        <div className="row">
                            <div
                                className="col-lg-3 col-md-6 d-flex align-items-stretch"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <div className="member">
                                    <div className="member-img">
                                        <img
                                            src="assets/img/team/team-5.jpg"
                                            className="img-fluid"
                                            alt=""
                                            
                                        />
                                        <div className="social">
                                            <a href="">
                                                <i className="bi bi-twitter"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-facebook"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-instagram"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div className="member-info">
                                        <h4>SAFOUAT Younes</h4>
                                        <span>Owner</span>
                                    </div>
                                </div>
                            </div>
                            <div
                                className="col-lg-3 col-md-6 d-flex align-items-stretch"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <div className="member">
                                    <div className="member-img">
                                        <img
                                            src="assets/img/team/team-1.jpg"
                                            className="img-fluid"
                                            alt=""
                                        />
                                        <div className="social">
                                            <a href="">
                                                <i className="bi bi-twitter"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-facebook"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-instagram"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div className="member-info">
                                        <h4>Walter White</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                className="col-lg-3 col-md-6 d-flex align-items-stretch"
                                data-aos="fade-up"
                                data-aos-delay="300"
                            >
                                <div className="member">
                                    <div className="member-img">
                                        <img
                                            src="assets/img/team/team-3.jpg"
                                            className="img-fluid"
                                            alt=""
                                        />
                                        <div className="social">
                                            <a href="">
                                                <i className="bi bi-twitter"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-facebook"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-instagram"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div className="member-info">
                                        <h4>William Anderson</h4>
                                        <span>CTO</span>
                                    </div>
                                </div>
                            </div>

                            <div
                                className="col-lg-3 col-md-6 d-flex align-items-stretch"
                                data-aos="fade-up"
                                data-aos-delay="400"
                            >
                                <div className="member">
                                    <div className="member-img">
                                        <img
                                            src="assets/img/team/team-4.jpg"
                                            className="img-fluid"
                                            alt=""
                                        />
                                        <div className="social">
                                            <a href="">
                                                <i className="bi bi-twitter"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-facebook"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-instagram"></i>
                                            </a>
                                            <a href="">
                                                <i className="bi bi-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div className="member-info">
                                        <h4>Amanda Jepson</h4>
                                        <span>Accountant</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="pricing" className="pricing">
                    <div className="container" data-aos="fade-up">
                        <div className="section-title">
                            <h2>Pricing</h2>
                            <h3>
                                Check our <span>Pricing</span>
                            </h3>
                            <p>
                                In our pricing section, we offer transparent and
                                flexible pricing options tailored to meet your
                                specific needs. We believe in providing value
                                for your investment, ensuring that our services
                                align with your budget and project requirements.
                                With a clear breakdown of costs and customizable
                                packages, you can choose the pricing plan that
                                suits you best, allowing you to embark on your
                                web development journey with confidence and
                                peace of mind.
                            </p>
                        </div>

                        <div className="row">
                            <div
                                className="col-lg-3 col-md-6"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <div className="box">
                                    <h3>Free</h3>
                                    <h4>
                                        <sup>$</sup>0<span> / month</span>
                                    </h4>
                                    <ul>
                                        <li>1 course per day</li>
                                        <li>5 lessons</li>
                                        <li className="na">give feed back</li>

                                        <li className="na">add your course</li>
                                        <li className="na">
                                            {" "}
                                            add unlimited lessons
                                        </li>
                                    </ul>
                                    <div className="btn-wrap">
                                        <Link  to="auth" className="btn-buy">
                                            Buy Now
                                        </Link>
                                    </div>
                                </div>
                            </div>

                            <div
                                className="col-lg-3 col-md-6 mt-4 mt-md-0"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <div className="box featured">
                                    <h3>Business</h3>
                                    <h4>
                                        <sup>$</sup>19<span> / month</span>
                                    </h4>
                                    <ul>
                                        <li>5 course per day</li>
                                        <li>unlimited lessons</li>
                                        <li>give feed back</li>

                                        <li className="na">add your course</li>
                                        <li className="na">
                                            {" "}
                                            add unlimited lessons
                                        </li>
                                    </ul>
                                    <div className="btn-wrap">
                                        <Link  to="auth" className="btn-buy">
                                            Buy Now
                                        </Link>
                                    </div>
                                </div>
                            </div>

                            <div
                                className="col-lg-3 col-md-6 mt-4 mt-lg-0"
                                data-aos="fade-up"
                                data-aos-delay="300"
                            >
                                <div className="box">
                                    <h3>Developer</h3>
                                    <h4>
                                        <sup>$</sup>29<span> / month</span>
                                    </h4>
                                    <ul>
                                        <li>20 course per day</li>
                                        <li>unlimited lessons</li>
                                        <li>give feed back</li>

                                        <li>add your course</li>
                                        <li className="na">
                                            {" "}
                                            add unlimited lessons
                                        </li>
                                    </ul>
                                    <div className="btn-wrap">
                                        <Link  to="auth" className="btn-buy">
                                            Buy Now
                                        </Link>
                                    </div>
                                </div>
                            </div>

                            <div
                                className="col-lg-3 col-md-6 mt-4 mt-lg-0"
                                data-aos="fade-up"
                                data-aos-delay="400"
                            >
                                <div className="box">
                                    <span className="advanced">Advanced</span>
                                    <h3>Ultimate</h3>
                                    <h4>
                                        <sup>$</sup>49<span> / month</span>
                                    </h4>
                                    <ul>
                                        <li>50 course per day</li>
                                        <li>unlimited lessons</li>
                                        <li>give feed back</li>
                                        <li>add your lessons</li>
                                        <li> add unlimited lessons</li>
                                    </ul>
                                    <div className="btn-wrap">
                                        <Link  to="auth" className="btn-buy">
                                            Buy Now
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </body>
        </React.Fragment>
    );
}
