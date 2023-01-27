function detectColors( $image, $num, $level = 5 ) {
    $level   = (int)$level;
    $palette = array();
    $details = array();# store the count of non black or white colours here ( see $exclusions )

    list( $width, $height, $type, $attr )=getimagesize( $image );
    if( !$type ) return FALSE;

    switch ( image_type_to_mime_type( $type ) ) {
        case 'image/jpeg':
            $img = imagecreatefromjpeg( $image );
        break;
        case 'image/png':
            $img = imagecreatefrompng( $image );
        break;
        case 'image/gif':
            $img = imagecreatefromgif( $image );
        break;
        default: return FALSE;
    }
    if( !$img ) return FALSE;

    /* Colours to not factor into dominance statistics */
    $exclusions=['000000','FFFFFF'];

    for( $i = 0; $i < $width; $i += $level ) {
        for( $j = 0; $j < $height; $j += $level ) {
            $colour             = imagecolorat( $img, $i, $j );
            $rgb                = imagecolorsforindex( $img, $colour );
            $key                = sprintf('%02X%02X%02X', ( round( round( ( $rgb['red'] / 0x33 ) ) * 0x33 ) ), round(round(($rgb['green'] / 0x33)) * 0x33), round(round(($rgb['blue'] / 0x33)) * 0x33));
            $palette[ $key ]    = isset( $palette[ $key ] ) ? ++$palette[ $key ] : 1;

            if( !in_array( $key, $exclusions ) ){
                /* add count of any non excluded colours */
                $details[ $key ] = isset( $details[ $key ] ) ? ++$details[ $key ] : 1;
            }
        }
    }
    arsort( $palette );

    /* prepare statistics for output */
    $output=new stdclass;
    $output->data=array_slice( array_keys( $palette ), 0, $num );
    $output->highest=max( $details );
    $output->lowest=min( $details );
    $output->dominant=array_search( $output->highest, $details );
    $output->recessive=array_search( $output->lowest, $details );


    return $output;
}



$img = 'https://gs2-sec.ww.prod.dl.playstation.net/gs2-sec/appkgo/prod/CUSA03041_00/15/i_2efe1b71a037233f60cec3b41a18d69c02bcff5fd0c895c212d44f37883dbaf8/i/icon0.png';
$palette = detectColors( $img, 6, 5 );


$html=[];
foreach( $palette->data as $colour ) $html[]=sprintf( '<tr><td style="background:#%1$s; width:200px; height:1rem; " >#%1$s</td></tr>', $colour );

printf('
    <p>Analysing: %1$s</p>
    <img src="%1$s" />
    <table>%2$s</table>
    <ul>
        <li>Dominant colour: %3$s - count: %4$d</li>
        <li>Recessive colour: %5$s - count: %6$d</li>
    </ul>',
    $img,
    implode( PHP_EOL, $html ),
    $palette->dominant,
    $palette->highest,
    $palette->recessive,
    $palette->lowest
);
