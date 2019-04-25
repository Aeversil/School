using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;

namespace SoundSharp
{

    struct mp3
    {
        public int mp3_id;
        public string mp3_make;
        public string mp3_model;
        public int mp3_storage_capacity;
        public int mp3_price;
    }

    class Program
    {



        static void Main(string[] args)
        {
            int PassAttempts = 0;
            string User = ("Dunccan");
            bool Uvalid = false;
            while (Uvalid == false)
            {
                Console.ForegroundColor = ConsoleColor.Green;
                Console.Write("Username: ");
                string User_in = Console.ReadLine();

                if (User_in == User)
                {
                    Uvalid = true;
                }

                else if (string.IsNullOrWhiteSpace(User_in))
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("You did not enterd a Username!");
                    Console.ForegroundColor = ConsoleColor.Green;
                }


                else
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("You enterd an invalid Username! Please try again.");
                    Console.ForegroundColor = ConsoleColor.Green;
                }
            }


            bool Pvalid = false;

            while (Pvalid == false)
            {
                if (PassAttempts >= 1)
                {
                    if (PassAttempts >= 1 && PassAttempts <= 2)
                        Console.WriteLine("Poging {0} van 3", PassAttempts + 1);
                    if (PassAttempts == 2)
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("LET OP: Laatste poging!");
                        Console.ForegroundColor = ConsoleColor.Green;
                    }
                    if (PassAttempts == 3)
                    {
                        Console.ForegroundColor = ConsoleColor.Red;
                        Console.WriteLine("Error no login attemps left, SHUTTING DOWN!"); Thread.Sleep(3000);
                        Environment.Exit(0);
                    }
                }
                Console.Write("Password: ");
                String Password_in = Console.ReadLine();
                String Password = ("SHARPSOUND");


                if (Password_in == Password)
                {
                    Pvalid = true;
                }

                else if (string.IsNullOrWhiteSpace(Password_in))
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("You did not enterd a Password!");
                    Console.ForegroundColor = ConsoleColor.Green;
                }
                else
                {
                    Console.ForegroundColor = ConsoleColor.Yellow;
                    Console.WriteLine("You enterd an invalid Password! Please try again.");
                    PassAttempts++;
                    Console.ForegroundColor = ConsoleColor.Green;
                }
            }

            Console.Clear();

            // sub menu information ==================================================================================================

            // menu's ================================================================================================================
            string menu = "0";

            while (menu != "9")
            {
                Console.WriteLine("Welcome to SoundSharp {0}", User);
                Console.WriteLine("Please enter the menu number:");
                Console.WriteLine("1. Overzicht mp3 spelers");
                // Console.WriteLine("2. Option");
                // Console.WriteLine("3. Option");
                // Console.WriteLine("4. Option");
                // Console.WriteLine("5. Option");
                // Console.WriteLine("6. Option");
                // Console.WriteLine("7. Option");
                // Console.WriteLine("8. Option");
                Console.WriteLine("9. Exit");


                menu = Console.ReadLine();


                switch (menu)
                {
                    case "1":
                        Console.WriteLine("gekozen actie: 1. Overzicht mp3 spelers");
                        break;
                    //case "2":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    //case "3":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    //case "4":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    //case "5":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    //case "6":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    //case "7":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    //case "8":
                    //    Console.WriteLine("Uitvoer");
                    //    break;
                    case "9":
                        Console.Clear();
                        break;
                    default:
                        Console.Clear();
                        break;
                }
            }
            Console.ReadLine();
        }


    }
}