using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SoudSharp_Test
{
    class Program
    {
        enum login
        {
            OK,
            NietOK,
            Onbekend,
        }
        public static void Login(string username = "", string password = "")
        {
            string strInput = "";

            if (string.IsNullOrWhiteSpace(username))
                Console.Write("Enter username: ");


            login loginStatus = login.Onbekend;

        }
        static void Main(string[] args)
        {
        }
    }
}
