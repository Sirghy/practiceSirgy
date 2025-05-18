using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TestRefactoring
{
    public class Calculator : Calculation
    {
       

        public int Calc(string a, string b)
        {
            return base.Calc(a, b);
        }

        public void CalcData(string a, string b)
        {
            try
            {
                int val = Calc(a, b);
                Console.WriteLine("Value: " + val);
            }
            catch(Exception ex)
            {
                Console.WriteLine("Error: " + ex.Message);
            }
        }
    }
    public class Calculation
    {
        public int Calc(string a, string b)
        {
            return a.Length + b.Length;
        }

        public void PrintData(string a, string b)
        {
            Console.WriteLine(a + b);
        }
    }
}
