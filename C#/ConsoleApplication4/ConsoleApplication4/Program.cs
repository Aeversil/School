using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication4
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.ForegroundColor = ConsoleColor.Green;

            Console.WriteLine ("*** MENU ***\n1. Display Menu 1\n2. Display Menu2\n3. Exit");
            ConsoleKeyInfo UserValue = Console.ReadKey(true);

            while (UserValue.KeyChar != '3')
            {
                UserValue = Console.ReadKey(true);
                switch (UserValue.KeyChar)
                {

                        
                    case '1':
                        Console.WriteLine("Menu 1");
                        
                        break;
                    case '2':
                        Console.WriteLine("Menu 2");
                        
                        break;
                    case '3':
                        Environment.Exit(1);
                        
                        break;

                    default:
                        Console.WriteLine("Invalid selection. Please enter 1, 2, or 3");
                        
                        break;
                }
            }
        }
    }
}
