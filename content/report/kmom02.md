---
Title: Kmom02
Description: Part 2
---

Kursmoment 2
==================

Än så länge tycker jag om att arbeta med SASS. Jag uppskattar framför allt att man kan använda numeriska operatorer för att räkna direkt i koden, och även nesting då jag tycker att det gör koden tydligare. Det blir lättare att se vilka element som hör till var.

Jag har aldrig använt node, npm eller npm scripts tidigare, men än så länge tycker jag även det fungerat bra. Det gick smidigt att installera paketen, och det gick också bra att kompilera SASS till CSS. Det tog såklart ett tag att vänja sig vid att köra "npm run style" eller "npm run watch", men efter ett tag tänkte man knappt på det.  

Jag skulle beskriva mitt tema som “tidig vår i bergen”. Jag hade inte så mycket planer då jag började med designen, utan det föll på plats under arbetets gång. En av de första sakerna jag gjorde var att bestämma vilken bild på mig jag skulle använda. Då jag är vinterklädd på bilden, ville jag ha något som passade till detta och kom på idén med berg. Dock ville jag inte göra sidan för kall så jag valde att ha en flash-bild med en del grönt i och även göra en grön footer. Från början hade jag endast flash-bilden och nav-baren, men det såg rätt tomt ut. Därför lade jag till en bild bakom nav-baren med ganska låg opacitet för att den inte skulle ta över för mycket.

Det tog rätt lång tid att få bilden på rätt plats. Jag började med att lägga den som background-img i headern, men lyckades inte lösa så att endast bakgrundsbilden fick lägre opacitet. Det slutade med att jag placerade nav-baren över den med hjälp av position: absolute. Detta är något jag inte förstått så bra innan, men nu när jag använde det här och dessutom arbetat med det i JavaScripts-kursen, så känner jag att jag har fått mer förståelse. Därför är det mitt TIL denna veckan.

Min kod delade jag upp i ett par moduler. Layout, content, header, footer, nav, typography och variables. Jag har dock funderat på att placera header och nav tillsammans, då en del kod i dessa hänger ihop och det blev en del hoppande mellan filerna. Samtidigt kan det vara praktiskt att kunna jobba med dem sida vid sida.
