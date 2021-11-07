<?php
function item($text, $href)
{
    if ($text && $href) {
        return '<li class="item">
                    <a href="#'.$href.'">'.$text.'</a>
                </li>';
    }
    return false;
}

function dropItem($text, $href)
{
    if ($text && $href) {
        return '<li class="sub-item">
                    <a href="'.$href.'">'.$text.'</a>
                </li>';
    }
    return false;
}
?>

<nav id="navbar">
    <div class="menu-container">
        <ul class="menu">
            <?= item("Home", "home"); ?>
            <?= item("About", "about"); ?>
            <?= item("Pricing", "pricing"); ?>
            <?= item("Team", "team"); ?>
            <?= item("Contact", "contact"); ?>
            <li class="item has-children">
                <a href="javascript:void(0)">Pages</a>
                <div class="dropdown">
                    <ul>
                        <?= dropItem("About Page", "about.php") ?>
                        <?= dropItem("Pricing Page", "pricing.php") ?>
                        <?= dropItem("Contact Page", "contact.php") ?>
                        <?= dropItem("Blog Grid Page", "blog.php") ?>
                        <?= dropItem("Blog Details Page", "blog-details.php") ?>
                        <?= dropItem("404 Page", "404.php") ?>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>