<!DOCTYPE html>
<?php

  $c1 = 0;
  $c2 = 0;
  $c3 = 0;
  $c4 = 0;
  $c5 = 0;
  $c6 = 0;
  $c7 = 0;
  $c8 = 0;
  $c9 = 0;


  $cc1 = 0;
  $cc2 = 0;
  $cc3 = 0;
  $cc4 = 0;
  $cc5 = 0;
  $cc6 = 0;
  $cc7 = 0;
  $cc8 = 0;
  $cc9 = 0;
  

?>


<head>
<title>Rumah Sakit Sultan Fatah Demak</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css') ?>" >

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-theme.min.css') ?>" >


<link href="<?php echo base_url('asset/css/fresh-bootstrap-table.css') ?>" rel="stylesheet" />


<link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">


<!-- Latest compiled and minified JavaScript -->


<style>
body{
  font-size : 15px;
  background : 
}
.preloader {
  align-items: center;
  background: rgb(23, 22, 22);
  display: flex;
  height: 100vh;
  justify-content: center;
  left: 0;
  position: fixed;
  top: 0;
  transition: opacity 0.3s linear;
  width: 100%;
  z-index: 9999;
}
	/* width */
::-webkit-scrollbar {
  width: 7px;
  height: 7px;
}

input{
	color : black;
  width : 50px;
  
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

body{
	font-size : 20px;
}

input{
	color : WHITE;
	width : 60px;
}



/*
=====
RESET STYLES
=====
*/

.field__input{ 
  --uiFieldPlaceholderColor: var(--fieldPlaceholderColor, #767676);
  
  background-color: transparent;
  border-radius: 0;
  border: none;

  -webkit-appearance: none;
  -moz-appearance: none;

  font-family: inherit;
  font-size: inherit;
}

.field__input:focus::-webkit-input-placeholder{
  color: var(--uiFieldPlaceholderColor);
}

.field__input:focus::-moz-placeholder{
  color: var(--uiFieldPlaceholderColor);
}

/*
=====
CORE STYLES
=====
*/

.field{
  --uiFieldBorderWidth: var(--fieldBorderWidth, 2px);
  --uiFieldPaddingRight: var(--fieldPaddingRight, 1rem);
  --uiFieldPaddingLeft: var(--fieldPaddingLeft, 1rem);   
  --uiFieldBorderColorActive: var(--fieldBorderColorActive, rgba(22, 22, 22, 1));

  display: var(--fieldDisplay, inline-flex);
  position: relative;
  font-size: var(--fieldFontSize, 1rem);
}

.field__input{
  box-sizing: border-box;
  width: var(--fieldWidth, 100%);
  height: var(--fieldHeight, 3rem);
  padding: var(--fieldPaddingTop, 1.25rem) var(--uiFieldPaddingRight) var(--fieldPaddingBottom, .5rem) var(--uiFieldPaddingLeft);
  border-bottom: var(--uiFieldBorderWidth) solid var(--fieldBorderColor, rgba(0, 0, 0, .25));  
}

.field__input:focus{
  outline: none;
}

.field__input::-webkit-input-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.field__input::-moz-placeholder{
  opacity: 0;
  transition: opacity .2s ease-out;
}

.field__input:focus::-webkit-input-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.field__input:focus::-moz-placeholder{
  opacity: 1;
  transition-delay: .2s;
}

.field__label-wrap{
  box-sizing: border-box;
  pointer-events: none;
  cursor: text;

  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.field__label-wrap::after{
  content: "";
  box-sizing: border-box;
  width: 100%;
  height: 0;
  opacity: 0;

  position: absolute;
  bottom: 0;
  left: 0;
}

.field__input:focus ~ .field__label-wrap::after{
  opacity: 1;
}

.field__label{
  position: absolute;
  left: var(--uiFieldPaddingLeft);
  top: calc(50% - .5em);

  line-height: 1;
  font-size: var(--fieldHintFontSize, inherit);

  transition: top .2s cubic-bezier(0.9, -0.15, 0.1, 1.15), opacity .2s ease-out, font-size .2s ease-out;
  will-change: bottom, opacity, font-size;
}

.field__input:focus ~ .field__label-wrap .field__label,
.field__input:not(:placeholder-shown) ~ .field__label-wrap .field__label{
  --fieldHintFontSize: var(--fieldHintFontSizeFocused, .75rem);

  top: var(--fieldHintTopHover, .25rem);
}

/* 
effect 1
*/

.field_v1 .field__label-wrap::after{
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
  transition: opacity .2s ease-out;
  will-change: opacity;
}

/* 
effect 2
*/



.field_v2 .field__label-wrap::after{
  border-bottom: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
  transform: translate3d(-105%, 0, 0);
  will-change: transform, opacity;
  transition: transform .285s ease-out .2s, opacity .2s ease-out .2s;
}

.field_v2 .field__input:focus ~ .field__label-wrap::after{
  transform: translate3d(0, 0, 0);
  transition-delay: 0;
}

/*
effect 3
*/

.field_v3 .field__label-wrap::after{
  border: var(--uiFieldBorderWidth) solid var(--uiFieldBorderColorActive);
  will-change: opacity, height;
  transition: height .2s ease-out, opacity .2s ease-out;
}

.field_v3 .field__input:focus ~ .field__label-wrap::after{
  height: 100%;
}

/*
=====
LEVEL 4. SETTINGS
=====
*/

.field{
  --fieldBorderColor: #D1C4E9;
  --fieldBorderColorActive: #673AB7;
}

/*
=====
DEMO
=====
*/

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  margin: 0;
  background : #3A5F0E;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

input{
  border: none;
  border-color: transparent;
  background: transparent;
}

.page{
  box-sizing: border-box;
  width: 100%;
  max-width: 480px;
  margin: auto;
  padding: 1rem;

  display: grid;
  grid-gap: 30px;
}

.rsbg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    color: rgba(255,255,255,0.08);
    font-size: 60px;
    font-family: Orbitron;
    letter-spacing: 7px;
    text-align : center;
   


}

.clock {
    float : right;
    color: white;
    margin-right : 20px;
    font-size: 20px;
    font-family: roboto;
    letter-spacing: 7px;
    z-index : 1000;


}
</style>
</head>
<body style='font-weight : bold;'>
  <div class="fresh-table full-color-green" style='object-fit: cover; width : auto; height : auto; '>
  
  <div style='background : rgba(0,0,0,0.5); top : 0; bottom : 0; height : auto; width : 100vw; '>
  <br>
  <h1 class="front-page" style='color : white; width : 100vw; text-align : center; margin-top : 0; font-family : roboto; font-weight : bold;'>INFORMASI TEMPAT TIDUR</h1>
  
  <div  class="rsbg" >Rumah Sakit Sultan Fatah Demak</div>
  <div id="MyClockDisplay" class="clock" onload="showTime()">aaa</div>
  <br>
  <br>
  <br>
  <table class="table display responsive nowrap table-bordered table table-dark table-striped table-hover"  style="margin-bottom: 0px;" id="fresh-table">
  	<thead>
		  <tr style='color : white; width : 1px;'>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5); ">No</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Ruang Perawatan</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Kelas</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">JML TT</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Lama</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Baru</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Pulang</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Pria</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Wanita</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Umum</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Jamda</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">BPJS</th> 
		</tr>
	</thead>

	<tbody>
		  <?php 
		  $count = 1;
			foreach ($rp as $value) {
		?>
		<tr>
			<td style='color : white;'><center><?php echo $count; $count += 1; ?></center></td>
			<td style='color : white;'><?php echo $value->nama; ?></td>
			<td style='color : white; text-align: center;'><?php echo $value->kelas; ?></td>
			<form action="<?php echo site_url('rs/data/'.$value->id) ?>" method='post'>
			<input id='r0<?php echo $value->id; ?>' type="hidden" name="id" value='<?php echo $value->id; ?>'  />
			<td style='text-align: center;'><div> <input id='r1<?php echo $value->id; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="jumlah" placeholder="xxx" value='<?php echo $value->jumlah; ?>'  /> </div></td>
			<td style='text-align: center;'><div> <input id='r2<?php echo $value->id; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="lama" placeholder="xxx" value='<?php echo $value->lama; ?>' /> </div></td>
			<td style='text-align: center;'><div> <input id='r3<?php echo $value->id; ?>' value='<?php echo $value->baru; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="baru" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r4<?php echo $value->id; ?>' value='<?php echo $value->pulang; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="pulang" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r5<?php echo $value->id; ?>' value='<?php echo $value->pria; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="pria" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r6<?php echo $value->id; ?>' value='<?php echo $value->wanita; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="wanita" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r7<?php echo $value->id; ?>' value='<?php echo $value->umum; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="umum" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r8<?php echo $value->id; ?>' value='<?php echo $value->janda; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="janda" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input id='r9<?php echo $value->id; ?>' value='<?php echo $value->bpjs; ?>' type="number" onkeypress="calculate()" oninput="calculate()" name="bpjs" placeholder="xxx" /> </div></td>
		
			</form>
		</tr>
		<?php
			}
		?>

	
		<tr class="total">
			<th>&nbsp;</th>
			<th style="text-align: center; color : white;">T O T A L</th>
			<th style="text-align: center;">&nbsp;</th>
			<th style="text-align: center;"><div> <input disabled id='s1' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s2' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s3' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s4' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s5' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s6' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s7' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s8' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='s9' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
		</tr>

	</tbody>
</table>
<br>
<br>
<table class="table display responsive nowrap table-bordered table table-dark table-striped table-hover" style="margin-bottom: 0px; " id="fresh-table2">
	<thead>
		<tr>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">No</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Ruang Perawatan</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Kelas</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">JML TT</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">INAP</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">RJ</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">APS</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Rujuk</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">DOA</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Umum</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">Jamda</th>
			<th style="text-align:center;background-color: rgba(0,0,0,0.5); color : white;">BPJS</th> 

		</tr>
	</thead>
	<tbody>
		  <?php 
		  $counta = 1;
			foreach ($rp2 as $value) { 
  		?>
		<tr>
			<td style='color : white;'><center><?php echo $counta; $counta += 1; ?></center></td>
			<td style='color : white;'><?php echo $value->nama; ?></td>
			<td style='text-align: center; color : white;'><?php echo $value->kelas; ?></td>
			<form action="<?php echo site_url('rs/data2/'.$value->id) ?>" method='post'>
			<input id='d0<?php echo $value->id; ?>' type="hidden" name="id" value='<?php echo $value->id; ?>'  />
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d1<?php echo $value->id; ?>' type="number" name="jumlah" placeholder="xxx" value='<?php echo $value->jumlah; ?>'  /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d2<?php echo $value->id; ?>' type="number" name="inap" placeholder="xxx" value='<?php echo $value->inap; ?>' /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d3<?php echo $value->id; ?>' value='<?php echo $value->rj; ?>' type="number" name="rj" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d4<?php echo $value->id; ?>' value='<?php echo $value->aps; ?>' type="number" name="aps" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d5<?php echo $value->id; ?>' value='<?php echo $value->rujuk; ?>' type="number" name="rujuk" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d6<?php echo $value->id; ?>' value='<?php echo $value->doa; ?>' type="number" name="doa" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d7<?php echo $value->id; ?>' value='<?php echo $value->umum; ?>' type="number" name="umum" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d8<?php echo $value->id; ?>' value='<?php echo $value->janda; ?>' type="number" name="janda" placeholder="xxx" /> </div></td>
			<td style='text-align: center;'><div> <input onkeypress="calculates()" oninput="calculates()" id='d9<?php echo $value->id; ?>' value='<?php echo $value->bpjs; ?>' type="number" name="bpjs" placeholder="xxx" /> </div></td>
		
			</form>
		</tr>
		<?php
			}
		?>
		
	</tbody>

	<tfoot>
		<tr class="total">
      <th>&nbsp;</th>
			<th style="text-align: center; color : white;">T O T A L</th>
			<th style="text-align: center;">&nbsp;</th>
			<th style="text-align: center;"><div> <input disabled id='ss1' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss2' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss3' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss4' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss5' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss6' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss7' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
			<th style="text-align: center;"><div> <input disabled id='ss8' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
      <th style="text-align: center;"><div> <input disabled id='ss9' type="number" name="xxx" placeholder="xxx" value='0' /> </div></th>
		</tr>	

	</tfoot>
</table>

    </div>
</div>

<div class="preloader">
  <img src="<?php echo base_url('asset/spinner.svg') ?>" alt="spinner">
</div>



<script src="<?php echo base_url('asset/js/jquery.js') ?>" ></script>
<script src="<?php echo base_url('asset/js/bootstrap-table.min.js') ?>"></script>


<script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>" ></script>

<script>

const preloader = document.querySelector('.preloader');

const fadeEffect = setInterval(() => {
  // if we don't set opacity 1 in CSS, then
  // it will be equaled to "" -- that's why
  // we check it, and if so, set opacity to 1
  if (!preloader.style.opacity) {
    preloader.style.opacity = 1;
  }
  if (preloader.style.opacity > 0) {
    preloader.style.opacity -= 0.1;
  } else {
    clearInterval(fadeEffect);
  }
}, 100);



function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();


var arrayRPJumlah = new Array();
var arrayRPLama = new Array();
var arrayRPBaru = new Array();
var arrayRPPulang = new Array();
var arrayRPPria = new Array();
var arrayRPWanita = new Array();
var arrayRPUmum = new Array();
var arrayRPJanda = new Array();
var arrayRPBpjs = new Array();
var arrayRPTotal = new Array();
var arrayAll = new Array();

arrayRPTotal.push(document.getElementById('s1'));
arrayRPTotal.push(document.getElementById('s2'));
arrayRPTotal.push(document.getElementById('s3'));
arrayRPTotal.push(document.getElementById('s4'));
arrayRPTotal.push(document.getElementById('s5'));
arrayRPTotal.push(document.getElementById('s6'));
arrayRPTotal.push(document.getElementById('s7'));
arrayRPTotal.push(document.getElementById('s8'));
arrayRPTotal.push(document.getElementById('s9'));

<?php foreach($rp as $value) { ?>
	arrayRPJumlah.push(document.getElementById(<?php echo "'r1".$value->id."'"; ?>));
	arrayRPLama.push(document.getElementById(<?php echo "'r2".$value->id."'"; ?>));
	arrayRPBaru.push(document.getElementById(<?php echo "'r3".$value->id."'"; ?>));
	arrayRPPulang.push(document.getElementById(<?php echo "'r4".$value->id."'"; ?>));
	arrayRPPria.push(document.getElementById(<?php echo "'r5".$value->id."'"; ?>));
	arrayRPWanita.push(document.getElementById(<?php echo "'r6".$value->id."'"; ?>));
	arrayRPUmum.push(document.getElementById(<?php echo "'r7".$value->id."'"; ?>));
	arrayRPJanda.push(document.getElementById(<?php echo "'r8".$value->id."'"; ?>));
	arrayRPBpjs.push(document.getElementById(<?php echo "'r9".$value->id."'"; ?>));
	
<?php } ?>

arrayAll.push(arrayRPJumlah);
arrayAll.push(arrayRPLama);
arrayAll.push(arrayRPBaru);
arrayAll.push(arrayRPPulang);
arrayAll.push(arrayRPPria);
arrayAll.push(arrayRPWanita);
arrayAll.push(arrayRPUmum);
arrayAll.push(arrayRPJanda);
arrayAll.push(arrayRPBpjs);


function calculate(){
	for(var i = 0; i < arrayRPTotal.length; i++){
		arrayRPTotal[i].value = 0;
		for(var j = 0; j < arrayAll[i].length; j++){
			
			arrayRPTotal[i].value = Number(arrayRPTotal[i].value) + Number(arrayAll[i][j].value);
			
		}
	}


  arrayRPTotal[0].value = 0;
	for(var i = 0; i < arrayRPJumlah.length; i++){
		arrayRPTotal[0].value = Number(arrayRPTotal[0].value) + Number(arrayRPJumlah[i].value);
		
	}
}

calculate();

var array2RPJumlah = new Array();
var array2RPInap = new Array();
var array2RPRj = new Array();
var array2RPAps = new Array();
var array2RPRujuk = new Array();
var array2RPDoa = new Array();
var array2RPUmum = new Array();
var array2RPJanda = new Array();
var array2RPBpjs = new Array();
var array2RPTotal = new Array();
var array2All = new Array();

array2RPTotal.push(document.getElementById('ss1'));
array2RPTotal.push(document.getElementById('ss2'));
array2RPTotal.push(document.getElementById('ss3'));
array2RPTotal.push(document.getElementById('ss4'));
array2RPTotal.push(document.getElementById('ss5'));
array2RPTotal.push(document.getElementById('ss6'));
array2RPTotal.push(document.getElementById('ss7'));
array2RPTotal.push(document.getElementById('ss8'));
array2RPTotal.push(document.getElementById('ss9'));

<?php foreach($rp2 as $value) { ?>
	array2RPJumlah.push(document.getElementById(<?php echo "'d1".$value->id."'"; ?>));
	array2RPInap.push(document.getElementById(<?php echo "'d2".$value->id."'"; ?>));
	array2RPRj.push(document.getElementById(<?php echo "'d3".$value->id."'"; ?>));
	array2RPAps.push(document.getElementById(<?php echo "'d4".$value->id."'"; ?>));
	array2RPRujuk.push(document.getElementById(<?php echo "'d5".$value->id."'"; ?>));
	array2RPDoa.push(document.getElementById(<?php echo "'d6".$value->id."'"; ?>));
	array2RPUmum.push(document.getElementById(<?php echo "'d7".$value->id."'"; ?>));
	array2RPJanda.push(document.getElementById(<?php echo "'d8".$value->id."'"; ?>));
	array2RPBpjs.push(document.getElementById(<?php echo "'d9".$value->id."'"; ?>));
	
<?php } ?>

array2All.push(array2RPJumlah);
array2All.push(array2RPInap);
array2All.push(array2RPRj);
array2All.push(array2RPAps);
array2All.push(array2RPRujuk);
array2All.push(array2RPDoa);
array2All.push(array2RPUmum);
array2All.push(array2RPJanda);
array2All.push(array2RPBpjs);


function calculates(){
	for(var i = 0; i < array2RPTotal.length; i++){
		array2RPTotal[i].value = 0;
		for(var j = 0; j < array2All[i].length; j++){
			
			array2RPTotal[i].value = Number(array2RPTotal[i].value) + Number(array2All[i][j].value);
			
		}
	}


 
	array2RPTotal[0].value = 0;
	for(var i = 0; i < array2RPJumlah.length; i++){
		
		array2RPTotal[0].value = Number(array2RPTotal[0].value) + Number(array2RPJumlah[i].value);
		
	}
}

calculates();




function update_table(pilihan){
	if(pilihan == 1){

			req_refresh_table(1);
			calculate();

	}else{

			req_refresh_table(2);
			calculates();

	}
}

function refresh_table(pilihan, data){
	data = JSON.parse(data)
	if(pilihan == 1){
    console.log(data);
		for(var i = 0; i < data.length; i++){

				arrayAll[0][i].value = data[i].jumlah;
				arrayAll[1][i].value = data[i].lama;
				arrayAll[2][i].value = data[i].baru;
				arrayAll[3][i].value = data[i].pulang;
				arrayAll[4][i].value = data[i].pria;
				arrayAll[5][i].value = data[i].wanita;
				arrayAll[6][i].value = data[i].umum;
				arrayAll[7][i].value = data[i].janda;
				arrayAll[8][i].value = data[i].bpjs;

		}
	}else{
		for(var i = 0; i < data.length; i++){
			
				array2All[0][i].value = data[i].jumlah;
				array2All[1][i].value = data[i].inap;
				array2All[2][i].value = data[i].rj;
				array2All[3][i].value = data[i].aps;
				array2All[4][i].value = data[i].rujuk;
				array2All[5][i].value = data[i].doa;
				array2All[6][i].value = data[i].umum;
				array2All[7][i].value = data[i].janda;
				array2All[8][i].value = data[i].bpjs;

		}
	}	
}



function req_refresh_table(pilihan){
	var xmlHttp = new XMLHttpRequest();
	var url = 'http://localhost/rs/index.php/data?pilihan=' + pilihan;
	xmlHttp.onreadystatechange = () => { 
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			refresh_table(pilihan, xmlHttp.responseText);
      if(pilihan == 1){
        
      }else{
        
      }
		}
	}
	xmlHttp.open("GET",url, true); 
	xmlHttp.send(null);
}

