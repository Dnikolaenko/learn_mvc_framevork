<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		$hbr = file_get_contents('http://www.gismeteo.ua/weather-kharkiv-5053/');
  
 $document = phpQuery::newDocument($hbr);
  
 $lal = $document->find('section higher');
  echo($lal);
 /*foreach ($lal as $el) {
 $pq = pq($el); // Это аналог $ в jQuery
 // меняем атрибуты найденого элемента 
 $pq->find('h2.entry-title > a.blog')->attr('href',
 'http://www.gismeteo.ua/weather-kharkiv-5053/')->html('gismeteo');
 $pq->find('div.entry-info')->remove();//удаляем ненужный эл-нт
 $tags = $pq->find('ul.tags > li > a');
 $tags->append(': ')->prepend(' :'); // добавляем : по бокам
 // добавляем контент в начало найденого элемента
 
 $pogoda=$pq->find('div.content')->prepend('<br />')->prepend($tags); 
 
 }

  var_dump($pogoda);*/
 var_dump $lal;
		$this->view->generate('main_view.php', 'template_view.php');
	}
}