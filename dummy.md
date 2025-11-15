



/* ******************************faq section code ***************************** */

.faq-container {

    background-color: var(--bg1-color);
    position: relative;
    overflow: hidden;
}



.left-section {
    padding: 10px;
    min-height: 1px !important;
    transition: min-height 0.3s ease;

}

.faq-container:before {
    aspect-ratio: 4/1;
    content: "";
    position: absolute;
    inset: 0;
    background-image: url("https://media.istockphoto.com/id/1271371970/vector/god-of-thunder-hammer-mjolnir-vector-design-inspiration-or-illustration-template.jpg?s=612x612&w=0&k=20&c=PATkYyyuapzj8d4VOvldBT8ePQmIe8iYJa2Ok1eWNic=");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: left;
    animation: bounceY 4s ease-in-out infinite;
    z-index: 0;
    top: -10%;
    opacity: 0.3;
}



.faq-title {
    font-size: var(--title-size);
    font-weight: 600;
    color: var(--heading-color);
    margin-bottom: 10px;
    line-height: 1.2;
}

.right-section {
    flex: 1;
    padding: 40px;
}

.faq-item {

    position: relative;
    margin-bottom: 10px;
    border-radius: 5px;
    border-left: 4px solid var(--primary-color);
    box-shadow: 0 1px 0 rgba(0, 0, 0, .05);

}

.faq-item:last-child {
    border-bottom: none;
}

.faq-question {
    background: var(--bg1-color);
    /* background-color: transparent; */
    border: none;
    padding: 18px 40px 18px 10px;
    font-size: var(--heading-size);
    font-weight: 500;
    color: var(--header-color);
    cursor: pointer;
    width: 100%;
    text-align: left;
    position: relative;
    transition: all 0.3s ease;
    box-shadow: 5px 5px 27px rgba(0, 0, 0, 0.1);

}



.faq-question::after {
    content: '\f107';
    font-family: 'Font Awesome 6 Free';
    font-weight: 900;
    position: absolute;
    right: 3%;
    top: 50%;
    transform: translateY(-50%) rotate(-90deg);
    transition: transform 0.3s ease;
    font-size: 16px;
    color: var(--btn-color);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: 0.3s ease;
    padding: 0;
    color: var(--para-color);
    font-size: var(--para-size);
    line-height: 1.6;
}


/* Active states */
.faq-item.active .faq-question::after {
    transform: translateY(-50%) rotate(0deg);
}

.faq-item.active .faq-answer {
    max-height: 200px;
    padding: 5px 10px 5px 10px;

}



@media (max-width: 768px) {
    .faq-wrapper {
        flex-direction: column;
    }

    .left-section {
        flex: none;
        padding: 30px 20px;
    }

    .right-section {
        padding: 30px 20px;
    }

    .faq-title {
        font-size: 28px;
    }
}


/* *********************our highlights************ */
.highlights-section {

    background-color: var(--bg2-color);
    position: relative;
    overflow: hidden;
}

.highlights-section::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 45%;
    /* Width of the image area */
    background-image: url('https://st.ourhtmldemo.com/new/metron/images/background/10.jpg');
    background-size: cover;
    background-position: center;
    z-index: 1;
}

.highlights-section .container {
    position: relative;
    z-index: 2;
}

.highlight-box {
    background-color: var(--bg1-color);
    border-radius: var(--radius);
    padding: 25px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
    height: 100%;
    transition: all 0.3s ease;
}

.highlight-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.07);
    background-color: var(--hover-color2);
}

.highlight-box img {
    width: 70px;
    height: 70px;
    opacity: 0.5;
}

.mission-card-wrapper {
    position: absolute;
    right: 0;
    top: 18%;
    transform: translateY(-50%);
    width: 450px;
    z-index: 10;
}

.mission-card {
    background-color: var(--bg2-color);
    border-radius: var(--radius);
    padding: 30px;
    max-height: 342px;

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    position: relative;
    overflow: hidden;
}

.mission-card .card-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;

}

.mission-card .card-header img {
    width: 50px;
    height: 50px;
}

/*--------------------------------
        # Responsive (Mobile)
        --------------------------------*/
@media (max-width: 991.98px) {

    /* Hide the image background on mobile */
    .highlights-section::after {
        display: none;
    }

    /* Make the card static */
    .mission-card-wrapper {
        position: static;
        transform: none;
        width: 100%;
        /* Add space between grid and card */
        margin-top: 40px;
    }
}


