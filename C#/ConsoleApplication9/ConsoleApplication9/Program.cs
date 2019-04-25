using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication9
{
    class Count
    {
        public static double sum(double add1, double add2)
        {
            double result = add1 + add2;
            return result;
        }
        public static double div(double add1, double add2)
        {
            double result = add1 / add2;
            return result;
        }
        public static double sub(double add1, double add2)
        {
            double result = add1 - add2;
            return result;
        }
        public static double mul(double add1, double add2)
        {
            double result = add1 * add2;
            return result;
        }
    }
        class Program
        {
            static void Main(string[] args)
            {
            bool valid = false;
            bool valid2 = false;
            double number1 = 0;
            double number2 = 0;
                Console.ForegroundColor = ConsoleColor.Green;

                while (valid == false)
                {
                    Console.WriteLine("Please enter the first number");
                    string snumber1 = Console.ReadLine();
                    
                    if (Double.TryParse(snumber1, out number1))
                    {
                        valid = true;
                    }
                    else
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("Invalid. Please enter a number");
                        Console.ForegroundColor = ConsoleColor.Green;
                    }
                }
                while (valid2 == false)
                {
                    Console.WriteLine("Please enter the second number");
                    string snumber2 = Console.ReadLine();
                    
                    if (Double.TryParse(snumber2, out number2))
                    {
                        valid2 = true;
                    }
                    else
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("Invalid. Please enter a number");
                        Console.ForegroundColor = ConsoleColor.Green;
                    }
                }
               
                Count add = new Count();
                double addition = Count.sum(number1, number2);
                double division = Count.div(number1, number2);
                double subtraction = Count.sub(number1, number2);
                double multiplication = Count.mul(number1, number2);
                Console.WriteLine("What do you want to do with the numbers?\n1. Addition & Subtraction\n2. Addition & Multiplication\n3. Addition & Division");

                ConsoleKeyInfo UserValue = new ConsoleKeyInfo();
                UserValue = Console.ReadKey();

              
                   start:
                   switch (UserValue.KeyChar.ToString())
                   {
                           

                       case "1":
                           Console.WriteLine("\nAddition:\t{0} + {1} = {2}", number1, number2, addition);
                           Console.WriteLine("Subtraction:\t{0} - {1} = {2}", number1, number2, subtraction);
                           Console.ReadLine();
                           break;
                       case "2":
                           Console.WriteLine("\nAddition:\t{0} + {1} = {2}", number1, number2, addition);
                           Console.WriteLine("Division:\t{0} * {1} = {2}", number1, number2, multiplication);
                           Console.ReadLine();
                           break;
                       case "3":
                           Console.WriteLine("\nAddition:\t{0} + {1} = {2}", number1, number2, addition);
                           Console.WriteLine("Division:\t{0} / {1} = {2}", number1, number2, division);
                           Console.ReadLine();
                           break;

                       default:
                           Console.ForegroundColor = ConsoleColor.Red;
                           Console.WriteLine("\nInvalid selection. Please enter 1, 2, or 3");
                           Console.ForegroundColor = ConsoleColor.Green;
                           Console.ReadLine();
                           goto start;
                    }
                }


            }
        }
    


