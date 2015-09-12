<?php
    function __autoload($nombre_clase) {
        include 'cp/clases/'.$nombre_clase .'.php';
    }
    
    $verify_token = false;
    $verify = 0;

    if(isset($_GET["verify"]) && $_GET["verify"] != ""){
        $verify = $_GET["verify"];
        $userend = new userend();
        $userend -> token = $verify;
        if($userend -> token_valido()){
            $verify_token = true;
        }
        else{
        	header("Location: index.php?rp=invalidtoken");
        }
    }

    if(!$verify_token){
        	header("Location: index.php?rp=invalidtoken");
    }

?>
<?php include_once("header.html");?>
<div class="reset-bg"></div>
<div class="reset-form-container">
	<form action="controller.php" onsubmit="">
		<input type="password" name="password_1" placeholder="Contraseña nueva">
		<input type="password" name="password_2" placeholder="Confirmar contraseña">
		<input type="submit" value="Modificar">
		<input type="hidden" name="op" value="rsp">
		<input type="hidden" name="vc" value="<?=$verify?>">
	</form>
</div>

<?php include_once("footer.html");?>
<script type="text/javascript">
	$("#menu_a").hide();
      jQuery(document).ready(function($) {
    /*Svg Painter*/
     var pathsDmnd;
     pathsDmnd = $('#diamond_little path');
     pathsDmnd.each(function(i, e) {
            e.style.strokeDasharray = e.style.strokeDashoffset = e.getTotalLength();
        });
     var tlLoadDmnd  = new TimelineMax();
     tlLoadDmnd.add([
            TweenLite.to(pathsDmnd.eq(0), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(1), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(2), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(3), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(4), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(5), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(6), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(7), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(8), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(9), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(10), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(11), 2, {strokeDashoffset: 0, delay: 0.0}),
            TweenLite.to(pathsDmnd.eq(12), 2, {strokeDashoffset: 0, delay: 0.0}),    
        ]);
  });
</script>