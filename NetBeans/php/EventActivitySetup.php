<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>CYL: Event Activity Setup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/EventActivitySetup.css">
        <script src ="../js/michaelscripts"></script>
       <!--  <!--cdn for modernizr, if you haven't included it already 
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
         <!--polyfiller file to detect and load polyfills
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
        <script>
        webshims.setOptions('waitReady', false);
        webshims.setOptions('forms-ext', {types: 'date'});
        webshims.polyfill('forms forms-ext');
        </script> -->
    </head>
    <body>
        <?php
        // put your code here
        include"../header.html";
        ?>
        <main>
            <h2>Create New Event</h2>
            <form method="post" action="ProcessEventActivitySetup.php">
                New Event: <input type="text" name="event_name" required> <br/>
                Type: <select name="event_type" required>
                    <option></option>
                    <option value="cyl">CYL</option>
                    <option value="leader">Leader</option>
                    <option value="individual">Individual</option>
                </select> <br/>
                Start Date: <input type="date" name="start_date" required>
                Start Time: <input type="time" name="start_time"> <br/>
                End Date: <input type="date" name="end_date">
                End Time: <input type="time" name="end_time"> <br/>
                Organizer: <input type="text" name="organizer"> <br/>
                Location: <input type="text" name="location"> <br/>
                Address: <input type="text" name="address"> <br/>
                City: <input type="text" name="city"> <br/>
                State: <input type="text" name="state"> <br/>
                Zip Code: <input type="text" name="zip_code"> <br/>
                Partner Organization: <input type="text" name="partner_organization"> <br/>
                CYL Volunteers Needed: <input type="text" name="cyl_volunteers_needed"> <br/>
                Description: <br> (500 characters) <textarea rows="3" cols="50" name="description"></textarea>
                <input type="submit" value="Submit">
            </form>
        <button type="button">Submit</button>
        <button type="button">Refresh</button>
        <button type="button">Save</button>
        </main>
        <?php
        include"../EventActivityAside.html";
        include"../footer.html";
        
        ?>
    </body>
</html>
