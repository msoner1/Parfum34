{$meta}
<body>
{$header}
<section id="advertisement">
	<div class="container">
		<img src="content/images/shop/advertisement.jpg" alt="" />
	</div>
</section>
<section>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/">Ana</a></li>
				  <li class="active">Sipariş</li>
				</ol>
			</div><!--/breadcrums-->

			<div class="shopper-informations">

				<div class="review-payment">
					<h2>Seçtiğiniz Urun</h2>
				</div>

				<div class="table-responsive cart_info">
					<table class="table table-condensed">
						<thead>
						<tr class="cart_menu">
							<td class="image">Urun</td>
							<td class="description"></td>
							<td class="price">Fiyat</td>
							<td class="quantity">Adet</td>
							<td class="total">Toplam</td>
							<td></td>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{$urun_resmi}" alt="" width="150" height="200"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{$urun_adi}</a></h4>
								<p>Web ID: 2015{$urun_id}</p>
							</td>
							<td class="cart_price">
								<p>&#8378; {$urun_fiyati}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input class="cart_quantity_input" type="text" name="quantity" value="{$adet}" id="adet" autocomplete="off" size="2" maxlength="1">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">&#8378; {$urun_fiyati}</p>
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Toplam</td>
										<td>&#8378; {$urun_fiyati}</td>
									</tr>
									<tr class="shipping-cost">
										<td>Kargo Ücreti</td>
										<td>Bedava</td>
									</tr>
								</table>
							</td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="payment-options">
					<span>
						<label><input type="checkbox" checked> Kapıda Nakit Odeme</label>
					</span>
				</div>

				<div class="register-req">
					<p>Uyelik gerekmez aşağıdaki formu doldurun ve tek adımda urun kapınıza gelsin.</p>
				</div><!--/register-req-->

				<div class="row">
					<div class="col-sm-8 clearfix">

						<script type="text/javascript">
							$(document).ready(function(){
								$("#adet").bind("input", function(){
									var adet =$("#adet").val();
									$("#adeti").html("<input type='hidden' name='adets' id='adet' value='"+adet+"' >");
									$("#adet").html("<input class='cart_quantity_input' type='text' name='quantity' value='"+adet+"' id='adet' autocomplete='off' size='2' maxlength='1'>");

								});
							});
						</script>

						<div class="bill-to" >
							<p>Şipariş Formu</p>
									<div class="status alert alert-success" style="display: none"></div>
									<form action="siparis-kontrol.php" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
										<div class="form-group col-md-6">
											<input type="hidden" name="adets" id="adeti" value="{$adet}">
											<input type="hidden" name="urun_ids" value="{$urun_id}">
											<input type="text" name="ad_soyad" id="ad_soyad" class="form-control" maxlength="50" required="required"  placeholder="*Adınız Soyadınız">
										</div>
										<div class="form-group col-md-6">
											<input type="email" name="email" class="form-control" maxlength="50" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="telefon" id="tel" class="form-control" required="required" maxlength="50" placeholder="Telefon(Kargo gibi konularda bilgilendirilmek için)">
										</div>
										<div class="form-group col-md-6">
											<input type="text" name="semt" id="semt" class="form-control" maxlength="50" required="required" placeholder="*Semt İsmi">
										</div>
										<div class="form-group col-md-12">
											<textarea name="adres" id="message" id="adres" required="required" class="form-control" rows="8" placeholder="*Adresiniz lütfen tam ve eksiksiz yazınız"></textarea>
										</div>
										<div class="form-group col-md-12">
											<input type="submit" name="submit" class="btn btn-primary pull-right" id="gonder" value="Gönder">
										</div>
									</form>

					</div>
				</div>
			</div>

		</div>
	</section> <!--/#cart_items-->

{$footer}
</body>
</html>