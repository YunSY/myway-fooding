<?php
//chdir('..');	
include_once './src/Epi.php';
Epi::setPath('base', './src');
Epi::init('api');

//라우팅 : 경로 추가
getRoute()->get('/', 'showEndpoints');	//시작점(말단)

/*
 * ******************************************************************************************
 * Define functions and classes which are executed by EpiCode based on the $_['routes'] array
 * ******************************************************************************************
 */
getRoute()->run();

function showEndpoints()
{
	$str = "윤서영";
	echo "$str";	//윤서영이 나옴
	echo '$str';	//$str이 나옴

	echo '빠라바라밤 API <br>';
	echo '<ul>
			  <li><a href="/">/</a> -> (home)</li>
			  <li><a href="/version">/version</a> -> (print the version of the api)</li>
			  <li><a href="/users">/users</a> -> (print each user)</li>
			  
        </ul>';
}


?>