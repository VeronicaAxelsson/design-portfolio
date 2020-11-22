---
Title: Kmom03
Description: Part 3
Template: kmom
---

Kursmoment 3
==================

Det gick bra att jobba med css-grid och flexbox under kursmomentet. Jag har försökt mig på det innan, då jag verkligen tyckt det var svårt med placering av element på en sida, men aldrig riktigt förstått hur det funkar. Det har varit en hel del att ta in, men jag tycker att jag har förstått grunderna. Dock är det något förvirrande att det finns så många olika sätt att skriva på för att nå samma resultat, speciellt i grid.
<br><br>
Jag har delat in min SASS-kod i flera olika moduler. Footer, header, layout, nav, variables, typography, report, start och kmom.
<br><br>
Efter att jag använde css-grid för att göra om layouten för report, gjorde jag också om delar av sidans resterande layout. Jag har delat in sidans grund-layout i ett 3x3-grid, där mittersta kolumnen tar upp 3fr medan de två på sidorna tar upp 1fr. I den mittersta ligger min main, och i den vänstra placeras exempelvis sidomenyn för de olika kursmomenten. På så sätt kan innehållet i main delas in i tre kolumner som blir lika stora som de på sidorna om main. Jag tänkte att det var bra för exempelvis startsidan där bilden nu tar upp en tredjedel och texten två tredjedelar, och även för report där man ju skulle ha tre kolumner för länkarna.
<br><br>
Jag har också ändrat en hel del på min style, då jag inte var helt nöjd. Jag har tagit bort flash-bilden, ändrat header-bild och färgskala på sidan. I headern la jag också till logga. Jag bestämde mig också för att ändra font, då jag ville göra sidan något mer stilren.
<br><br>
För att lösa sidomenyn till report använde jag mig av informationen på docs-sidan. Vid första anblick tyckte jag att texten såg väldigt svårläst ut, men ganska snabbt lärde jag mig navigera och lyckades lösa sidomenyn med hjälp av innehållet. Det gav mig samtidigt mer insikt i hur en del av koden i index.twig som jag tidigare inte förstått fungerar. Så att och hur man kan använda sig av informationen i docs är mitt TIL för den här veckan.
