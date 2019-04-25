using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Opdracht_8
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("what is my lucky word?");
            string invoer;
            invoer = Console.ReadLine();
            string word = "lucky";

            string result = (invoer == word) ? "You typed {0} and you are... Correct!" : "You typed {0} and you are... Wrong!";
            Console.WriteLine(result, invoer.ToUpper());
            Console.ReadLine();
        }
    }
}
