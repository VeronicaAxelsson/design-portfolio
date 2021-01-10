---
Title: Kmom10
Description: Part 10
Template: kmom
---

Kursmoment 10
==================

**1.1**
----

**Uppdrag 1**
-----------
Jag började med att göra en ny installation från example/portfolio för att börja med projektet, dels för att jag ville repetera installationsprocessen, och dels för att jag inte ville fastna i min gamla design. Det andra jag gjorde var att börja leta inspiration på pexels och unsplash för att se om jag kunde hitta bra bilder till något av de tre uppdragen. Jag hittade ganska snabbt flera bilder på personer med en led-mask från the purge, och insåg att jag kunde använda dessa för att skapa en dj-persona. Jag använde en av dessa bilder för att klippa ut endast masken för att kunna använda den som logga och favicon. Från början planerade jag att använda samma hero-bild på alla sidor, men under designprocessen insåg jag att det inte fungerade. På första-sidan ville jag ha en bild som representerade artisten, sedan valde jag att skapa två highlight-sidor, en för turnéer och en för hans musik. På turné-sidan ville jag ha en bild på en konsert, medan det inte passade med hero-bild på musiksidan då innehållet på den sidan till största del är bilder på album.

När jag skulle anpassa album-bildernas storlek valde jag att använda samma breaking-points som Bootstrap, då det rekommenderades i flera artiklar och det är delvis samma som vi använt i kursen. Bilderna och breaking points är satta i <picture>-elementet med <source>-element med srcset och media. Loggan och bilden på albumet som finns på min startsida har en konstant storlek, och blev något suddiga på mobilen, så jag satte in en srcset för att öka deras storlek på enheter med högre upplösning.

I footern la jag länkar till sociala medier och musiktjänster, och anmälan till nyhetsbrev .

**Uppdrag 2**
-----------
Jag utgick från bilderna på Dj Skullxx när jag skapade temat. Den blå färgen utgår från hans mask och den orangea är komplementfärg till det blå, och ger dessutom energi till sidan. Bilderna innehåller även mycket svart, och jag har därför använt en del svart. Det passar bra ihop med den hemliga personan och house-musiken, vilket jag kopplar till nattklubbar.

Jag valde att dela upp min SASS-kod i fler moduler, en för varje enskild undersida, footer, header, variabler, typografi, navigering, sidans grund-layout, en modul för font-awsome och normalizer, en för mixins och så en modul som sammanställer de övriga. I variabel-modulen ligger variabler för det olika färger som används på sidan. I typografi-modulen importeras typsnitten, och här sätts också grund-storlek för font och radavstånd.

Färg är ett viktigt designelement i designen, det skapar kontraster mellan det mörka och färgrika, men binder också ihop hela webbplatsen. Jag har även använt former för att skapa enhetlighet, då jag använde mycket fyrkantiga avgränsningar utan rundade hörn eftersom jag tycker att skarpa kanter passar bra ihop med den “hårda” house-musiken. Jag har också tänkt på att skapa balans med placeringen och bilder och text, och även mellan djupet i bilderna och resterande innehåll som har en tvådimensionell layout.
Jag ville ha moderna och ungdomliga typsnitt, och valde därför sans-serif. För rubrikerna använder jag Russo One, som ger mig en svag association till graffiti och som brödtext valde jag Roboto Condensed. Det är en ren och enkel sans-serif, som jag tyckte komplementerande de tjocka rubrikerna.

**Uppdrag 3**
-----------
Sidans grundstruktur består av ett grid där header, main och footer är i varsin rad. Strukturen av innehållet i main varierar mellan sidorna för att responsiviteten ska fungera på bästa sätt. På start-sidan, about-sidan och turné-sidan använder jag flexbox, på musiksidan använder jag grid, då jag ville ha mer kontroll över bildernas placering. Jag använder också flexbox i element på undersidorna, exempelvis längst ner på start-sidan, där det nya albumet visas. Jag har satsat mycket på att inte behöva ändra på elementen för mycket för att de ska fungera på mindre enheter, utan lagt fokus på hur elementen placeras. Den största förändringen sker i about-sektionen på startsidan där texten flyter över bilden när skärmbredden minskas och då blir vit med grå bakgrund för att synas ordentligt. Bilderna är anpassade enligt beskrivning i uppdrag 1.

Gällande tillgänglighet var det jag behövde ändra på kontrasten för texten i om-rutan och den lysande texten på start-sidan. Jag ändrade färgen på texten i om-rutan till svart då bredden är över 767px, för att skapa större kontrast till det gula. Den lysande texten var lite knepigare, eftersom jag ville att den skulle matcha omslaget. Där fick jag istället göra den blå bakgrundsfärgen lite mörkare, vilket faktiskt gav mig en bättre blå färg än jag haft innan.  
Tittar man på färgerna i Toptal, fungerar de bra. Den blå färgen blir som mest lite mer åt det lila hållet, vilket fungerar bra med det orangea som blir något mer gult då dessa är komplementfärger. Vid blå-gul färgblindhet ändras dock det orangea till rosa, det skapar en något annorlunda känsla, men rosa är fortfarande en livfull färg och den fungerar bra med blått då det skapar ett analogt färgschema.

