<? /* ————————————————————————————————————————————————————————————

[array.php]

data file that contains all array data to dynamically organize / create pagess

———————————————————————————————————————————————————————————— */

$array_motorcycles = array();

/* ————————————————————————————————————————————————————————— */

// to remove backslash, highlight all and hit "CMD + /" and remember that each line ends with a ","

// $array_motorcycles[] = array( //——–––––––motorcycle 1
// 	'motorcycle_nick' => 'Unnamed',
//  'cover' => '',
// 	'description' => "",
// 	'video' => '162911217', // IF(value is=='http://vimeo.com/notset'){don't show video area}
// 	'images' => array(
// 		'Nameofphoto.png' => 'photo1', //full width top photo
// 		'Nameofphoto.png' => 'photo2', //pair photo 1
// 		'Nameofphoto.png' => 'photo3', //pair photo 2
// 		),
// 	'specs' => array(
// 		'year' => 1972,
// 		'make' => 'yamaha',
// 		'handle bars' => 'rottweiler z-bars',
// 		'tank' => 'raw steel wasp',
// 		'frame' => 'tc bros hard tail kit',
// 		),
// 	);
//

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'XS650',
	'cover' => '2016-06-02_75151.png',
	'description' => "",
	'video' => '169055325', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_75132.png' => 'photo1', //full width top photo
		'2016-06-02_75151.png' => 'photo2', //pair photo 1
		'2016-06-02_75203.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => "$4,900",
		'year' => 1973,
		'make' => 'yamaha',
		'miles' => '13,000',
		'pipes' => 'wrapped',
		'carbs' => 'mikuni',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'XL1200X',
	'cover' => '2016-06-07_44954.png',
	'description' => "Named after the year that Harley-Davidson first introduced this style of tank, the Forty-Eight packs the feel of 1948 with today's modern touches. From the fat front tire to the aftermarket Ape Hangers this Sportster has grown in popularity & we can see why. The Forty-Eight is a nice start to a long relationship that will undoubtable go through many changes.",
	'video' => '169047288', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_74856.png' => 'photo1', //full width top photo
		'2016-06-02_74906.png' => 'photo2', //pair photo 1
		'2016-06-02_74925.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price'=> '$9,100',
		'year' => 2014,
		'make' => 'Harley-Davidson',
		'handle bars' => 'NYC 18" Ape Hangers',
		'mileage' => '659',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Street Glide',
	'cover' => '2016-06-07_40204.png',
	'description' => "",
	'video' => '169040693', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_74223.png' => 'photo1', //full width top photo
		'2016-06-07_35324.png' => 'photo2', //pair photo 1
		'2016-06-02_74253.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => '$17,899',
		'make' => 'harley davidson',
		'year' => 2012,
		'slip ons' => 'v&h 4.5"',
		'foot pegs' => 'avon air grips/foot pegs',
		'tires' => 'brand new metzler',
		'miles' => '11,000',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'CRH2',
	'cover' => '2016-06-02_73043.png',
	'description' => "",
	'video' => '169034416', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_73043.png' => 'photo2', //pair photo 1
		'2016-06-02_73033.png' => 'photo1', //full width top photo
		'2016-06-02_73120.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => "$12,500",
		'year' => 2012,
		'make' => 'rottweiler',
		'bars' => 'biltwell chump',
		'front' => 'machined',
		'exhaust' => 'aftermarket',
		'tail' => 'rottweiler hard tail',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Evil Orange',
	'cover' => '2016-06-07_40405.png',
	'description' => "",
	'video' => '169036651', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_73601.png' => 'photo1', //full width top photo
		'2016-06-02_73623.png' => 'photo2', //pair photo 1
		'2016-06-02_73633.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => "$18,500",
		'year' => 2008,
		'make' => 'Rottweiler',
		'motor' => '96 CI s&s',
		'transmission' => 'baker 6-speed',
		'primary' => '3" open bdl primary',
		'exhaust' => 'martin bros',
		'front' => 'springer front end',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Custom',
	'cover' => '2016-06-02_72342.png',
	'description' => "",
	'video' => '169033648', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_72342.png' => 'photo1', //full width top photo
		'2016-06-02_72351.png' => 'photo2', //pair photo 1
		'2016-06-02_72326.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => "$16,500",
		'year' => 2008,
		'make' => 'Rottweiler',
		'motor' => 'XL1200',
		'tire' => '250MM rear tire kit',
		'frame' => 'wide glide front end',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Road King Custom',
	'cover' => '2016-06-02_75757.png',
	'description' => "",
	'video' => '167388069', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-02_75740.png' => 'photo1', //full width top photo
		'2016-06-02_75757.png' => 'photo2', //pair photo 1
		'2016-06-02_75806.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => "$12,995",
		'year' => 2006,
		'make' => 'Harley-Davidson',
		'handle bars' => 'aftermarket',
		'kit' => 'bruley 2" lowering kit',
		'miles' => '28k',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Bonneville T100',
	'cover' => '2016-06-07_44912.png',
	'description' => "The Bonneville, classic in its approach, modern in its technology. Since its introduction in 1959 the Bonneville has been a staple in the motorcycle community. 50 years of authenticity backed by modern engineering. Definitely a gentleman's ride. ",
	'video' => '167385559', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-04_102518.png' => 'photo1', //full width top photo
		'2016-06-04_102855.png' => 'photo2', //pair photo 1
		'2016-06-04_102904.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price'=>'$7,390',
		'year' => 2014,
		'make' => 'Triumph',
		'engine'=>'Air-cooled, DOHC, parallel-twin, 360&deg; firing interval',
		'transmission'=>'5-speed',
		'displacement'=>'865cc',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Springer',
	'cover' => '2016-06-07_44932.png',
	'description' => "",
	'video' => '167381952', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-06-04_103138.png' => 'photo1', //full width top photo
		'2016-06-04_103148.png' => 'photo2', //pair photo 1
		'2016-06-04_103224.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => "$10,799",
		'year' => 2005,
		'make' => 'Harley-Davidson',
		'kit' => '.510 CAM KIT',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'XS650',
	'cover' => '2016-06-07_41026.png',
	'description' => "XS's are all about the details. From the oil tank electrical center to the leaf spring seat. No cut corners, this is a simple yet complex build. The narrow fashion of this machine makes it super fun to whip around. This Yamaha is a ripper, and will definitely get some attention.",
	'video' => '162911217', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112032.png' => 'photo1', //full width top photo
		'2016-04-15_3.57.20.png' => 'photo2', //pair photo 1
		'2016-04-15_3.57.35.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => '$7,995',
		'year' => 1972,
		'make' => 'yamaha',
		'handle bars' => 'rottweiler z-bars',
		'tank' => 'raw steel wasp',
		'frame' => 'tc bros hard tail kit',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Shovelhead',
	'cover' => '2016-06-07_41058.png',
	'description' => "\"The Shovel Head motor has always been the mark of someone who truly loves what Harley has to offer. It seems that if you run into someone with a shovel that 8 out of 10 times they're the original owner. The other 2 times are probably the spike in trend over the last few years. This specific shovel has a special place in our hearts. The beauty of vintage Harley motors is each one has a soul, a unique, & often times stubborn, attitude. You can't say that about many of the newer bikes but with out a doubt. This Shovel has soul.\" &mdash; Jon",
	'video' => '162915972', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112116.png' => 'photo1', //full width top photo
		'2016-04-15_4.03.44.png' => 'photo2', //pair photo 1
		'2016-04-15_4.10.26.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => 'call for pricing',
		'year' => 1980,
		'make' => 'Harley Davidson',
		'motor' => 's&s 93 ci big bore kit',
		'brakes' => 'brembo brakes',
		'suspension' => 'legend air ride',
		'wheels' => '180mm front / 200mm rear',
		),
	);

