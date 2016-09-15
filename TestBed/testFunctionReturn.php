<?PHP
function testFunction()
{
    return "PHP is fantastic<br/>\n";
}

for ($x = 1; $x <= 10; $x++) {
    echo testFunction();
}