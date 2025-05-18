using System;

public class R : B
{
    public object DoStuff(object x, object y)
    {
        int z, a, b = 1;
        z = 5;
        a = 0;

        if (x == null)
        {
            Console.WriteLine("x is null");
        }
        else
        {
            if (x. != null || y.ToString() != null)
            {
				// we can cust now
				a = (int)x;
		        b = (int)y;
            }
        }

        var c = a + b;

        return c;
    }

    public int Calc(string a, string b)
    {
        return this.Calc(a, b);
    }

    public void ProcessData(string a, string b)
    {
        try
        {
			int? val = Calc(a, b);
            if (val != null)
            {
                if (val.HasValue)
                {
                    Console.WriteLine("Value: " + val.Value);
                }
            }
            else
            {
                Console.WriteLine("val is null");
            }
        }
        catch
        {
        }
    }
}
public class B
{
	public int Calc(string a, string b)
    {
        return a.Length + b.Length;
    }
	
	public void ProcessData(string a, string b)
	{
		Console.WriteLine(a + b);
	}
}