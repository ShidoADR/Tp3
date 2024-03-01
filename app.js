/*
	mes fonctions
*/

let	is_prime
let display_result

/*
	verification si le nombre est premier
*/

is_prime = function	(number)
{
	if (number == 1 || number == 0)
		return (false)
	for (let i = (number - 1); i > 1; i--)
	{
		if ((number % i) == 0)
			return (false)
	}
	return (true);
}

/*
	affichage du résultat
*/

display_result = function	(number)
{
	is_prime(number) ? console.log(number + " is a prime number !\n") : console.log(number + " is not a prime number!\n")
}

display_result(5) // true
display_result(2) // true
display_result(10) // false
display_result(1) // false