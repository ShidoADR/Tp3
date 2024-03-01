class Number
{
    private int number;

    public int factorial(int number)
    {
        if (number == 1)
            return (1);
        return (factorial((number - 1)) * number);
    }

    public int  power(int number, int coefficient)
    {
        if (coefficient == 1)
            return (number);
        return (power(number, coefficient - 1) * number);
    }

    public int getNumber()
    {
        return (this.number);
    }

    public void    setNumber(int number)
    {
        this.number = number;    
    }

    public static void  main(String[] args)
    {
        Number  num;
        int     factorial;
        int     power;

        num = new Number();
        num.setNumber(3);
        factorial = num.factorial(num.getNumber());
        power = num.power(num.getNumber(), 3);
        System.out.println("the factorial of " + num.getNumber() + " is = " + factorial +"\n");
        System.out.println(num.getNumber() + " power  2 = " + power +"\n");
    }
}