/* ***************** image + text  content section code****************** */

.why-choose-us-section {

    background-color: var(--bg1-color);
    overflow: hidden;
}

/* Map Image Wrapper */
.map-image-wrapper {
    aspect-ratio: 1/1;
    width: 100%;
    height: auto;
}




/* ***************************SEO SECTION CODE****************** */
.section-highlight {
    background: var(--dark-overlay-gradient), url("https://media.istockphoto.com/id/1396466280/photo/home-improvement-construction-tools-on-black-background-with-copy-space-banner.jpg?s=612x612&w=0&k=20&c=MPUykaTV-NfspUQHee8fhmOouZrn89wS_2yv_Ih71GU=") no-repeat center center/cover;
    position: relative;
}

.section-highlight::before {
    content: "";
    position: absolute;
    inset: 0;
}

.feature-copy {
    position: relative;
    font-size: 14px;
    line-height: 1.6;

    padding: 18px 10px;
    overflow: hidden;
}

.feature-copy .seo-content61 {
    max-height: 315px;
    overflow: hidden;
    transition: max-height 0.5s ease;

    z-index: 2;
}

.seo-content61 h1,
.seo-content61 h2,
.seo-content61 h3,
.seo-content61 h4,
.seo-content61 h5,
.seo-content61 h6,
.seo-content61 p,
.seo-content61 li,
.seo-content61 ul {
    color: var(--light-color);
}

.scrollcard {
    aspect-ratio: 1/1;
    width: 100%;
    height: auto;
}


/* Hidden checkbox */
.read-more-toggle {
    display: none;
}

.read-more-toggle:checked~.seo-content61 {
    overflow-y: auto;
    scrollbar-width: thin;
    /* for Firefox */
    scrollbar-color: var(--primary-color) transparent;
    /* for Firefox */
    scroll-behavior: smooth;
    /* smooth scroll effect */
}

/* For Chrome, Edge, Safari */
.read-more-toggle:checked~.seo-content61::-webkit-scrollbar {
    width: 6px;
    /* scrollbar thickness */
}

.read-more-toggle:checked~.seo-content61::-webkit-scrollbar-track {
    background: transparent;
    /* track background */
}

.read-more-toggle:checked~.seo-content61::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    /* scrollbar color */
    border-radius: 10px;
    /* rounded edges */
}

.read-more-toggle:checked~.seo-content61::-webkit-scrollbar-thumb:hover {
    background: var(--secondary-color);
    /* color on hover */
}


/* Read more button */
.read-more-btn {
    display: block;
    text-align: left;
    /* button floats right side */
    margin-top: 10px;
    color: var(--light-color);
    font-size: var(--heading-size);
    cursor: pointer;
    transition: color 0.3s;
}


/* Toggle text dynamically */
.read-more-btn::after {
    content: "Show More...";
    color: var(--light-color);
    font-size: var(--para-size);
}

.read-more-btn:hover::after {
    color: var(--hover-color2);
    font-weight: 700;
}

.read-more-btn:hover::before {
    color: var(--primary-color);
}

.read-more-toggle:checked~.read-more-btn::after {
    content: "Show Less...";
    color: var(--light-color);
    font-size: var(--para-size);

}



/* ***************************our partner section code****************************** */
.partners-section {
    background: var(--bg2-color);
}

/* 2. Swiper Container & Slide Styling */
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    aspect-ratio: 1/1;
    text-align: center;
    font-size: 18px;
    background: transparent;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 1rem 0;
}


.swiper-slide img {
    aspect-ratio: 1/1;
    display: block;
    width: 100%;
    height: auto;

    object-fit: cover;


    transition: filter 0.3s ease, opacity 0.3s ease;
}










/* ********************certifcation section code***************************** */

.certifications-section {
    background-color: var(--bg2-color);
}

.certificate-card {
    display: block;
    text-decoration: none;

    border-radius: var(--radius);
    padding: 0.2rem;
    background-color: var(--border-light);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    position: relative;
    /* Required for the overlay */
    overflow: hidden;
}

.certificate-card img {
    width: 100%;
    height: auto;
    aspect-ratio: 1/1;
    object-fit: cover;

}

