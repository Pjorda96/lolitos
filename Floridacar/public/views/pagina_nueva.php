<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen" type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Raleway:400,900,700,600,500,300,200,100,800);

body{
	font-family: 'Raleway', sans-serif;
}

.big-price span{
	color: #333;
	font-size:40px;
}

.btn-price{
    background-color:#5db4c0;
    color: #fff;
    border-radius:50%;
	border:none;
    padding:40px 20px;
    font-size: 13px;
	font-weight: 600;
	margin-top:20px;
}

.prices-box{
	margin:50px 0px;
}

.top-content{
	background-color:#00008B;
	padding:20px;
}

.bottom-content{
	background-color:#f6f6f6;
	padding:60px;
}

#prices h3{
	color:#FFF;
}

#prices .features li{
	padding:10px;
}

#prices .btn.btn-default{
	margin:20px 0px;
}

#prices .features-border li{
	border-top:1px solid #c7c7c7;
	padding: 10px 0px;
}

#prices .features-border li:last-child{
	border-bottom:1px solid #c7c7c7;
}
    </style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<section id="prices">
      <div class="container">

           <div class="row">
                 <div class="col-lg-6 col-lg-offset-3 text-center">
                      <h2><span class="ion-minus"></span>Prices<span class="ion-minus"></span></h2>
                      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis  dis parturient montes, nascetur ridiculus </p><br>
                 </div>
           </div>

		   <div class="prices-box">
			  <div class="row">

			   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price-table aos-init aos-animate" data-aos="fade-right">

					<div class="top-content text-center">

						<div class="title">
							<h3>Basic</h3>
						</div>

					 </div>

                     <div class="bottom-content text-center">
						<ul class="features-border list-unstyled">
							<li>2 Pages</li>
							<li>10 GB Storage</li>
							<li>100 GB Bandwidth</li>
							<li>1 Domain</li>
							<li>No Support</li>
						</ul>

						<div class="big-price">
							<span>$10</span>
						</div>

					    <button type="button" class="btn-price" onclick="location.href='../tarjeta.php';">  Unirse  </button>

                     </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price-table aos-init aos-animate" data-aos="fade-up">

					<div class="top-content text-center">

						<div class="title">
							<h3>Standard</h3>
						</div>

					 </div>

                     <div class="bottom-content text-center">
						<ul class="features-border list-unstyled">
                <?php foreach ($filasTarjetas as $fila){
							<li>10 Pages</li>
							<li>20 GB Storage</li>
							<li>200 GB Bandwidth</li>
							<li>5 Domain</li>
							<li>  echo $fila['plazas'];</li>
						</ul>

						<div class="big-price">
							<span>$20</span>
						</div>
?>
						<button type="button" class="btn-price">Buy Now</button>

                     </div>

				</div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price-table aos-init aos-animate" data-aos="fade-left">

					<div class="top-content text-center">

						<div class="title">
							<h3>Professional</h3>
						</div>

					 </div>

                     <div class="bottom-content text-center">
						<ul class="features-border list-unstyled">
							<li>20 Pages</li>
							<li>50 GB Storage</li>
							<li>500 GB Bandwidth</li>
							<li>10 Domain</li>
							<li>UnlimitedSupport</li>
						</ul>

						<div class="big-price">
							<span>$30</span>
						</div>

						<button type="button" class="btn-price">Buy Now</button>

                     </div>

				</div>

			   </div>
			</div>

		</div>
	</section>
