<?php
/**
 * Template Name: Front Page
 *
 * The Frontpage of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>

    <video src="https://foothillscollective.com/wp-content/uploads/2020/02/Revival-Here-Background.mp4" autoplay loop playsinline muted></video>

    <div class="viewport-header">
        <h1 class = "neon">
            What happened
            <span>That Night</span>
            <div class = "featured-watch">Watch the exclusive video</div>
            <div class = "center">
                <a class="b-slogan__button-play" href="https://www.youtube.com/watch?v=B7HOImrXJDg"></a>
            </div>
        </h1>
    </div>


<div class="full-width main-background">
    <div class = "grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h1>Welcome to 6!</h1>

                <button class="btn btn-v2">Button 5</button>
                <div class="callout">
                    <h3>We're stoked you want to try Foundation! <i class="fas fa-address-book"></i></h3>
                    <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
                    <p>Once you've exhausted the fun in this document, you should check out:</p>
                    <div class="grid-x grid-padding-x">
                        <div class="large-4 medium-4 cell">
                            <p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
                        </div>
                        <div class="large-4 medium-4 cell">
                            <p><a href="http://zurb.com/university/code-skills">Foundation Code Skills</a><br />These online courses offer you a chance to better understand how Foundation works and how you can master it to create awesome projects.</p>
                        </div>
                        <div class="large-4 medium-4 cell">
                            <p><a href="http://foundation.zurb.com/forum">Foundation Forum</a><br />Join the Foundation community to ask a question or show off your knowledge.</p>
                        </div>
                    </div>
                    <div class="grid-x grid-padding-x">
                        <div class="large-4 medium-4 medium-push-2 cell">
                            <p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
                        </div>
                        <div class="large-4 medium-4 medium-pull-2 cell">
                            <p><a href="https://twitter.com/ZURBfoundation">@zurbfoundation</a><br />Ping us on Twitter if you have questions. When you build something with this we'd love to see it (and send you a totally boss sticker).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <div class="large-8 medium-8 cell">
                <h5>Here&rsquo;s your basic grid:</h5>
                <!-- Grid Example -->

                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <div class="primary callout">
                            <p><strong>This is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <p>Six cell</p>
                        </div>
                    </div>
                    <div class="large-6 medium-6 cell">
                        <div class="primary callout">
                            <p>Six cell</p>
                        </div>
                    </div>
                </div>
                <div class="grid-x grid-padding-x">
                    <div class="large-4 medium-4 small-4 cell">
                        <div class="primary callout">
                            <p>Four cell</p>
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-4 cell">
                        <div class="primary callout">
                            <p>Four cell</p>
                        </div>
                    </div>
                    <div class="large-4 medium-4 small-4 cell">
                        <div class="primary callout">
                            <p>Four cell</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="large-4 medium-4 cell">
                <h5>Try one of these buttons:</h5>
                <p><a href="#" class="button">Simple Button</a><br/>
                    <a href="#" class="success button">Success Btn</a><br/>
                    <a href="#" class="alert button">Alert Btn</a><br/>
                    <a href="#" class="secondary button">Secondary Btn</a></p>
                <div class="callout">
                    <h5>So many components, girl!</h5>
                    <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
                    <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
                </div>
            </div>
        </div>
    </div>
</div>





<?php get_footer();
