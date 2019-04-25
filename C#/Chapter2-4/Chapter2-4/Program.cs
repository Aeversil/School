using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Chapter2_4
{
    class Program
    {
        static void Main(string[] args)
        {
            int a = 8;
            if (a > 0 && a < 6)
            {
                Console.WriteLine("The number is whitin range!");
                Console.ReadLine();
            }
            else
            {
                Console.WriteLine("The number is out of range!");
                Console.ReadLine();
            }
        }
    }
}
