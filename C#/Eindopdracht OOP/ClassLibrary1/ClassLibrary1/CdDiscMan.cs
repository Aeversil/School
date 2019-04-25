using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using AudioDevices.Interfaces;

namespace AudioDevices.Devices
{
    public class CdDiscMan : AudioDevice, IDisplay
    {
        private readonly int mBSize = 700;
        private int displayWidth = 0;
        private int displayHeight = 0;
        private bool isEjected = false;



        #region Functions
        public CdDiscMan(int serialId)
        {
            base.SERIALID = serialId;
        }


        public string GetResolutionInfo()
        {
            return string.Format("Resolution: {0} pixels.", TotalPixels);
        }


        public override string DisplayStorageCapacity()
        {
            return string.Format("{0} mB.", mBSize);
        }


        public void Eject()
        {
            isEjected = !isEjected;
        } 
        #endregion


        public int MbSize { get { return mBSize; } }

        public int DisplayWidth { get; set; }

        public int DisplayHeight { get; set; }

        public int TotalPixels { get { return displayHeight * displayWidth; } }

        public bool IsEjected { get { return isEjected; } }

    }
}
