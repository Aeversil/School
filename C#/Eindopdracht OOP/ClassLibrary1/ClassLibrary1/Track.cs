using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace AudioDevices.Tracks
{

    public struct Time
    {
        public int _seconds, _minutes, _hours;

        public Time(int seconds)
        {
            _seconds = seconds;
            _minutes = 0;
            _hours = 0;
            while (_seconds >= 60)
            {
                _seconds = _seconds - 60;
                _minutes++;
            }
            while (_minutes >= 60)
            {
                _minutes = _minutes - 60;
                _hours++;
            }
        }
        public Time(int minutes, int seconds)
        {
            _seconds = seconds;
            _minutes = minutes;
            _hours = 0;
            while (_seconds >= 60)
            {
                _seconds = _seconds - 60;
                _minutes++;
            }
            while (_minutes >= 60)
            {
                _minutes = _minutes - 60;
                _hours++;
            }
        }
        public Time(int hours, int minutes, int seconds)
        {
            _seconds = seconds;
            _minutes = minutes;
            _hours = hours;
            while (_seconds >= 60)
            {
                _seconds = _seconds - 60;
                _minutes++;
            }
            while (_minutes >= 60)
            {
                _minutes = _minutes - 60;
                _hours++;
            }
        }
        public override String ToString()
        {
            String timestring = _hours.ToString() + ":" + _minutes.ToString() + ":" + _seconds.ToString();
            return timestring;
        }
        public int HOURS
        {
            get { return _hours; }
        }
        public int MINUTES
        {
            get { return _minutes; }
        }
        public int SECONDS
        {
            get { return _seconds; }
        }
    }

    public enum catogorie
    {
        Ambient,
        Blues,
        Country,
        Disco,
        Electro,
        Hardcore,
        HardRock,
        HeavyMetal,
        Hiphop,
        Jazz,
        Jumpstyle,
        Klassiek,
        Latin,
        Other,
        Pop,
        Punk,
        Reggae,
        Rock,
        Soul,
        Trance,
        Techno
    };

    public class Track
    {

        
        private int pID;
        private string pname;
        private string partist;
        private string palbumsource;
        private Time plength;
        private int lengthinminutes;
        private int lengthinseconds;
        public catogorie pstyle;


        // track length in seconds
        public int GetLengthInSeconds()
        {
            lengthinminutes = plength._hours * 60 + plength._minutes;
            lengthinseconds = plength._minutes * 60 + plength._seconds;
            return lengthinseconds;
        }

        //tracks stuff
        public Track()
        {

        }
        public Track(int id)
        {
            pID = id;
        }
        public Track(int id, string name)
        {
            pID = id;
            pname = name;
        }
        public Track(int id, string artist, string name)
        {
            pID = id;
            pname = name;
            partist = artist;
        }


        //getters & setters
        public int ID
        {
            get { return pID; }
            set { pID = value; }
        }
        public string NAME
        {
            get { return pname; }
            set { pname = value; }
        }
        public string ARTIST
        {
            get { return partist; }
            set { partist = value; }
        }
        public string DISPLAYNAME
        {
            get
            {
                if (partist != "" && pname != "")
                {
                    return pname + ", " + partist;
                }
                else
                {
                    return "unknown";
                }
            }
        }
        public Time LENGTH
        {
            set { plength = value; }
        }
        public string DISPLAYLENGTH
        {
            get { return Convert.ToString(plength); }
        }
        public catogorie STYLE
        {
            get { return pstyle; }
            set { pstyle = value; }
        }
        public string ALBUMSOURCE
        {
            get { return palbumsource; }
            set { palbumsource = value; }
        }
    }
}