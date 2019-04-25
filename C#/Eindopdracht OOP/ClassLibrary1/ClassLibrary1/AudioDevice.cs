using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AudioDevices.Devices
{
    public abstract class AudioDevice
    {

        public abstract string DisplayStorageCapacity();

        private int serialId;
        private string model;
        private string make;
        private decimal priceExBtw;
        private DateTime creationDate;
        protected readonly static double btwPercentage = 19.0;


        
        public string DisplayIdentity()
        {
            return string.Format("serial: {0}", serialId);
        }
        public string DisplayIdentity(bool modelinfo, bool makeinfo)
        {
            string stuff = string.Format("Serial: {0}\n", serialId);
            if (modelinfo)
                stuff += string.Format("Model: {0}\n", model);
            if (makeinfo)
                stuff += string.Format("Make: {0}\n", make);
            return stuff;
        }



        public string GetDeviceLifeTime()
        {
            if (creationDate != null)
                return "lifetime unknown";

            return string.Format("Lifetime: {0} days", DateTime.Today.Subtract(creationDate).TotalDays);
        }




        public int SERIALID
        {
            get { return serialId; }
            set { serialId = value; }
        }
        public string MODEL
        {
            get { return model; }
            set { model = value; }
        }
        public string MAKE
        {
            get { return make; }
            set { make = value; }
        }
        public decimal PRICEEXBTW
        {
            get { return priceExBtw; }
            set { priceExBtw = value; }
        }
        public decimal CONSUMERPRICE
        {
            get { return priceExBtw *Convert.ToDecimal(((100 + btwPercentage)/100));}
        }
        public DateTime CREATIONDATE
        {
            get { return creationDate; }
            set { creationDate = value; }
        }
    } 
}
