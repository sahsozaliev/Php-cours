SELECT * 
FROM country 
WHERE 
  (Continent = "South America"
OR 
   Continent = "Asia")
AND
 (SurfaceArea < 13000);