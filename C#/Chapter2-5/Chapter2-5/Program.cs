using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Chapter2_5
{
    class Program
    {
        static void Main(string[] args)
        {
            double Width, Height;
            double Area;
            Console.WriteLine("Please Enter the width:");
            Height = Convert.ToDouble(Console.ReadLine());
            Console.WriteLine("Please Enter the hight:");
            Width = Convert.ToDouble(Console.ReadLine());
            Area = Height * Width;
            Console.WriteLine("The area of rectangle is {0}cm",Area);
            Console.ReadLine();
        }
    }
}
