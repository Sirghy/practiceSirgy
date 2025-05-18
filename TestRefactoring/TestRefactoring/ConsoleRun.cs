using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TestRefactoring
{
    public class ConsoleRun
    {
        public void Run()
        {

            Calculator calc = new Calculator();
            string firstWord = "Hello";
            string secondWord = "Roman";

            calc.CalcData(firstWord, secondWord);
            calc.PrintData(firstWord, secondWord);

            Console.ReadKey();

            NewCalculator newCalculator = new NewCalculator();

            firstWord = ReadAndProcessInput("Introduce the first word:", newCalculator);
            secondWord = ReadAndProcessInput("Introduce the second word:", newCalculator);

            if (!string.IsNullOrEmpty(firstWord) && !string.IsNullOrEmpty(secondWord))
            {
                Console.Write("\nThe result of PrintData is: ");
                newCalculator.PrintData(firstWord, secondWord);

                Console.WriteLine("The result of Calc is: {0}", newCalculator.Calc(firstWord, secondWord));
            }
            else
            {
                Console.WriteLine("One of the operands is null or empty.");
            }

            string ReadAndProcessInput(string prompt, NewCalculator calculator)
            {
                Console.WriteLine(prompt);
                string input = Console.ReadLine();
                return calculator.ProcessString(input);
            }


            /*Console.WriteLine("Introduce the first word");
           firstWord = Console.ReadLine();
           firstWord = newCalculator.ProcessString(firstWord);

           Console.WriteLine("Introduce the second word");
           secondWord = Console.ReadLine();
           secondWord = newCalculator.ProcessString(secondWord);
           if (!string.IsNullOrEmpty(firstWord) && !string.IsNullOrEmpty(secondWord))
           {
               Console.Write("\nThe result of print data is: ");
               newCalculator.PrintData(firstWord, secondWord);
               Console.WriteLine("The result of Calc is: {0}", newCalculator.Calc(firstWord, secondWord));
           }
           else
               Console.WriteLine("One of the operands is null or Empty" );*/
        }
    }
}
