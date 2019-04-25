using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Chapter2_6
{
    class Program
    {
        static void Main(string[] args)
        {
            int bday;
            Console.WriteLine("Please enter your year of birth:");
            bday = int.Parse(Console.ReadLine());
            DateTime today = DateTime.Today;
            int age = today.Year - bday;
            Console.WriteLine("Your age is: {0}.",age);
            Console.ReadLine();
        }
    }
}
