using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication8
{
    class Count
    {
        public static int sum(int add1, int add2)
        {
            int result = add1 + add2;
            return result;
        }
    }
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Adding: \nPlease enter the first number");
            int num1 = int.Parse(Console.ReadLine());
            Console.WriteLine("Please enter the second number");
            int num2 = int.Parse(Console.ReadLine());

            Count add = new Count();
            int total = Count.sum(num1, num2);
            Console.WriteLine("The sum is {0}.", total);
            Console.ReadLine();
        }
    }
}
