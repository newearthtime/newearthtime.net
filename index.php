<?
    ////////////////////////////////////////////////////
    // Initialise NET clock variables
    ////////////////////////////////////////////////////
    //TODO: verify arithmetic
    // Get UTC date object
    $nowUTC = new DateTime('NOW', new DateTimeZone('UTC'));
    // Calculate NET time component
    $nowUTCHours = $nowUTC->format('G');
    $nowUTCSeconds = $nowUTC->format('s');
    $nowUTCMinutes =  $nowUTC->format('i');
    $nowNETDegrees = ($nowUTCHours * 60 / 4) + floor($nowUTCMinutes / 4);
    $nowNETMinutes =  (($nowUTCMinutes % 4) * 60 / 4) + floor($nowUTCSeconds / 4);
    $nowNETMinutes = str_pad($nowNETMinutes, 2, '0', STR_PAD_LEFT);
    $nowNETTime = $nowNETDegrees . '°' . ' ' . $nowNETMinutes . '\'' . ' ' . 'NET';
    // Calculate NET date component
    $nowNETDay = $nowUTC->format('j');
    $nowNETMonth = $nowUTC->format('F');
    $nowNETYear = $nowUTC->format('Y');
    $nowNETDate = $nowNETDay . ' ' . $nowNETMonth . ' ' . $nowNETYear;
    ////////////////////////////////////////////////////
?>
<!doctype html>
<html>
    <head>
        <script>var clicky_site_ids = clicky_site_ids || []; clicky_site_ids.push(101315492);</script>
        <script async src="//static.getclicky.com/js"></script>

        <meta charset="utf-8">
        <title>New Earth Time - 360 degrees of time</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- note 1 -->
        <title>New Earth Time</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/css/balloon.min.css">
    </head>
<body>
    <header class="net-header">
    </header>
    <div class="net-splash-container">
        <div class="net-splash">
            <h1 class="net-splash-head">
                New Earth Time
            </h1>
            <div class="net-splash-clock">
                <div class="net-clock net-clock-time"><span id="net-clock-time">
                        <?= $nowNETTime ?>
                    </span></div>
                <div class="net-clock net-clock-date"><span id="net-clock-date">
                        <?= $nowNETDate ?>
                    </span></div>
            </div>
            <p class="net-splash-subhead">
                Earth is a place. This place needs a common language of time.
            </p>
            <p class="net-splash-subhead">
                New Earth Time, or NET, is a proposed global time standard which measures the global day in 360 degrees of
                time. </p>
            <p class="net-splash-subhead">
                NET is simple. It takes Universal Time (UTC) and displays it as degrees of time. Local and global time use different measures so confusion is minimised.</p>
            <p class="net-splash-subhead">
                NET runs alongside your local time. You can act locally in your time and globally in New Earth Time.
            </p>
        </div>
    </div>
    <footer class="net-footer">
        <div class="net-footer-mappin">
            <button class="net-footer-mappin-button" data-balloon-length="medium" aria-label="Sunrise shadows over the Philippine Sea. Courtesy NASA." data-balloon-pos="left">    
                <svg class="net-footer-mappin-button" height="16" width="16" viewBox="0 0 12 12">
                    <path d="M0 0h12v12h-12z" fill="none"></path>
                    <path d="M6.5 3a1.5 1.5 0 1 0 1.5 1.5 1.5 1.5 0 0 0-1.5-1.5zm0-3a4.5 4.5 0 0 0-4.5 4.5 5.607 5.607 0 0 0 .087.873c.453 2.892 2.951 5.579 3.706 6.334a1 1 0 0 0 1.414 0c.755-.755 3.253-3.442 3.706-6.334a5.549 5.549 0 0 0 .087-.873 4.5 4.5 0 0 0-4.5-4.5zm3.425 5.218c-.36 2.296-2.293 4.65-3.425 5.782-1.131-1.132-3.065-3.486-3.425-5.782a4.694 4.694 0 0 1-.075-.718 3.5 3.5 0 0 1 7 0 4.634 4.634 0 0 1-.075.718z"></path>
                </svg>
            </button>
        </div>
        <div class="net-footer-left">
            <p class="net-footer-copyrightlicense">&#169; 1999-2021 Mark Laugesen. You may freely use, copy, and distribute New Earth Time.</p>
        </div>
        <div class="net-footer-center">
        <p class="net-footer-email"><script type="text/javascript" language="javascript">
<!--
// Email obfuscator script 2.1 by Tim Williams, University of Arizona
// Random encryption key feature coded by Andrew Moulden
// This code is freeware provided these four comment lines remain intact
// A wizard to generate this code is at http://www.jottings.com/obfuscator/
{ coded = "0Y4H@Ya6awjqPq0Ga.Yaq"
  key = "9ShTzgOGFQnrusoE0cwXfJ1PpdCx5WyYjLZHbVe6t4A27ID8m3UMvkBNRilaKq"
  shift=coded.length
  link=""
  for (i=0; i<coded.length; i++) {
    if (key.indexOf(coded.charAt(i))==-1) {
      ltr = coded.charAt(i)
      link += (ltr)
    }
    else {     
      ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
      link += (key.charAt(ltr))
    }
  }
document.write("<a href='mailto:"+link+"?subject=NET Contact' class='net-footer-contact-link'>email</a>")
}
//-->
</script></p>
        </div>
    </footer>
    <script type="text/javascript" language="javascript">
        ////////////////////////////////////////////////////
        // The running NET Clock
        ////////////////////////////////////////////////////
        function setNETClock() {
            var now = new Date();

            var netDegrees = (now.getUTCHours() * 60 / 4) + Math.floor(now.getUTCMinutes() / 4);
            var netDegreesDisplay = new String(netDegrees).padStart(3, " ");

            var netMinutes = ((now.getUTCMinutes() % 4) * 60 / 4) + Math.floor(now.getUTCSeconds() / 4);
            var netMinutesDisplay = new String(netMinutes).padStart(2, "0");

            var netDay = now.getUTCDate();
            var netDayDisplay = new String(netDay).padStart(2, " ");

            var monthArray = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            var netMonth = monthArray[now.getUTCMonth()];
            
            var netYear = now.getUTCFullYear();

            var netTime = netDegreesDisplay + "&deg; " + netMinutesDisplay + "&#039; NET";
            var netDate = netDayDisplay + " " + netMonth + " " + netYear;

            document.getElementById("net-clock-time").innerHTML = netTime;
            document.getElementById("net-clock-date").innerHTML = netDate;
        }
        setInterval("setNETClock()", 1000);
    </script>
</body>
</html>
