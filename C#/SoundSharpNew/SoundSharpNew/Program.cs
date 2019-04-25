using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SoundSharpNew
{
    class Program
    {
        enum login
        {
            OK,
            NietOK,
            Onbekend,
        }

        static void Main(string[] args)
        {
            int PassAttempts = 0;

            bool UValid = false;

            while (UValid == false)
            {
                Console.ForegroundColor = ConsoleColor.Green;
                Console.Write("Username: ");
                string User_in = Console.ReadLine();


                if (User_in == "Dunccan")
                {
                    bool Pvalid = false;

                    while (Pvalid == false)
                    {
                        if (PassAttempts >= 1)
                        {
                            Console.WriteLine("Poging {0} van 3", PassAttempts + 1);
                            if (PassAttempts == 2)
                            {
                                Console.ForegroundColor = ConsoleColor.Red;
                                Console.WriteLine("LET OP: Laatste poging!");
                                Console.ForegroundColor = ConsoleColor.Green;
                            }
                            if (PassAttempts == 3)
                            {
                                Console.WriteLine("Error no attemps left"); //Thread.Sleep(300);
                                Environment.Exit(0);
                            }

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
                    Console.Clear();
                    Console.WriteLine("Welcome to SoundSharp");
                    Console.ReadLine();
                }
                else
                {
                    Console.ForegroundColor = ConsoleColor.Red;
                    Console.WriteLine("You enterd an invalid Username! Please try again.");
                    Console.ForegroundColor = ConsoleColor.Green;
                }
            }
        }
    }
}
