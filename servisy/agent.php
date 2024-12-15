<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Агенты");
?><div class="site-section site-section-sm bg-light">
	<div class="container agents-list">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>Агенты по Недвижимости</h2>
				</div>
			</div>
		</div>
		<div class="mb-5">
			<div class="agent__card">
				<div class="small-info">
					<div class="avatar" style="background-image: url(images/person_1.jpg);">
					</div>
					<div class="info">
						<div class="name">
							 <?$APPLICATION->IncludeComponent(
	"mcart:agents.list",
	"",
	Array(
		
	)
);?>Авдеев Святослав
						</div>
					</div>
				</div>
				<div class="agent__card_item">
					<div class="agent__card_info">
						<div class="card__info_item">
							<div class="position">
								 Электронная почта:
							</div>
							<div class="name">
 <a href="mailto:avdeev@gmail.com">avdeev@gmail.com</a>
							</div>
						</div>
						<div class="card__info_item">
							<div class="position">
								 Телефон:
							</div>
							<div class="name">
								 +7 (431) 434-42-43
							</div>
						</div>
						<div class="card__info_item">
							<div class="position">
								 Вид деятельности:
							</div>
							<div class="name">
								 Брокер
							</div>
						</div>
					</div>
				</div>
				 <a class="star" >
                    
                </a>
			</div>
			<div class="agent__card">
				<div class="small-info">
					<div class="avatar" style="background-image: url(images/person_4.jpg);">
					</div>
					<div class="info">
						<div class="name">
							 Берг Оксана
						</div>
					</div>
				</div>
				<div class="agent__card_item">
					<div class="agent__card_info">
						<div class="card__info_item">
							<div class="position">
								 Электронная почта:
							</div>
							<div class="name">
 <a href="mailto:berg@gmail.com">berg@gmail.com</a>
							</div>
						</div>
						<div class="card__info_item">
							<div class="position">
								 Телефон:
							</div>
							<div class="name">
								 +7 (431) 434-42-43
							</div>
						</div>
						<div class="card__info_item">
							<div class="position">
								 Вид деятельности:
							</div>
							<div class="name">
								 Брокер
							</div>
						</div>
					</div>
				</div>
				 <a class="star active" >
                    
                </a>
			</div>
			<div class="agent__card">
				<div class="small-info">
					<div class="avatar" style="background-image: url(images/person_3.jpg);">
					</div>
					<div class="info">
						<div class="name">
							 Васильев Игорь
						</div>
					</div>
				</div>
				<div class="agent__card_item">
					<div class="agent__card_info">
						<div class="card__info_item">
							<div class="position">
								 Электронная почта:
							</div>
							<div class="name">
 <a href="mailto:vasilev@gmail.com">vasilev@gmail.com</a>
							</div>
						</div>
						<div class="card__info_item">
							<div class="position">
								 Телефон:
							</div>
							<div class="name">
								 +7 (431) 434-42-43
							</div>
						</div>
						<div class="card__info_item">
							<div class="position">
								 Вид деятельности:
							</div>
							<div class="name">
								 Брокер
							</div>
						</div>
					</div>
				</div>
				 <a class="star" >
                    
                </a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="site-pagination">
 <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a>
					... <a href="#">10</a>
				</div>
			</div>
		</div>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>