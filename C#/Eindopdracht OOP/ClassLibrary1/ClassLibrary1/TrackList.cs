using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;


namespace  AudioDevices.Tracks
{
    public class TrackList
    {

        private List<Track> tracks = new List<Track>();

        public TrackList() { }
        public TrackList(List<Track> tracks) { }

        public void Addthatshit(Track t)
        {
            tracks.Add(t);
        }
        public void Removethatshit(Track t) 
        {
            tracks.Remove(t);
        }
        public void clearthatshit()
        {
            tracks.Clear();
        }
        public void getthatshit()
        {
            for (int i = 0; i < tracks.Count; i++)
            {
                Console.WriteLine(tracks[i].DISPLAYNAME);
            }
        }
        public List<Track> shufflethatshit()
        {
            var stuff = new Random();
            var shuffled = tracks.OrderBy(a => stuff.Next());
            List<Track> shuffle = shuffled.ToList();
            return shuffle;
        }
        public int countthatshit
        {
            get { return tracks.Count(); }
        }
        public Time totaltime
        {
            get {
                int totsec = 0;
                foreach(Track t in tracks)
                {
                    totsec += t.GetLengthInSeconds();
                }
                return new Time(totsec);
            }
        }
    }
}
