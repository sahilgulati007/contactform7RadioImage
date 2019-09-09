wpcf7_add_shortcode( 'imageradio', 'imageradio_handler', true );
//}
function imageradio_handler( $tag ){
$tag = new WPCF7_FormTag( $tag );

$atts = array(
'type' => 'radio',
'name' => $tag->name,
'list' => $tag->name . '-options' );

$input = sprintf(
'<input %s />',
wpcf7_format_atts( $atts ) );
$datalist = '';
$datalist .= '<div class="imgradio">';
foreach ( $tag->values as $val ) {
list($radiovalue,$imagepath) = explode("!", $val);

$datalist .= sprintf( '<label><input type="radio" name="%s" value="%s" class="hideradio" /><img src="%s"></label>', $tag->name, $radiovalue, $imagepath );

}
$datalist .= '</div>';

return $datalist;
}
