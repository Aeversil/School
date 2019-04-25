using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using AudioDevices.Devices;

namespace AudioDevices.Devices
{
    public enum MaxCartridgeType
    {
        C60,
        C90,
        C120,
        Unknown
    };
    public class MemoRecorder : AudioDevice
    {
        public MaxCartridgeType MaxCartridgeType { get; set; }
        
        public MemoRecorder(int serialId)
        {
            SERIALID = serialId;
            //MaxCartridgeType = type;
        }
        public override string DisplayStorageCapacity()
        {
            switch (MaxCartridgeType)
            {
                case MaxCartridgeType.C120:
                    {
                        return "Max capacity 60 min.";
                    }
                case MaxCartridgeType.C90:
                    {
                        return "Max capacity 90 min.";
                    }

                case MaxCartridgeType.C60:
                    {
                        return "Max capacity 120 min.";
                    }
                case MaxCartridgeType.Unknown:
                    {
                        return "Max capacity unknown";
                    }
                default:
                    {
                        return "unknown";
                    }
            }
        }
    }
}
