using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using AudioDevices.Tracks;
using AudioDevices.Devices;


namespace Tester
{
    class Program
    {
        static void Main(string[] args)
        {
            //opdracht 1
            //Track t1 = new Track(1, "Nelly Furtado", "Maneater");
            //t1.ALBUMSOURCE = "Loose";
            //t1.LENGTH = new Time(4, 31);
            //t1.STYLE = catogorie.Pop;

            //Console.WriteLine(t1.DISPLAYNAME);
            //Console.WriteLine(t1.DISPLAYLENGTH);
            //Console.WriteLine("Tijd in seconden: {0}", t1.GetLengthInSeconds());
            //Console.WriteLine("Category: {0}", t1.STYLE.ToString());
            //Console.ReadLine();



            //opdracht 2
            //Track t1 = new Track(1, "Prince", "Guitar");
            //t1.LENGTH = new Time(4, 12);

            //Track t2 = new Track(2, "Nelly Furtado", "Say it Right");
            //t2.LENGTH = new Time(4, 41);

            //Track t3 = new Track(3, "David Guetta & Chris Willis", "Love is gone");
            //t3.LENGTH = new Time(3, 50);

            //TrackList trackList = new TrackList();
            //trackList.Addthatshit(t1);
            //trackList.Addthatshit(t2);
            //trackList.Addthatshit(t3);
            //Console.WriteLine("Aantal tracks: {0}", trackList.countthatshit);

            //trackList.Removethatshit(t3);
            //Console.WriteLine("Aantal tracks: {0}", trackList.countthatshit);

            //trackList.Addthatshit(t3);
            //Console.WriteLine("Totale tijd tracklist: {0}", trackList.totaltime);

            //Console.WriteLine();
            //Console.WriteLine("Random lijst:");
            //List<Track> shuffled = trackList.shufflethatshit();
            //foreach (Track t in shuffled)
            //    Console.WriteLine(t.ID + " " + t.DISPLAYNAME);

            //Console.ReadLine(); 



            //opdracht 3?/4
            //MemoRecorder memo = new MemoRecorder(1000);
            //memo.MaxCartridgeType = MaxCartridgeType.C90;
            //memo.MAKE = "Sony";
            //memo.MODEL = "FE190";
            //memo.PRICEEXBTW = 129.95M;
            //memo.CREATIONDATE = DateTime.Now.AddMonths(-6);

            //Console.WriteLine(memo.DisplayIdentity(true, true));
            //Console.WriteLine(memo.DisplayStorageCapacity());
            //Console.WriteLine("Consumer price: {0:f2}", memo.CONSUMERPRICE);
            //Console.WriteLine(memo.GetDeviceLifeTime());
            //Console.ReadLine();



            //opdracht 5 
            //CdDiscMan discman = new CdDiscMan(1000);
            //discman.MAKE = "JVC";
            //discman.MODEL = "HG-410";
            //discman.PRICEEXBTW = 149.00M;
            //discman.DisplayWidth = 320;
            //discman.DisplayHeight = 160;
            //discman.CREATIONDATE = DateTime.Parse("12-2-2006");

            //Console.WriteLine(discman.DisplayIdentity(true, true));
            //Console.WriteLine("Opslag capacity {0}", discman.DisplayStorageCapacity());
            //Console.WriteLine("Display resolution {0} pixels", discman.TotalPixels);
            //Console.WriteLine(discman.GetResolutionInfo());
            //Console.WriteLine("Consumer price: {0:f2}", discman.CONSUMERPRICE);
            //Console.WriteLine(discman.GetDeviceLifeTime());
            //Console.WriteLine("Eject status: {0}", discman.IsEjected);
            //discman.Eject();
            //Console.WriteLine("Eject status: {0}", discman.IsEjected);

            //Console.ReadLine();

            //opdracht 6
            Mp3Player player = new Mp3Player(1000);
            player.MAKE = "Creative";
            player.MODEL = "Alpha";
            player.PRICEEXBTW = 99.00M;
            player.DisplayWidth = 120;
            player.DisplayHeight = 80;
            player.CREATIONDATE = DateTime.Parse("1-1-2007");
            player.MbSize = 1024;

            Track t1 = new Track(1, "Prince", "Guitar");
            t1.LENGTH = new Time(4, 12);

            Track t2 = new Track(2, "Nelly Furtado", "Say it Right");
            t2.LENGTH = new Time(4, 41);

            Track t3 = new Track(3, "David Guetta & Chris Willis", "Love is gone");
            t3.LENGTH = new Time(3, 50);

            TrackList trackList = new TrackList();
            trackList.Addthatshit(t1);
            trackList.Addthatshit(t2);
            trackList.Addthatshit(t3);

            player.AddTrackList(trackList);

            Console.WriteLine(player.DisplayIdentity(true, true));
            Console.WriteLine("Capacity {0}", player.DisplayStorageCapacity());
            Console.WriteLine("Display resolution {0} pixels", player.TotalPixels);
            Console.WriteLine("Consumer price: {0:f2}", player.CONSUMERPRICE);
            Console.WriteLine(player.GetDeviceLifeTime());

            if (player.HasTracks())
            {
                Console.WriteLine("The TrackList of this player has {0} tracks", player.TrackList.countthatshit);

                player.TrackList.getthatshit();

                player.RemoveTrackList();
                Console.WriteLine("The TrackList of this player has now {0} tracks", player.TrackList.countthatshit);
            }
            Console.ReadLine();


        }
    }
}
