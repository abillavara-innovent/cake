<html lang="en">
<head>

<?php 
$affar = array("(
    [Movies & Music] => Array
        (
            [Movies & TV Shows|Movies & Music/Movies & TV Shows] => 102336
            [Music] => Array
                (
                    [Karaoke|Movies & Music/Music/Karaoke] => 1388
                    [Comedy] => Array
                        (
                            [Spoken] => Array
                                (
                                    [Spoken Word|Movies & Music/Music/Comedy/Spoken/Spoken Word] => 1370
                                )

                        )

                    [Rock] => Array
                        (
                            [Garage Band|Movies & Music/Music/Rock/Garage Band] => 944
                        )

                    [Rap & Hip-Hop] => Array
                        (
                            [East Coast Rap|Movies & Music/Music/Rap & Hip-Hop/East Coast Rap] => 1263
                        )

                    [Reggae] => Array
                        (
                            [Dancehall|Movies & Music/Music/Reggae/Dancehall] => 1235
                            [Dancehall] => Array
                                (
                                    [Ragga|Movies & Music/Music/Reggae/Dancehall/Ragga] => 1235
                                )

                        )

                    [World] => Array
                        (
                            [African|Movies & Music/Music/World/African] => 1098
                        )

                    [Soundtracks & Shows] => Array
                        (
                            [Film Composers|Movies & Music/Music/Soundtracks & Shows/Film Composers] => 1108
                        )

                    [Gospel & Christian] => Array
                        (
                            [Contemp. Gospel|Movies & Music/Music/Gospel & Christian/Contemp. Gospel] => 1015
                        )

                    [Country] => Array
                        (
                            [Alt Country|Movies & Music/Music/Country/Alt Country] => 982
                        )

                    [Electronic] => Array
                        (
                            [Dance] => Array
                                (
                                    [Ambient|Movies & Music/Music/Electronic/Dance/Ambient] => 755
                                )

                        )

                )

        )

    [Appliances] => Array
        (
            [Ranges & Ovens|Appliances/Ranges & Ovens] => 1145
        )

    [Computers & Tablets] => Array
        (
            [iPad, Tablet & E-Reader Accessories|Computers & Tablets/iPad, Tablet & E-Reader Accessories] => 1282
            [Computer Accessories & Peripherals] => Array
                (
                    [Laptop Accessories|Computers & Tablets/Computer Accessories & Peripherals/Laptop Accessories] => 917
                )

        )

    [Cell Phones] => Array
        (
            [Cell Phone Accessories|Cell Phones/Cell Phone Accessories] => 3451
            [Cell Phone Accessories] => Array
                (
                    [Cell Phone Cases & Clips|Cell Phones/Cell Phone Accessories/Cell Phone Cases & Clips] => 2309
                )

        )

    [Audio & MP3] => Array
        (
            [Home Audio|Audio & MP3/Home Audio] => 979
            [Headphones] => Array
                (
                    [All Headphones|Audio & MP3/Headphones/All Headphones] => 781
                )

        )

    [Cameras & Camcorders] => Array
        (
            [Digital Camera Accessories|Cameras & Camcorders/Digital Camera Accessories] => 1913
        )

    [Musical Instruments] => 2638
    [Video Games] => 2529
    [Car Electronics & GPS] => Array
        (
            [Car Installation Parts & Accessories|Car Electronics & GPS/Car Installation Parts & Accessories] => 1167
            [Car Installation Parts & Accessories] => Array
                (
                    [Deck Installation Parts|Car Electronics & GPS/Car Installation Parts & Accessories/Deck Installation Parts] => 969
                )

        )

    [TV & Home Theater] => Array
        (
            [TV Stands, Mounts & Storage|TV & Home Theater/TV Stands, Mounts & Storage] => 940
        )

    [Home] => 2053
    [Office] => 1930
    [Health, Fitness & Beauty] => 1119
)");

?>


</head>
<body>
<!--
<ul>Movies & Music
<li><ul>Music
	<li>Rock</li>
	<li>Jazz</li>
	</ul>
</li>
</ul>
-->


<?php
echo "<h1>Affar count =".count($affar) ."</h1>";
foreach ($affar as $l1_key){
	echo "<br>L1 K=".$l1_key ; //. "  V=". $l1_val;
}

?>	
<h1>This is a change</h1>
</body>
</html>