/* ————————————————————————————————————————————————————————— */

$array_motorcycles[] = array( 
	'motorcycle_nick' => 'Deluxe',
	'cover' => '2016-06-07_44856.png',
	'description' => "\"I love the Deluxe. I rode this bike for a summer. Every single stop light someone will yell out their window with a compliment. We didn't veer too far from stock on this one because of what the bike already stands for. If you love classic, chrome and comfort, come fire this thing off.\" &mdash; Jon",
	'video' => '162915973', // IF(value is=='http://vimeo.com/notset'){don't show video area}
	'images' => array(
		'2016-04-14_112226.png' => 'photo1', //full width top photo
		'2016-04-15_4.10.46.png' => 'photo2', //pair photo 1
		'2016-04-15_4.10.59.png' => 'photo3', //pair photo 2
		),
	'specs' => array(
		'price' => '$11,995',
		'year' => 2006,
		'make' => 'Harley Davidson',
		'exhaust' => 'vance & hines big radius',
		'risers' => 'roland sands',
		'handle bars' => '18in nyc bars',
		'grips' => 'avon',
		'mileage' => '9,000',
		),
	);

/* ————————————————————————————————————————————————————————— */

// echo '<span style="font-weight:bold;">motorcycles loaded</span>: need to create output functions<br>';

?>