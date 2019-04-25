using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication3
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.ForegroundColor = ConsoleColor.Green;
            for (int i = 1; i <= 10; i++)
            {
                if (i == 4)
                {
                    continue;
                }
                Console.WriteLine("The counter is {0}", i);

            }
            Console.WriteLine("\nPress any key to exit.");
            Console.ReadKey();
        }
    }
}
