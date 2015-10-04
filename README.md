Freepbx Smarthome Routes Module
===============================

Very simple FreePBX module that creates a MySQL database for names, phone numbers and a third field for destination. Primarily for use in conjunction with inbound routing modules to direct calls based on the result of a MySQL query.

Forked for personal use from:</p>
https://github.com/lgaetz/freepbx-Smarthome_Routes

license terms from page.smarthomeroute.php:

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

Summary of changes from lgaetz/freepbx-Smarthome_Routes:

4th October 2015 - Removed `id` and `name` columns from DB & made `cid` column the primary key
