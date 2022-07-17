<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1">

    <?php
    /* Copyright ©️ Daniel Richard Todd Back */
    echo '    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/danielytuk/drtb.uk@prod/css/animation.min.css">';
    echo '    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/danielytuk/drtb.uk@prod/css/main.min.css">';
    echo '    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/FortAwesome/Font-Awesome@latest/css/all.min.css" />';
    echo '    <link rel="dns-prefetch" href="https://assets.pythonastudios.gb.net">';
    echo '    <link rel="dns-prefetch" href="https://cdn.statically.io">';
    echo '    <link rel="dns-prefetch" href="https://dytuk.media">';
    echo '    <link rel="prefetch" href="https://cdn.statically.io/img/drtb.uk/img/d-favi.png">';
    include_once('./php/header.php');
    ?>
</head>

<body>
    <video autoplay muted loop>
        <?php
        $cr_year = '2022';
        $cur_year = date('Y');
        if ($cur_year >= $cr_year) {
            $cur_year = '2022-' . $cur_year;
        }
        echo '<!-- Video Material; Copyright &copy; ' . $cur_year . ' Daniel Richard Todd Back -->';
        ?>
        <source src="./vid/compressed-bg.mp4" type="video/mp4"> Your browser does not support HTML5 video.
    </video>

    <div class="wrapper">

        <div class="title">
            <h1>drtb.uk</h1>
        </div>

        <!-- Welcome Tab -->
        <div class="parent-tab">
            <input type="radio" name="tab" id="tab-1" checked>
            <label for="tab-1">
                <span>Welcome!</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
            </label>
            <div class="content">
                <p><?php echo $description ?> <strong><i>This domain is for secure, individual purposes.</i></strong></p>
            </div>
        </div>

        <!-- Latest Content -->
        <div class="parent-tab">
            <input type="radio" name="tab" id="tab-2">
            <label for="tab-2">
                <span>Latest Media</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
            </label>
            <div class="content">
                <!-- PHP fetching:
                        latest video
                        music release
                        project -->
                <?php
                include_once('./php/media.php');
                echo $media;
                ?>
            </div>
        </div>

        <!-- Financial Support -->
        <div class="parent-tab tab-3">
            <input type="radio" name="tab" id="tab-3">
            <label for="tab-3" class="tab-3">
                <span>Donation Methods</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
            </label>
            <div class="content">
                <!-- Free Methods -->
                <div class="child-tab">
                    <input type="checkbox" name="sub-tab" id="tab-4">
                    <label for="tab-4">
                        <span>Free Methods</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="sub-content">
                        <p>
                            <!-- PHP fetching:
                                    profile on music services (if they have one)
                                    amazon affiliates (if they order a lot)
                                    passive earning, with tiny commission
                                    sharing one of my videos / projects -->
                            <?php
                            include_once('./php/support.php');
                            echo $free;
                            ?>
                        </p>
                    </div>
                </div>
                <!-- Paid Methods -->
                <div class="child-tab">
                    <input type="checkbox" name="sub-tab" id="tab-5">
                    <label for="tab-5">
                        <span>Paid Methods</span>
                        <div class="icon"><i class="fas fa-plus"></i></div>
                    </label>
                    <div class="sub-content">
                        <p>
                            <!-- PHP fetching:
                                    pythona studios store
                                    direct payment (paypal, stripe, etc)
                                    monthly payment (max $5 = $60/y)
                                    trusted vpns + little affiliate
                                    cheap domains + little commission -->
                            <?php
                            echo $paid;
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="parent-tab">
            <input type="radio" name="tab" id="tab-6">
            <label for="tab-6">
                <span>Contact</span>
                <div class="icon"><i class="fas fa-plus"></i></div>
            </label>
            <div class="content">
                <p>
                    <!-- PHP fetching:
                            direct form or:
                                email addresses
                                discord servers
                                phone number (sms only) -->
                    <?php
                    include_once('./php/contact.php');
                    echo $info;
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>