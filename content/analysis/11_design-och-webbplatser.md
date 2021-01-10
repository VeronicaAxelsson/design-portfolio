---
Title: Analys 11
Description: Part 5
Template: analysis
---

Analys av laddningstid och användbarhet
=======================

Rapporten undersöker laddningstiden för den webbplats jag skapat under projektet i kursen Teknisk Webbdesign och Användbarhet, och eventuella förbättringar som kan sänka laddningstiden och öka användbarheten.

Urval
-----------------------

Denna rapport undersöker mitt huvudtema skapat för projektet i kursen Teknisk Webbdesign och Användbarhet.

![Dj Skullxx](%base_url%/image/djskullxx.jpg){.load-image}

Metod
-----------------------

PageSpeed användes för att ge prestanda-poäng och förslag på hur laddningstiden kan förbättras. Devtools Network användes för att mäta sidans laddningstid, antal resurser som laddas och sidans totala storlek. Respektive mätning med Devtools gjordes 3 gånger för att beräkna ett medelvärde.

Samtliga mätningar gjordes för varje undersida: home, about, music och tour.

Resultat
-----------------------

Resultatet från mätningarna med Network och PageSpeed Insight finns [**här.**](https://docs.google.com/spreadsheets/d/1Hldbpyr5G7jk1pKIRpXJ1EOkbJ5KU06bsZDbmUwP0_I/edit?usp=sharing)

Här nedan beskrivs de förbättringar som föreslogs i PageSpeed Insight.

**Home**

Dator

- Ta bort resurser som blockerar rendering.

Mobil

- Ta bort resurser som blockerar rendering.
- Ta bort oanvänd css.
- Skicka bilder i modernare bildformat.

**About**

Dator

- Ta bort resurser som blockerar rendering.

Mobil

- Ta bort resurser som blockerar rendering.
- Läs in viktiga resurser i förväg
- Ta bort oanvänd css
- Skicka bilder i modernare bildformat

**Music**

Dator

- Ta bort resurser som blockerar rendering.

Mobil

- Ta bort resurser som blockerar rendering.
- Läs in viktiga resurser i förväg
- Ta bort oanvänd css


**Tour**

Dator

- Ta bort resurser som blockerar rendering.

Mobil

- Ta bort resurser som blockerar rendering.
- Läs in viktiga resurser i förväg
- Ta bort oanvänd css
- Skicka bilder i modernare bildformat

Den största tidsbesparingen webbplatsen kan göra är genom att ta bort resurser som blockerar rendering, vilket uppskattningsvis hade sparat mellan en halv till nästan två sekunder på respektive undersida.

Analys
-----------------------

Samtliga undersidor hade liknande prestanda-poäng, varav home hade högst sammanlagda poäng då den fick högst poäng på mobil.
Det som skilde denna sida från resterande undersidor var att den inte fick “Läs in viktiga resurser i förväg” som förbättringsåtgärde.

Alla undersidor fick endast ett förbättringsåtgärde för sidorna på datorn, detta var “Ta bort resurser som blockerar renderingen”. Detta förslag hade även alla sidor på mobil och det var det med högst uppskattad tidsbesparing.

Bland förbättringsåtgärden för sidorna på mobil fick även 4/4 “Ta bort oanvänd CSS” och 3/4 “skicka bilder i modernare bildformat”.

Det allra vanligaste förbättringsåtgärdet var alltså “Ta bort resurser som blockerar renderingen” och därefter “Ta bort oanvänd CSS” med “skicka bilder i modernare bildformat” och “Läs in viktiga resurser i förväg” på delad tredjeplats.

Gällande resultaten från Devtools Network hade home flest resurser och högst laddningstid, medan tour var störst. Skillnaden mellan de olika undersidorna var dock ytterst liten.  

I analys 2 skrev min grupp att gränsen för den absoluta laddningstiden enligt oss var 10 sekunder. Detta håller jag fortfarande med om. Samtliga undersidor klarade detta med stor marginal. När jag använder sidan upplever jag också att den är snabb, det tar dock ibland någon sekund innan hero-bilderna laddar in, framför allt på mobilen. Det är tillräckligt för att man ska lägga märke till det, men det är inget som jag anser stör upplevelsen.

Referenser
-----------------------

PageSpeed Insight: https://developers.google.com/speed/pagespeed/insights/?hl=sv

Övrigt
-----------------------

Rapporten är skriven av Veronica Axelsson.
