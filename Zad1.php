<html>
<head> <meta charset="UTF-8"> <link rel = "stylesheet" href = "index.css"> </head>
<body>
	<?php
		$films = [
			'Фантастика' => [
				[
					'title' => 'Звёздные войны: Пробуждение силы',
					'description' => '«Пробуждение силы» — седьмой эпизод фантастической серии «Звездные войны». Империя была разбита 30 лет назад, но теперь возникла новая угроза. В условиях, когда Люк Скайуокер бесследно исчез, Первый Орден пытается узурпировать власть в галактике, и лишь небольшая группа героев при помощи Сопротивления может ему помешать.',
					'year' => 2015,
					'country' => ['США'],
					'photo' => [
						'http://st7.imhonet.ru/element/185x270/7a/f3/7af3f1699ec96dc751de74185bea334c/zvyozdnye-vojny-probuzhdenie-sily.jpg'
					]
				], [
					'title' => 'Мир Юрского периода',
					'description' => 'В лаборатории выводят новый вид динозавра, в котором сочетаются интеллект человека и мощь хищника — именно он, по мнению администрации, и привлечёт посетителей. Но гигантский монстр поведёт себя не так, как от него ждали, и покажет характер прямо в час запуска нового аттракциона. «Мир юрского периода» под угрозой, бороться с чудовищем придётся не жаждущим прибыли дельцам.',
					'year' => 2015,
					'country' => ['США'],
					'photo' => [
						'http://st6.imhonet.ru/element/185x270/6b/8f/6b8fb052b385218b153d05fe4e0c32cd/mir-yurskogo-perioda.jpg'
					]
				]
			],
			'Исторические' => [
				[
					'title' => 'Шпионский мост',
					'description' => '1957 год. В Бруклине арестован Рудольф Абель, раскрытый как советский шпион. Некоторое время спустя в СССР сбивают самолет Фрэнсиса Пауэрса и предъявляют тому аналогичные обвинения, но уже в пользу США. Донован едет в Восточный Берлин, надеясь договориться со спецслужбами об обмене этих двоих людей, который предполагается провести на так называемом Шпионском мосту.',
					'year' => 2015,
					'country' => ['Германия', 'Индия', 'США'],
					'photo' => [
						'http://st5.imhonet.ru/element/185x270/5f/e4/5fe4662b0ce41569ed6fe14aba98563f/shpionskij-most.jpg',
						'http://www.mirage.ru/images/film/big/202200.jpg'
					]
				],
				[
					'title' => 'Амадей',
					'description' => 'Драма, посвящённая событиям давних времён. Один из самых уважаемых и талантливых венских композиторов, Антонио Сальери помнится многим благодаря «Маленьким трагедиям» Пушкина, отразившим один из самых знаменитых слухов музыкальной столицы Европы — за почтенным гражданином закрепилась слава отравителя. Но был ли он им на самом деле?',
					'year' => 1984,
					'country' => ['США', 'Франция'],
					'photo' => [
						'http://st4.imhonet.ru/element/185x270/42/33/42337993d122a78f206ffb0e4af246aa/amadej.jpg'
					]
				]
			]
		];
	?>
	<div class="films-list">
	<?php
		foreach ($films as $base_key =>$base_film)  { 
			if (isset ($base_key)){
				echo "<div class='film-item'> Жанр: ".htmlspecialchars($base_key)." </div>" ;
			}
			foreach ($base_film as  $key => $film)  { 
				if (isset ($film['title'])){
					echo "<div class='film-name'> Название: ".htmlspecialchars($film['title'])." </div>" ;
				}
				if (isset ($film['description'])){
					echo "<div class='film-description'> Описание: ".htmlspecialchars($film['description'])." </div>";
				}
				if (isset ($film['year'])){
					echo  "Дата выхода: ".htmlspecialchars($film['year']);
				}
				foreach ($film['country'] as  $country)  { 
					if (isset ($country)){
						echo "<div class='element-country'> Страна: ".htmlspecialchars(implode($film['country'],','))." </div>";
					}	
				break;		
				}
				foreach ($film['photo'] as $photo)  {
					if (isset ($photo)){
						echo "<div class='element-photo'> '<img src='".htmlspecialchars($photo)."'>' </div>";
					}
				} 
			}	
		}
	?>
	</div>
</body>
</html>