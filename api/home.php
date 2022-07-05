<section id="download" class="download">
    <div class="container">
        <h1>Open-Source Web Template for SaaS, Startup, Apps, and More</h1>
        <p class="description">
        Multidisciplinary Web Template Built with Your Favourite Technology - HTML Bootstrap, Tailwind and React NextJS.
        </p>
        <div class="buttons">
            <a href="#" class="button">Download Now</a>
            <a href="https://github.com/realluan05/template02" rel="noreferrer noopener" target="_blank" class="link">Github Repo <i class="fas fa-long-arrow-alt-right">&nbsp;</i></a>
        </div>
        <div class="brand">
            <img src="../assets/images/hero/brand.svg" alt="Marcas" />
        </div>
        <div class="img-dashboard">
            <div>
                <img src="../assets/images/hero/hero-image.svg" alt="Dashboard" />
            </div>
        </div>
    </div>
</section>

<?php
function itemFeatures($title, $classFontAwesome)
{
    if ($title) {
        return '<li class="item">
                    <div class="image-view">
                        <i class="'.$classFontAwesome.'"></i>
                    </div>
                    <h2>'.$title.'</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and industry.</p>
                    <a href="#" class="button">Learn More</a>
                </li>';
    }
    return false;
}
?>

<section id="features" class="features">
    <div class="container">
        <h2>Features</>
        <h3>Main Features Of Play</h3>
        <h4 class="description">
        There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
        </h4>
        <ul class="list">
            <?= itemFeatures("Free and Open-Source",
                            "fas fa-gift"); ?>
            <?= itemFeatures("Multipurpose Template",
                            "fas fa-arrows-alt"); ?>
            <?= itemFeatures("High-quality Design",
                            "far fa-object-group"); ?>
            <?= itemFeatures("All Essential Elements",
                            "fas fa-layer-group"); ?>
        </ul>
    </div>
</section>

<section id="about-us" class="about-us">
    <div class="container">
        <div class="left">
            <span>About Us</span>
            <h2>Brilliant Toolkit to Build Nextgen Website Faster.</h2>
            <div class="description">
                <p>
                The main ‘thrust’ is to focus on educating attendees on how to best protect highly vulnerable business applications with interactive panel discussions and roundtables led by subject matter experts.
                </p>
                <p>
                The main ‘thrust’ is to focus on educating attendees on how to best protect highly vulnerable business applications with interactive panel.
                </p>
            </div>
            <a href="#" class="button">Learn More</a>
        </div>
        <div class="rigth">
            <img src="../assets/images/about/about-image.svg" alt="Imagem a direita" loading="lazy" />
        </div>
    </div>
</section>

<?php
function itemPricing($price, $isPopular)
{
    if ($price) {
        return '<li class="item">
                    '.isPopular($isPopular).'
                    <h2>Starting From</h2>
                    <h3 class="price">$ '.$price.'/mo</h3>
                    <ul class="list-popular">
                        <li class="item">5 User</li>
                        <li class="item">All UI Components</li>
                        <li class="item">Lifetime access</li>
                        <li class="item">Free updates</li>
                        <li class="item">Use on 1 (one) project</li>
                        <li class="item">4 months support</li>
                    </ul>
                    <a href="#" class="button">Purchase Now</a>
                </li>';
    }
    return false;
}

function isPopular($popular)
{
    if ($popular) {
        return '<span class="new">Popular</span>';
    }
    return false;
}
?>

<section id="price" class="price">
    <div class="container">
        <h2>Pricing</span>
        <h3>Our Pricing Plans</h3>
        <h4>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</h4>
        <ul class="list">
            <?= itemPricing("19.99", false) ?>
            <?= itemPricing("30.99", true) ?>
            <?= itemPricing("70.99", false) ?>
        </ul>
    </div>
</section>

<?php
function addFaq($title)
{
    if ($title) {
        return "<h4>
                    <span class='button'>
                        <i class='fas fa-angle-down'></i>
                    </span>
                    <strong>".$title."</strong>
                </h4>
                <div class='description-faq'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>";
    }
    return false;
}
?>

<section id="faq" class="faq">
    <div class="container">
        <h2>FAQ</h2>
        <h3>Any Questions? Answered</h3>
        <h4>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</h4>
        <div class="content">
            <div class="left">
                <div class="item">
                    <?= addFaq("How to use UIdeck?") ?>
                </div>
                <div class="item">
                    <?= addFaq("Can I use this template for commercial project?") ?>
                </div>
                <div class="item">
                    <?= addFaq("How to download icons from Lineicons?") ?>
                </div>
            </div>
            <div class="right">
                <div class="item">
                    <?= addFaq("Do you have plan releasing Play Pro?") ?>
                </div>
                <div class="item">
                    <?= addFaq("Is GrayGrids part of UIdeck?") ?>
                </div>
                <div class="item">
                    <?= addFaq("Where and how to host this template?") ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
