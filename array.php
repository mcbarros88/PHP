<?php
$lista=array();
array_push($lista,"ciao");
array_push($lista,42);
array_unshift($lista,"hello");
array_unshift($lista,"cavallo");
echo $lista[1];

echo "<br>array:<br>";

foreach($lista as $i=>$el)
{
echo $i."-".$el;
echo "<br>";
}
echo "l'array contiene ".count($lista)." elementi!";
echo "<br>";
for ($i=0; $i<10; $i++)
echo $i;


