<!DOCTYPE html>
<html ng-app="myApp">
	<head>
		<title>Film listing with phalconphp and angularjs</title>
		<?php echo $this->tag->stylesheetLink('css/style.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/angular.js'); ?>
	</head>
	<body>
		<div class="container">
			<?php echo $this->getContent(); ?>
		</div>

		<div class="container" ng-controller="firstcontroller" ng-init="showData()">
			<p>Search title name: <input type="text" ng-model="filter"></p>
			<div >
			<p><button ng-click="curPage=curPage-1"> &lt; PREV</button> - <button ng-disabled="curPage >= datalists.length/pageSize - 1" ng-click="curPage = curPage+1">NEXT &gt;</button> <span>Page [[curPage + 1]] of [[ numberOfPages() ]]</span></p>
			<table border="1">
				<tr>
					<th>Film ID</th>
					<th>Title</th>
					<th>Description</th>
					<th>Release Year</th>
					<th>Rating</th>
				</tr>
				<tr ng-repeat="film in films | filter:filter | pagination: curPage * pageSize | limitTo: pageSize">
					<td class="film_id">[[ film.film_id ]]</td>
					<td class="film_title">[[ film.title ]]</td>
					<td class="film_description">[[ film.description ]]</td>
					<td class="film_release_year">[[ film.release_year ]]</td>
					<td class="film_rating">[[ film.rating ]]</td>
				</tr>
			</table>
			</div>
			
			 
			 
		</div>
		


		<div class="footer">
			<p>besingamk - film listing with phalconphp and angularjs</p>
		</div>
		<?php echo $this->tag->javascriptInclude('js/apps.js'); ?>
	</body>
</html>

