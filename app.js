
/*
	verification si le nombre est premier
*/

function	is_prime(number)
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

function	display_result(number)
{
	is_prime(number) ? console.log(number + " is a prime number !\n") : console.log(number + " is not a prime number!\n")
}

display_result(5) // true
display_result(2) // true
display_result(10) // false
display_result(1) // false