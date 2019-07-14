<?php
$searchWords = ['Php','html','Интернет','Web'];


$searchStrings = [
	'Интернет - большая сеть компьютеров, которые могут взаимодействовать друг с другом.',
	'PHP - это распространенный язык программирования с открытым исходным кодом.',
	'PHP сконструирован специально для ведения Web-разработок и его код может внедряться непосредственно в HTML',
];
function search($words,$strings){
$result = [];
    foreach ($strings as $string => $stringValue){
        foreach ($words as $word => $wordValue){
            if (preg_match('/'.$wordValue.'/i', $stringValue)){
                if (isset($result[$string])){
                    $result[$string] .= ', '.$wordValue ;
                    continue;
                }
                $result[] = $wordValue;
            }
        }
    }
    foreach ($result as $key => $value){
         echo 'В предложении № '.$key.' есть слово : '. $value .' <br>';
    }
}


search($searchWords,$searchStrings);

