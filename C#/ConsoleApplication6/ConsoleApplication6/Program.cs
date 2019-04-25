using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication6
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] nummer = new int[6];
            //inlezen/vullen array nummer 
            for (int i = 1; i < nummer.Length; i++)
            {
                string input;
                int iResult;

                Console.Write("nummer {0}: ", i);
                input = Console.ReadLine();

                bool isNumeric = int.TryParse(input, out iResult);
                if (isNumeric == true)
                {
                    nummer[i] = iResult;
                }
                else
                {
                    Console.WriteLine("error");
                    i--;
                }
            }

            //uitlezen van array nummer
            for (int i = 1; i < nummer.Length; i++)
            {
                Console.WriteLine("[" + i + ".] " + nummer[i]);
            }
            Console.ReadLine();
        }
    }
}

