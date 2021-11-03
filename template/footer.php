<?php
function itens($text, $link)
{
    if ($text && $link) {
        return '<li class="item">
                    <a href="'.$link.'">'.$text.'</a>
                </li>';
    }
    return false;
}

function partners($src, $alt)
{
    if ($src && $alt) {
        return '<figure>
                    <img src="../assets/images/footer/brands/'.$src.'" alt="'.$alt.'" loading="lazy" />
                </figure>';
    }
    return false;
}
?>

<footer>
    <div class="footer-top">
        <div class="footer-container">
            <div class="content">
                <div class="item">
                    <a href="#" class="logo">
                        <figure>
                            <img src="../assets/images/logo/logo-2.svg" alt="Logo" loading="lazy">
                        </figure>
                    </a>
                    <h3>We create digital experiences for brands and companies by using technology.</h3>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f">&nbsp;</i></a>
                        <a href="#"><i class="fab fa-twitter">&nbsp;</i></a>
                        <a href="#"><i class="fab fa-instagram">&nbsp;</i></a>
                        <a href="#"><i class="fab fa-linkedin">&nbsp;</i></a>
                    </div>
                </div>
                <div class="item">
                    <h2>About Us</h2>
                    <ul>
                        <?= itens("Home", "#"); ?>
                        <?= itens("Features", "#"); ?>
                        <?= itens("About", "#"); ?>
                        <?= itens("Testimonial", "#"); ?>
                    </ul>
                </div>
                <div class="item">
                    <h2>Features</h2>
                    <ul>
                        <?= itens("How it works", "#"); ?>
                        <?= itens("Privacy policy", "#"); ?>
                        <?= itens("Tearms of service", "#"); ?>
                        <?= itens("Refund policy", "#"); ?>
                    </ul>
                </div>
                <div class="item">
                    <h2>Our Products</h2>
                    <ul>
                        <?= itens("Lineicons", "#"); ?>
                        <?= itens("Ecommerce HTML", "#"); ?>
                        <?= itens("Ayro UI", "#"); ?>
                        <?= itens("Plain Admin", "#"); ?>
                    </ul>
                </div>
                <div class="item">
                    <h2>Partners</h2>
                    <ul>
                        <?= partners("ayroui.svg", "ayroui") ?>
                        <?= partners("ecommerce-html.svg", "ecommerce-html") ?>
                        <?= partners("graygrids.svg", "graygrids") ?>
                        <?= partners("lineicons.svg", "lineicons") ?>
                        <?= partners("uideck.svg", "uideck") ?>
                        <?= partners("tailwindtemplates.svg", "tailwindtemplates") ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-container">
            <div class="content">
                <div class="item">
                    <ul>
                        <?= itens("Privacy policy", "#"); ?>
                        <?= itens("Support policy", "#"); ?>
                        <?= itens("Tearms of service", "#"); ?>
                    </ul>
                </div>
                <address>Designed and Developed by <a href="#">UIdeck</a></address>
            </div>
        </div>
</footer>