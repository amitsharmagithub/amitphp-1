<?php
//Arithematic operators

//  + - * / % 


//Relational operator

//  > < >= <= == !=

//logical operwators

//||(or)    &&(and)   !(not)

//asignment operator

//= += -= *= /= %=



$a=5;
$b=6;

// if($a!=$b)
// {
//     echo "good";
// }


// OR ||
// a	b
// 0	0	0
// 0	1	1
// 1	0	1
// 1	1	1

// AND &&
// a	b
// 0	0	0
// 0	1	0
// 1	0	0
// 1	1	1

// NOT !

// 0=>1
// 1=>0
//0                  1  =>0 
if( $a>$b || !( $b<10))
{
    echo "hi";
}
else {
    echo "bye";
}


