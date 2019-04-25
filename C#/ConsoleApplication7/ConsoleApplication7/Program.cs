using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication7
{
    class Program
    {
        static void Main(string[] args)
        {
            int[,] numbers = new int[,] { { 3, 5, 7 }, { 9, 11, 13 }, { 15, 17, 19 } };
            Console.WriteLine(numbers[1, 2]);
            Console.ReadLine();
        }
    }
}
