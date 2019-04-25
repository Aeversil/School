using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication10
{
    class Program
    {
        static void Main(string[] args)
        {
            double result;
            string value;
            Console.WriteLine("Please enter the length of the array");
            value = Console.ReadLine();

            string[] names = new string[5] { "Merry", "John", "Tim", "Matt", "Jeff" };

            try
            {
                result = Double.Parse(value);
                for (var i = 0; i < result; i++)

                    Console.WriteLine("{0}", names[i]);
                Console.Read();
               
            }
            catch (FormatException e)
            {
                Console.WriteLine("Please enter a valid format. Error message: {0}", e.Message);
            }
            catch (OverflowException e)
            {
                Console.WriteLine("{0} is outside the range of double. Error message: {1}", value, e.Message);
            }
            catch (Exception e)
            {
                Console.WriteLine("There is an error: {0}", e.Message);
            }
            Console.ReadLine();
        }
    }
}
