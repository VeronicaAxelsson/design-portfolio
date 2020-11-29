---
Title: Kmom04
Description: Part 4
Template: kmom
---

Kursmoment 4
==================

Den här veckan gjorde vi den första skrivuppgiften. Jag tyckte att den hjälpte en att titta djupare på vad färgval förmedlar och hur färger kan användas, vilket hjälpte när man skulle sätta färg på sin portfolio. Det gav också mycket att kunna diskutera det vi läst om under veckan, då man kunde se om man förstått och även få in andra perspektiv. Det var också kul att göra något i grupp efter att ha suttit och pluggat mycket själv.
<br><br>
Min portfolio hade redan ett blått tema, då jag har en header-bild i blå toner och valt att ta en av de mörkare blå från bilden till footern. Därför utgick jag från denna och såg att om jag använde ett triadiskt färgschema så fick jag en rosa färg som liknar de rosa tonerna i himlen på min header-bild, och dessutom en grön som bröt av snyggt och drog uppmärksamhet till sig. Jag använde den rosa färgen till navbarer, ikoner och liknande element, medan jag var väldigt sparsam med den gröna och använde den mer som en “överraskning”.
<br><br>
Mitt dark theme gjorde jag genom att importera olika variabler beroende på temat. Jag ville behålla färgschemat men dämpa det lite. Jag la en mörk bakgrund, med mörkare färg i footern. För att det rosa och gröna inte skulle bli för skarpt använde jag sass-funktionen desaturate( ), och desaturerade båda färgerna med 20%. I mitt dark theme finns min blå färg endast kvar i header-bilden, men även den dämpade jag. Först använde jag filter på headern, men då påverkades även texten och inte endast header-bilden. Då jag inte listade ut hur jag kunde lösa det med css tog jag istället och ändrade färgen med ett bildbehandlingsprogram. Däremot använde jag filter på bilden på mig på startsidan för att sänka saturationen. När jag jobbade med dark och light theme, använde jag inte bara variabler för färger, vilket jag gjort innan, utan även för annat. Jag insåg att jag kunde lägga min header-bild i en variabel för att smidigt byta den mellan teman, och även värdet för filtret på min bild på start-sidan.
<br><br>
Något jag lärde mig den här veckan, som egentligen är en rätt liten grej, men väldigt användbart är att man kan skriva en färg i hex-form, lagra den i en variabel och sen använda variabeln för att ändra färgens opacitet. Vill man ändra opaciteten kan man bara skriva till exempel rgba($variabeln, 0.5). Som sagt kanske en rätt självklar grej när man väl insett det, men väldigt smidigt och användbart när man vill växla mellan olika teman. Därför är det mitt TIL denna veckan.
