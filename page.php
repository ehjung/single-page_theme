<!--?php get_header(); ?-->
 <?php ?>   <!DOCTYPE html>
    <html>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Fascinate+Inline' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/jquery.fullPage.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/vendors/jquery.easings.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery.fullPage.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>    

<script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage();
        });
    </script>

        <style>
            .section{
                font-size: 6em;
                text-align: center;
            }
        </style>
    </head>

    <body <?php body_class(); ?>>
        <div id="fullpage">
            <div class="section">Section 1
            </div>
            <div class="section">
                <div class="slide">Section 2 Slide 1</div>
                <div class="slide">Section 2 Slide 2</div>
                <div class="slide">Section 2 Slide 3</div>
            </div>
            <div class="section">Section 3</div>
        </div>            
    </body>
    </html>

<!--?php get_sidebar(); ?>
<?php get_footer(); ?>