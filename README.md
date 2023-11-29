 ### XR Manager

 retrieve exchange rate data from HMRC xml feed  - example url
    
    http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-1023.XML

Mini Data Manager
  bring a simple feed of data in, log it, and have a means to view and query it.
 
 - Setup a process to interegate HMRC's Exchange Rate data ( http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-0123.XML for January, http://www.hmrc.gov.uk/softwaredevelopers/rates/exrates-monthly-0223.XML for Feb etc)
 - 
 - Show structure to store the information provided in the database using migrations
 - Load the monthly history into the table(s)
 - Set up a simple logged in area to access and view the data that has been loaded in
  - Filterable by country
  - Filter validation
 - Allow the user to perform a conversion, from source value to the exchange rate