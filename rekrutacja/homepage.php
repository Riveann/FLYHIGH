<?php
/*
*Template Name: Home
*Template Post Type: page
*/ 

get_header();

?>
<article id="home">
    <section class="first-home">
        <div class="container">
           <div class="header-section">
                <h2><?php the_field('header_section'); ?></h2>
           </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="desc"><?php the_field('desc_section'); ?></div>
        </div>
    </section>
    <section>
        <div class="container1330">
            <div class="color-row">
                <div class="color-boxes color-box1"><?php the_field('color_box_1'); ?></div>
                <div class="color-boxes color-box2"><?php the_field('color_box_2'); ?></div>
                <div class="color-boxes color-box3"><?php the_field('color_box_3'); ?></div>
                <div class="color-boxes color-box4"><?php the_field('color_box_4'); ?></div>
                <div class="wheel"></div>
                <div class="wheel-in"><?php the_field('wheel'); ?></div>
            </div>
        </div>
    </section>
    <section class="carousel">
        <div class="carousel-main">
            <div class="container">
                <h2><?php the_field('header_carousel'); ?></h2>
                <div class="bxslider">
                    <div class="app1">
                        <div class="app">
                            <div class="left-app-wrap">
                                <div class="shapes-cont">
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-middle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-middle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-long"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-middle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-long"></div>
                                </div>
                            </div>
                            <div class="main-right">
                                <div class="right-app">
                                    <div class="companies">
                                        <span>1197</span>
                                        <p>Companies</p>
                                    </div>
                                    <div class="app-box">
                                        <div class="app-box-1">
                                            <span>170</span>
                                            <p>No Data</p>
                                        </div> 
                                        <div class="white app-box-2">
                                            <span>291</span>
                                            <p>Low risk</p>
                                        </div>  
                                        <div class="white app-box-3">
                                            <span>453</span>
                                            <p>Medium risk</p>
                                        </div> 
                                        <div class="white app-box-4">
                                            <span>516</span>
                                            <p>High risk</p>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long"></div>
                                    </div>
                                    <div class="quarter transform">Medium</div>
                                    <div class="quarter numbers"><strong>35</strong>/100</div>
                                    <div class="quarter numbers">Strategic</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long x"></div>
                                    </div>
                                    <div class="quarter transform">Medium</div>
                                    <div class="quarter numbers"><strong>42</strong>/100</div>
                                    <div class="quarter numbers">Quick-win</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long xx"></div>
                                    </div>
                                    <div class="quarter transform red">High</div>
                                    <div class="quarter numbers"><strong>25</strong>/100</div>
                                    <div class="quarter numbers">Critical</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long"></div>
                                    </div>
                                    <div class="quarter transform green">Low</div>
                                    <div class="quarter numbers"><strong>65</strong>/100</div>
                                    <div class="quarter numbers">Innovation</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-app">
                            <?php the_field('slide_1'); ?>
                        </div>
                    </div>
            

                    <div class="app1">
                        <div class="app">
                            <div class="left-app-wrap">
                                <div class="shapes-cont">
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-middle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-middle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-long"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-middle"></div>
                                </div>
                                <div class="squares-cont">
                                    <div class="square-short"></div>
                                    <div class="square-long"></div>
                                </div>
                            </div>
                            <div class="main-right">
                                <div class="right-app">
                                    <div class="companies">
                                        <span>1197</span>
                                        <p>Companies</p>
                                    </div>
                                    <div class="app-box">
                                        <div class="app-box-1">
                                            <span>170</span>
                                            <p>No Data</p>
                                        </div> 
                                        <div class="white app-box-2">
                                            <span>291</span>
                                            <p>Low risk</p>
                                        </div>  
                                        <div class="white app-box-3">
                                            <span>453</span>
                                            <p>Medium risk</p>
                                        </div> 
                                        <div class="white app-box-4">
                                            <span>516</span>
                                            <p>High risk</p>
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long"></div>
                                    </div>
                                    <div class="quarter transform">Medium</div>
                                    <div class="quarter numbers"><strong>35</strong>/100</div>
                                    <div class="quarter numbers">Strategic</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long x"></div>
                                    </div>
                                    <div class="quarter transform">Medium</div>
                                    <div class="quarter numbers"><strong>42</strong>/100</div>
                                    <div class="quarter numbers">Quick-win</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long xx"></div>
                                    </div>
                                    <div class="quarter transform red">High</div>
                                    <div class="quarter numbers"><strong>25</strong>/100</div>
                                    <div class="quarter numbers">Critical</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                                <div class="row">
                                    <div class="quarter first-a">
                                        <div class="circle"></div>
                                        <div class="square-long"></div>
                                    </div>
                                    <div class="quarter transform green">Low</div>
                                    <div class="quarter numbers"><strong>65</strong>/100</div>
                                    <div class="quarter numbers">Innovation</div>
                                    <div class="quarter btn-main"><a href="#" class="btn">Request Assessments</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="text-app">
                            <?php the_field('slide_2'); ?>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <div class="left-button"></div>
                    <div class="right-button"></div>
                </div>
            </div>
        </div>
    </section>
</article>









<?php get_footer(); ?>