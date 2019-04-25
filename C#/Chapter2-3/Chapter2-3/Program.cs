using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Chapter2_3
{
    class Program
    {
        static void Main(string[] args)
        {
            int x = 6;
            string y = "2";

            string result1 = x.ToString() + y;
            int result2 = x + int.Parse(y);

            Console.WriteLine(result1);
            Console.WriteLine(result2);
            Console.WriteLine("Uitleg >\nOmdat je bij de eerste lijn een string gebruikt wordt het achter elkaar gezet.\nBij de tweede lijn gebruik je een int dat wordt opgetelt.");
            Console.ReadLine();
        }
    }
}
