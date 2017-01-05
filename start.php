<?php 
	session_start();
	$db = mysqli_connect("localhost", "root", "", "authentication");
	if (isset($_GET['submit_btn'])) {
		$nomor = mysql_real_escape_string($_GET['nomor']);
		$nc = mysql_real_escape_string($_GET['nc']);
		$waktu = mysql_real_escape_string($_GET['waktu']);
		$minutes = mysql_real_escape_string($_GET['minutes']);
		$spec = mysql_real_escape_string($_GET['spec']);
		$contain = mysql_real_escape_string($_GET['contain']);
		$amount = mysql_real_escape_string($_GET['amount']);
		$sql = "INSERT INTO data (nomor, nc, waktu, minutes, spec, contain, amount) VALUES('$nomor', '$nc','$waktu', '$minutes', '$spec', '$contain', '$amount')";
		mysqli_query($db, $sql);
	}
?>



<!DOCTYPE html>
<html>
<head>
<title>Start</title>
<meta charset="utf-8">
	 <link rel="stylesheet" href="css/bootstrap.min.css"> 
	 <link rel="stylesheet" href="css/bootstrap-theme.min.css"> 
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/styles.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/sForm.js"></script>

<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
</head>

<body class="container">
       <div class="main">

 <header> 
  <div class="container_12">
    <div class="grid_12">
    <h1><a href="start.php"><img src="images/logo8.png" alt="EXTERIOR"></a> </h1>
    
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li><a href="home.php">Home</a></li>
                   <li><a href="news.php">News </a></li>
                   <li class="with_ul"><a href="contacts.php">Contacts</a>
                   <ul>
                         <li><a href="contacts.php"> Contact Us</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        
                     </ul></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>


<h1 align="center"> Welcome <?php echo $_SESSION['username'];  ?></h1>
<p align="center"> Input Data Below Here!
<br>Let's Start!
</p>
<br>
<br>
<form method="get" class="form-inline" action="restart.php">
	<div>
		<input type="text" name="nomor" placeholder="Nomor" class="form-control">
		<input type="text" name="nc" placeholder="CN" class="form-control">
		<select name="waktu" class="form-control"> 
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
		</select>
		<select name="minutes" class="form-control"> 
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			<option value="34">34</option>
			<option value="35">35</option>
			<option value="36">36</option>
			<option value="37">37</option>
			<option value="38">38</option>
			<option value="39">39</option>
			<option value="40">40</option>
			<option value="41">41</option>
			<option value="42">42</option>
			<option value="43">43</option>
			<option value="44">44</option>
			<option value="45">45</option>
			<option value="46">46</option>
			<option value="47">47</option>
			<option value="48">48</option>
			<option value="49">49</option>
			<option value="50">50</option>
			<option value="51">51</option>
			<option value="52">52</option>
			<option value="53">53</option>
			<option value="54">54</option>
			<option value="55">55</option>
			<option value="56">56</option>
			<option value="57">57</option>
			<option value="58">58</option>
			<option value="59">59</option>
			<option value="60">60</option>
		</select>
		<select name="spec" class="form-control"> 
			<option value="AM">AM</option>
			<option value="PM">PM</option>
		</select>
		<input type="text" name="contain" placeholder="Contain" class="form-control">
		<input type="text" name="amount" placeholder="Amount" class="form-control">
		<button type="submit" name="submit_btn"  class="btn btn-info" id="btn-add">Add New</button>
		<button type="button" class="btn btn-success" id="btn-update">Update</button>
	</div>
</form>
<hr>
<table class="table">
	<thead>
		<tr>
			<th>Nomor</th>
			<th>Container Number</th>
			<th>Time</th>
			<th>Minutes</th>
			<th>AM/PM</th>
			<th>Contain</th>
			<th>Amount</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		
	</tbody>
</table>


<script>
$(function(){
	$('#btn-add').click(function(){
		var _nomor = $('input[name="nomor"]').val();
		var _nc = $('input[name="nc"]').val();
		var _waktu = $('select[name="waktu"]').val();
		var _minutes = $('select[name="minutes"]').val();
		var _spec = $('select[name="spec"]').val();
		var _contain = $('input[name="contain"]').val();
		var _amount = $('input[name="amount"]').val();
		
		var _tr = '<tr><td>'+ _nomor +'</td>	<td>'+ _nc +'</td>	<td>'+ _waktu +'</td>	<td>'+ _minutes +'</td>	<td>'+_spec+'</td>	<td>'+_contain+'</td>	<td>'+_amount+'</td> 	<td><button type="button" class="btn btn-success btn-edit">Edit </button> | <button type="button" class="btn btn-danger btn-delete">Delete </button></td></tr>';
		
		$('tbody').append(_tr);
	});
	var _trEdit = null;
	$(document).on('click', '.btn-edit',function(){
		_trEdit = $(this).closest('tr');
		var _nomor = $(_trEdit).find('td:eq(0)').text();
		var _nc = $(_trEdit).find('td:eq(0)').text();
		var _waktu = $(_trEdit).find('td:eq(1)').text();
		var _minutes = $(_trEdit).find('td:eq(1)').text();
		var _spec = $(_trEdit).find('td:eq(2)').text();
		var _contain = $(_trEdit).find('td:eq(3)').text();
		var _amount = $(_trEdit).find('td:eq(4)').text();
		
		$('input[name="nomor"]').val(_nomor);
		$('input[name="nc"]').val(_nc);
		$('select[name="waktu"]').val(_waktu);
		$('select[name="minutes"]').val(_minutes);
		$('select[name="spec"]').val(_spec);
		$('input[name="contain"]').val(_contain);
		$('input[name="amount"]').val(_amount);
	}); 
	
	$('#btn-update').click(function(){
		if(_trEdit){
			var _nomor = $('input[name="nomor"]').val();
			var _nc = $('input[name="nc"]').val();
			var _waktu = $('select[name="waktu"]').val();
			var _minutes = $('select[name="minutes"]').val();
			var _spec = $('select[name="spec"]').val();
			var _contain = $('input[name="contain"]').val();
			var _amount = $('input[name="amount"]').val();
			
			$(_trEdit).find('td:eq(0)').text(_nomor);
			$(_trEdit).find('td:eq(0)').text(_nc);
			$(_trEdit).find('td:eq(1)').text(_waktu);
			$(_trEdit).find('td:eq(1)').text(_minutes);
			$(_trEdit).find('td:eq(2)').text(_spec);
			$(_trEdit).find('td:eq(3)').text(_contain);
			$(_trEdit).find('td:eq(4)').text(_amount);
			_trEdit = null;
		}
	});
	
	$(document).on('click','.btn-delete', function(){
		if(confirm("Are you sure to delete?")){
			$(this).closest('tr').remove();	
		}
	});
});
</script>
</body>
</header>
</html> 
