<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3095">
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="">
                            <img src="logo.png.webp" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="text">
                                    <h5>321, Breaking Street</h5>
                                    <h6>Newyork 10012, USA</h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa-solid fa-square-phone"></i>
                                </div>
                                <div class="text">
                                    <h5>+44 567 890123</h5>
                                    <h6>Info@repairplus.com</h6>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div class="text">
                                    <h5>Mon-Sat 8.00-18.00</h5>
                                    <h6>Sunday CLOSED</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav class="menu">

                        <div class="navbar">
                            <ul>
                                <li>
                                    <a href="">HOME</a>
                                </li>
                                <li>
                                    <a href="">SERVICES</a>
                                </li>
                                <li>
                                    <a href="">PAGES</a>
                                </li>
                                <li>
                                    <a href="">PORTFOLIO</a>
                                </li>
                                <li>
                                    <a href="">BLOG</a>
                                </li>
                                <li>
                                    <a href="">CONTACT US</a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
</div>