.certificate-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.card-hover-title {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(to top, rgba(10, 10, 10, 0.9), transparent);
    color: var(--light-color);
    padding: 2rem 1rem 1rem 1rem;
    text-align: center;
    opacity: 0;
    transform: translateY(100%);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.card-hover-title .galleryhead {
    margin: 0;
    font-size: var(--heading-size);
    color: var(--light-color);
    font-weight: 600;
}

/* Show the title on hover */
.certificate-card:hover .card-hover-title {
    opacity: 1;
    transform: translateY(0);
}




/* **********************contact us page************************** */

.contactpage {

    padding: 56px 0 0 0;

    background-color: var(--bg2-color);



}

.contact-section-51 {

    background-color: var(--bg1-color);

    border: 1px solid #e0e0e0;

    margin-bottom: 56px;

}



.section-title-51 {
    font-weight: 600;
    font-size: 24px;
    color: var(--primary-color);
    margin-bottom: 0.5rem;
}

.section-para-51 {
    color: var(--para-color);
    font-size: 14px;
    line-height: 1.6;
}

/* --- NEW STYLES FOR REDESIGNED CONTACT ITEMS --- */

.contact-item {
    gap: 0.75rem;
    /* Space between icon and details box */
}

.contact-icon-box {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--primary-color);
    /* border: 1px solid #dee2e6; */
    border-radius: var(--radius);
    color: var(--primary-color);
    font-size: 1.75rem;
    flex-shrink: 0;

    /* For desktop */
    width: 70px;
    height: 70px;
}

.contact-icon-box svg {
    color: var(--white);
}

.contact-details-box {
    background-color: var(--bg2-color);
    /* border: 1px solid ; */
    border-radius: var(--radius);
    padding: 0.8rem 1.25rem;
    flex-grow: 1;
    /* Allows the details box to fill the remaining space */
}

.contact-details-box .detail-label {
    font-weight: 600;
    color: var(--heading-color);
    font-size: 1rem;
    display: block;
}

.contact-details-box .detail-value,
.contact-details-box .detail-value a {
    color: var(--para-color);
    font-size: 0.9rem;
    text-decoration: none;
}

.contact-details-box .detail-value a:hover {
    color: var(--primary-color);
}

/* Responsive stacking for mobile */
@media (max-width: 767.98px) {
    .contact-icon-box {
        width: 100%;
        height: 60px;
    }
}