setInterval(function(){ 
  update_table(1);
  update_table(2);
 }, 3000);

</script>

<!-- <script type="text/javascript">

  var $table = $('#fresh-table')
  var $alertBtn = $('#alertBtn')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
      '</a>',
      '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '<i class="fa fa-edit"></i>',
      '</a>',
      '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '<i class="fa fa-remove"></i>',
      '</a>'
    ].join('')
  }

  $(function () {
    $table.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: false,
      showRefresh: true,
      showToggle: false,
      showColumns: false,
      pagination: true,
      striped: true,
      sortable: true,
      pageSize: 8,
      pageList: [8, 10, 25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })

    $alertBtn.click(function () {
      alert('You pressed on Alert')
    })
  })

 
    function refreshTable() {
      console.log("aa");
      $('#table-style').bootstrapTable('refresh', {silent: true});}
    setInterval(refreshTable, 5000);


</script>

<script type="text/javascript">
  var $table2 = $('#fresh-table2')
  var $alertBtn = $('#alertBtn')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table2.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
      '</a>',
      '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '<i class="fa fa-edit"></i>',
      '</a>',
      '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '<i class="fa fa-remove"></i>',
      '</a>'
    ].join('')
  }

  $(function () {
    $table2.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: false,
      showRefresh: false,
      showToggle: false,
      showColumns: false,
      pagination: true,
      striped: true,
      sortable: true,
      pageSize: 8,
      pageList: [8, 10, 25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })

    $alertBtn.click(function () {
      alert('You pressed on Alert')
    })
  })

</script> -->

</div>
</body>

</html>