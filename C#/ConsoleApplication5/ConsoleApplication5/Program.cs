using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication5
{
    class Program
    {
        static void Main(string[] args)
        {
            //string name1 = Console.ReadLine();
            //string name2 = Console.ReadLine();
            //string name3 = Console.ReadLine();
            //string name4 = Console.ReadLine();
            //string name5 = Console.ReadLine();
            string[] name = new string[5];
            Console.WriteLine("Enter 5 names.");
            
            Console.Write("Name 1: ");            
            //Console.WriteLine(name1);
            //Console.ReadLine();
            name[0] = Console.ReadLine();
            Console.Write("Name 2: ");            
            //Console.WriteLine(name2);
            //Console.ReadLine();
            name[1] = Console.ReadLine();
            Console.Write("Name 3: ");
            //Console.WriteLine(name3);
            //Console.ReadLine();
            name[2] = Console.ReadLine();
            Console.Write("Name 4: ");
            //Console.WriteLine(name4);
            //Console.ReadLine();
            name[3] = Console.ReadLine();
            Console.Write("Name 5: ");
            //Console.WriteLine(name5);
            //Console.ReadLine();
            name[4] = Console.ReadLine();


            Console.WriteLine("");
            

            foreach (string element in name)
            {
                Console.WriteLine(element);
            }
            
            Console.ReadLine();
        }
    }
}