/* Your existing social icon styles */
.social-icon-link-51 {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: var(--btn-color);
    color: var(--white);
    border-radius: 50%;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.social-icon-link-51:hover {
    opacity: 0.85;
    background-color: var(--primary-color);
    color: var(--white);
}


.contactrightlead {
    background-color: var(--bg2-color);
}

.map-container-51 {

    position: relative;

    overflow: hidden;

    width: 100%;

    padding-top: 25%;

}

.map-container-51 iframe {

    position: absolute;

    top: 0;

    left: 0;

    bottom: 0;

    right: 0;

    width: 100%;

    height: 100%;

    border: none;

}

/* *****************************siteMap Section code**************************** */
.sitemap-section {

    background: var(--bg2-color);

}

.sitemapbox {
    padding: 20px;
    background: var(--bg1-color);
}

.sitemap-section .sitempheading {
    font-size: var(--heading2-size);
    font-weight: 600;
    margin-bottom: 20px;
    border-bottom: 3px solid var(--secondary-color);
    display: inline-block;
    padding-bottom: 5px;
    color: var(--header-color);
}

/* Root UL */
.sitemapcon {
    list-style: none;
    padding-left: 0;
    margin: 0;
    font-size: var(--para-size);
}

/* Parent LI */
.sitemapcon>li {
    position: relative;
    margin: 10px 0;
    padding-left: 20px;
}

/* Add vertical line before items */
.sitemapcon>li::before {
    content: "";
    position: absolute;
    top: 0;
    left: 8px;
    bottom: 0;
    border-left: 2px solid var(--primary-color);
}

/* Horizontal line for each item */
.sitemapcon>li::after {
    content: "";
    position: absolute;
    top: 12px;
    left: 8px;
    width: 10px;
    border-top: 2px solid var(--primary-color);
}

/* Links */
.sitemapcon a {
    text-decoration: none;
    color: var(--para-color);
    font-size: var(--para-size);
    transition: color 0.2s;
}

.sitemapcon a:hover {
    color: var(--hover-color1);
    font-weight: 600;
}

/* Subcategories */
.sitemapsubcat {
    list-style: none;
    margin: 5px 0 5px 20px;
    padding-left: 15px;
    border-left: 2px solid var(--secondary-color);
}

.sitemapsubcat li {
    position: relative;
    margin: 10px 0;
    padding-left: 15px;
}

.sitemapsubcat li::before {
    content: "";
    position: absolute;
    top: 12px;
    left: -15px;
    width: 15px;
    border-top: 2px solid var(--secondary-color);
}

/* Responsive adjustments */
@media (max-width: 767px) {
    .sitemap-section {
        padding: 20px 10px;
    }

    .sitemap-section .you_may {
        font-size: 16px;
    }

    .sitemapcon {
        font-size: 13px;
    }
}


/* ****************market area section code ************** */

/* Section Wrapper */
.market-area {
    background: var(--bg2-color)
}

/* Heading */
.Marektheading {
    text-align: center;
    margin-bottom: 30px;
}

.Marektheading {
    font-size: var(--title-size);
    font-weight: 600;
    color: var(--heading-color);
}



/* Sub-headings (States & Cities titles) */
.market-area h2 {
    font-size: var(--heading2-size);
    font-weight: 600;
    margin: 30px 0 15px;
    color: var(--heading-color);
    border-left: 5px solid var(--primary-color);
    padding-left: 10px;
}

/* Market Cards */
.marketcard {
    display: block;
    text-align: center;
    padding: 12px 10px;

    border-radius: var(--radius);
    background: var(--bg1-color);
    box-shadow: 0 4px 10px rgba(59, 59, 59, 0.1);

    font-size: 16px;
    /* font-weight: 500; */
    color: var(--secondary-color);
    text-decoration: none;
    transition: all 0.3s ease;
}

/* Hover effect */
.marketcard:hover {
    /* background: var(--); */
    color: var(--light-color);

    transform: translateY(-3px);
    background-color: var(--hover-color2);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}



/*************************** privacy policy content********************** */

.privacy-container {


    background-color: var(--bg2-color);
}

.heading-1 {


    font-size: var(--heading2-size);

    color: var(--heading-color);

    margin-bottom: 20px;

    font-weight: 600;
}

.privacy-container a {
    font-size: var(--para-size);

    color: var(--primary-color);
}

.privacy-box {
    padding: 20px;
    background: var(--bg1-color);
}


/* our mission and vision section code */

.philosophy-section {

    background-color: var(--footer-color);
    background-image: url('https://www.transparenttextures.com/patterns/graphy.png');
    background-repeat: repeat;
    overflow: hidden;
}

.flip-card {
    position: relative;
    height: 350px;
    width: 100%;
    border-radius: 0.25rem;
    overflow: hidden;
    background-color: var(--secondary-color);
}

.flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
}

.flip-card-front,
.flip-card-back {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: opacity 0.5s ease-in-out;
}

.flip-card-front {
    opacity: 1;
    z-index: 2;
}

.card-front-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: brightness(0.6);
    z-index: 1;
}

.card-front-content {
    position: relative;
    z-index: 2;
}

.card-front-icon-wrapper {
    width: 80px;
    height: 80px;
    border: 2px solid rgba(255, 255, 255, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 1.5rem;
    color: var(--white)
}

/* ---------------------------------
        4. Card Back (Hidden State)
        --------------------------------- */
.flip-card-back {
    opacity: 0;
    z-index: 1;
    background-color: var(--secondary-color);
}

.flip-card:hover .flip-card-front {

    opacity: 0;
}

.flip-card:hover .flip-card-back {
    opacity: 1;
}


/* *********************product section code********************* */

.ultproducts-section {
    background-color: var(--bg2-color);
}

.ultproducts-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: var(--radius);
    background-color: var(--bg1-color);
}

.card-footer {
    background-color: var(--bg1-color);
}

.ultproducts-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1) !important;
}

.ultproducts-img-ratio {
    position: relative;
    width: 100%;
    padding-top: 100%;
    overflow: hidden;
}

.ultproducts-img-ratio img {
    aspect-ratio: 1 / 1;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
    object-fit: cover;
}

.ultproducts-img-container {
    overflow: hidden;
}

.ultproducts-img-top {
    transition: transform 0.4s ease;
}

.ultproducts-card:hover .ultproducts-img-top {
    transform: scale(1.05);
}

.ultproducts-link {
    color: var(--btn-color2);
    font-size: var(--para-size);
}

.ultproducts-link svg {
    color: var(--primary-color);
}

.ultproducts-link:hover {
    color: var(--hover-color2);
}

.ultproducts-title-link {
    text-decoration: none;
}

