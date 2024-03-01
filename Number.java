class Number
{
    private int number;

    public int factorial(int number)
    {
        if (number == 1)
            return (1);
        return (factorial((number - 1)) * number);
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

        num = new Number();
        num.setNumber(3);
        factorial = num.factorial(num.getNumber());
        System.out.println("the factorial of " + num.getNumber() + " is = " + factorial);
    }
}