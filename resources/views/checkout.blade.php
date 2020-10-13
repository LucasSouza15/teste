@extends('layouts.app')
@section('conteudo')


		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Endereço de cobrança</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Primeiro nome">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Ultimo nome">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="Cep">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Endereço">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Cidade">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Pais">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telefone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">
									<label for="create-account">
										<span></span>
										Criar conta ?
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						
						
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Seu pedido</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>Porduto</strong></div>
								<div><strong>Total</strong></div>
							</div>
							<div class="order-products">
								<div class="order-col">
									<div>1x Nome do produto</div>
									<div>$980.00</div>
								</div>
								<div class="order-col">
									<div>2x Product Name Goes Here</div>
									<div>$980.00</div>
								</div>
							</div>
							<div class="order-col">
								<div>Frete</div>
								<div><strong>Gratis</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$2940.00</strong></div>
							</div>
						</div>
						<form action="">
							<div class="payment-method">
								<div class="input-radio">
									<input type="radio" name="payment" id="payment-1">
									<label for="payment-1">
										<span></span>
										Cartão de credito
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
								<div class="input-radio">
									<input type="radio" name="payment" id="payment-2">
									<label for="payment-2">
										<span></span>
										Boleto bancario
									</label>
									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
								
							</div>
							
							<a href="#" class="primary-btn order-submit">Finalizar</a>
						</form>
						</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<script src="//code.jivosite.com/widget/iDwWZmXzDr" async></script>
@endsection 