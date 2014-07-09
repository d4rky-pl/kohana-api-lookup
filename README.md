**THIS PROJECT IS NO LONGER MAINTAINED AS I HAVE SWITCHED TO RUBY ON RAILS.**

**OH, AND PLEASE STOP SENDING ME PHP JOB OFFERS, I'M NOT INTERESTED IN COMING BACK.**

---

Kohana 3.x API Lookup
=====================
This website has been created to simplify using Kohana's API docs which are the main source of programming knowledge for this fine framework.

[You can try it out online.](http://kohana.nerdblog.pl/api/)

Deployment instructions
-----------------------

    git clone https://github.com/d4rky-pl/kohana-api-lookup.git api
    cd api
    git submodule init
    git submodules sync
    cd modules/haml
    git submodule init
    git submodules sync

Then update your configuration accordingly. Database schema is in database-schema.sql.

TODO
----

- Create a module out of this code
- Create separate service using the module
- Support for Kohana 3.0 - 3.2 Userguide in service
