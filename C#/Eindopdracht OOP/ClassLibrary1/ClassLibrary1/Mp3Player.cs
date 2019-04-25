using AudioDevices.Interfaces;
using AudioDevices.Tracks;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AudioDevices.Devices
{
    public class Mp3Player : AudioDevice, ITrackList, IDisplay
    {
        private TrackList trackList;
        private int mBSize = 0;
        private int displayWidth;
        private int displayHeight;


        public Mp3Player(int serialId)
        {
            SERIALID = serialId;
        }


        public string GetResolutionInfo()
        {
            return string.Format("Resolution: {0} pixels.", TotalPixels);
        }


        public bool HasTracks()
        {
            return trackList.countthatshit > 0;
        }


        public void AddTrackList(TrackList trackList)
        {
            this.trackList = trackList;
        }



        public void RemoveTrackList() 
        {
        this.trackList = new TrackList();
        }

        public override string DisplayStorageCapacity()
        {
            if (mBSize <= 0)
                return "Storage capacity unknown.";
            return string.Format("{0} mB.", mBSize);
        }



        public int MbSize { get { return mBSize; } set { mBSize = value; } }

        public int DisplayWidth { get; set; }

        public int DisplayHeight { get; set; }

        public int TotalPixels { get { return displayHeight * displayWidth; } }

        public TrackList TrackList { get { return trackList; } }
    }
    
}
