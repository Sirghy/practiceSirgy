using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TestRefactoring
{
    public class NewCalculator : Calculation
    {
        public int ConvertAndCalc(string x, string y)
        {
            base.PrintData(x, y);
            return base.Calc(x, y);
        }
        public string ProcessString(string val)
        {
            return val.Replace(" ", string.Empty);
        }
    }
}
