<h1>Code Demo</h1>

This is a sample project that is used to demonstrate the following concepts:

1. Use of Zend Framework
   - Custom Route
   - Bootstrap code to have a singleton db handler
   - Adhere to MVC design pattern

2. Rest API sample which helps lookup of city and state info based on zip, and bank information by routing number

   The code is under application/controllers/AbaController.php for banking info lookup and application/controllers/ZipController.php for city, state
   information lookup.

   It follows most of the API design convention

3. Model implementation of the zip and routing number model with MYSQL backend

   application/models/AbaModel.php
   application/models/ZipModel.php

4. Sample HTML form which uses the Rest API from (2) to help improve user experience. The integration is done via Ajax call with jQuery. jQuery 
   validation is also used to warn user of missing inputs.

**Running the Demo**

To see the Rest API in action, check out the following URL:

http://www.zpane.com/zip/&lt; zip code&gt; , eg: http://www.zpane.com/zip/94086

http://www.zpane.com/aba/&lt; bank routing number&gt; eg: http://www.zpane.com/aba/121042882

To see an example how the API can be used in client code, check out http://www.zpane.com/loan. When user enters the zip code, 
the city and state information will be automatically populated assuming the zip code is correct. Similarly, if the user enters
a valid bank routing number, the bank name will be automatically populated.



