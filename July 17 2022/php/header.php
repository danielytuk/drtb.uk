<?php
/* Copyright ©️ Daniel Richard Todd Back */

$age = date('y');
$date_now = time();
$date_birthday = strtotime(date('Y') . '-12-13');
$date_yearEnd = strtotime(date('Y') . '-12-31');

if ($date_now >= $date_birthday && $date_now <= $date_yearEnd) {
    $age = date('y');
}

$website = $_SERVER['SERVER_NAME'];
$description = 'drtb, stands for Daniel Richard Todd Back. He is from London, UK and is currently ' . $age . ' years old.';
$owner = 'Daniel Richard Todd Back';
$discordpfp = 'https://dytuk.media/api/discord#avatar?invite=r3gmuYBtuX';
$banner = 'https://cdn.statically.io/img/' . $website . '/img/banner.jpg';
$email = 'msg@drtb.uk';
$jobTitle = 'Founder';

// Website Meta Tags

echo '
    <!-- HTML Meta Tags -->
    <title>' . $website . ' ≈ official</title>

    <meta name="title" content="' . $website . ' ≈ official">
    <meta name="description" content="' . $description . '">
    <meta name="keywords" content="drtb,dytukmedia,danielytuk,cueisdi,pythonastudios,pythonaaudio">
    <link rel="icon" type="image/png" href="https://cdn.statically.io/img/' . $website . "/img/d-favi.png" . '">

    <meta name="author" content="Daniel Richard Todd Back / drtb">
    <meta name="abstract" content="the personal website of Daniel Richard Todd Back">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://' . $website . '">
    <meta property="og:type" content="website">
    <meta property="og:title" content="' . $website . ' ≈ official">
    <meta property="og:description" content="' . $description . '">
    <meta property="og:image" content="' . $banner . '">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="' . $description . '">
    <meta name="twitter:title" content="' . $website . ' ≈ official">
    <meta name="twitter:image" content="' . $banner . '">
    <meta name="twitter:site" content="@danielytuk">
    <meta property="twitter:domain" content="' . $website . '">
    <meta property="twitter:url" content="https://' . $website . '">

    <!-- App Meta Tags -->
    <meta name="og:app:name:iphone" content="PythonaStudios">
    <meta name="og:app:name:ipad" content="PythonaStudios">
    <meta name="og:app:name:googleplay" content="PythonaStudios"></meta> 
    <meta name="og:app_country" content="United Kingdom">

    <!-- Schema Data -->
    <script type="application/ld+json">
    {
        "@context": "https://www.schema.org",
        "@type": "person",
        "name": "' . $owner . '",
        "image": "' . $discordpfp . '",
        "jobTitle": "' . $jobTitle . '",
        "worksFor": [
            {
                "@type": "Organization",
                "name": "dytukMedia",
                "url": "https://dytuk.media",
                "logo": "https://cdn.statically.io/img/assets.pythonastudios.gb.net/w=512/dytukmedia/img/dytukMedia.jpg",
                "description": "dytukMedia is a media entertainment subsidiary of Pythona Productions, which focuses on production, management, and distribution of audiovisual content.",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Whitechapel",
                    "addressRegion": "London",
                    "addressCountry": "United Kingdom",
                },
                "openingHours": "' . join(",", ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su 00:01-23:59"]) . '",
                "sameAs": [
                    "https://dytuk.me",
                    "https://danielytuk.co.uk",
                    "https://cueis.de",
                    "https://1p.tf",
                    "https://drtb.uk",
                    "https://youtube.com/danielytuk",
                    "https://youtube.com/channel/UCrqHQ5l52_raVPElPhy26og",
                    "https://g.co/kgs/VbsHMq",
                    "https://youtube.com/dytukMedia",
                    "https://twitter.com/dytukMedia",
                    "https://reddit.com/r/dytukMedia/",
                    "https://github.com/dytukMedia",
                    "https://musicbrainz.org/label/5d5443ae-5f47-4667-9a46-73c1afc5baa9",
                    "https://discord.gg/r3gmuYBtuX"
                ]
            },
            {
                "@type": "Organization",
                "name": "Pythona Studios",
                "url": "https://pythonastudios.com",
                "logo": "https://cdn.statically.io/img/assets.pythonastudios.gb.net/pythonastudios/img/branding/Pythona-Studios-Main.png",
                "description": "Pythona Studios is a British media company headquartered in Hampshire, UK. Which primarily focuses on the production and distribution of short films and web shows.",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Hampshire",
                    "addressRegion": "England",
                    "addressCountry": "United Kingdom",
                },
                "openingHours": "' . join(",", ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su 00:01-23:59"]) . '",
                "sameAs": [
                    "https://g.co/kgs/gzkFAL",
                    "https://facebook.com/pg/PythonaStudios/",
                    "https://twitter.com/PythonaStudios/",
                    "https://youtube.com/channel/UCrqEAWJz1VxW_PJRRr095Vw",
                    "https://linkedin.com/company/pythonastudios/",
                    "https://discord.gg/Avq7juyehq"
                ]
            },
            {
                "@type": "Organization",
                "name": "Pythona Audio",
                "url": "https://pythonaaudio.com",
                "logo": "https://cdn.statically.io/img/assets.pythonastudios.gb.net/pythonastudios/img/branding/Pythona-Audio.png",
                "description": "A music company that aims to simplify music discovery, as finding new music is a difficult task with thousands of songs being released daily.",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Hampshire",
                    "addressRegion": "England",
                    "addressCountry": "United Kingdom",
                },
                "openingHours": "' . join(",", ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Su 00:01-23:59"]) . '",
                "sameAs": [
                    "https://g.co/kgs/Hm67hF",
                    "https://facebook.com/pg/PythonaAudio/",
                    "https://instagram.com/pythonaaudio/",
                    "https://twitter.com/PythonaAudio/",
                    "https://youtube.com/channel/UCrqEAWJz1VxW_PJRRr095Vw/channels?view=49&shelf_id=1",
                    "https://linkedin.com/company/pythonastudios/",
                    "https://beatport.com/label/pythona-audio/98329",
                    "https://traxsource.com/label/59759/pythona-audio",
                    "https://musicbrainz.org/label/a12e10f7-5e23-4cdb-a21f-91bd57ada455",
                    "https://open.spotify.com/playlist/36zVcna7EXaOIKUMy7T2Kn?si=1e378e4e70c24cc2",
                    "https://discord.gg/Avq7juyehq"
                ]
            }
        ],
        "url": "https://' . $website . '",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Whitechapel",
            "addressRegion": "London",
            "addressCountry": "United Kingdom"
        },
        "email": "' . $email . '",
        "birthDate": "1999-12-13",
        "sameAs": [
            "https://g.co/kgs/15DvEM",
            "https://drtb.uk",
            "https://youtube.com/danielytuk",
            "https://twitter.com/danielytuk",
            "https://github.com/danielytuk",
            "https://bio.link/danielytuk",
            "https://bing.com/public/danielytuk",
            "https://discord.gg/r3gmuYBtuX",
            "https://open.spotify.com/artist/5PqLyxPxrUKNr61oa5Y5sO?si=3c7d10eb65d94039",
            "https://open.spotify.com/artist/2gL6ZKWaJSykHkA97YrDQb?si=d19a26e6da7f4d04",
            "https://open.spotify.com/playlist/5u08nAwY62zOqumJN9oVrA?si=07587da02e1641d3",
            "https://open.spotify.com/playlist/36zVcna7EXaOIKUMy7T2Kn?si=1e378e4e70c24cc2",
            "https://deezer.com/artist/13722159/",
            "https://geo.music.apple.com/gb/artist/cueisdi/1317483628",
            "https://shazam.com/artist/cueisdi/1317483628",
            "https://pythonaaudio.com/artists/cueisdi",
            "https://pythonaaudio.com/artists/danielytuk",
            "https://traxsource.com/artist/642284/",
            "https://7digital.com/artist/danielytuk",
            "https://7digital.com/artist/cueisdi"
            ]
        }
    </script>';
/* Copyright ©️ Daniel Richard Todd Back */