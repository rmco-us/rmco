<?
$headtitle = 'motorcycles';//should be placed before loader

@include('_library/link/php/loader.php');
?>

<div id="body">

<? 
$display = $array_controller['landing_page']['switch_display'];
$status = $array_controller['landing_page']['switch_status'];

echo $_group_top_motorcycles;
echo $_section_testimonial;

?>

<?
@include('_library/link/php/footer.php');
?>