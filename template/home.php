<section id="download" class="download">
    <div class="container">
        <h1>Open-Source Web Template for SaaS, Startup, Apps, and More</h1>
        <p class="description">
        Multidisciplinary Web Template Built with Your Favourite Technology - HTML Bootstrap, Tailwind and React NextJS.
        </p>
        <div class="buttons">
            <a href="#" class="button">Download Now</a>
            <a href="#" class="link">Github Repo <i class="fas fa-long-arrow-alt-right">&nbsp;</i></a>
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

<?php function itemFeatures($title, $desc, $classFontAwesome)
{
    if ($title && $desc) {
        return '<li class="item">
                    <div class="image-view">
                        <i class="'.$classFontAwesome.'"></i>
                    </div>
                    <h2>'.$title.'</h2>
                    <p>'.$desc.'</p>
                    <a href="#" class="button">Learn More</a>
                </li>';
    }
    return false;
}
?>

<section id="features" class="features">
    <div class="container">
        <span>Features</span>
        <h2 class="title">Main Features Of Play</h2>
        <p class="description">
        There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.
        </p>
        <ul class="list">
            <?= itemFeatures("Free and Open-Source",
                            "Lorem Ipsum is simply dummy text of the printing and industry.",
                            "fas fa-gift"); ?>
            <?= itemFeatures("Multipurpose Template",
                            "Lorem Ipsum is simply dummy text of the printing and industry.",
                            "fas fa-arrows-alt"); ?>
            <?= itemFeatures("High-quality Design",
                            "Lorem Ipsum is simply dummy text of the printing and industry.",
                            "far fa-object-group"); ?>
            <?= itemFeatures("All Essential Elements",
                            "Lorem Ipsum is simply dummy text of the printing and industry.",
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
        <span>Pricing</span>
        <h2>Our Pricing Plans</h2>
        <h3>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</h3>
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
        <span>FAQ</span>
        <h2>Any Questions? Answered</h2>
        <h3>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</h3>
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