function addTestimonials($img, $name, $charge)
{
    if ($img) {
        return '<div class="item">
                    <div class="stars-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="description">
                        <p>“Our members are so impressed. It s intuitive. It s clean. It s distraction free. If you re building a community.</p>
                    </div>
                    <div class="data-evaluators">
                        <figure><img src="../assets/images/testimonials/'.$img.'" alt="Foto do Avaliador" loading="lazy" /></figure>
                        <div class="data">
                            <span>'.$name.'</span>
                            <p>'.$charge.'</p>
                        </div>
                    </div>
                </div>';
    }
    return false;
}

function addImageTestimonials($img)
{
    if($img) {
        return '<li>
                    <img src="../assets/images/brands/'.$img.'" alt="Brands" />
                </li>';
    }
    return false;
}
?>

<section id="testimonials" class="testimonials">
    <div class="container">
        <h2>Testimonials</h2>
        <h3>What Our Customers Says</h3>
        <h4>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</h4>
        <div class="content">
            <?= addTestimonials("author-01.png", "Sabo Masties", "Founder @UIdeck"); ?>
            <?= addTestimonials("author-02.png", "Margin Gesmu", "Founder @Lineicons"); ?>
            <?= addTestimonials("author-03.png", "William Smith", "Founder @GrayGrids"); ?>
        </div>
        <div class="content-bottom">
            <h5>Trusted and Used by</h5>
            <ul>
                <?= addImageTestimonials("ayroui.svg"); ?>
                <?= addImageTestimonials("uideck.svg"); ?>
                <?= addImageTestimonials("graygrids.svg"); ?>
                <?= addImageTestimonials("lineicons.svg"); ?>
                <?= addImageTestimonials("ecommerce-html.svg"); ?>
            </ul>
        </div>
    </div>
</section>

<?php
function addTeam($img, $name, $charge)
{
    if($img) {
        return '<div class="item">
                    <div class="image-team">
                        <img src="../assets/images/team/'.$img.'" alt="Imagem do Time" loading="lazy" />
                    </div>
                    <h5>'.$name.'</h5>
                    <h6>'.$charge.'</h6>
                    <div class="social">
                        <a href="https://pt-br.facebook.com/" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>';
    }
    return false;
}
?>

<section id="team" class="team">
    <div class="container">
        <h2>Our Team</h2>
        <h3>Meet The Team</h3>
        <h4>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form. </h4>
        <div class="content">
            <?= addTeam("team-01.png", "Adveen Desuza", "UI Designer"); ?>
            <?= addTeam("team-02.png", "Jezmin uniya", "Product Designer"); ?>
            <?= addTeam("team-03.png", "Andrieo Gloree", "App Develope"); ?>
            <?= addTeam("team-04.png", "Jackie Sanders", "Content Writer"); ?>
        </div>
    </div>
</section>

<section id="contact" class="contact">
    <div class="container">
        <div class="top">
            <div class="wrapper">
                <h2>CONTACT US</h2>
                <h3>Let’s talk about <br />
                    Love to hear from you!
                </h3>
                <form>
                    <h2>Send us a Message</h2>
                    <ul>
                        <li>
                            <label for="fullname">Full Name<em>*</em></label>
                            <input type="text" id="fullname" name="fullname" placeholder="Adam Gelius" />
                        </li>
                        <li>
                            <label for="email">Email<em>*</em></label>
                            <input type="email" id="email" name="email" placeholder="example@yourmail.com" />
                        </li>
                        <li>
                            <label for="phone">Phone<em>*</em></label>
                            <input type="number" id="phone" name="phone" placeholder="+885 1254 5464 444" />
                        </li>
                        <li>
                            <label for="message">Message<em>*</em></label>
                            <input type="text" id="message" name="message" placeholder="type your message here" />
                        </li>
                    </ul>
                    <button class="button">Send Message</button>
                </form>
            </div>
        </div>
        <div class="bottom">
            <div class="wrapper">
                <div class="content">
                    <div class="item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="content">
                            <h2>Our Location</h2>
                            <p>401 Broadway, 24th Floor, Orchard<br />Cloud View, London</p>
                        </div>
                    </div>
                    <div class="item">
                        <i class="far fa-envelope"></i>
                        <div class="content">
                            <h2>How Can We Help?</h2>
                            <p>info@yourdomain.com<br />contact@yourdomain.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
