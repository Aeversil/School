using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Chapter2_7
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("what is my lucky number?");
            ConsoleKeyInfo KeyName = new ConsoleKeyInfo();
            KeyName = Console.ReadKey();
            if (KeyName.KeyChar == '5')
                Console.WriteLine("\nCorrect! My lucky number is 5!");
            else
                if (KeyName.KeyChar >= '0' && KeyName.KeyChar <= '9')
                    Console.WriteLine("\n{0} is incorrect.", KeyName.KeyChar);
                else
                    Console.WriteLine("\n{0} is incorrect. Please key in a number.", KeyName.KeyChar);

            Console.ReadLine();

        }
    }
}