.ultproducts-title:hover {
    color: var(--hover-color2);
}



/* *********************category page section code************************** */
.lab-section {
    background-color: var(--bg2-color);
}

.content-section {
    width: 100%;
}

.left-content-wrapper {
    float: right;
    max-width: 400px;
    width: 100%;
    margin-left: 1.5rem;
    margin-bottom: 1rem;
    border: 1px solid var(--secondary-color);
}

.image-container {
    aspect-ratio: 1/1;
    position: relative;
    width: 100%;
    padding-bottom: 100%;
    overflow: hidden;
    border-radius: 0;
    margin-bottom: 20px;
}

.image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.main-img {
    object-fit: cover;
    display: block;
    margin: auto;
}

.multi-imgs {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 10px;
}

.multi-imgs .imgs {
    border: 1px solid var(--primary-color);
    width: 55px;
    height: 55px;
    cursor: pointer;
    overflow: hidden;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.multi-imgs .imgs img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.multi-imgs .imgs.active {
    border: 2px solid var(--primary-color);
    transform: scale(1.05);
}

.multi-imgs .imgs.youTube a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    background-color: #f70000;
}

.multi-imgs .imgs.youTube a svg {
    width: 30px;
    height: 30px;
    color: white;
}



.product-description p,
.product-description li,
.product-description ul {
    line-height: 1.6;
    text-align: justify;
    margin-bottom: 6px;
}

.button-container {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    justify-content: space-evenly;
    margin-bottom: 20px;
}


/* ***********new faq design code ******************/

.faq-redesign-section {
    background-color: var(--bg1-color);
}


.faq-nav-vertical .nav-link {
    font-size: var(--heading-size);
    font-weight: 500;
    color: var(--heading-color);
    padding: 1rem;
    border: none;
    border-top: 1px solid var(--primary-color);
    border-radius: 0;
    position: relative;
    background: var(--bg2-color);
    transition: none;
}

.faq-nav-vertical .nav-link:first-child {
    border-top: none;
}

/* Style for the active nav link */
.faq-nav-vertical .nav-link.active {
    color: var(--primary-color);
    background-color: var(--bg1-color);
    border-left: 2px solid var(--primary-color);
    font-weight: 600;
    padding-left: 2.25rem;
}

.faq-nav-vertical .nav-link.active {
    border-top-color: transparent;
}


.faq-tab-content {
    background-color: var(--bg2-color);

    border-top: 1px solid var(--primary-color);
}

.custom-accordion-item {
    border: none;
    border-top: 1px solid var(--primary-color);
    border-radius: 0;
    box-shadow: none;
    margin-bottom: 0;
    padding: 0;
}

.faq-tab-content .custom-accordion-item:first-child {
    border-top: none;
}

.custom-accordion-question {
    font-size: var(--heading-size);
    font-weight: 600;
    color: var(--heading-color);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
}

.custom-accordion-question span {
    padding-right: 1rem;
}

.custom-accordion-answer {
    max-height: 0;
    overflow: hidden;
    color: var(--para-color);
    line-height: 1.7;
    font-size: var(--para-color);

    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
    padding: 0 1.5rem;
}


.custom-accordion-item.active .custom-accordion-question {
    color: var(--primary-color);
}

.custom-accordion-item.active .custom-accordion-answer {
    max-height: 200px;
    padding-top: 0;
    padding-bottom: 1.75rem;
    transition: max-height 0.4s ease-in, padding 0.4s ease-in;
}


.icon-toggle {
    width: 1.75rem;
    height: 1.75rem;
    background-color: transparent;
    font-weight: normal;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    /* Make it round */
    cursor: pointer;
    flex-shrink: 0;

    /* Collapsed state: (down arrow) */
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='%230e7ecd' class='bi bi-arrow-down-circle' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' d='M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z'/%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-size: 1.75rem;
    background-position: center;
}

/* Remove the old '+' content */
.icon-toggle::after {
    content: "";
}

/* Active state for your JS */
.custom-accordion-item.active .icon-toggle {
    background-color: var(--border-light);
    color: var(--hover-color2) !important;

    /* Active state: (up arrow) */
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='28' height='28' fill='%230e7ecd' class='bi bi-arrow-up-circle' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' d='M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z'/%3e%3c/svg%3e");
}

/* Remove the old '−' content */
.custom-accordion-item.active .icon-toggle::after {
    color: var(--hover-color2);

    content: "";
}

