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
<body style='font-weight : bold; background : green'>
  <div class="fresh-table full-color-green" style='object-fit: cover; width : auto; height : auto; min-height : 100vh; '>
  
  <div style='background : rgba(0,0,0,0.5); top : 0; bottom : 0; height : auto; min-height : 100vh;  width : 100vw; '>
  <br>
  <h1 class="front-page" style='color : white; width : 100vw; text-align : center; margin-top : 0; font-family : roboto; font-weight : bold; font-size : 30px;'>INFORMASI LOG USER</h1>
  
  <div  class="rsbg" >Rumah Sakit Sultan Fatah Demak</div>

  <br>
  <br>
  <br>
  <table class="table display responsive nowrap table-bordered table table-dark table-striped table-hover"  style="margin-bottom: 0px;" id="fresh-table">
  	<thead>
		  <tr style='color : white; width : 1px;'>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5); ">No</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">User</th>
		  <th style="text-align:center;background-color: rgba(0,0,0,0.5);">Waktu Login</th>
		</tr>
	</thead>

	<tbody>
		  <?php 
		  $count = 1;
			foreach ($log as $value) {
		?>
		<tr>
			<td style='color : white;'><center><?php echo $count; $count += 1; ?></center></td>
			<td style='color : white;'><?php echo $value->user; ?></td>
			<td style='color : white; text-align: center;'><?php echo $value->timestamp; ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>

    <div class="d-flex justify-content-center" style='float : right;  margin-top : 20px; margin-right : 20px'>  
      <a href="<?php echo site_url('rs') ?>"><button type="button" class="btn btn-colour-1">VIEW</button></a>
      <a href="<?php echo site_url('login/logout') ?>"><button type="button" class="btn btn-colour-1">LOG OUT</button></a>
      <a href="<?php echo site_url('rs/editor') ?>"><button type="button" class="btn btn-colour-1">EDITOR</button></a>
    </div>
    </div>


</div>



<script src="<?php echo base_url('asset/js/jquery.js') ?>" ></script>
<script src="<?php echo base_url('asset/js/bootstrap-table.min.js') ?>"></script>


<script src="<?php echo base_url('asset/js/bootstrap.min.js') ?>" ></script>

<script>





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