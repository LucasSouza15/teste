

@extends('layouts.app')
@section('conteudo')

	
			<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							@foreach ($fotos as $foto)
								<div class="product-preview">
									<img src="{{asset('storage/' . $foto->path)}}" alt="">
								</div>
							@endforeach
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							@foreach ($fotos as $foto)
								<div class="product-preview">
									<img src="{{asset('storage/' . $foto->path)}}" alt="">
								</div>
							@endforeach
						</div>
					</div>
					<!-- /Product thumb imgs -->

				
					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name">{{$products->produto}}</h2>
							<div>

							</div>
							<div>
								<h3 class="product-price">{{$products->promocao}}		<del class="product-old-price">		{{$products->preco_antigo}}	</del></h3>
								<span class="product-available">
									Em estoque : {{$products->estoque}} itens
								</span>
							</div>
							<p>{{$products->descricao}}</p>

						<form action="{{route('site.checkout',$products->codico_produto)}}" method="post">
							@csrf
							<div class="product-options">
								<label>
									Tamanho 
									<span>{{$products->tamanho}}</span>

								</label>
								
								<label>
									Cor: Pergunte ao vendedor quais cores tem disponiveis. 
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									QTD
									<div class="input-number">
										<input name="qtd"type="number" value="1">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Finalizar Compra</button>
							</div>
						</form>
							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> Salvar</a></li>
							</ul>

							<ul class="product-links">
								<li>Categorias:</li>
								<li><a href="{{route('site.roupas')}}">{{$products->categoria}}</a></li>
							</ul>

							<ul class="product-links">
								<li>Rede Sociais:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab2">Detalhes</a></li>
								<li><a data-toggle="tab" href="#tab3">Opniões (3)</a></li>
							</ul>
							<!-- /product tab nav -->

							<!-- product tab content -->
							<div class="tab-content">

								<!-- tab2  -->
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-12">
											<p>{{$products->detalhes}}</p>
										</div>
									</div>
								</div>
								<!-- /tab2  -->

								<!-- tab3  -->
								<div id="tab3" class="tab-pane fade in">
									<div class="row">
										<!-- Rating -->
										<div class="col-md-1">
											
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-7">
											<div id="reviews">
												<ul class="reviews">
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>								
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
													<li>
														<div class="review-heading">
															<h5 class="name">John</h5>
															<p class="date">27 DEC 2018, 8:0 PM</p>
														</div>
														<div class="review-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
														</div>
													</li>
												</ul>
												<ul class="reviews-pagination">
													<li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
													<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-4">
											<div id="review-form">
												<form class="review-form">
													<input class="input" type="text" placeholder="Your Name">
													<input class="input" type="email" placeholder="Your Email">
													<textarea class="input" placeholder="Your Review"></textarea>
													<button class="primary-btn">Submit</button>
												</form>
											</div>
										</div>
										<!-- /Review Form -->
									</div>
								</div>
								<!-- /tab3  -->
							</div>
							<!-- /product tab content  -->
						</div>
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Produtos relacionados</h3>
						</div>
					</div>

					@foreach ($productRelacionados as $productRelacionado)
						@if ($productRelacionado->categoria == $products->categoria)
							
									<!-- product -->
							<div class="col-md-3 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{asset('app-assets/img/product01.png')}}" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{$productRelacionado->categoria}}</p>
										<h3 class="product-name"><a href="#">{{$productRelacionado->produto}}</a></h3>
										<h4 class="product-price">{{$productRelacionado->preco}} <del class="product-old-price">$990.00</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Salvar</span></button>
											<button class="add-to-compare"><i class="fa fa-shopping-cart"></i><span class="tooltipp">Adicionar ao carrinho</span></button>
											<!-- Botões de comparar e olhar
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											-->
										</div>
									</div>
									<div class="add-to-cart">
										<a href="{{route('site.product', $productRelacionado->codico_produto)}}">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Comprar</button>
										</a>
									</div>
								</div>
							</div>
							<!-- /product -->
							
						@endif
						
					@endforeach	
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->

@endsection 
<script src="//code.jivosite.com/widget/iDwWZmXzDr" async></script>