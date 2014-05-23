<!DOCTYPE html>
<html ng-app="myApp">
	<head>
		<title>Phalcon PHP Framework</title>
		<?php echo $this->tag->stylesheetLink('css/style.css'); ?>
		<?php echo $this->tag->javascriptInclude('js/angular.js'); ?>
	</head>
	<body>
		<div class="container">
			<?php echo $this->getContent(); ?>
		</div>

		<div class="container" ng-controller="firstcontroller" ng-init="showData()">
			<input type="text" ng-model="filter">
			<div ng-repeat="film in films | filter:filter | pagination: curPage * pageSize | limitTo: pageSize">

				<p>[[ film.film_id ]] [[ film.title ]] - [[ film.release_year ]] - <strong>Rating: </strong> [[ film.rating ]]</p>
			</div>
			<p><span ng-click="curPage=curPage-1"> &lt; PREV</span> - <span ng-disabled="curPage >= datalists.length/pageSize - 1" ng-click="curPage = curPage+1">NEXT &gt;</span> <span>Page [[curPage + 1]] of [[ numberOfPages() ]]</span></p>
			 
			 
		</div>
		


		<div class="footer">
			<p>besingamk - film listing with phalconphp and angularjs</p>
		</div>
		<?php echo $this->tag->javascriptInclude('js/apps.js'); ?>
	</body>
</html>