**Uppdrag 4**
-----------
För att kunna ändra markant på temat gjorde jag en kopia på alla SASS-moduler utom common och importera dessa i en egen second-style.scss. Jag lade även in några element i mina twig-filer som antingen med hjälp av if-satser visas i ena eller andra temat, exempelvis about-bilden i andra temat, eller döljs med display: none. Jag valde en switch-on/switch-off knapp som ikon för att byta tema, vilken jag fixerade i det nedre vänstra hörnet. Den största skillnad i responsivitet är att jag använt flex-box istället för grid på music-sidan, då jag inte ville att albumen skulle ligga på rad denna gången. Eftersom jag använder flex-box på resterande sidor blir det mer konsekvent om jag även gör det på denna sida. För att styra temat åt ett annat håll än huvudtemat letade jag bland annat reda på en serif-font och en “handskriven” smalare font, jag bytte färgtemat till monokromt och drog ner på användandet av färger, ändrade på presentationen av albumen och ändrade i footern. Det som gjorde störst skillnad var att jag satte en fixerad bakgrundsbild, vilket gör att texten flyter över bilden istället för att den sitter fast på bakgrunden. Kundens profil är utöver hans musik tätt knuten till hans utseende, hans signalement, och därför har jag i båda mina teman utgått från det när jag satt färgschemat och temat.   


**Uppdrag 5**
-----------
För analys av aktuell webbplatsdesign valde jag att titta på fem artisters sidor. Jag bestämde mig för att det skulle vara Dj:s då det är vad mitt eget projekt är, och jag tyckte det var intressant att se vilka trender som är vanliga bland dessa webbplatser. Jag valde från en topplista med Dj:s för att jag inte skulle välja samma som jag tittat på när jag letat inspiration. Vilka designprinciper och element jag skulle titta på valde jag utifrån tre saker jag anser gör ett stort intryck, färg, font och första intryck. Det är också saker som man lätt kan jämföra mellan olika webbplatser. Sedan gick jag vidare och letade efter likheter mellan webbplatserna och tog de tydligaste. Man hade kunnat gräva ner sig väldigt djupt i den här uppgiften, men jag ville fokusera på de designaspekter som tydligast återkom på flera sidor.

**Uppdrag 6**
-----------
Jag valde att analysera bilder och laddningstid på mitt huvudtema eftersom jag tyckte att jag redan gått in mycket på färg och design i redovisningstexterna. Jag hade redan använt PageSpeed under arbetet med temat, så det var inga stora ändringar jag kunde göra med exempelvis bilder, men det var ändå intressant att jämföra laddningstid på mobil kontra dator och mellan de olika undersidorna. Man fick göra några ändringar för att anpassa uppgiften till endast en sida, exempelvis rangordningen av webbplatserna gick inte att göra. Jag tänkte först att jag skulle försöka göra den mellan undersidorna istället, men resultaten skilde sig så lite att det inte kändes väsentligt. Jag använde samma excel-ark som min grupp gjort i förra analysen, men fick ändra där med för att det anpassa efter en webbplats.

**1.2 Hur projektet gick att genomföra**
----------------------------------------

Det var ett bra avslut på kursen och man fick använda allt vi lärt oss under kursen. Jag tycker att det varit svårt att se vart våra portfolio-sidor varit på väg eftersom vi jobbat på en liten bit i taget. Det var mycket lättare nu under projektet när man kunde ha ett mål redan från början, även om det färdiga resultatet blev väldigt annorlunda från den ursprungliga idéen. Just det tyckte jag dock var en av de största utmaningarna, att släppa min ursprungliga skiss som jag gjort i Figma och se den mer som inspiration än en mall. När jag väl insett det gick det lättare, och det var ofta som jag hade en idé i huvudet som sedan inte riktigt fungerade, men det ledde vidare till lösningar som jag inte ens funderat på.  

Att komma på själva idéen för min artist gick snabbare än väntat. Jag trodde att det skulle vara väldigt svårt att komma på vilken kund jag skulle välja, men så fort jag hittade bilderna med led-masken visste jag precis vem min kund var. Jag kan egentligen inte så mycket om house, det är inte något jag lyssnar på till vardags, men just därför var det kul att jobba med det.  

Det svåraste under projektet tycker jag varit responsiviteten. Dels att bestämma breaking-points och rätt storlekar för bilderna, men det tog också mycket tid att anpassa webbplatsen till mobila enheter. Jag simulerade det på datorn medan jag jobbade, men det hände flera gånger att det ändå blev fel på mobilen.  

Det var också utmanande att göra ett andra tema, när man varit så fokuserad på ett koncept, men som tur var hade jag redan från början hittat bilder med både blått och rött tema och då börjat spåna på idéer för två olika teman.

**1.3 Tankar om kursen**
----------------
Jag tycker att kursen har varit väldigt inspirerande. Boken var bra och givande och kompletterades bra med övrigt material. Det var en bra balans på föreläsningarna, med Niklas introduktioner som ledde en igenom det mer tekniska, och Emils som var mer inriktade på design.

Något att tänka på är att ge en tydligare förklaring över vad en flash-bild är, i och med att det var med i kraven för projektet. Söker man på flash-bild får man främst upp bilder på the Flash. Det var någon som redde ut det i chatten, men kan vara bra att förtydliga vad ni menar!

VI hann gå igenom väldigt mycket i kursen, utan att det kändes överväldigande, och jag känner att jag fått med mig många bra verktyg. Kursen känns som en bra introduktion till webbdesign, och jag skulle absolut rekommendera den till intresserade.
