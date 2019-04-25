using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication11
{
    class Customers
    {
        private int id { get; set; }
        private string name;
        private int telephone;

        public static List<Customers> Initialize()
        {
            //de lijst van customers
            return new List<Customers>
            {
                new Customers { id = 1, name = "Merry" , telephone = 612345678},
                new Customers { id = 2, name = "John", telephone = 612345677},
                new Customers { id = 3, name = "Tim", telephone = 612345666},
                new Customers { id = 4, name = "Matt", telephone = 612345555},
                new Customers { id = 5, name = "Jeff", telephone = 612344444}
            };
        }

        public static void Write()
        {
            //intialiseer de customers vanuit de lijst.
            var customers = Customers.Initialize();

            //print voor elke customer in de lijst de gegevens.
            foreach (Customers customer in customers)
            {
                Console.WriteLine("ID:{0} Name:{1} Telephone:{2}",
                    customer.id,
                    customer.name,
                    customer.telephone);
            }
        }
    }
}